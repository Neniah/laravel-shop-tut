<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Brand;
use Category;
use Product;

class Front extends Controller
{
    //
    public function index(){
      return view('home', ['page' => 'home']);
    }

    public function product(){
      return view('products', ['page' => 'products']);
    }

    public function product_details($id){
      return view('product_details', ['page' => 'products']);
    }

    public function product_categories($name){
      return view('products', ['page' => 'products']);
    }

    public function product_brands(){
      return 'product brands page';
    }

    public function blog(){
      return view('blog', ['page' => 'blog']);
    }

    public function blog_post($id){
      return view('blog_post', ['page' => 'blog']);
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
