<?php
  
  // start php session to store login information
error_reporting(E_ALL); 
ini_set('display_errors', '1');
session_start();

//include('../register/register_user.php');
  
  // redirect to error page if user not logged in
  if (! $_SESSION['User_Id'])
  {
      // redirect to login
      header("location:/piracy/activate/error.php");
  }

  // code will execute on postback
  if( isset($_REQUEST['purchase']) && $_REQUEST['purchase'] == 'purchase')
  {
      //header("location:/piracy/payment/payment.php");
  }    

?>


<!DOCTYPE html>

<html lang="en" >


<head>
 
 <meta charset="UTF-8">
  
<title>Sign-Up/Login Form</title>

  <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>-->
   
 <link rel="stylesheet" href="normalize.min.css">

  
   
   <link rel="stylesheet" href="css/style.css">

 <style>
 .pkgImg
{
  border-radius: 25px;

  height: 220px;
  width: 220px;
  display:block;
}
 </style>  

  
</head>



<body>

  
<div class="form">

     

<h1>Make Payment !</h1>
   
<form class="paypal" action="/piracy/Paypal/payments.php" method="post" id="paypal_form" target="_blank">
    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="no_note" value="1" />
    <input type="hidden" name="lc" value="UK" />
    <input type="hidden" name="currency_code" value="GBP" />
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
    <input type="hidden" name="first_name" value="Customer's First Name"  />
    <input type="hidden" name="last_name" value="Customer's Last Name"  />
    <input type="hidden" name="payer_email" value="customer@example.com"  />
    <input type="hidden" name="item_number" value="123456" / >
    

    <div class="field-wrap">
      <h2>Purchase product</h2>
      <img class="pkgImg" src="/piracy/images/1.jpg" />
      <h3>£ 5/-<h3>
    </div>
     
    <p class="forgot"><a href="/piracy/index.php">Home</a></p>
    <button name="submit" type="submit" value="Submit Payment" class="button button-block"/>continue</button>
  </form>
</div> <!-- /form -->
  
<script src='jquery.min.js'></script>
<script  src="js/index.js"></script>
</body>
</html>
