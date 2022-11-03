<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
    //
    public function dashboard(){
        return view('customer.profile');
    }
}
