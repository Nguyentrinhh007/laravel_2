<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('','frontend\HomeController@GetIndex');
Route::get('contact','frontend\HomeController@GetContact');
Route::get('about','frontend\HomeController@GetAbout');
Route::group(['prefix' => 'product'], function () {
    Route::get('', 'frontend\ProductController@GetProduct');
    Route::get('detail', 'frontend\ProductController@DetailProduct');
    Route::get('learn', 'frontend\ProductController@LearnProduct');
});
Route::group(['prefix' => 'blog'], function () {
    Route::get('','frontend\BlogController@GetBlog');
    Route::get('detail','frontend\BlogController@DetailBlog');
});
