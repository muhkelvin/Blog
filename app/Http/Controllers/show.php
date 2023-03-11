<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class show extends Controller
{
    public function index()
    {
        return view('showcategory');
    }
}
