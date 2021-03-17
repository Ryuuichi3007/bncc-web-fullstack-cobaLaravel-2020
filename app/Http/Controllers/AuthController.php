<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('form');
    }
    public function welcome(Request $req){
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $namalengkap = "$fname $lname";
        return view('welcome', compact('namalengkap'));
    }
}