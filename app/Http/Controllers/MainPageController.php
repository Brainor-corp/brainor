<?php

namespace App\Http\Controllers;

use App\Fear;
use Bradmin\Cms\Models\BRPost;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(){
        $fears = Fear::orderBy('published_at', 'desc')->limit(3)->get();

        $works = BRPost::whereHas('tags', function ($tag) {
            return $tag->where('slug','nasha-rabota');
        })
            ->get();

        return view("v1.pages.main-page.main-page")->with(compact('fears', 'works'));
    }

    public function search(){
        return view("v1.pages.inside-pages.search-page");
    }
}
