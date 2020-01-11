<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function basic(){
        return view('layouts.content.basic');
    }
    public function app(){
        return view('layouts.app');
    }
    public function login(){
        return view('auth.login');
    }
    public function message(){
        return view('layouts.sidebar2.president.message');
    }
    public function spiritual_revivals(){
        return view('layouts.sidebar2.spiritualrevivals.spiritual_revivals');
    }
}
