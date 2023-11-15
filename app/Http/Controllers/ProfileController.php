<?php

namespace App\Http\Controllers;

use Validator, Redirect, Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function balance(Request $request)
    {
        Auth::user()->balance += $request['balance'];
        Auth::user()->save();
        return redirect()->route('home');
    }
}
