@extends('layout.master')

@section('title')

<title>শিক্ষার্থীর তালিকা</title>

@endsection


@section('maincontent')

         <div class="column middle">

             <div class="maincontent-head">শিক্ষার্থীর তালিকা</div>
             
             <br>
             <br>
             <br>

             <div style="text-align: center;">
             <a href="../FHS/StudentsListOf6.php" class="button-style" title="ষষ্ঠ শ্রেণি">ষষ্ঠ শ্রেণি</a>
             <a href="../FHS/StudentsListOf7.php" class="button-style" title="সপ্তম শ্রেণি">সপ্তম শ্রেণি</a>
             <a href="../FHS/StudentsListOf8.php" class="button-style" title="অষ্ঠম শ্রেণি">অষ্ঠম শ্রেণি</a>
             <a href="../FHS/StudentsListOf9.php" class="button-style" title="নবম শ্রেণি">নবম শ্রেণি</a>
             <a href="../FHS/StudentsListOf10.php" class="button-style" title="দশম শ্রেণি">দশম শ্রেণি</a>
             </div>

             <br>
             <br>
             <br>

            
            <!-- List of students-->
             <div>

             <?php

                     $conn = mysqli_connect("localhost", "fhsadmin", "fhsadmin", "fhs");

                     if(!$conn){
                     echo ("Error Connection:".mysqli_connect_error());
                        }

                     $sql="SELECT roll,name,father,address,image FROM students where class=6 ORDER BY roll ";
                     $result = mysqli_query($conn,$sql);

                     if ($result->num_rows > 0) {
                        echo '<table  id="table-style"><tr>
                         <th colspan="5" style="font-size:18px;">এক নজরে অধ্যয়নরত শিক্ষার্থীর তালিকা </th></tr><tr>
                         <th colspan="5" style="font-size:15px;">ষষ্ঠ শ্রেণি</th></tr>';

                      echo "<th>রোল নং</th><th>ছবি</th><th>শিক্ষার্থীর নাম</th><th>পিতার নাম</th><th>ঠিকানা</th></tr>"; 

         

                     // output data of each row
                     $i=0;
                     while($row = $result->fetch_assoc()) {
                     $i++;  //increment of serial

                     
                     echo '<tr style="font-size:12px;">';
                     echo "<td>".$row["roll"]."</td>";
                     echo '<td><img src="image/Students/'.$row['image'].'" style="width:40px;height: 35px;" alt="'.$row["name"].'"></td>';
                     echo "<td>".$row["name"]."</td><td>".$row["father"]."</td><td>".$row["address"]."</td></tr>";
                     
        
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
         <!-- List of students-->

         </div>

         
@endsection