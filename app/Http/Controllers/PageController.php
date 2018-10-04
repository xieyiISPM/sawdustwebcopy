<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// command line use *php artisan make:controller PagesController*
class PageController extends Controller
{


    public function index(){
        $title = 'Home';
        return view('index')->with('title',$title);
    }

    public function about(){
        $title="About us";
        return view('about')->with('title', $title);
    }

    public function jobs(){
        $title="Jobs";
        return view('jobs')->with('title',$title);
    }

    public function gallery(){
        $title='Gallery';
        return view('gallery')->with('title',$title);
    }

    public function admin(){
        $title='Admin';
        return view('admin')->with('title',$title);
    }

    public function contact(){
        $title='Contact us';
        return view('contact')->with('title',$title);
    }


}
