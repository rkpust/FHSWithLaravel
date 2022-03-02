@extends('layout.master')


@section('title')

<title>কৃতী শিক্ষার্থীগণ</title>

@endsection


@section('maincontent')


         <div class="column middle">

         <div class="maincontent-head">কৃতী শিক্ষার্থীগণ</div>

         <br>
         <br>


         <div>

         <?php

                     $conn = mysqli_connect("localhost", "fhsadmin", "fhsadmin", "fhs");

                     if(!$conn){
                     echo ("Error Connection:".mysqli_connect_error());
                        }

                     $sql="SELECT name,Father,SSCPassing,introduction,phone,image,address FROM meritoriousstudents ORDER BY id ";

                     $result = mysqli_query($conn,$sql);

                     if ($result->num_rows > 0) {
                        echo '<table  id="table-style"><tr>
                         <th colspan="9" style="font-size:20px;">এক নজরে প্রতিষ্ঠানের কৃতী শিক্ষার্থীর তালিকা </th></tr>';

                      echo '<tr style="font-size:15px;"><th>ক্র নং</th><th>ছবি</th><th>নাম</th><th>পিতা</th><th>এসএসসি পাশের সন</th><th>পরিচিতি</th><th>মোবাইল</th><th>ঠিকানা</th></tr>'; 

         

                     // output data of each row
                     $i=0;
                     while($row = $result->fetch_assoc()) {
                     $i++;  //increment of serial

                     
                     echo '<tr style="font-size:12px;">';
                     echo "<td>$i</td>";
                     echo '<td><img src="image/MCommittee/'.$row['image'].'" style="width:40px;height: 35px;" alt="'.$row["name"].'"></td>';
                     echo "<td>".$row["name"]."</td><td>".$row["Father"]."</td><td>".$row["SSCPassing"]."</td><td>".$row["introduction"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td></tr>";

                     
        
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