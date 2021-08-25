<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

    }
    public function productsList(){
        return view('product-list');
    }
    public function productsDetails($category,$producttitle,$id){
        return view('product-detail');
    }

    // Admin Panel Functions ----------------------------------------
    public function adminProductList(){
        return view('admin.products.product_list');
    }

    public function adminProductAdd(){
        return view('admin.products.product_add');
    }

    public function adminProductEdit(){
        return view('admin.products.product_edit');
    }

    public function adminProductDetails(){
        return view('admin.products.product_details');
    }

    public function adminProductDelete(){
        return redirect()->route('admin.products.product_list');
    }



}
