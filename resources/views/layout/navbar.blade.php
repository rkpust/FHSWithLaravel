<div class="topnav" id="myTopnav">

         <a class="active" href="{{ route('index.page') }}" title="প্রথম পাতা" >&#127968;</a>

         <div class="dropdown">
             <button class="dropbtn">পরিচিতি</button>
             <div class="dropdown-content">

             <a href="{{ route('introduction.page') }}">এক নজরে পরিচিতি</a>
             <a href="{{ route('brief.history') }}">সংক্ষিপ্ত ইতিহাস</a>

             </div>
         </div> 
 
     
         <div class="dropdown">
             <button class="dropbtn">আমাদের কথা</button>
             <div class="dropdown-content">

             <a href="{{ route('headmasters.speech') }}">প্রধান শিক্ষকের বার্তা</a>
             <a href="{{ route('managing.committee') }}">ব্যবস্থাপনা কমিটি</a>
             <a href="{{ route('master.plan') }}">মাস্টারপ্ল্যান</a>
             <a href="{{ route('aim.objectives') }}">লক্ষ্য ও উদ্দেশ্য</a>
             <a href="{{ route('achievement.success') }}">অর্জন ও সাফল্য</a>

             </div>
         </div>


         <div class="dropdown">
             <button class="dropbtn">তথ্য সম্ভার</button>
             <div class="dropdown-content">

             <a href="{{url('notices')}}">নোটিশ</a>
             <a href="{{url('holidays')}}">ছুটির তালিকা</a>
             <a href="{{url('library')}}">লাইব্রেরী</a>
             <a href="{{url('computer-lab')}}">কম্পিউটার ল্যাব</a>
             <a href="{{url('sotota-store')}}">সততা স্টোর</a>
             <a href="{{url('magazine')}}">ম্যাগাজিন</a>
             <a href="{{url('events')}}">ইভেন্টস</a>
             <a href="{{url('important-links')}}">গুরুত্বপূর্ণ লিঙ্ক</a>

             </div>
         </div>


         <div class="dropdown">
             <button class="dropbtn">একাডেমিক</button>
             <div class="dropdown-content">

             <a href="{{ URL::route('code-of-conducts') }}">আচরণবিধি</a>             
             <a href="{{ URL::route('dress-code') }}">পোশাকরীতি</a>
             <a href="{{ URL::route('lesson-plan') }}">পাঠ পরিকল্পনা</a>
             <a href="{{ URL::route('calendar') }}">ক্যালেন্ডার</a>
             <a href="{{ URL::route('class-routine') }}">ক্লাস রুটিন</a>
             <a href="{{ URL::route('exam-routine') }}">পরীক্ষার সময়সূচি</a> 
             <a href="{{ URL::route('results') }}">ফলাফল</a>

             </div>
        </div>


         <div class="dropdown">
             <button class="dropbtn">সহ-পাঠ্যক্রম</button>
             <div class="dropdown-content">

             <a href="{{ url()->to('boys-scout') }}">বয়েজ স্কাউট </a>
             <a href="{{ url()->to('girls-guide') }}">গার্লস গাইড</a>
             <a href="{{ url()->to('sports') }}">খেলাধুলা </a>
             <a href="{{ url()->to('culture-practice') }}">সংস্কৃতি চর্চা </a>    

            </div>
         </div>


         <div class="dropdown">
             <button class="dropbtn">শিক্ষার্থী</button>
             <div class="dropdown-content">

             <a href="/number-of-students">শিক্ষার্থীর সংখ্যা</a>
             <a href="/list-of-students">শিক্ষার্থীর তালিকা</a>
  
             </div>
         </div>


         <div class="dropdown">
             <button class="dropbtn">জনবল</button>
             <div class="dropdown-content">

             <a href="/teachers">শিক্ষক-শিক্ষিকা</a>
             <a href="/employees">কর্মচারীবৃন্দ</a>
   
             </div>
         </div>


         <div class="dropdown">
             <button class="dropbtn">গ্যালারী</button>
             <div class="dropdown-content">

             <a href="/photo-gallery">ফটো গ্যালারি</a>  
             <a href="/video-gallery">ভিডিও গ্যালারি</a>

             </div>
         </div>

         <div class="dropdown">
             <button class="dropbtn">আর্কাইভস</button>
             <div class="dropdown-content">

             <a href="/former-persons">প্রাক্তন ব্যক্তিগণ</a>  
             <a href="/meritorious-students">কৃতী শিক্ষার্থীগণ</a>

             </div>
         </div>

             <a href="/contact">যোগাযোগ</a>


             <a class="icon" href="javascript:void(0);" title="মেন্যু" onclick="ResponsiveNavFunction()">&#9776;</a>


     </div>