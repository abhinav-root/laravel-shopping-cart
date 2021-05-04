<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function show(Request $request) {
        return view('auth.signup');
    }

    public function signup(Request $request) {
        $validate = $request->validate([
            'username' => 'required|max:8',
            'email' => 'required|unique:users|email:rfc',
            'password' => 'required|min:8|max:32',
            'confirm-password' => 'required|min:8|max:32|same:password'
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('/login')->with('login-success', 'Account created successfully');
    }
}
