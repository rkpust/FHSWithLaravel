@extends('layout.master')

@section('title')

 <title>ফুলশো উচ্চ বিদ্যালয় ~ Welcome to Official Website</title>

@endsection 


@section('marquee')

<!--  marquee box -->

     <!-- <div class="marquee-box">
          
         using css in marquee tag selector -->
         <marquee id="scroll_notices" class="marquee-style" behavior="scroll" scrollamount="4">
             <div onMouseOver="document.getElementById('scroll_notices').stop();" onMouseOut="document.getElementById('scroll_notices').start();">

                <?php

                     $conn = mysqli_connect("localhost", "fhsadmin", "fhsadmin", "fhs");

                     if(!$conn){
                     echo ("Error Connection:".mysqli_connect_error());
                        }

                     $sql="SELECT title,PubDate FROM notices ORDER BY id DESC";
                     $result = mysqli_query($conn,$sql);

                     if ($result->num_rows > 0) {
                      

         

                     while($row = $result->fetch_assoc()) {

                     echo '<span style="color:red;">&#x1F4C5;  '.$row["PubDate"].'</span>';
                     echo " ---- ";  
                     echo "<span>".$row["title"]."</span>";
                     echo "  # ";
        
         }
         } 

         else {
         echo "ফুলশো উচ্চ বিদ্যালয় ~ Welcome to Official Website";
         }

         // Close connection
         mysqli_close($conn);

         ?>
             </div>
         </marquee>
         <!-- end using css in marquee tag selector -->
     </div>

     <!--  end marquee box -->


@endsection   


@section('maincontent')

      <!-- column middle -->

       <div class="column middle">

         <div class="maincontent-head">ফুলশো উচ্চ বিদ্যালয়</div>

         <br>
         <br>

         <p class="main-content">ফুলশো গ্রামে গাছপালা ঘেরা মনোরম পরিবেশে <b>"ফুলশো উচ্চ বিদ্যালয়"</b> ১৯৯১ সাল প্রতিষ্ঠিত হয়। নানা প্রতিকূলতার মধ্য দিয়ে স্বীয় আদর্শকে সমুন্নত রেখে শিক্ষাদানের সুমহান দৃঢ় অঙ্গীকার নিয়ে এগিয়ে চলেছে। শুধু প্রাতিষ্ঠানিক শিক্ষা নয়, মূল্যবোধের কঠোর অনুশীলন, সামাজিক, মানসিক ও শারীরিক উৎকর্ষ সাধন ও দেশ প্রেমে উদ্বুদ্ধকরণের প্রচেষ্টা ও শিক্ষার্থীদের আলোকিত মানুষ হিসেবে সমাজে প্রতিষ্ঠিত করাই এই প্রতিষ্ঠানের মূল লক্ষ্য।</p>
         
         </div>

         <!-- end column middle -->



@endsection


@section('sidecontent1')

<!-- Message of Headmaster -->
             <div class="content-head">প্রধান শিক্ষকের বার্তা</div>

             <a href="speech of headmaster.php"><img src="image/user.png" title="Abdur Rahman" alt="Abdur Rahman" style= "display: block; margin: 10px auto; width:60%; height:auto;">
                 </a>

             <p class="active"  style="text-align: center; font-size: 15px;">মোঃ আব্দুর রহমান</p>
             <br>

             <div class="content-style">
              সবাইকে সালাম ও আন্তরিক শুভেচ্ছা। মোহনপুর উপজেলায় অনেক শিক্ষা প্রতিষ্ঠানের মধ্যে <b>"ফুলশো উচ্চ বিদ্যালয়"</b> একটি ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান। শিক্ষা প্রতিষ্ঠানে মূল উদ্দ্যেশ্য হলো .....
                 <a href="speech of headmaster.php"><p class="button-style" title="Read more">আরও পড়ুন >> </p>
                 </a>

             </div>


             <br>
             <hr style="color:black">
             <br>


             <!-- End Message of Headmaster -->


@endsection


@section('sidecontent2')

<!-- Total Visitors Section-->  

             <div class="content-head">মোট দর্শক</div> 
             <br>
             <div class="content-style" style="text-align: center;"><!-- hitwebcounter Code START -->
             
             <img src="https://hitwebcounter.com/counter/counter.php?page=7167303&style=0012&nbdigits=9&type=ip&initCount=0" title="Total Visitors" Alt="মোট দর্শক"   border="0">

             <br>

          </div>

          <!-- End Total Visitors Section-->


@endsection
    
