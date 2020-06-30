<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Form(){
        return view("sanbercode-register");
    }
    public function Index(Request $request){
        return view("sanbercode-index",["value" => $request]);
    }
}
