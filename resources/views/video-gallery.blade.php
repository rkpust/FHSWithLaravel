@extends('layout.master')


@section('title')

<title>ভিডিও গ্যালারি</title>

@endsection


@section('maincontent')


         <div class="column middle">

         <div class="maincontent-head">ভিডিও গ্যালারি</div>

         <br>
         <br>


          <!--<video width="320" height="200" poster="image/videosongposter.jpg" controls>
         <source src="Video/Adore Rakhio Bondhu - Dhruba Guha - Bangla Music Video 2016.mp4" type="video/mp4">
         </video> -->


         <video width="100%" height="200" poster="{{ asset('image')}}/quranlearing.jpg" controls>
         <source src="Video/Learning Quran within a word l Episode 01 l Islamic Show - YouTube.mp4" type="video/mp4">


         Your browser does not support HTML5 video.
         </video>

         <br>
         <br>
         <br>

         <video width="100%" height="200" poster="image/quranlearing.jpg" controls>
         <source src="Video/Learning Quran within a word l Episode 01 l Islamic Show - YouTube.mp4" type="video/mp4">


         Your browser does not support HTML5 video.
         </video>




         <br>

         </div>
         
         
@endsection