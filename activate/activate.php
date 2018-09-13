<?php
  
  // start php session to store login information
error_reporting(E_ALL); 
ini_set('display_errors', '1');
session_start();

include('../register/register_user.php');
  
  // redirect to error page if user not logged in
  if (! $_SESSION['User_Id'])
  {
      // redirect to login
      header("location:/piracy/activate/error.php");
  }


  /* function definations */
  function Encrypt($plaintext, $password)
  {
      $method = 'aes-256-cbc';
      // Must be exact 32 chars (256 bit)

      $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
      $password = substr(hash('sha256', $password, true), 0, 32);
      
      // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
      $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $password, OPENSSL_RAW_DATA, $iv));
      return $encrypted;
  }

  function Decrypt($encrypted, $password)
  {
      $method = 'aes-256-cbc';
      // IV must be exact 16 chars (128 bit)
      $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

      $password = substr(hash('sha256', $password, true), 0, 32);
      
      // My secret message 1234
      $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $password, OPENSSL_RAW_DATA, $iv);
      return $decrypted;
  }
  
  /* function definations end here */
  /*
    haJH/79RbQkURSCzaSxw0Q== 
    rhcnh0rlo/YQmpxCNFe0tg==
  */
  

  if( isset($_REQUEST['activate']) && $_REQUEST['activate'] == 'activate') 
  {
      $encrypted  =  $_REQUEST['code'];
      
      // extract productID and MAC address
      $dec = Decrypt($encrypted, "3sc3RLrpd17");
      echo "decrupted code is " . $dec;

      $parts = explode(";", Decrypt($encrypted, "3sc3RLrpd17"));  // This decryption key is common for all
        
      $product_id = $parts[0];
      $mac        = $parts[1];

      // fetch from session
      $user_id = $_SESSION['User_Id'];


      // check if user has paid for the product or not
      $query  = "select count(`Sno`) as `Count` from `User_Products` where `User_Id` =  $user_id and `Product_Id` = $product_id";
      $result = select($query);


      $row = $result->fetch_assoc();
      $count =  (int) $row["Count"];

      if($count == 0)  // no entry exists that means payment is not done.
      {
        // Redirect for payment
        // save the ProductId in session   
            
        $_SESSION['Product_Id']         = $product_id;
        $_SESSION['MAC']                = $mac;
        $_SESSION['PaymentInProgress']  = 1;    // just to remember to resume downloading if payment is done.
        header("location: /piracy/activate/purchase.php"); 
      }
      else
      {  

       // connect to DB to get the right Encryption key   
        $query  = "select `EncryptKey` from `Products` where `Product_Id` = $product_id";
        //echo $query;

        $result = select($query);       

        if($result->num_rows == 1)
        {
          // since we have only one single row 
          $row = $result->fetch_assoc();

          $EncryptKey =  $row["EncryptKey"];
          //echo $EncryptKey;

        } 


        // encrypt MAC with to produce the final ativation key
        $productKey =  Encrypt($mac, $EncryptKey);

        // redirect to productKey page
        $_SESSION['productKey'] = $productKey ;//$array[1]; //$productKey;
        header("location: /piracy/activate/productCode.php"); 
      }  

  }
   
?>




<!DOCTYPE html>

<html lang="en" >


<head>
 
 <meta charset="UTF-8">
  
<title>Activate</title>

  <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>-->
   
 <link rel="stylesheet" href="normalize.min.css">

  
   
   <link rel="stylesheet" href="css/style.css">

   

  
</head>



<body>

  
<div class="form">

      <!--
      <ul class="tab-group">

        <li class="tab active">
<a href="#signup">Sign Up</a>
</li>
    
    <li class="tab">
<a href="#login">Log In</a>
</li>
 
     </ul>
 -->

<h1>Activate Your Product Here !</h1>
   
       
          <form action="" method="post">
       
   
            <div class="field-wrap">

            <label>
              Enter Product Code
            </label>
   
         <input name="code" type="text"required autocomplete="off"/>
     
     </div>
       
        <!--
          <div class="field-wrap">
       
     <label>
              Activation Key
            </label>
      
      <input type="text"/>
  
        </div> -->
          
     
      <p class="forgot"><a href="/piracy/index.php">Home</a></p>
      <button name = "activate" type="submit" value="activate" class="button button-block"/>Activate Now</button>
      
             
  
        </form>

      
  </div>
        
 
     </div><!-- tab-content -->
      

</div> <!-- /form -->
  
<script src='jquery.min.js'></script>

  


    <script  src="js/index.js"></script>





</body>


</html>
