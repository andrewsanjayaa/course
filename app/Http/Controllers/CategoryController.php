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
        $details = Detail::where('category_id', $id)->get();

        if (!$details) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return view('category.detail', compact('details'));
    }
}
