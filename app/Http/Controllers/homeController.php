<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('pages.homePage');
    }
    public function aboutme(){
        return view('pages.aboutmePage');
    }
    public function service(){
        return view('pages.servicePage');
    }
    public function skill(){
        return view('pages.skillPage');
    }
    public function blog(){
        return view('pages.blogPage');
    }
    public function contact(){
        return view('pages.contactPage');
    }
}
