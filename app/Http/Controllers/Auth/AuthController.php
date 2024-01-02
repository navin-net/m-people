<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){

        if(!empty(Auth::check())){
            return redirect()->route('home');
        }
        // dd(Hash::make('123456'));
        return view('Auth.login');
    }


    public function login(Request $request)
    {

  
        $validation =   $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

            if (Auth::attempt([ 'email' => $request->email, 'password' =>  $request->password])) 
            {
                return redirect()->route('home');
            } else {
                return redirect()->back()->withErrors('Invalidate email and password');
            }
        }
        public function logout(){
            Auth::logout();
            return redirect()->route('login');
        }

    public function registrar(){
        return view ('Auth.register');
    }
    public function resetpassword(){
        return view ('Auth.resetpassword');
    }
}