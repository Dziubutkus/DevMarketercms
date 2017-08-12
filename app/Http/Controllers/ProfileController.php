<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index() 
    {
        return redirect()->route('profile.dashboard');
    }
    public function dashboard()
    {
        //$user = User::where('id', $id)->with('roles')->first();
        return view('profile.dashboard');//->withUser($user);
        //Role::where('id', $id)->with('permissions')->first();
    }
}
