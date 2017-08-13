<?php

namespace App\Http\Controllers;

use App\model\studentModel;
use Illuminate\Http\Request;

class test extends Controller
{
   function hello(){
       return"hello world";
   }
   function store(Request $request){
       $name = $request->input('name');
       $a = new studentModel();
       $a->store($name);
   }
}
