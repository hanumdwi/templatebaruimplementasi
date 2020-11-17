<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use\App\User;

class OtentifikasiController extends Controller
{
    // use AuthenticatesUsers;
    // protected $redirectTo = 'ecommerce-dashboard';

    public function _construct(){
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(){
        $user = Socialite::driver('google')->stateless()->user();

        return view('ecommerce-dashboard');
    }

    public function redirectToProvider1(){
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback1(){
        $user = Socialite::driver('github')->stateless()->user();

        return view('ecommerce-dashboard');
    }

    public function index(){
        // if(time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
        //     echo"<script>alert('15 Minutes over!');</script>";
        //     unset($_SESSION['username'], $_SESSION['password'], $_SESSION['timestamp']);
        //     $_SESSION['logged_in'] = false;
        //     // header("Location: " . index.php); //redirect to index.php
        //     return view('login');
        //     exit;
        // } else {
        //     $_SESSION['timestamp'] = time(); //set new timestamp
        // }
        return view('login');
    }

    public function login(Request $request){
        // dd($request->all());
        return view('ecommerce-dashboard');
    }
}
