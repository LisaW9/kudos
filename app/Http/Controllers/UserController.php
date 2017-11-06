<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->name == null){
            $users = User::all();
        } else {
            $users = User::where('name', 'like', '%' . $request->name . '%')->get();
        }
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.user', compact('user'));
    }
}
