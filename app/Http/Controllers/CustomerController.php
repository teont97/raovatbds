<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getList(){
        return view('admin.customer.list');
    }
}
