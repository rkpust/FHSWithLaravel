@extends('layout.master')


@section('title')

<title>ফটো গ্যালারি</title>

@endsection


@section('maincontent')


         <div class="column middle">

         <div class="maincontent-head">ফটো গ্যালারি</div>

         <br>
         <br>

         <div class=".GalleryResponsive">
            <div class="gallery">
                 <a target="_self" href="{{asset('image')}}/image/scouts.jpg">
                 <img src="{{asset('image')}}/scouts.jpg" alt="Cinque Terre" width="600" height="400">
                 </a>
                 <div class="desc">স্কাউটের সদস্য</div>
             </div>
         </div>


     </div>
         
         
@endsection