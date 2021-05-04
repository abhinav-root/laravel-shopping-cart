@extends('layouts.layout')

@section('content')
<div class="form-container">

    <div class="form-wrapper">
        <h2>Log in to your account</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="input-success">
                {{ session('login-success') }}
            </div>
            <div class="input-error">
                {{ session('login-failed') }}
            </div>
            <div class="form-row">
                <i class="fas fa-user"></i>
                <input type="text" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
            </div>
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror
            <div class="input-error">
                {{ session('incorrect-email') }}
            </div>

            <div class="form-row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Enter password">
            </div>
             @error('password')
                <div class="input-error">{{ $message }}</div>
            @enderror
             <div class="input-error">
                {{ session('incorrect-password') }}
            </div>

            <button type="submit" class="submit-btn">Login</button>
        </form>
       
         <div class="form-row sign-up">
             New to E-Buy? <span><a href="/signup">Signup</a></span>
        </div>
        
    </div>
</div>
    
@endsection