<?php

namespace App\Http\Controllers;

use App\Compliment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplimentController extends Controller
{
    public function store(Request $request)
    {
        $compliment = new Compliment();
        $compliment->compliment = $request->compliment;
        $compliment->giver = Auth::user()->id;
        $compliment->receiver = $request->receiver;
        $compliment->save();

        return redirect(url()->previous());
    }

    public function given()
    {
        $user = Auth::user();
        return view('compliments.given', compact('user'));
    }

    public function received()
    {
        $user = Auth::user();
        return view('compliments.received', compact('user'));
    }
}
