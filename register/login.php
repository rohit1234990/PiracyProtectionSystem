<?php
  error_reporting(E_ALL); 
ini_set('display_errors', '1');

  include('register_user.php');

  // start php session to store login information
  session_start();


  if (isset($_REQUEST['subject']) && $_REQUEST['subject'] == 'login') {

      $loginEmail     = $_REQUEST['loginEmail']; 
      $loginPassword  = $_REQUEST['loginPassword'];

      $query  = "select `User_Id`, `FirstName`, `LastName`, `ProductCode` from `Users` where `Email` = '$loginEmail' and `Password` = '$loginPassword'";
      $result = select($query);
     

      if($result->num_rows == 1)
      {
        // since we have only one single row 
        $row = $result->fetch_assoc();

        $_SESSION['User_Id']      =  $row["User_Id"];
        $_SESSION['firstName']    =  $row["FirstName"];
        $_SESSION['lastName']     =  $row["LastName"];
        $_SESSION['ProductCode']  =  $row["ProductCode"];

        // overwriting this session varible initially created in index page
        $_SESSION['message']      =  'Welcome! ' . ucfirst($row["FirstName"]);
        header("location: /piracy/index.php"); 
      }
      else
      {
        // Error. Redirect back to login page 

        $_SESSION['message']      = "";

        header("location: /piracy/register/register.php#login"); 
      }

  }
?>



<!DOCTYPE html>

<html lang="en" >


<head>
 
 <meta charset="UTF-8">
  
<title>Login Form</title>

  <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>-->
   
 <link rel="stylesheet" href="normalize.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="../common.css"/>
 <link rel="stylesheet" type="text/css" href="../index.css"/>
  
</head>



<body>
<?php

  // includeing header
  //include '../snippet/head-banner.php';

?>
  
<div class="form">

        <div id="login">   
    
      <h1>Welcome Back!</h1>
   
       
          <form id="login" action="" method="post">
       
   
            <div class="field-wrap">

            <label>
              Email Address<span class="req">*</span>
            </label>
   
         <input name="loginEmail" type="email"required autocomplete="off"/>
     
     </div>
       
   
          <div class="field-wrap">
       
     <label>
              Password<span class="req">*</span>
            </label>
      
      <input name="loginPassword" type="password"required autocomplete="off"/>
  
        </div>
          
     
     <p class="forgot"><a href="/piracy/register/register.php">Register Here</a></p>
          
   
       <button name = "subject" type="submit" value="login" class="button button-block"/>Log In</button>
          
  
        </form>

      
  </div>
        
 
  
      

</div> <!-- /form -->
  
<script src='jquery.min.js'></script>

  


    <script  src="js/index.js"></script>





</body>


</html>
