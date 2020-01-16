<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->get("title");
        $url = $request->get("url");
        $time = $request->get("time");
        $post = new Post();
        $post->title = $title;
        $post->photo_url = $url;
        $post->time = $time;
        $post->description = "";
        $post->save();
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function default()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }
    public function welcome(){
        return view('welcome');
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
    public function call_schedule(){
        return view('layouts\sidebar1\call_schedule');
    }
    public function sample(){
        return view('layouts\sidebar1\sample');
    }
    public function international_cooperation(){
        return view('layouts\sidebar1\international_cooperation');
    }
    public function teachers(){
        return view('layouts\sidebar1\teachers');
    }
    public function our_achievements(){
        return view('layouts\sidebar1\our_achievements');
    }
    public function edu_work(){
        return view('layouts\sidebar1\edu_work');
    }
    public function public_procurement(){
        return view('layouts\sidebar1\public_procurement');
    }
    public function regulatory_legal_acts(){
        return view('layouts\sidebar1\regulatory_legal_acts');
    }
    public function state_services(){
        return view('layouts\sidebar1\state_services');
    }
}
