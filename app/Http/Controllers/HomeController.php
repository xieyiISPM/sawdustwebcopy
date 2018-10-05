<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $title='Home';
        return view('home')->with('title',$title);
    }
    public function logout(){
        Auth::logout();
        $title='Logout';
        return view('home')->with('title',$title);
    }

    public function jobs(){
        $title="Jobs";
        return view('jobs')->with('title',$title);
    }

    public function login(){
        $title='Login';
        return view('auth.login')->with('title',$title);
    }
}
