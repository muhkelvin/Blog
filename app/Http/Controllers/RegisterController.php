<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Authentication.register');
    }

    public function store(Request $request)
    {
        $request->validate([
           "name" => ['required','min:3'],
           "email" => ['required','min:3'],
           "username" => ['required','min:3'],
           "password" => ['required','min:3'],
        ]);

        User::create([
           "name" => $request->name,
            "email" => $request->email,
            "username" => $request->username,
            "password" => Hash::make($request->Password)
        ]);

        return redirect('login');
    }
}
