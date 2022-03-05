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
         <form action="action" method="POST">

            @csrf

            <p>Email</p>
            <input type="email" name="email" id="email" placeholder="Enter Email" required validate> 
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <input type="submit" name="loginBtn" id="login" value="Login">
            <a href="#" class="link-deco">Forgot your password?</a><br>

        </form>
         
    </div>

         <br>
          
         </div>

         
@endsection


       

