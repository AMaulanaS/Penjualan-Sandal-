<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];
$UserType=$_POST['rdType'];
if($UserType=="Admin")
{
$con = mysql_connect("localhost","root");
mysql_select_db("penjualan_sendal", $con);
$sql = "select * from Admin_Master where UserName='".$UserName."' and Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
header("location:Admin/index.php");
} 
mysql_close($con);
}
else if($UserType=="Customer")
{
$con = mysql_connect("localhost","root");
mysql_select_db("penjualan_sendal", $con);
$sql = "select * from Customer_Registration where UserName='".$UserName."' and Password='".$Password."' ";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['CustomerId'];
$_SESSION['Name']=$row['CustomerName'];
header("location:Customer/index.php");
} 
mysql_close($con);
}

?>

</body>
</html>
