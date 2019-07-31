<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Valid=$_POST['txtDate'];
	
	$txtName=$_POST['txtName'];
	
	$txtDetail=$_POST['txtDetail'];
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("penjualan_sendal", $con);
	// Specify the query to Insert Record
	$sql = "insert into Offer_master(Offer,Detail,Valid) values('".$txtName."','".$txtDetail."','".$Valid."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Offer Created Succesfully");window.location=\'Offers.php\';</script>';

?>
</body>
</html>
