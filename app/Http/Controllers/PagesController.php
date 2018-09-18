<?php

namespace FindService\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
      return view('inicio');
    }
    public function login(){
      return view('login');
    }
    public function singup(){
      return view('signup');
    }
}
