<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function showUser(){
    return "<h1>Hi i am a controller</h1>";
   }

   public function temp(String $id){
    return view('welcome',['id' => $id]);
   }
   public function op(){
    return view('ll');
   }
 

}
