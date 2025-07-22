<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AuthenticationController extends Controller
{
    function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt($credentials)) {
            // 
            return view("admin.dashboard");
        } else {
            echo "login failed";

        }
    }

    function registration(Request $request): void{
        $credentials = $request->validate([
           'email'=>'required|email',
           'password'=>'required|min:6'
        ]);
        $user=User::create([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        return redirect('/login');
        }   
}
