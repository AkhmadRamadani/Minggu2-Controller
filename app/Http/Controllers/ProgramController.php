<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir()
    {
        return view('program')->with('title', 'Karir');
    }

    public function magang()
    {
        return view('program')->with('title', 'Magang');
    }
    public function ki()
    {
        return view('program')->with('title', 'Kunjungan Industri');
    }
}
