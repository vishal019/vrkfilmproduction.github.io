<?php

session_start();



 $con = mysqli_connect('localhost','root',"",'login');

   if($con)
   {


 echo "connection successful";


   }
   else{


  echo "no connction";

   }

   $db = mysqli_select_db($con ,'login');


        if(isset($_POST['submit'])){

             $username = $_POST['user'];
             $password =  $_POST['pass'];

             $sql = " select * from loginform where user ='$username' and 
                     pass = '$password'";

                     $query = mysqli_query($con , $sql);
                     $row = mysqli_num_rows( $query);

                          if($row == 1){
                           	# code...
                           	echo "login successfull";
                          	$_SESSION['user'] = $username;
                          	header('location:adminmainpage.php');

                           } 
                          
                          else{

                                  echo "login in failed";
                                    header('location:login.php');



                         }

                     




        }





?>

