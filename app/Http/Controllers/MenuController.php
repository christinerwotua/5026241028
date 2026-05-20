<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(){
        return view('menu');
    }

    public function idx(){
        return view('index');
    }

    public function example(){
        return view('contoh');
    }

    public function int(){
        return view('intro');
    }

    public function linktr(){
        return view('linktree');
    }

    public function berita1(){
        return view('news');
    }

    public function berita2(){
        return view('news1');
    }

    public function pert4(){
        return view('pertemuan4');
    }

    public function pert5(){
        return view('pertemuan5');
    }

    public function respons(){
        return view('responsive');
    }

    public function temp(){
        return view('template');
    }

}
