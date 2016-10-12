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

Route::get('/insert', function(){
  App\Category::create(['name' => 'Music']);
  return 'category added';
});

Route::get('/read', function(){
  $category = new App\Category();
  $data = $category->all(['name', 'id']);

  foreach($data as $list){
    echo $list->id.' '.$list->name.' ';
  }
});

Route::get('/update', function(){
  $category = new App\Category();
  $category->name = 'HEAVEY METAL';
  $category->save();

  $data = $category->all(['name', 'id']);
  foreach($data as $list){
    echo $list->id.' '.$list->name.' ';
  }
});


Route::get('/delete', function() {
    $category = App\Category::find(5);
    $category->delete();

    $data = $category->all(array('name','id'));

    foreach ($data as $list) {
        echo $list->id . ' ' . $list->name . '
';
    }
});
