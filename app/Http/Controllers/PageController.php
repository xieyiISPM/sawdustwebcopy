<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// command line use *php artisan make:controller PagesController*
class PageController extends Controller
{


    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function gallery(){
        return view('gallery');
    }

    public function admin(){
        return view('admin');
    }

    public function contact(){
        return view('contact');
    }


}
