<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPostController extends Controller
{
    public function getList(){
        return view('admin.newpost.list');
    }
}
