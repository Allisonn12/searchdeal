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

}
