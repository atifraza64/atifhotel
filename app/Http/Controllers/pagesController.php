<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }
    
    public function about(){
        return view('about');
    }

    // contact 
    public function contact(){

        return view('contact');
    }
    // services 
    public function services(){

        return view('services');
    }
    // rooms
    public function rooms(){
        return view('rooms');
    }
}
