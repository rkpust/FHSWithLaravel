@extends('layout.master')


@section('title')

<title>অ্যাডমিন লগইন</title>

@endsection


@section('maincontent')

<div class="column middle">

         <div class="maincontent-head">অ্যাডমিন লগইন</div>

         <br>
         <br>

         <p style="text-align:center; color:red;"> লগইন এর জন্য সঠিক ইমেইল ও পাসওয়ার্ড ব্যবহার করুন ।</p>

         <div class="loginbox">
         <img src="image/avatar.png" class="avatar">
         <h1>Admin Login</h1>
         <form action="check" method="post">

              <div style=" color:red; text-align:center">
             @if(session()->get('fail'))
             {{ session()->get('fail')}}
             @endif
          </div>

            @csrf

            <p>Email</p>
            <input type="email" name="email" id="email" placeholder="Enter Email" value = "{{ old('email') }}"> 
            <span style="color:red"> @error('email'){{ $message }} @enderror </span>
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password" value = "{{old('password')}}">
            <span style="color:red"> @error('password'){{ $message }} @enderror </span>

            <br>
            
            <input type="submit" name="loginBtn" id="login" value="Login">
            <a href="#" class="link-deco">Forgot your password?</a><br>

        </form>
         
    </div>

         <br>
          
         </div>

         
@endsection


       

