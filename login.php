<?php

session_start();



$con = mysqli_connect('localhost','root', '', 'login');
   if($con)
   {


echo "connection successful";


   }
   else{


echo "no connction";

   }

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php'
	?>
</head>
<body style="background-image:url(BS4/img/light4.jpg);  ">
	<header>
		                                              <!-- login page -->
   <div class="container shadow mb-5" >
   	<div class="heading text-center text-uppercase mb-5 text-white"> ADMIN LOGIN PAGE </div>
   	<div class="container row d-flex flex-row justify-content-center mb-5">

<form method="POST" action="logincheak.php" >

                          <div class="form-group  shadow p-2 text-white " >
                                <label  ><font>USERNAME</font></label>
                                <input type="text" class="form-control" value="" placeholder="Enter username" name="user" >
                            </div>

                            <div class="form-group shadow p-2 text-white">
                                <label><font >PASSWORD</font></label>
                                <input type="pass" class="form-control" value="" placeholder="Enter password" name="pass" autocomplete="of" >
                            </div>
                           <center> <input type="submit" class="btn btn-success" name="submit"></center>


</form>
</div>
</div>

</div>

  




	</header>

</body>
</html>