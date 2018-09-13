<?php
    // starting php sessions
    // we will need it later


    session_start();
    if(!(isset($_SESSION['username'])))
    {
        //header("Location: index.php");
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Template-24</title>

<link rel="stylesheet" type="text/css" href="common.css"/>
<link rel="stylesheet" type="text/css" href="register.css"/>



</head>
<body>
 <div class="header-wrapper">
      <div class="header">
    	   <div class="header-content">
        	    <div class="logo">
            	        <h1>ABC corporation</h1>
                </div>
            
                <div class="menu">
                	<ul>
                        <li><a  href="index.php">Home</a></li>
                        <li><a href="register.php">Register</a></li>    
                        <li><a href="activate.php">Activate</a></li>
                        <li><a href="about.php">About Us</a></li>
                    </ul>
                </div>
            </div><!-- Header-content -->
       
           <div id="contnt" style="margin:20px;">
                <div style="height:auto; float:left">
                    <h2>Benefits of Activation.</h2>
                    <h5>
                        <ol>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                            <li>Benefit 1</li>
                        </ol>
                    </h5>
                </div>
                <div style="height:auto; width:350px; float:right">
                    <h2>Activate Here.</h2>
                    <!---------->
                      <div class="container">
                        <label for="uname"><b>Product Id.</b></label>
                        <input class="input" type="text" placeholder="Enter Product Id." name="prodId" required>

                        <label for="psw"><b>Key</b></label>
                        <input class="input" type="text" placeholder="Generated Key" name="key" required>

                        <button type="submit">Generate Key</button>
                        
                      </div>
                    <!---------->
                </div>
           </div>

    
       </div>                              
                
 </div>
</body>
</html>
