<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index ()
    {
        return view('data.register');
    }

    public function submit(Request $request )
    {
        $first = $request->firstname;
        $last = $request->lastname;
        // dd($first, $last);
        return view('data.welcome', compact('first', 'last'));
    }
}
