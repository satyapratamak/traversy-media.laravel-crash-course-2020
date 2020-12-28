<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        

        // validation please check Controller.php
        $this->validate($request, [
            'name' => 'required|max:64',
            'username' => 'required|max:64',
            'email' => 'required|email|max:64',
            'password' => 'required|confirmed',

        ]);

        dd('store');
        // store user
        // sign user in
        // redirect
    }
}
