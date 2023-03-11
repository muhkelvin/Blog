<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        return view('Dashboard.index', [
            "title" => "Dashboard",
            "posts" => Post::with('category')->latest()->where('title','like',"%{$request->search}%")->paginate(5),
        ]);
    }


    public function create()
    {
        return view('Dashboard.create',[
            "title" => "Create Data",
            "posts" => Post::all(),
            "categories" => Category::all(),

        ]);
    }


    public function store(Request $request)
    {
//        dd($request->all());
//        $newname = '';
//
//        if ($request->file('image')){
//            $extension = $request->file('image')->getClientOriginalExtension();
//            $newname = $request->name.'-'.now()->timestamp.'.'.$extension;
//         $request->file('image')->storeAs('photo', $newname);
//        }
//        $request['image'] = $newname;

        $validati =$request->validate([
           'title' => ['required'],
           'slug' => ['required'],
           'body' => ['required'],
           'categories_id' => ['required'],
            'image' => ['image','file']
            ]);

        if ($request->file('image')){
            $validati['image'] = $request->file('image')->store('photo');
        }

        Post::create($validati);
        return redirect('dashboard');
    }


    public function show($id)
    {
        return view('Dashboard.show',[
            "title" => "Show Data",
            "posts" => Post::find($id),
        ]);
    }


    public function edit($id)
    {
        return view('Dashboard.edit',[
            "title" => "Edit Data",
            "posts" => Post::find($id),
        ]);
    }


    public function update(Request $request, $id)
    {
        Post::find($id)->update($request->all());
    }


    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->back();
    }
}
