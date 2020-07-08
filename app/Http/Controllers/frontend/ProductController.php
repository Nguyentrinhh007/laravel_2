<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function GetProduct(){
        return view('frontend.product.product');
    }
    function DetailProduct(){
        return view('frontend.product.product_detail');
    }
    function LearnProduct(){
        return view('frontend.learning.learning');
    }
}
