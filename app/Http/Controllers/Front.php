<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Auth;
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
      if (Request::isMethod('post')) {
              $product_id = Request::get('product_id');
              $product = Product::find($product_id);
              Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
          }
      //increment the quantity
      if(Request::get('product_id') && (Request::get('increment')) == 1){
        $rowId = Cart::search(['id' => Request::get('product_id')]);
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty +1);
      }

      //decrease the quantity
      if(Request::get('product_id') && (Request::get('decrease')) == 1 ){
        $rowId = Cart::search(['id' => Request::get('product_id')]);
        $item = Cart::get($rowId[0]);

        Cart::update($rowId[0], $item->qty - 1);
      }

      $cart = Cart::content();

      return view('cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function checkout(){
      return view('checkout', ['page' => 'home']);
    }

    public function search($query){
      return view('products', ['page' => 'products']);
    }

}
