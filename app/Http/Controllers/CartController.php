<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('index');
    }
    public function cartView(){
        return view('cart');
    }
}
