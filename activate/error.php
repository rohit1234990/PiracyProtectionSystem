<?php
  
  // start php session to store login information
  session_start();

  // here is the error message

?>




<!DOCTYPE html>

<html lang="en" >


<head>
 
 <meta charset="UTF-8">
  
<title>Sign-Up/Login Form</title>

  <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>-->
   
 <link rel="stylesheet" href="normalize.min.css">

  
   
   <link rel="stylesheet" href="css/style.css">

  
</head>



<body>

  
<div class="form">
<h1>Please login to continue ...</h1>
   
       
           
      <button name = "activate" type="submit" value="activate" onclick="location.href = '../register/login.php';" class="button button-block"/>Login Now</button>
      
             
  
      
  </div>
        
 
     
      

</div> 
  
<script src='jquery.min.js'></script>

  


    <script  src="js/index.js"></script>





</body>


</html>
