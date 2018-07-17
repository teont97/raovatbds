<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class NewPostController extends Controller
{
    public function getList(){
        $data_post=post::orderBy('id','DESC')->get();
        return view('admin.newpost.list',compact('data_post'));
    }

}
