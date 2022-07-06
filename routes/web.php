<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::get('/', [PostController::class, 'index']);


Route::get('/categories', function(){
    return view('categories', [
        "title" => "Categories",
        'categories' => Category::all()
    ]);
});

Route::get('/authors', function(){
    return view('authors', [
        "title" => "Authors",
        'authors' => User::all()
    ]);
});


Route::get('/about', function(){
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/post/{slug:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/authors/{user:id}', [UserController::class, 'show']);
