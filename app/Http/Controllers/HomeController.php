<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }


    public function about(){
        return view('home.about');
    }

    public function blockchain(){
        return view('home.blockchain');
    }

    public function contact(){
        return view('home.contact');
    }


    public function web_design(){
        return view('home.web_design');
    }

    public function custom_web(){
        return view('home.custom_web');
    }
    public function marketing(){
        return view('home.market');
    }

    public function payment(){
        return view('home.payment');
    }
    

    public function privacy(){
        return view('home.privacy');
    }
    public function terms(){
        return view('home.terms_and_conditions');
    }
    

  
    
}
