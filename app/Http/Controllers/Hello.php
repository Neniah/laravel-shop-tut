<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Hello extends Controller
{
    //
    public function index(){
      return 'Hello World from Hello Controller!!';
    }
}
