<?php
  
  include('register_user.php');

  // start php session to store login information
  session_start();

  if($_REQUEST['subject'] == 'register') {
      
      $firstName  = $_REQUEST['firstName'];
      $lastName   = $_REQUEST['lastName'];
      $email      = $_REQUEST['email'];
      $password   = $_REQUEST['password'];

    
      $query = "insert into `Users` (`FirstName`, `LastName`, `Email`, `Password`)" . 
                 " values ('$firstName' ,'$lastName', '$email', '$password')";
      $result = insert($query);
      if($result)
      {
        //echo "<script>alert('User registered successfully !')</script>";  
        header("location: /piracy/index.php");    
      }
      
      

  }
  
?>



<!DOCTYPE html>

<html lang="en" >


<head>
 
 <meta charset="UTF-8">
  
<title>Register</title>

  <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>-->
   
 <link rel="stylesheet" href="normalize.min.css">

  
   
   <link rel="stylesheet" href="css/style.css">

  
</head>



<body>

  
<div class="form">

      
     
 

     

     
   <div id="signup">   
     
     <h1>Sign Up Here</h1>
          

          <form id="register" action="" method="post">
  
        
          <div class="top-row">
 
           <div class="field-wrap">
        
      <label>
                First Name<span class="req">*</span>
              </label>
      
        <input type="text" name="firstName" required autocomplete="off" />
         
   </div>
        
       
     <div class="field-wrap">
   
           <label>
                Last Name<span class="req">*</span>
              </label>
           
   <input type="text" name = "lastName" required autocomplete="off"/>
  
          </div>
     
     </div>

     
 
    <div class="field-wrap">
     
       <label>
              Email Address<span class="req">*</span>
            </label>
       
     <input type="email" name="email" required autocomplete="off"/>
      
    </div>
          
     
     <div class="field-wrap">
     
       <label>
              Set A Password<span class="req">*</span>
            </label>
    
        <input type="password" name="password" required autocomplete="off"/>
   
       </div>
          

         <p class="forgot"><a href="/piracy/index.php">Home</a></p>
          <button name = "subject" type="submit" value="register" class="button button-block"/>Get Started</button>
      
    
          </form>


        </div>
        


             
 

      

</div> <!-- /form -->
  
<script src='jquery.min.js'></script>

  


    <script  src="js/index.js"></script>





</body>


</html>
