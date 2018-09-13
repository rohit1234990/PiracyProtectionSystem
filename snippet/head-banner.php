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
                        <li><a href="payment/payment.html">About Us</a></li>
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

        

    
       </div>                              