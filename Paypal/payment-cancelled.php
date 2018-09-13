<?php

	session_start();
	error_reporting(E_ALL); 
	ini_set('display_errors', '1');
	
	header('Refresh: 3; url=../index.php');
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Cancelled</title>
</head>
<body>
	<h1>Payment Cancelled</h1>
	<p>Your payment was cancelled.</p>
</body>
</html>
