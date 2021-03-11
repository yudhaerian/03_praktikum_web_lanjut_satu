<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        echo "Nim: 2041723011";
        echo "<br>";
        echo "Nama: Moch Yudha Erian Saputra";
    }

    public function aboutview(){
        return view('prak1.about-us', ['link' => 'about-us']);
    }
}
