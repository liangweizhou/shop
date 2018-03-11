<?php

namespace App\Http\Controllers\Admin;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function show(){
//        $admins = Admin::all()->get();
    return view('shop.Admin.admin');
    }

    public function store(){

    }


}
