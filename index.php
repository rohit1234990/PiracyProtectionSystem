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
<title>APPS System</title>

<link rel="stylesheet" type="text/css" href="common.css"/>
<link rel="stylesheet" type="text/css" href="index.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">


<?php

    // include the css required for the drop down menu
    include './snippet/extracss.php';
    //echo getcwd() . "\n";
?>

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
                        <li><a href="register/register.php">Register</a></li>    
                        <li><a href="activate/activate.php">Activate</a></li>
                        <li><a href="about/about.php">About Us</a></li>
                    </ul>

                </div>
            </div><!-- Header-content -->
        <div style="float:right; margin-bottom:100px; margin-right:50px" id="logoutMenu">
             <span><b><?php echo $_SESSION['message']?></b><span>
             
             <!-- for dropdown-->
             <div class="dropdown">
              <!-- <button class="dropbtn">Dropdown</button> -->
              <img class="dropbtn" style="height:30px; width:30px" src="./images/icon.png" />
                <!-- here im inseting some php to manupulate -->

                  <div class="dropdown-content">
                    <?php
                        if($_SESSION['User_Id'])    // user logged in. Show logout
                        {
                            echo "<a href='logout.php'>Logout</a>";
                        }
                        else
                        {
                            echo "<a href='register/login.php'>Login</a>";
                        }
                    ?>                    
                    
                  </div>

            </div>
             <!---dropdown -->
        </div>

        <div id="contnt" >
            <h2>Browse Available Softwares  : </h2>
             
             <table cellspacing="50">
                <tr>
                        <td>
                            <div>    
                                <h4>Download IBISOFT</h4> <br>
                                <img class="pkgImg" src="./images/1.jpg" />
                                <form method="get" action="./setups/setup1.exe">
                                    <input type="image" class="btndown"  id="saveform" src="./images/downloadbtn.png" alt="Submit Form" />
                                </form>
                            </div> 
                        </td>
                        <td style="spacing">
                            <div>    
                                <h4>Download AMW</h4><br> 
                                <img class="pkgImg" src="./images/2.jpg" />
                                <form method="get" action="./setups/setup2.exe">
                                    <input type="image" class="btndown"  id="saveform" src="./images/downloadbtn.png" alt="Submit Form" />
                                </form>
                            </div> 
                        </td>
                        <td>
                            <div>    
                                <h4>Download ASTRAEASOFT</h4> <br>
                                <img class="pkgImg" src="./images/3.jpg" />
                                <form method="get" action="./setups/setup3.exe">
                                    <input type="image" class="btndown"  id="saveform" src="./images/downloadbtn.png" alt="Submit Form" />
                                </form>
                            </div> 
                        </td>

                <tr>
                        
                        <td style="spacing">
                            <div>    
                                <h4>Download CLARO</h4><br> 
                                <img class="pkgImg" src="./images/4.jpg" />
                                <form method="get" action="./setups/setup4.exe">
                                    <input type="image" class="btndown"  id="saveform" src="./images/downloadbtn.png" alt="Submit Form" />
                                </form>
                            </div> 
                        </td>

                        <td>
                            <div>    
                                <h4> Download NVIDIA</h4> <br>
                                <img class="pkgImg" src="./images/5.jpg" />
                                <form method="get" action="./setups/setup5.exe">
                                    <input type="image" class="btndown"  id="saveform" src="./images/downloadbtn.png" alt="Submit Form" />
                                </form>
                            </div> 
                        </td>
                        <td style="spacing">
                            <div>    
                                <h4>Download APPTREE</h4><br> 
                                <img class="pkgImg" src="./images/6.jpg" />
                                <form method="get" action="./setups/setup6.exe">
                                    <input type="image" class="btndown"  id="saveform" src="./images/downloadbtn.png" alt="Submit Form" />
                                </form>
                            </div> 
                        </td>

                </tr>
                
            </table>        


        </div> <!--contnt-->


    
       </div>                              
                
 </div>
</body>
</html>
