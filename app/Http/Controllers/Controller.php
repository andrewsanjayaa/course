<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $getData = User::all();
        return view('category.admin.sidebar', compact('getData'));
    }

    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        // dd($data);
        return view('category.admin.sidebar', compact('data'));
    }

    public function updates(Request $request, $id)
    {
        $getData = User::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $getData->name = $request->name;
        $getData->email = $request->email;
        $getData->role = $request->role;
        $getData->save();

        return redirect()->route('users');
    }

    public function delete($id)
    {
        $getData = User::where('id', $id)->first();

        $getData->delete();

        return redirect()->route('users');
    }
}
