<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getLogin(){
    	return view('auth.login');
    }

    public function getRegister(){
    	return view('auth.register');
    }
}
