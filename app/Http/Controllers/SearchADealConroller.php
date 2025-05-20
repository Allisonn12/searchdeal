<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchADealConroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function service(){
        return view('service');
    }

    public function contact(){
        return view('contact');
    }

    public function success(){
        return view('success');
    }
    
    public function cicslhcf(){
        return view('cicslhcf');
    }

    public function carInsuresuccess(){
        return view('car-insurance-success');
    }

    public function terms(){
        return view('terms-and-condition');
    }

    public function policy(){
        return view('private-policy');
    }
}
