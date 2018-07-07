<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gethome(){
        return view('client.pages.home');
    }
    public function getproduct(){
        return view('client.pages.products');
    }
    public function getcustomer(){
        return view('client.pages.customer');
    }
    public function getblog(){
        return view('client.pages.blog');
    }
    public function getcontact(){
        return view('client.pages.contact');
    }
    public function getlogin(){
        return view('client.pages.login');
    }
    public function getregister(){
        return view('client.pages.register');
    }
    public function get404(){
        return view('client.pages.404');
    }
    public function getsubmitpost(){
        return view('client.pages.submit_post');
    }
  
}
