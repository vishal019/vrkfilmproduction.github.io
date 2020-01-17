<?php

 $conn =mysql_connect("localhost" ,"root" , "" , "abouutus");
   if($conn-> connect_error)
   {

    die("connection failed:" . $connect_error)


   }
   $sql = "SELECT name , email , message from  submit";
   $result = $conn-> query($sql)
   if($result-> num_row > 0)
   {
           while($row = $result-> fetch_assoc())
           {
               echo="<tr><td>".$row["name"]."</td><td>". $row["email"].$row["message"]."</td></tr>";




           }


   }








  ?>