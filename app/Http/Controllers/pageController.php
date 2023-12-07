<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home(){
        return view("homepage");
    }

    public function contact(){
        return view("contact");
    }

    public function login(){
        return view("login");
    }
}
