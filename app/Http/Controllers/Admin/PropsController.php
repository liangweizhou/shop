<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PropsController extends Controller
{
    //
    public function show(){
        return view('shop.Admin.props.props');
    }

    public function storeProps(){

    }

    public function add(){
        return view('shop.Admin.props.addProps');
    }

    public function storeAdd(){

    }
}
