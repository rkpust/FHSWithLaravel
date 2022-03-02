@extends('layout.master')

@section('title')
<title>নোটিশ</title>
@endsection

@section('maincontent')

         <div class="column middle">

             <div class="maincontent-head">নোটিশ বোর্ড</div>
             
             <br>
             <br>
             <br>


                 <?php

                     $conn = mysqli_connect("localhost", "fhsadmin", "fhsadmin", "fhs");

                     if(!$conn){
                     echo ("Error Connection:".mysqli_connect_error());
                        }

                     $sql="SELECT title,PubDate,fileLink FROM notices ORDER BY id DESC";
                     $result = mysqli_query($conn,$sql);

                     if ($result->num_rows > 0) {
                      echo '<table id="table-style"><th>ক্রমিক নং</th><th>প্রকাশের তারিখ</th><th>শিরোনাম</th><th>ডাউনলোড</th></tr>';

         

                     // output data of each row
                     $i=0;
                     while($row = $result->fetch_assoc()) {
                     $i++;  //increment of serial

                     echo "<tr><td>$i</td>";
                     echo '<td style="color:red;">&#x1F4C5; '.$row["PubDate"].'</td>';
                     echo "<td>".$row["title"]."</td>";
                     echo '<td><a href="Notices/'.$row['fileLink'].'" class="link-deco" download="'.$row['fileLink'].'"  target="_blank">⇩Download</a></td>';
                     echo "</tr>";
        
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

@endsection