<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accountsController extends Controller
{
    //
    public function dashboard(){
        return view('customer.accounts');
    }
}
