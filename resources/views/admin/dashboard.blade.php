@extends('admin.layout')


@section('title')

<title>Welcome to Admin Panel</title>

@endsection


@section('content')


		 <br>
         <br>	

         <div class="maincontent-head">অ্যাডমিন প্যানেল</div>

         <br>
         <br>

         <h2 style="text-align:center;">{{ $LoggedAdminInfo['name'] }} অ্যাডমিন প্যানেলে আপনাকে স্বাগতম । </h2>

         <br>
         <br>
         <br>
         <br>


@endsection