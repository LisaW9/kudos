<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $fbUser = Socialite::driver('facebook')->user();
        $user = User::firstOrNew(['token' => $fbUser->token]);
        $user->token = $fbUser->token;
        $user->name = $fbUser->name;
        $user->avatar = $fbUser->avatar;
        $user->avatar_original = $fbUser->avatar_original;
        $user->gender = $fbUser->user['gender'];
        $user->save();
        auth()->login($user);

        return redirect('/');
    }

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