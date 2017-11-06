<?php

namespace App\Http\Controllers;

use App\Compliment;
use Illuminate\Http\Request;

class ComplimentController extends Controller
{
    public function store(Request $request)
    {
        $compliment = new Compliment();
        $compliment->compliment = $request->compliment;
        $compliment->giver = Auth::user();
        $compliment->receiver = $request->receiver;
        $compliment->save();

        return redirect(url()->previous());
    }
}
