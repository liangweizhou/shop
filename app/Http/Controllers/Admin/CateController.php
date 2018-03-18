<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function showCate(){
        return view('shop.Admin.cates.cate');
    }

    public function store(){

    }

    public function add(){
        return view('shop.Admin.cates.addCates');
    }

    public function storeAdd(){

    }
}
