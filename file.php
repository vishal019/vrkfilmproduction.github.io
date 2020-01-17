


	<?php

   echo "<h2>my first project</h2>";
   $name= $_POST['name'];
$visitor_email=$_POST['email'];
$message =$_POST['message'];




$email_form ='vishalrkjeur019@gamil.com';
$email_subject ="New form submission";
$email_body ="User Name: $name.\n".
           "User Email: $visitor_email.\n".
           "User Message:$message.\n";
           $to ="vrkfilmproductionjeur@gmail.com";
           $headers = "Form:$email_form \r\n";
           $headers = "replay-to: $visitor_email \r\n";
           mail($to ,$email_subject,$email_body,$headers);
           header("Location: index.html");




  

 

?>



