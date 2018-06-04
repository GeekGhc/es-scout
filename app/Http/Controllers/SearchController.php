<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        if($q){
            $res = Post::search($q)->raw();
            $posts = $res['hits']['hits'];
        }else{
            $posts = [];
        }
        return view('search',compact('posts','q'));
    }
}
