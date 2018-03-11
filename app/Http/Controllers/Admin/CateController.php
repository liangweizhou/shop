<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function showCate(){
        return view('shop.Admin.cate');
    }

    public function store(){

    }
}
