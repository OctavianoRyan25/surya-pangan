<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Product;

Route::get('/', function () {
    return view('landing.home');
});

Route::group(['prefix' => '{locale}', 'middleware' => 'locale'], function () {
    Route::get('/', function ($locale) {
        $posts = Post::latest()->take(3)->get();
        $products = Product::with('category')->latest()->take(4)->get();
        return view('landing', compact('posts', 'products'));
    })->name('landing');

    Route::get('/posts', function () {
        $posts = Post::where('is_published', true)->latest()->paginate(6);
        return view('posts', compact('posts'));
    })->name('posts');

    Route::get('/products', function () {
        $products = Product::with('category')->latest()->paginate(8);
        return view('products', compact('products'));
    })->name('products');
});
