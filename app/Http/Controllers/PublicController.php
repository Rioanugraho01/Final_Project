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

    public function detail_tips()
    {
        return view('user.detail-tips');
    }

    public function detail_motivasi()
    {
        return view('user.detail-motivasi');
    }

    public function detail_s1()
    {
        return view('user.detail-s1');
    }

    public function detail_s2()
    {
        return view('user.detail-s2');
    }

    public function detail_s3()
    {
        return view('user.detail-s3');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function simpan()
    {
        return view('user.simpan');
    }

    public function add()
    {
        return view('add');
    }
}
