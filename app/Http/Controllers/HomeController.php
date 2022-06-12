<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $user = Auth()->user();
        $roles = $user->getRoleNames();
        return view('home.index');
    }
}
