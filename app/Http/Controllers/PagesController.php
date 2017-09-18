<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
     public function index(){
        //$title = 'What today?';\
        $posts = Post::all();
        return view('pages.index')->with('posts', $posts);//->with('title', $title);
    }

    public function learn() 
    {
        return view('pages.learn');
    }

    public function discuss(){
        //$title = 'What today? - Discuss';
        return view('pages.discuss');//->with('title', $title);
    }

    public function share(){
        return view('pages.share');
    }
}
