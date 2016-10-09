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
