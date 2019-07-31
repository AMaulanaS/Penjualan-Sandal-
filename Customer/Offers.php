<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ONLINE CLOTH penjualan_sendal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  <div id="content">
    <h2><span style="color:#003300"> Welcome  <?php echo $_SESSION['Name'];?></span></h2>
     <ul>
      
      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("penjualan_sendal", $con);
// Specify the query to execute
$sql = "select * from Offer_Master";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['OfferId'];
$Offer=$row['Offer'];
$Detail=$row['Detail'];
$Valid=$row['Valid'];
?>
     
        <li><?php echo $Offer;?> : <?php echo $Detail;?>: <?php echo $Valid;?></li>
        
     
      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
      
      <?php
// Close the connection
mysql_close($con);
?>
    </ul>
     <table width="100%" border="0" cellspacing="3" cellpadding="3">
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td><p><img src="img/shower.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
         <td><p><img src="img/teva.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
         <td><p><img src="img/yukon.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
       </tr>
       <tr>
         <td height="26" bgcolor="#BCE0A8"><div align="center" class="style9">shower</div></td>
         <td bgcolor="#BCE0A8"><div align="center" class="style9">teva</div></td>
         <td bgcolor="#BCE0A8"><div align="center" class="style9">yukon</div></td>
       </tr>
     </table>
    <p>&nbsp;</p>
  </div>
 <?php
 include "Right.php";
 ?>
  <div style="clear:both;"></div>
   <?php
 include "Footer.php";
 ?>
</div>
</body>
</html>
