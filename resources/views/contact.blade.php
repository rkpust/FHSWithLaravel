@extends('layout.master')

@section('title')

<title>যোগাযোগ</title>

@endsection


@section('maincontent')

        <div class="column middle">

         <div class="maincontent-head">যোগাযোগ</div>

         <br>
         <br>

         <div class="content-style" style="font-size: 16px;">
             <p style="font-size: 18px;"><b>ফুলশো উচ্চ বিদ্যালয়</b></p>
             <br>
               
             📞 +৮৮০১২৩৪৫৬৭৮৯ 
             <br> 

             ✉ <a href="mailto:example@fsh.edu.bd" class="link-deco" style="font-family:times new roman;"  target="_blank">example@fsh.edu.bd</a>
             
             <br>
             <img src="image/location.png" style="width:16px; height: 16px;"> ফুলশো, কেশরহাট পৌরসভা, মোহনপুর, রাজশাহী ।  
         </div>


         <br>
         <br>
         <br>
         <br>

        
         <h3>যে কোন মতামতের জন্য নিচের ফর্মটি যথাযথভাবে পূরন করুন ।</h3>
         <br>


         <div class="formcontainer">
             <form action="contact.php" method="post">
                
                @csrf

             <div class="row">
             <div class="col-25">
                <label for="fullname">নামঃ</label>
             </div>
             <div class="col-75">
             <input type="text" id="fullname" name="fullname" placeholder="আপনার পূর্ণ নাম লিখুন..." required>
             </div>
         </div>


         <div class="row">
             <div class="col-25">
                <label for="mobileno">মোবাইল নম্বরঃ</label>
             </div>
             <div class="col-75">
                 <input type="text" id="mobileno" name="mobileno" placeholder="আপনার মোবাইল নম্বর লিখুন..." required>
             </div>
         </div>

         <div class="row">
             <div class="col-25">
                <label for="email">ই-মেইলঃ</label>
             </div>
             <div class="col-75">
                 <input type="email" id="email" name="email" placeholder="আপনার ই-মেইল আড্রেসটি লিখুন...">
             </div>
         </div>

         <div class="row">
             <div class="col-25">
                <label for="address">ঠিকানাঃ</label>
             </div>
             <div class="col-75">
                 <input type="text" id="address" name="address" placeholder="আপনার পূর্ণ ঠিকানা লিখুন..." required>
             </div>
         </div>

  
         <div class="row">
             <div class="col-25">
                 <label for="subject">মতামতঃ</label>
             </div>
             <div class="col-75">
                 <textarea id="subject" name="subject" placeholder="আপনার মতামত লিখুন..." style="height:200px" required></textarea>
             </div>
         </div>

         <div class="row">
             <input type="submit" name="Submit" value="জমা দিন">
         </div>

         </form>

         <?php

          $conn = mysqli_connect("localhost", "fhsadmin", "fhsadmin", "fhs");
          if(!$conn){
         echo ("Error Connection:".mysqli_connect_error());
          }
          
         if(isset($_POST['Submit'])){
         $name = $_POST["fullname"];
         $mobile = $_POST["mobileno"];
         $email = $_POST['email'];
         $address = $_POST['address'];
         $subject = $_POST['subject'];
      
         $sql = "INSERT INTO opinions (name,phone,email,address,comments) VALUES ('$name', '$mobile', '$email','$address','$subject')";
         
         if(mysqli_query($conn, $sql)){

         echo "<p>\"<b>$name</b>\" আপনার মূল্যবান মতামতের জন্য ধন্যবাদ ।</p>";
 
         } 

         else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
         }
 
         // Close connection
         mysqli_close($conn);
   
         }
 
         ?>
         
         </div>


         </div>

         
@endsection