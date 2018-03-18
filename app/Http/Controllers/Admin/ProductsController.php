<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProductsController extends Controller
{
    //
    public function show(){
        return view('shop.Admin.products.products');
    }
    public function store(){

    }

    public function add(){
        return view('shop.Admin.products.addProducts');
    }

    public function storeAdd(){

    }

    public function detail(){

    }

    public function storeDtail(){

    }



    public function image(){

    }

    public function storeImage(){

    }

}
