<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenController extends Controller
{
    public function aboutUs(){
        return view('blogs.aboutus');
    }
}
