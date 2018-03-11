<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XxxController extends Controller
{
    var $a = "hello";
function print_a(){
    global $a;
    $a="phper";
}

print_a();
}
