<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function GetIndex()
    {
        return view('frontend.index');
    }
    public function GetAbout()
    {
        return view('frontend.about.about');
    }
    public function GetContact()
    {
        return view('frontend.about.contact');
    }
}
