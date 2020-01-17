<?php

 if (isset($_POST['submit'])) {
 	# code...
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

     $mailTo = "59699539+vishal019@users.noreply.github.com";
     $headers = "from:".$mailfrom;
     $txt = "you have recived email from".$name.".\n\n".$message;


    mail($mailTo,$subject, $txt);
      header("location:contact.html?mailsend");




 }







?>