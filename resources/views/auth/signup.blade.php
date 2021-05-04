@extends('layouts.layout')

@section('content')
<div class="form-container">

    <div class="form-wrapper">
        <h2>Signup for free</h2>
        <form action="/signup" method="POST">
            @csrf

            <div class="form-row">
                <i class="fas fa-edit"></i>
                <input type="text" name="username" id="username" placeholder="Enter username"
                value="{{ old('username') }}">
            </div>
            @error('username')
                <div class="input-error">{{ $message }}</div>
            @enderror
            

            <div class="form-row">
                <i class="fas fa-user"></i>
                <input type="text" name="email" id="email" placeholder="Enter email" 
                value="{{ old('email') }}">
            </div>
            @error('email')
                <div class="input-error">{{ $message }}</div>
            @enderror

            <div class="form-row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Enter password">
            </div>
            @error('password')
                <div class="input-error">{{ $message }}</div>
            @enderror

            <div class="form-row">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm password">
            </div>
            @error('confirm-password')
                <div class="input-error">{{ $message }}</div>
            @enderror

            <button type="submit" class="submit-btn">Signup</button>
        </form>
       
         <div class="form-row sign-up">
             Already a user? <span><a href="/login">Login</a></span>
        </div>
        
    </div>
</div>
    
@endsection