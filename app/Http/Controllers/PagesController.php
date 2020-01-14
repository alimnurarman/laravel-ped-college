<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function app(){
        return view('layouts\app');
    }
    public function login(){
        return view('auth\login');
    }
    public function basic(){
        return view('layouts\content\basic');
    }
    public function message(){
        return view('layouts\sidebar2\president\message');
    }
    public function gos(){
        return view('layouts\sidebar2\spiritualrevival\category\gos');
    }
    public function page(){
        return view('layouts\sidebar2\spiritualrevival\category\page');
    }
    public function page2(){
        return view('layouts\sidebar2\spiritualrevival\category\page2');
    }
    public function specialities(){
        return view('layouts\content\header-content\specialties');
    }
    public function gallery(){
        return view('layouts\content\header-content\gallery');
    }
    /*Started-left-sidebar*/
    public function college_history(){
        return view('layouts\sidebar1\college_history');
    }
    public function administration(){
        return view('layouts\sidebar1\administration');
    }
    public function director_h(){
        return view('layouts\sidebar1\director_h');
    }
}
