<!DOCTYPE html>
<html>
<body>

<h1>Hello, Netea!</h1></style>

<?php 

	$conn = new mysqlnd('localhost','root','UdxHGXatiHLiZmu1C71','classicmodels');
	if($conn->connect_error){	
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		echo "nice";
	}

phpinfo() ?>


</body>
</html>

