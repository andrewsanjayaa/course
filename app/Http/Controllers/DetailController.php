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
    public function indexs($slug)
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

        $category = Category::where('slug', $slug)->first();

        Detail::create([
            'name' => $data['name'],
            'short_description' => $data['short_description'],
            'description' => $data['description'],
            'url' => $data['url'],
            'category_id' => $category->id,
        ]);

        return redirect()->route('category-detail', ['slug' => $category->slug])->with('success', 'Detail created successfully');
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

        Detail::where('name', $slug)->update([
            'name' => $data['name'],
            'short_description' => $data['short_description'],
            'description' => $data['description'],
            'url' => $data['url'],
            'category_id' => $category->id,
        ]);

        return redirect()->route('category-detail', ['slug' => $category->slug])->with('success', 'Detail updated successfully');
    }

    public function delete($slug)
    {
        $slug = str_replace('-', ' ', $slug);

        $data = Detail::where('name', $slug)->first();

        $category = Category::where('id', $data->category_id)->first();

        // dd($category);

        Detail::where('name', $slug)->delete();

        return redirect()->route('category-detail', ['slug' => $category->slug])->with('success', 'Detail deleted successfully');
    }
}
