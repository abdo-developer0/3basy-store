<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginConroller extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string|min:11|max:16',
            'password' => 'required|string|min:5',
        ]);
    }

    public function username()
    {
        return 'phone';
    }
}
