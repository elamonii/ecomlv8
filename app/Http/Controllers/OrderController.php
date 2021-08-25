<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function adminOrderList(){
        return view('admin.orders.order_list');
    }
}
