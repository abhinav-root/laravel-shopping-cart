<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $req) {
        return view('/dashboard', ['user' => $req->session()->get('email')]);
    }
}
