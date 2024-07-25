<?php

use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

route::get('/tampilan', function(){
    return view('tampilan');
});
route::get('/about', function(){
    return view('about', ['nama' => 'nabil royyan']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'posts', 'posts' => [
        [
            'id' => '1',
            'title' => 'juddul 1',
            'Author' => 'nabil royyan',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, nisi beatae rem delectus voluptas totam provident ipsam non nihil velit officiis illo reiciendis harum quas quae ipsum saepe dignissimos quibusdam'
        ],
        [
            'id' => '2',
            'title' => 'juddul 2',
            'Author' => 'nabil royyan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur aut, animi similique recusandae ipsa nesciunt libero pariatur deserunt quae delectus minus, quia quam earum, cum modi molestias ducimus inventore ullam!'
        ]
    ]]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});