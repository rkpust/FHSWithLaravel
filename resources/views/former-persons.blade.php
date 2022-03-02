@extends('layout.master')


@section('title')

<title>প্রাক্তন ব্যক্তিগণ</title>

@endsection


@section('maincontent')


         <div class="column middle">

         <div class="maincontent-head">প্রাক্তন ব্যক্তিগণ</div>

         <br>
         <br>
         <div>

         <?php

                     $conn = mysqli_connect("localhost", "fhsadmin", "fhsadmin", "fhs");

                     if(!$conn){
                     echo ("Error Connection:".mysqli_connect_error());
                        }

                     $sql="SELECT name,post,email,postingDate,retriedDate,phone,image,address FROM formerpersons ORDER BY id ";

                     $result = mysqli_query($conn,$sql);

                     if ($result->num_rows > 0) {
                        echo '<table  id="table-style"><tr>
                         <th colspan="9" style="font-size:20px;">এক নজরে প্রতিষ্ঠানের প্রাক্তন ব্যক্তিবর্গের তালিকা </th></tr>';

                      echo '<tr style="font-size:15px;"><th>ক্র নং</th><th>ছবি</th><th>নাম</th><th>মূলপদ</th><th>যোগদানের তারিখ</th><th>অবসরের তারিখ</th><th>মোবাইল</th><th>ই-মেইল</th><th>ঠিকানা</th></tr>'; 

         

                     // output data of each row
                     $i=0;
                     while($row = $result->fetch_assoc()) {
                     $i++;  //increment of serial

                     
                     echo '<tr style="font-size:12px;">';
                     echo "<td>$i</td>";
                     echo '<td><img src="image/MCommittee/'.$row['image'].'" style="width:40px;height: 35px;" alt="'.$row["name"].'"></td>';
                     echo "<td>".$row["name"]."</td><td>".$row["post"]."</td><td>".$row["postingDate"]."</td><td>".$row["retriedDate"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td></tr>";

                     
        
         }
         echo "</table>";
         } 

         else {
         echo "0 results";
         }


         // Close connection
         mysqli_close($conn);

         ?>
         </div>

         
         </div>
         
         
@endsection