<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Internet Plankton | Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Me',
        'active' => 'about',
        'nama' => 'Sony Tri',
        'email' => 'tri@gmail.com',
        'image' => 'sony.jpg'
    ]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts Page']);
});

Route::get('/login', function () {
    return view('login.index', [
        'title' => 'Halaman Login',
        'active' => 'login'
    ]);
});
