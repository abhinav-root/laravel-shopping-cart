<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;    

class LoginController extends Controller
{
    public function show(Request $request) {
        return view('auth.login');
    }

    public function login(Request $request) {
         $validate = $request->validate([
            'email' => 'required|email:rfc',
            'password' => 'required|min:8|max:32'
        ]);
        
        
        $hashedPassword = User::where('email', $request->email)->value('password');
        $enteredPassword = $request->password;

        if ($hashedPassword) {
            if (Hash::check($enteredPassword, $hashedPassword)) {
                $UserDetails = User::where('email', $request->email)->first();
                $request->session()->put('user', $UserDetails->username);
                return redirect('dashboard');
            } else {
                return redirect('login')->with('incorrect-password', 'Invalid password');
            }
        } else {
            return redirect('login')->with('incorrect-email', 'Invalid email');
        }
    }
}
