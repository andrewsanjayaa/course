<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Support\Facades\Auth;
use Cloudinary\Cloudinary;

class CategoryController extends Controller
{
    private function extractPublicIdFromUrl($url)
    {
        $parsedUrl = parse_url($url);
        $path = $parsedUrl['path'];

        $pathParts = explode('/image/upload/', $path);
        $publicIdWithVersion = $pathParts[1];

        $publicId = pathinfo($publicIdWithVersion, PATHINFO_FILENAME);

        return $publicId;
    }

    public function index()
    {
        $getData = Category::getData();

        if (Auth::user()->role == 'admin') {
            return view('category.admin.sidebar', compact('getData'));
        } else {
            return view('dashboard', compact('getData'));
        }
    }

    public function detail($slug)
    {
        $slug = $slug;
        $id = Category::where('slug', $slug)->first()->id;
        $details = Detail::where('category_id', $id)->get();

        // dd($details);

        return view('dashboard', compact('details', 'slug'));
    }

    public function article($id)
    {
        $details = Detail::where('id', $id)->get()->first();

        return view('dashboard', compact('details'));
    }

    public function create()
    {
        return view('category.admin.sidebar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'slug' => 'required',
        ]);


        $image = $request->file('image');

        // dd($image);

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUD_NAME'),
                'api_key' => env('CLOUD_API_KEY'),
                'api_secret' => env('CLOUD_API_SECRET'),
            ]
        ]);


        $uploadedFile = $cloudinary->uploadApi()->upload($image->getRealPath());

        $imageUrl = $uploadedFile['secure_url'];

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageUrl,  // Store the image URL from Cloudinary
            'slug' => $request->slug,
        ]);

        return redirect()->route('categories')->with('success', 'Category created successfully');
    }

    public function edit($slug)
    {
        $data = Category::where('slug', $slug)->first();
        return view('category.admin.sidebar', compact('data'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'slug' => 'required',
        ]);

        $category = Category::where('slug', $slug)->first();

        try {
            if ($request->hasFile('image')) {

                $cloudinary = new Cloudinary([
                    'cloud' => [
                        'cloud_name' => env('CLOUD_NAME'),
                        'api_key' => env('CLOUD_API_KEY'),
                        'api_secret' => env('CLOUD_API_SECRET'),
                    ]
                ]);

                $publicId = $this->extractPublicIdFromUrl($category->image);

                $cloudinary->uploadApi()->destroy($publicId);

                $image = $request->file('image');

                $uploadedFile = $cloudinary->uploadApi()->upload($image->getRealPath());

                $imageUrl = $uploadedFile['secure_url'];

                $category->name = $request->name;
                $category->description = $request->description;
                $category->slug = $request->slug;
                $category->image = $imageUrl;
                $category->save();
            } else {
                $category->name = $request->name;
                $category->description = $request->description;
                $category->slug = $request->slug;
                $category->save();
            }
        } catch (\Exception $e) {
            return redirect()->route('category.create')->with('error', 'Failed to update category. Please try again.');
        }
        return redirect()->route('categories')->with('success', 'Category updated successfully');
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $publicId = $this->extractPublicIdFromUrl($category->image);
        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUD_NAME'),
                'api_key' => env('CLOUD_API_KEY'),
                'api_secret' => env('CLOUD_API_SECRET'),
            ]
        ]);
        $cloudinary->uploadApi()->destroy($publicId);
        $category->delete();
        return redirect()->route('categories')->with('success', 'Category deleted successfully');
    }
}
