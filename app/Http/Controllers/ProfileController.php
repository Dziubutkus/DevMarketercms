<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class ProfileController extends Controller
{
    public function index() 
    {
        return redirect()->route('profile.dashboard');
    }
    public function dashboard()
    {
        //$user = User::where('id', $id)->with('roles')->first();
        //return view('profile.dashboard');//->withUser($user);
        //Role::where('id', $id)->with('permissions')->first();

        $user_id = auth()->user()->id;
        $posts = Post::where('user_id', $user_id)->paginate(10);
        return view('profile.dashboard')->with('posts', $posts);
    }
}
