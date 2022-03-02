<!DOCTYPE html>
<html lang="bn en">

<head>
     @include('layout.head')

     @yield('title')

</head>


<body>

     <!--  layoutheader -->
     @include('layout.header')
     <!--  end layoutheader -->


     <!--  topnav -->

     @include('layout.navbar')

     <!--  end topnav -->
     

     <!-- slideshow-container -->
     <!-- <p>Change image every 3 seconds:</p> -->

     @include('layout.slides')
     
     <!-- end slideshow-container -->


     <br>

     <br>


     @yield('marquee')


     <!-- row -->


     <div class="row">

        @yield('maincontent')



         <!-- column side -->

         
          
        <div class="column side">

        @yield('sidecontent1')

       <!-- Important Links Section-->

             <div class="content-head">গুরুত্বপূর্ণ লিংকসমূহ</div>
             <br>
            
          
        
             

             <div class="content-style" style="font-size: 14px;">
             <marquee behavior="scroll" scrollamount="2" direction="up" height="70" onmouseover="this.stop();" onmouseout="this.start();">➤<a class="link-deco" href="http://www.dshe.gov.bd/" title="মাধ্যমিক ও উচ্চশিক্ষা  অধিদপ্তর" target="_blank">মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</a>
             
             <br>
             

             ➤<a class="link-deco" href="http://www.rajshahieducationboard.gov.bd/" title="রাজশাহী শিক্ষা বোর্ড" target="_blank">রাজশাহী শিক্ষা বোর্ড</a>
             
             <br>
             
             
             ➤<a class="link-deco" href="http://www.nctb.gov.bd/" title="জাতীয় শিক্ষাক্রম ও পাঠ্যপুস্তক বোর্ড" target="_blank">এনসিটিবি</a>
            
             <br>
             

             ➤<a class="link-deco"  href="https://www.teachers.gov.bd/" title="শিক্ষক বাতায়ন" target="_blank">শিক্ষক বাতায়ন</a>

             <br>
             

             ➤<a class="link-deco" href="https://moedu.gov.bd/" title="শিক্ষা মন্ত্রণালয়" target="_blank">শিক্ষা মন্ত্রণালয়</a>

             <br>
            

             ➤<a class="link-deco" href="http://www.educationboardresults.gov.bd/" title="শিক্ষা বোর্ড রেজাল্ট" target="_blank">শিক্ষা বোর্ড রেজাল্ট</a>

             <br>
             

             ➤<a class="link-deco" href="http://www.educationboard.gov.bd/" title="Intermediate and Secondary Education Boards" target="_blank">আন্তঃশিক্ষা বোর্ড</a>

             <br>
             

             ➤<a class="link-deco" href="http://bn.banglapedia.org/" title="Banglapedia" target="_blank">বাংলাপিডিয়া</a></marquee>
             
             
             <a href="important links.php"><p class="button-style" title="More link">আরও লিংক >> </p>
             </a>

              
             </div>

             <!-- End Important Links Section-->

             <br>
             <hr style="color:black">
             <br>


        <!-- Internal Links Section-->

             <div class="content-head">অভ্যন্তরীণ লিংকসমূহ</div>

             <br>
            
             <div class="content-style" style="font-size: 14px;">
               <marquee behavior="scroll" scrollamount="2" direction="up" height="70" onmouseover="this.stop();" onmouseout="this.start();">
             
             ✅ <a class="link-deco" href="introduction at a glance.php" title="এক নজরে পরিচিতি" target="_self">এক নজরে পরিচিতি</a>
             
             <br>

             ✅ <a class="link-deco" href="notices.php" title="নোটিশ" target="_self">নোটিশ</a>
             
             <br>

             ✅ <a class="link-deco" href="managing committee.php" title="ব্যবস্থাপনা কমিটি" target="_self">ব্যবস্থাপনা কমিটি</a>
            
             <br>

             ✅ <a class="link-deco" href="class routine.php" title="ক্লাস রুটিন" target="_self">ক্লাস রুটিন</a>

             <br>

             ✅ <a class="link-deco" href="list of students.php" title="শিক্ষার্থীর তালিকা" target="_self">শিক্ষার্থীর তালিকা</a>

             <br>

             ✅ <a class="link-deco" href="code of conducts.php" title="আচরণবিধি" target="_self">আচরণবিধি</a>

             <br>

             ✅ <a class="link-deco" href="computer lab.php" title="কম্পিউটার ল্যাব" target="_self">কম্পিউটার ল্যাব</a>

             <br>

             ✅ <a class="link-deco" href="meritorious students.php" title="কৃতী শিক্ষার্থীগণ" target="_self">কৃতী শিক্ষার্থীগণ</a>

           </marquee>

             </div>

             <!-- End Internal Links Section-->

             <br>
             <hr style="color:black">
             <br>



        @yield('sidecontent2')

            
        </div>

         <!-- end column side -->

     </div>

     <!-- end row -->

 
     <!-- footer -->
 
     @include('layout.footer')

     <!-- end footer -->


     <!-- Script Section -->

     @include('layout.scripts')

     <!-- End Script Section -->
  
</body>
</html>