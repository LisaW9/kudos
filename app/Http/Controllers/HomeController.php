<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            $user = Auth::user();
            return view('home.index', compact('user'));
        }

        return view('users.login');
    }
}
