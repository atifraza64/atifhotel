<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function dashbaord(){

        return view('customer.dashboard');
    }
}
