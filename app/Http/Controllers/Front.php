<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;

use App\Http\Requests;
use App\Brand;
use App\Category;
use App\Product;

class Front extends Controller
{
    //
    var $brands;
    var $categories;
    var $products;
    var $title;
    var $description;

    public function __construct(){
      $this->brands = Brand::all(['name']);
      $this->categories = Category::all(['name']);
      $this->products = Product::all(['id', 'name', 'price']);
    }

    public function index(){
      return view('home', [
        'title' => 'Welcome',
        'description' => '',
        'page' => 'home',
        'brands' => $this->brands,
        'categories' => $this->categories,
        'products' => $this->products
      ]);
    }

    public function product(){
      return view('products', [
        'title' => 'Welcome',
        'description' => '',
        'brands' => $this->brands,
        'categories' => $this->categories,
        'products' => $this->products,
        'page' => 'products'
      ]);
    }

    public function product_details($id){
      $product = Product::find($id);
      return view('product_details', [
        'page' => 'products',
        'title' => 'Welcome',
        'description' => '',
        'brands' => $this->brands,
        'categories' => $this->categories,
        'products' => $this->products
      ]);
    }

    public function product_categories($name){
      return view('products', [
        'page' => 'products',
        'title' => 'Welcome',
        'description' => '',
        'brands' => $this->brands,
        'categories' => $this->categories,
        'products' => $this->products
      ]);
    }

    public function product_brands(){
      return view('products', [
        'page' => 'products',
        'title' => 'Welcome',
        'description' => '',
        'brands' => $this->brands,
        'categories' => $this->categories,
        'products' => $this->products
      ]);
    }

    public function blog(){
      return view('blog', [
        'title' => 'Welcome',
        'description' => '',
        'page' => 'blog',
        'brands' => $this->brands,
        'categories' => $this->categories,
        'products' => $this->products
      ]);
    }

    public function blog_post($id){
      return view('blog_post', [
        'title' => 'Welcome',
        'description' => '',
        'page' => 'blog',
        'brands' => $this->brands,
        'categories' => $this->categories,
        'products' => $this->products
      ]);
    }

    public function contact_us(){
      return view('contact_us', ['page' => 'contact_us']);
    }

    public function login(){
      return view('login', ['page' => 'home']);
    }

    public function logout(){
      return view('login', ['page' => 'home']);
    }

    public function cart(){
      return view('cart', ['page' => 'home']);
    }

    public function checkout(){
      return view('checkout', ['page' => 'home']);
    }

    public function search($query){
      return view('products', ['page' => 'products']);
    }

}
