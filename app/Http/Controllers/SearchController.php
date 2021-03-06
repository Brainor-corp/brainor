<?php

namespace App\Http\Controllers;

use App\Post;
use Bradmin\Cms\Models\BRPost;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $searchConstrain = new Post;
        $searchConstrain = $searchConstrain
            ->whereHas('tags', function ($tag) {
                return $tag->whereIn('slug', ['nasha-rabota', 'strah']);
            })
            ->orderBy('published_at', 'desc');

        $results = Post::search($request->get('term') ?? '')->constrain($searchConstrain)->get();

        return view('v1.pages.inside-pages.search-page')->with(compact('results'));
    }
}