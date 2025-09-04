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
    $popular_categories = \App\Models\ProductCategory::whereHas('products.tags', function ($query) {
        $query->where('name', 'Popular');
    })
        ->withCount(['products as popular_products_count' => function ($query) {
            $query->whereHas('tags', function ($q) {
                $q->where('name', 'Popular');
            });
        }])
        ->orderByDesc('popular_products_count')
        ->take(5)
        ->get();
    return view('landing.home', compact('posts', 'products', 'categories', 'popular_products', 'popular_categories'));
})->name('home');

Route::get('/blogs', function () {
    $categories = \App\Models\PostCategory::withCount('posts')->get();
    $blogs = Post::with('category', 'tags')->latest()->get();
    $popular_categories = \App\Models\ProductCategory::whereHas('products.tags', function ($query) {
        $query->where('name', 'Popular');
    })
        ->withCount(['products as popular_products_count' => function ($query) {
            $query->whereHas('tags', function ($q) {
                $q->where('name', 'Popular');
            });
        }])
        ->orderByDesc('popular_products_count')
        ->take(5)
        ->get();
    return view('landing.blog', compact('blogs', 'categories', 'popular_categories'));
})->name('blogs');

Route::get('/blogs/{slug}', function ($slug) {
    $categories = \App\Models\ProductCategory::withCount('products')->get();
    $blog = Post::with('category', 'tags')->where('slug', $slug)->firstOrFail();
    $related_blogs = Post::with('category', 'tags')
        ->where('id', '!=', $blog->id)
        ->where('is_published', true)
        ->latest()
        ->take(3)
        ->get();
    $popular_categories = \App\Models\ProductCategory::whereHas('products.tags', function ($query) {
        $query->where('name', 'Popular');
    })
        ->withCount(['products as popular_products_count' => function ($query) {
            $query->whereHas('tags', function ($q) {
                $q->where('name', 'Popular');
            });
        }])
        ->orderByDesc('popular_products_count')
        ->take(5)
        ->get();
    return view('landing.detail_blog', compact('blog', 'related_blogs', 'popular_categories', 'categories'));
})->name('blog.detail');

Route::get('/about', function () {
    $categories = \App\Models\ProductCategory::withCount('products')->get();
    $popular_categories = \App\Models\ProductCategory::whereHas('products.tags', function ($query) {
        $query->where('name', 'Popular');
    })
        ->withCount(['products as popular_products_count' => function ($query) {
            $query->whereHas('tags', function ($q) {
                $q->where('name', 'Popular');
            });
        }])
        ->orderByDesc('popular_products_count')
        ->take(5)
        ->get();
    return view('landing.about', compact('categories', 'popular_categories'));
})->name('about');

Route::get('/products', function () {
    $products = Product::with('category', 'tags')->latest()->get();
    $categories = \App\Models\ProductCategory::withCount('products')->get();
    // return response()->json($products);
    $popular_categories = \App\Models\ProductCategory::whereHas('products.tags', function ($query) {
        $query->where('name', 'Popular');
    })
        ->withCount(['products as popular_products_count' => function ($query) {
            $query->whereHas('tags', function ($q) {
                $q->where('name', 'Popular');
            });
        }])
        ->orderByDesc('popular_products_count')
        ->take(5)
        ->get();
    return view('landing.product', compact('products', 'categories', 'popular_categories'));
})->name('products');

Route::get('/api/products', function () {
    $products = Product::with('category', 'tags')->latest()->get();
    return response()->json($products);
});

Route::get('/api/product-categories', function () {
    $categories = \App\Models\ProductCategory::withCount('products')->get();
    return response()->json($categories);
});

Route::get('/api/blogs', function () {
    $blogs = Post::with('category', 'tags')->latest()->get();
    return response()->json($blogs);
});

Route::get('/api/blogs-categories', function () {
    $categories = \App\Models\PostCategory::withCount('posts')->get();
    return response()->json($categories);
});

Route::get('/contact', function () {
    $categories = \App\Models\ProductCategory::withCount('products')->get();
    $popular_categories = \App\Models\ProductCategory::whereHas('products.tags', function ($query) {
        $query->where('name', 'Popular');
    })
        ->withCount(['products as popular_products_count' => function ($query) {
            $query->whereHas('tags', function ($q) {
                $q->where('name', 'Popular');
            });
        }])
        ->orderByDesc('popular_products_count')
        ->take(5)
        ->get();
    return view('landing.contact', compact('categories', 'popular_categories'));
})->name('contact');

Route::get('/products/category/{slug}', function ($slug) {
    $category = \App\Models\ProductCategory::where('slug', $slug)->firstOrFail();
    $products = Product::with('category', 'tags')->where('category_id', $category->id)->latest()->get();
    $categories = \App\Models\ProductCategory::withCount('products')->get();
    $popular_categories = \App\Models\ProductCategory::whereHas('products.tags', function ($query) {
        $query->where('name', 'Popular');
    })
        ->withCount(['products as popular_products_count' => function ($query) {
            $query->whereHas('tags', function ($q) {
                $q->where('name', 'Popular');
            });
        }])
        ->orderByDesc('popular_products_count')
        ->take(5)
        ->get();
    return view('landing.product_category', compact('products', 'categories', 'category', 'popular_categories'));
})->name('products.category');

Route::get('/api/products/category/{slug}', function ($slug) {
    $category = \App\Models\ProductCategory::where('slug', $slug)->firstOrFail();
    $products = Product::with('category', 'tags')->where('category_id', $category->id)->latest()->get();
    return response()->json($products);
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
