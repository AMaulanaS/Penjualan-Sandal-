<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	$Id=$_GET['Id'];
	// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("penjualan_sendal", $con);
// Specify the query to execute
$sql = "select * from Item_Master where ItemId=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['ItemId'];
$Name=$row['ItemName'];
$Description=$row['Description'];
$Size=$row['Size'];
$Price=$row['Price'];
$Discount=$row['Discount'];
$Total=$row['Total'];
$Image=$row['Image'];
}
	$Qty=$_POST['txtQty'];
	$CID=$_SESSION['ID'];
	$ODate= date('y/m/d');
	$Net=$Total*$Qty;
	mysql_close ($con);
	
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("penjualan_sendal", $con);
	// Specify the query to Insert Record
	$sql = "insert into penjualan_sendal_Cart	(CustomerId,ItemName,Quantity,Price,Total,OrderDate) values(".$CID.",'".$Name."',".$Qty.",".$Total.",".$Net.",".$ODate.")";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Item Added To the cart");window.location=\'Products.php\';</script>';

?>
</body>
</html>
