<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita', function () {
    $posts = Post::with('category')
        ->where('status', 'published')
        ->latest('published_at')
        ->get();

    return view('berita', compact('posts'));
});