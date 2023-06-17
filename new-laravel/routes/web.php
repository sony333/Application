<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;

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

// HOME ROUTE

Route::get('/', function () {
    return view('home', [
        'title' => 'Internet Plankton | Home',
        'active' => 'home'
    ]);
});

// ABOUT ROUTE

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Me',
        'active' => 'about',
        'nama' => 'Sony Tri',
        'email' => 'tri@gmail.com',
        'image' => 'sony.jpg'
    ]);
});

// ALL POST ROUTE

Route::get('/posts', [PostController::class, 'index']);

// SINGLE POST ROUTE

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// LOGIN ROUTE

Route::get('/login', function () {
    return view('login.index', [
        'title' => 'Halaman Login',
        'active' => 'login'
    ]);
});


// CATEGORIES ROUTE

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// CATEGORY POSTS ROUTE

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => $category->name,
        'active' => '',
        'posts' => $category->posts,
        "head" => 'in ' .  $category->name
    ]);
});

// AUTHOR ROUTE

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'title' => $author->name,
        'active' => '',
        'posts' => $author->posts,
        "head" => 'by ' .  $author->name

    ]);
});
