<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    $posts =
        [['id' => 1 , 'title' => 'PHP', 'slug' => 'PHP'],
        ['id' => 2 , 'title' => 'LARAVEL', 'slug' => 'Laravel'],
        ['id' => 3 , 'title' => 'HTML', 'slug' => 'HTML'],
        ];
    return view('blog', ['posts'=>$posts]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = $slug;
    return view('post', ['post'=>$post]);
});
