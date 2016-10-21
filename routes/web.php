<?php

Route::get('/', 'Front@index');
Route::get('/products', 'Front@product');
Route::get('/products/details/{id}', 'Front@product_details');
Route::get('/products/categories', 'Front@product_categories');
Route::get('/products/brands', 'Front@product_brands');
Route::get('/blog', 'Front@blog');
Route::get('/blog/post/{id}', 'Front@blog_post');
Route::get('/contact-us', 'Front@contact_us');
Route::get('/login', 'Front@login');
Route::get('/logout', 'Front@logout');
Route::get('/cart', 'Front@cart');
Route::get('/checkout', 'Front@cart');
Route::get('/search/{query}', 'Front@search');

// Create a products
Route::post('/products/store', 'Front@product_store');

// Authentication routes...
Route::get('auth/login', 'Front@login');
Route::post('auth/login', 'Front@authenticate');
Route::get('auth/logout', 'Front@logout');

// Registration routes...
Route::post('/register', 'Front@register');

Route::get('/checkout', ['middleware' => 'auth', 'uses' => 'Front@checkout']);

// API routes...
Route::get('/api/v1/products/{id}', ['middleware' => 'auth.basic', function($id = null){
  if($id = null){
    $products = App\Product::all(['id', 'name', 'price']);
  } else{
    $products = App\Product::find($id, ['id', 'name', 'price']);
  }
  return Response::json(['error' => false, 'products' => $products, 'status_code' => 200]);
}]);

Route::get('/api/v1/categories/{id}', ['middleware' => 'auth.basic', function($id = null){
  if($id == null){
    $categories = App\Category::all(['id', 'name']);
  } else{
    $categories = App\Categoriy::find($id, ['id', 'name']);
  }
  return Response::json(['error' => false, 'user' => $categories, 'status_code' => 200]);
}]);
