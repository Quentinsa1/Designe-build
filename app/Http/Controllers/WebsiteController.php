<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.index');
    }
    public function about(){
        return view('website.about');
    }
    public function expertise(){
        return view('website.expertise.index');
    }
    public function realisation(){
        return view('website.realisation.index');
    }

    public function contact(){
        return view('website.contact');
    }
    public function job(){
        return view('website.Job.index');
    }
}
