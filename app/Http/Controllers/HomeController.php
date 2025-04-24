<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*public function index(){
    return "Welcome to The Home Page";
    }*/

    public function __invoke()
    {
        return view('index'); 
    }    
}
