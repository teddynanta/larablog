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

Route::get('/', function(){
    $posts = [
        [
            "title" => "First Post",
            "author" => "Teddy Nanta",
            "category" => 'Life',
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam cum, recusandae consequatur minima ut, nisi repellendus voluptate ipsa, dolor aliquid odio architecto libero nam ea quod cupiditate veniam. Natus explicabo vel, nemo facilis quos, autem ducimus libero sed officia temporibus dolore eius accusantium at in quis enim ea. Ab tenetur non veritatis, at ex atque earum voluptates magni temporibus saepe quam, cupiditate beatae quod aliquid officia quidem obcaecati adipisci dolores maxime, ratione aut nam commodi facere harum! Natus necessitatibus odit, repellat at aliquam accusamus alias."
        ],
        [
            "title" => "Second Post",
            "author" => "kiaaa",
            "category" => "Game",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati possimus incidunt, quos quidem modi vel aperiam dignissimos molestiae eligendi odit minima aliquam odio ullam aspernatur laborum minus facilis accusamus illum autem placeat, non perferendis repellat velit! Quasi deserunt laborum pariatur asperiores numquam dolores voluptate corrupti repellat rem maxime maiores, aperiam, dolore soluta beatae optio voluptates velit deleniti quos nostrum accusantium doloribus labore iste. Vitae harum soluta quis rem accusantium illo aliquid recusandae molestias voluptas. Repellat optio, similique perferendis eius iusto magnam voluptas! Placeat provident mollitia earum maiores nesciunt quis dignissimos ducimus, esse ut tenetur sed sapiente repellendus error ipsa minus."
        ],
        [
            "title" => "Third Post",
            "author" => "kiaaa",
            "category" => "Love",
            "content" => "
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam dolor, sit rerum, distinctio reiciendis in quo sequi asperiores iste harum, fugit saepe odit. Non quasi sequi, consectetur minima eius quibusdam rerum deleniti adipisci aspernatur quisquam dolores iure sed ipsam odit enim quis id, harum recusandae mollitia quidem laudantium ullam ut molestiae? Deleniti molestiae labore minus, laudantium quibusdam vero repellendus voluptatibus, dolorem explicabo est quas soluta! Vel corporis consequuntur culpa, aspernatur maiores beatae minus, repudiandae facere, nulla eum delectus? Dicta eius ad magni, at natus odit dolorem quod illum atque ratione."
        ]
    ];

    return view('home', [
        "title" => "Home",
        "name" => "goBlog",
        "posts" => $posts
    ]);
});
Route::get('/category', function(){
    return view('category', [
        "title" => "Category"
    ]);
});
Route::get('/about', function(){
    return view('about', [
        "title" => "About"
    ]);
});
