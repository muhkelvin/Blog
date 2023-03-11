<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('Category.index',[
            "title" => "Category",
            "categories" => Category::all(),
        ]);
    }


    public function create()
    {
        return view('Category.create',[
            "title" => "Create Data Category",
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
           "nama" => ['required']
        ]);

        Category::create($request->all());

        return redirect('category');
    }

    public function show($id)
    {
        return view('Category.show',[
            "categories" => Category::find($id),
        ]);
    }


    public function edit($id)
    {
        return view('Category.edit',[
           "title" => "Edit Your Category",
            "categories" => Category::find($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        Category::find($id)->update($request->all());

        return redirect('category');
    }


    public function destroy($id)
    {
        Category::find($id)->delete();

        return redirect()->back();
    }
}
