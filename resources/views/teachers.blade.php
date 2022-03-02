@extends('layout.master')

@section('title')

<title>শিক্ষক-শিক্ষিকা</title>

@endsection


@section('maincontent')

         <div class="column middle">

         <div class="maincontent-head">শিক্ষক-শিক্ষিকা মহোদয়ের তালিকা</div>

         <br>
         <br>

         <div style="overflow-x: auto;">

             <?php

                     $conn = mysqli_connect("localhost", "fhsadmin", "fhsadmin", "fhs");

                     if(!$conn){
                     echo ("Error Connection:".mysqli_connect_error());
                        }

                     $sql="SELECT name,post,postingDate,pdsID,email,phone,address,image,socialNetwork FROM teachers ORDER BY id ";

                     $result = mysqli_query($conn,$sql);

                     if ($result->num_rows > 0) {
                        echo '<table  id="table-style"><tr>
                         <th colspan="10" style="font-size:20px;">এক নজরে দায়িত্বরত শিক্ষক-শিক্ষিকা মহোদয়ের তালিকা </th></tr>';

                      echo '<tr style="font-size:15px;"><th>ক্র নং</th><th>ছবি</th><th>নাম</th><th>মূলপদ</th><th>যোগদানের তারিখ</th><th>পিডিএস আইডি</th><th>ই-মেইল</th><th>মোবাইল</th><th>সামাজিক নেটওয়ার্ক</th><th>ঠিকানা</th></tr>'; 

         

                     // output data of each row
                     $i=0;
                     while($row = $result->fetch_assoc()) {
                     $i++;  //increment of serial

                     
                     echo '<tr style="font-size:12px;">';
                     echo "<td>$i</td>";
                     echo '<td><img src="image/Teachers/'.$row['image'].'" style="width:40px;height: 35px;" alt="'.$row["name"].'"></td>';
                     echo "<td>".$row["name"]."</td><td>".$row["post"]."</td><td>".$row["postingDate"]."</td><td>".$row["pdsID"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td>";
                     echo '<td><a href="https://'.$row['socialNetwork'].'"  target="_blank"> <img src="image/Teachers/Facebook.png" style="height:16px;width:16px;" alt="Facebook"></a></td>';

                     echo "<td>".$row["address"]."</td></tr>";
                     
        
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