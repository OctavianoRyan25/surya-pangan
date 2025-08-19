<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Product;

Route::get('/', function () {
    $posts = Post::latest()->take(3)->get();
    $products = Product::with('category')->latest()->take(4)->get();
    $categories = \App\Models\ProductCategory::withCount('products')->get();
    $popular_products = Product::whereHas('tags', function ($query) {
        $query->where('name', 'Popular');
    })->with('tags', 'category')->latest()->take(4)->get();
    return view('landing.home', compact('posts', 'products', 'categories', 'popular_products'));
})->name('home');

Route::get('/blogs', function () {
    $categories = \App\Models\PostCategory::withCount('posts')->get();
    $blogs = Post::with('category', 'tags')->latest()->paginate(1);
    return view('landing.blog', compact('blogs', 'categories'));
})->name('blogs');

Route::get('/blogs/{slug}', function ($slug) {
    $blog = Post::with('category', 'tags')->where('slug', $slug)->firstOrFail();
    $related_blogs = Post::with('category', 'tags')
        ->where('id', '!=', $blog->id)
        ->where('is_published', true)
        ->latest()
        ->take(3)
        ->get();
    return view('landing.detail_blog', compact('blog', 'related_blogs'));
})->name('blog.detail');

Route::get('/about', function () {
    return view('landing.about');
})->name('about');

Route::get('/products', function () {
    $products = Product::with('category', 'tags')->latest()->get();
    // dd($products);
    // return response()->json($products);
    return view('landing.product', compact('products'));
})->name('products');

Route::get('/api/products', function () {
    $products = Product::with('category', 'tags')->latest()->get();
    return response()->json($products);
});

Route::get('/api/product-categories', function () {
    $categories = \App\Models\ProductCategory::withCount('products')->get();
    return response()->json($categories);
});

// Route::group(['prefix' => '{locale}', 'middleware' => 'locale'], function () {
//     Route::get('/', function ($locale) {
//         $posts = Post::latest()->take(3)->get();
//         $products = Product::with('category')->latest()->take(4)->get();
//         $categories = \App\Models\ProductCategory::withCount('products')->get();
//         dd($categories);
//         return view('landing', compact('posts', 'products', 'categories'));
//     })->name('landing');

//     Route::get('/posts', function () {
//         $posts = Post::where('is_published', true)->latest()->paginate(6);
//         return view('posts', compact('posts'));
//     })->name('posts');

//     Route::get('/products', function () {
//         $products = Product::with('category')->latest()->paginate(8);
//         return view('products', compact('products'));
//     })->name('products');
// });
