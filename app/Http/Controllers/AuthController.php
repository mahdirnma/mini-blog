<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(StoreUserLoginRequest $request)
    {
        $myData = $request->only(['email', 'password']);
        if (Auth::attempt($myData)) {
            return to_route('dashboard');
        }
        return to_route('login.form');
    }
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(StoreUserRequest $request)
    {
        $user=User::create($request->all());
        if ($user) {
            return to_route('login.form');
        }else{
            return to_route('register.form');
        }
    }
    public function logout(){
        Auth::logout();
        return to_route('login.form');
    }
}
