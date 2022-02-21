<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function marbeledu()
    {
        return view('category')->with('title', 'Marble Edu Games');
    }

    public function marbelfriends()
    {
        return view('category')->with('title', 'Marble and Friends Kids Games');
    }
    public function riristory()
    {
        return view('category')->with('title', 'Riri Story Books');
    }
    public function kolakkids()
    {
        return view('category')->with('title', 'Kolak Kids Songs');
    }
}
