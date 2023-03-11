<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('category',[
            "categories" => Category::all(),
        ]);
    }

    public function showpostcategory($id)
    {
        return view('showpostcategory',[
           "categories" => Category::find($id)
        ]);
    }
}
