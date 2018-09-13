<?php

	session_start();
	error_reporting(E_ALL); 
	ini_set('display_errors', '1');
	include('../register/register_user.php');

	$userId     =  (int) $_SESSION['User_Id'];
	$productId  =  (int) $_SESSION['Product_Id'];
	$mac        =  $_SESSION['MAC'];
	$data 		=  0;
	//echo "Helo world";

	$orderid = updatePayments($data, $userId, $productId, $mac);
	header('Refresh: 2; url=../activate/productCode.php');
	if($orderid)
	{
		// redirect to show the generated code..
		
		//header("Refresh: 5; url=index.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Payment Successful</title>
</head>
<body>
	<h1>Thank You</h1>
	<p>Your payment was successful. Thank you.</p>
</body>
</html>
