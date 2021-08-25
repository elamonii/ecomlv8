<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function adminCategoryList(){
        return view('admin.categories.category_list');
    }

    public function adminCategoryAdd(){
        return view('admin.categories.category_add');
    }

    public function adminCategoryEdit(){
        return view('admin.categories.category_edit');
    }

    public function adminCategoryDetails(){
        return view('admin.categories.category_details');
    }

    public function adminCategoryDelete(){
        return view('admin.categories.category_list');
    }
}
