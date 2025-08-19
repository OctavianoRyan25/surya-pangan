<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::latest()->take(3)->get();
        $products = \App\Models\Product::with('category')->latest()->take(4)->get();
        $categories = \App\Models\ProductCategory::withCount('products')->get();

        return view('landing.home', compact('posts', 'products', 'categories'));
    }
}
