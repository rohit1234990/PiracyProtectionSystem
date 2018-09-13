<?php
    // starting php sessions
    // we will need it later


    session_start();
         
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>

<link rel="stylesheet" type="text/css" href="../common.css"/>
<link rel="stylesheet" type="text/css" href="../index.css"/>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}
*/
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>


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
                        <li><a  href="../index.php">Home</a></li>
                        <li><a href="../register/register.php">Register</a></li>    
                        <li><a href="../activate/activate.php">Activate</a></li>
                        <li><a href="../payment/payment.html">About Us</a></li>
                    </ul>

                </div>
            </div><!-- Header-content -->


        <div style="float:right; margin-bottom:100px; margin-right:50px" id="logoutMenu">
             <span><b><?php echo $_SESSION['message']?></b><span>
             
             <!-- for dropdown-->
             <div class="dropdown">
              <!-- <button class="dropbtn">Dropdown</button> -->
              <img class="dropbtn" style="height:30px; width:30px" src="../images/icon.png" />
                <!-- here im inseting some php to manupulate -->

                  <div class="dropdown-content">
                    <?php
                        if($_SESSION['User_Id'])    // user logged in. Show logout
                        {
                            echo "<a href='../logout.php'>Logout</a>";
                        }
                        else
                        {
                            echo "<a href='../register/login.php'>Login</a>";
                        }
                    ?>                    
                    
                  </div>

            </div>
             <!---dropdown -->
        </div>




        <div id="contnt" style="margin:20px;" >

            <div style="height:550px; float:left">
                <div style="  margin-top:0px; margin-right:40px;margin-left:50px">
					<h2>About us</h2><br><br>
					<p>ABC corporation founded in 2018.It is one of the leading software company.We have a reputation for providing top-quality piracy softwares.
					Our software development services  developes software for customers.In present time company have more than 200 employees.
                        We are committed to protecting the quality and integrity of our software, not only for ourselves, but for our customers too.
                        Misuse and piracy of our software negatively impacts ABC corporation and our legitimate customers, including our authorised Business Partners 
						and members of our Accountants' Club.
					</p>
					<div style="background:; margin-top:40px;">
					
					<img src="./mail.jpg"><a itemprop="email" href="mailto:abc@gmail.com"> &nbsp abc@gmail.com</a><br><br>
					<img src="./mobile.jpg"> &nbsp 9180772789<br><br>
					<img src="./addr.jpg"> &nbsp 5900 S. Lake Forest Drive Suite 300, McKinney, Dallas, 
TX 75070
					
					</div>
					</div>
					</div>
</div>					
                                
                
 </div>
 
 </div>
</body>
</html>
