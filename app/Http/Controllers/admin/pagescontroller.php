<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //
    public function login(){
        return view('admin.login');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
     public function booking(){
        return view('admin.booking');
    }
     public function add_booking(){
        return view('admin.add_booking');
    }
     public function edit_booking(){
        return view('admin.edit_booking');
    }
     public function customers(){
        return view('admin.customers');
    }
     public function edit_customers(){
        return view('admin.edit_customers');
    }
    public function add_customers(){
        return view('admin.add_customers');
    }
    public function rooms(){
        return view('admin.rooms');
    }
     public function edit_rooms(){
        return view('admin.edit_rooms');
    }
    public function add_rooms(){
        return view('admin.add_rooms');
    }

}
