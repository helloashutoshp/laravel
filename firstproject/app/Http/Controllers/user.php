<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function regd(){
        return view('registration');
    }

    public function detail(Request $req){
        $req -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'conf' => 'required|same:password',

        ]);
        echo '<pre>';
        print_r($req -> all());

        
    }
}
