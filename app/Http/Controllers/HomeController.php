<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            "title" => "Bubble News",
            "posts" => Post::all(),
            "limit3" => Post::limit(3)->get(),
            "limit5" => Post::limit(5)->get(),
            "categories" => Category::first()
        ]);
    }

    public function contact ()
    {
        return view('Contact');
    }

    public function about ()
    {
        return view('About');
    }

    public function show(Post $post)
    {
        return view("show",[
           "title" => "Show Post",
            "posts" => $post
        ]);
    }
}
