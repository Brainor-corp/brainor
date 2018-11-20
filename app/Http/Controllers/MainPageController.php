<?php

namespace App\Http\Controllers;

use App\Fear;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(){
        $fears = Fear::orderBy('published_at', 'desc')->limit(3)->get();

        return view("v1.pages.main-page.main-page")->with(compact('fears'));
    }
    public function search(){
        return view("v1.pages.inside-pages.search-page");
    }
}
