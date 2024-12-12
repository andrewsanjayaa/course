<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Category;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cloudinary\Cloudinary;
use App\Alert;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;

use function Laravel\Prompts\alert;

class DetailController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $getData = Detail::where('category_id', $category->id)->get();

        foreach ($getData as $data) {
            // Pastikan deskripsi diubah untuk merender HTML
            $data->description = htmlspecialchars_decode($data->description);
        }

        // dd($getData);

        return view('category.admin.sidebar', compact('getData', 'category'));
    }

    public function create($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('category.admin.sidebar', compact('category'));
    }

    public function store(Request $request, $slug)
    {

        $data = $request->all();

        // Check if description contains a base64 image
        if (preg_match('/<img.*?src="data:image\/(.*?);base64,(.*?)"/', $data['description'], $matches)) {

            $imageData = $matches[2];

            $decodedImage = base64_decode($imageData);

            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUD_NAME'),
                    'api_key' => env('CLOUD_API_KEY'),
                    'api_secret' => env('CLOUD_API_SECRET'),
                ]
            ]);

            try {
                $tmpFile = tmpfile();
                fwrite($tmpFile, $decodedImage);
                fseek($tmpFile, 0);
                $uploadResult = $cloudinary->uploadApi()->upload($tmpFile);

                $imageUrl = $uploadResult['secure_url'];

                $data['description'] = preg_replace('/<img.*?src="data:image\/(.*?);base64,(.*?)"/', '<img src="' . $imageUrl . '"', $data['description']);

                $category = Category::where('slug', $slug)->first();

                Detail::create([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'url' => $data['url'],
                    'category_id' => $category->id,
                ]);

                return redirect()->route('category-detail', ['slug' => $category->slug])->with('success', 'Detail created successfully');
            } catch (\Exception $e) {

                $category = Category::where('slug', $slug)->first();

                return response()->json(['error' => 'Image upload failed: ' . $e->getMessage()], 500);
            }
        }

        return response()->json(['message' => 'No base64 image found.']);
    }

    public function edit($slug)
    {
        $slug = str_replace('-', ' ', $slug);

        $data = Detail::where('name', $slug)->first();

        // dd($data);

        $category = Category::where('id', $data->category_id)->first();

        return view('category.admin.sidebar', compact('data', 'category'));
    }

    public function update(Request $request, $slug)
    {
        $data = $request->all();

        $slug = str_replace('-', ' ', $slug);

        $detail = Detail::where('name', $slug)->first();

        $category = Category::where('id', $detail->category_id)->first();

        if (preg_match('/<img.*?src="data:image\/(.*?);base64,(.*?)"/', $data['description'], $matches)) {

            $imageData = $matches[2];

            $decodedImage = base64_decode($imageData);

            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUD_NAME'),
                    'api_key' => env('CLOUD_API_KEY'),
                    'api_secret' => env('CLOUD_API_SECRET'),
                ]
            ]);

            try {
                $tmpFile = tmpfile();
                fwrite($tmpFile, $decodedImage);
                fseek($tmpFile, 0);
                $uploadResult = $cloudinary->uploadApi()->upload($tmpFile);

                $imageUrl = $uploadResult['secure_url'];

                $data['description'] = preg_replace('/<img.*?src="data:image\/(.*?);base64,(.*?)"/', '<img src="' . $imageUrl . '"', $data['description']);


                Detail::where('name', $slug)->update([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'url' => $data['url'],
                    'category_id' => $category->id,
                ]);

                preg_match('/https:\/\/res\.cloudinary\.com\/[^\/]+\/image\/upload\/[^\/]+\/([^\.]+)/', $detail->description, $matches);

                $cloudinary->uploadApi()->destroy($matches[1]);

                return redirect()->route('category-detail', ['slug' => $category->slug])->with('success', 'Detail created successfully');
            } catch (\Exception $e) {

                $category = Category::where('slug', $slug)->first();

                return response()->json(['error' => 'Image upload failed: ' . $e->getMessage()], 500);
            }
        } else {

            // dd($data['description']);

            Detail::where('name', $slug)->update([
                'name' => $data['name'],
                'description' => $data['description'],
                'url' => $data['url'],
            ]);

            return redirect()->route('category-detail', ['slug' => $category->slug])->with('success', 'Detail created successfully');
        }

        return redirect()->route('category-detail', ['slug' => $slug])->with('success', 'Detail updated successfully');
    }

    public function delete($slug)
    {
        $slug = str_replace('-', ' ', $slug);

        $data = Detail::where('name', $slug)->first();

        $category = Category::where('id', $data->category_id)->first();

        // dd($category);

        preg_match('/https:\/\/res\.cloudinary\.com\/[^\/]+\/image\/upload\/[^\/]+\/([^\.]+)/', $data->description, $matches);

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUD_NAME'),
                'api_key' => env('CLOUD_API_KEY'),
                'api_secret' => env('CLOUD_API_SECRET'),
            ]
        ]);


        try {
            $cloudinary->uploadApi()->destroy($matches[1]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Image upload failed: ' . $e->getMessage()], 500);
            dd($e->getMessage());
        }


        Detail::where('name', $slug)->delete();

        return redirect()->route('category-detail', ['slug' => $category->slug])->with('success', 'Detail deleted successfully');
    }
}
