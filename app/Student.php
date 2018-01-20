<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    public $timestamps = false;
    protected $fillable=['name','age'];
    //不允许批量赋值
    protected $guarded=[];
}
