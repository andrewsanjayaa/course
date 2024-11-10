<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;

class CategoryController extends Controller
{
    public function index()
    {
        $getData = Category::getData();

        return view('dashboard', compact('getData'));
    }

    public function detail($id)
    {
        $category = Category::where('slug', $id)->first();

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $details = $category->details;

        if ($details->isEmpty()) {
            return response()->json(['message' => 'No details found for this category'], 404);
        }

        dd($details);
    }
}
