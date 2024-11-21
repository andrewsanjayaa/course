<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function index()
    {
        $getData = Category::getData();

        if (Auth::user()->role == 'admin') {
            return view('category.admin.sidebar', compact('getData'));
        } else {
            return view('dashboard', compact('getData'));
        }
    }

    public function detail($id)
    {
        $details = Detail::where('category_id', $id)->get();

        return view('category.detail', compact('details'));
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
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/category'), $imageName);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->imageName,
            'slug' => $request->slug,
        ]);
        return redirect()->route('category.create')->with('success', 'Category created successfully');
    }
}
