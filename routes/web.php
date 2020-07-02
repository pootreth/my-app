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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    $name = "<h1>Yemima Sutanto</h1>";
    $post = "lorem ipsum dolor
    sit ame lorem ipsum
    dolor sit ame.";
    return view('contact', ['name'=>$name, 'post'=>$post]);
});