<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class OrdersController extends Controller
{
    //
    public function showOrders(){
        return view('shop.Admin.orders');
    }

    public function storeOrders(){

    }
}
