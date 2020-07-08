<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function GetBlog(){
        return view('frontend.blog.blog');
    }
    function DetailBlog(){
        return view('frontend.blog.detail_blog');
    }
}
