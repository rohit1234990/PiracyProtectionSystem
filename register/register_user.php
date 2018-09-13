<?php
 {   
    
    function conntectDB($host, $user, $password,$database)
    {
    	$con = mysqli_connect($host, $user, $password,$database);

		if (!$con)
		{
		 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		 	exit;
		}
			
		return $con;
    }

	function insert($query)
	{
		// first connect to database
		$con = conntectDB('localhost','root','admin123*','piracySystem');

		// fire query
		$result = mysqli_query($con,$query);
		
		// close connection
		mysqli_close($con);
		
		return $result;		
	}

	function select($query)
	{
		// first connect to database
		$con = conntectDB('localhost','root','admin123*','piracySystem');

		// fire query
		$result = mysqli_query($con,$query);
		
		// close connection
		mysqli_close($con);
		
		return $result;		
	}

	function test()
	{
		return 'Hello world this is good to go';
	}
    /*
	$query = "select * from Users"; 
	$query = "insert into Users(UserName, Paswd, Email, Mobile) values "
             . "('Mohit', 'kumar', 'rohit@123', '3434343')";
    */       

	function updatePayments($data, $UserId, $ProductId, $mac){

		$con = conntectDB('localhost','root','admin123*','piracySystem');
		// fire query

		//$result = mysqli_query($con,$query);
		$result  = mysqli_query($con, "INSERT INTO `User_Products` (`User_Id`, `Product_Id`, `MAC`, `Payment`) VALUES (
				  $UserId, $ProductId, '$mac', 1)");
		// close connection
		mysqli_close($con);
		
		return $result;
	}
}

?>