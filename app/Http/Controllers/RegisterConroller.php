<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterConroller extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => ['required','string', 'max:255'],
            'phone'    => [ 'required', 'string', 'min:11', 'max:16', 'unique:users' ],
            'password' => [ 'required', 'string', 'min:6', 'confirmed' ]
        ]);

        $user = user::create( $request->only('name','phone','password') );

        if(Auth::loginUsingId($user->id)) {
            return redirect()->route('home+');
        }
        

        return redirect()->route('login');
    }
}
