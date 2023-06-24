<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    ]);
});

// ABOUT ROUTE

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Me',
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
        'title' => 'Halaman Login'
    ]);
});


// CATEGORIES ROUTE

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// LOGIN ROUTE

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
