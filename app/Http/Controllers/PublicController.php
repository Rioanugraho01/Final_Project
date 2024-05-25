<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function awal()
    {
        return view('user.awal');
    }

    public function about()
    {
        return view('user.about');
    }

    public function menu()
    {
        return view('user.menu');
    }

    public function tips()
    {
        return view('user.tips');
    }

    public function detail()
    {
        return view('user.detail');
    }

    public function s1()
    {
        return view('user.s1');
    }

    public function s2()
    {
        return view('user.s2');
    }

    public function s3()
    {
        return view('user.s3');
    }

    public function motivasi()
    {
        return view('user.motivasi');
    }
}
