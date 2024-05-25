<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view('page.dashboard');
    }

    public function welcome(Request $requet)
    {
        $fname = $requet->input('fullname');
        $hobi = $requet->input('hobby');

        return view('page.welcome', ['fname' => $fname, 'hobi' => $hobi]);
    }
}
