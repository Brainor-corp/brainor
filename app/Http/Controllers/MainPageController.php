<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(){
        return view("v1.pages.main-page.main-page");
    }
    public function inside(){
        return view("v1.pages.inside-pages.about-us-page");
    }
}
