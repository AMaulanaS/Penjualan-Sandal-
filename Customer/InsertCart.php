<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> penjualan_sendal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
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
    <?php
$Id=$_GET['ItemId'];
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
?>
    <form id="form1" name="form1" method="post" action="Insert.php?Id=<?php echo $Id;?>">
      <table width="100%" height="407" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#BDE0A8"><strong>Item Code:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Id;?></td>
        </tr>
        <tr>
          <td bgcolor="#F1F9EC"><strong>Item Name:</strong></td>
          <td bgcolor="#F1F9EC"><?php echo $Name;?></td>
        </tr>
        <tr>
          <td bgcolor="#BDE0A8"><strong>Description:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Description;?></td>
        </tr>
        <tr>
          <td bgcolor="#F1F9EC">&nbsp;</td>
          <td bgcolor="#F1F9EC"><img src="../img/<?php echo $Image;?>" width="125" height="125" border="4" /></td>
        </tr>
        <tr>
          <td bgcolor="#BDE0A8"><strong>Size:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Size;?></td>
        </tr>
        <tr>
          <td bgcolor="#F1F9EC"><strong>Quantity:</strong></td>
          <td bgcolor="#F1F9EC"><span id="sprytextfield1">
            <label>
            <input type="text" name="txtQty" id="txtQty" value="1" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td bgcolor="#BDE0A8"><strong>Price:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Price;?></td>
        </tr>
        <tr>
          <td bgcolor="#F1F9EC"><strong>Discount:</strong></td>
          <td bgcolor="#F1F9EC"><?php echo $Discount;?></td>
        </tr>
        <tr>
          <td bgcolor="#BDE0A8"><strong>Total:</strong></td>
          <td bgcolor="#BDE0A8"><?php echo $Total;?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" value="Add To Cart" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
    <table width="100%" border="0" cellspacing="3" cellpadding="3">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><p><img src="img/sepatusandal.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
        <td><p><img src="img/sepatugunung.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
        <td><p><img src="img/teva.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
      </tr>
      <tr>
        <td height="26" bgcolor="#BCE0A8"><div align="center" class="style9">sepatusandal</div></td>
        <td bgcolor="#BCE0A8"><div align="center" class="style9">sepatugunung</div></td>
        <td bgcolor="#BCE0A8"><div align="center" class="style9">teva</div></td>
      </tr>
    </table>
    <p align="justify">&nbsp;</p>
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
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
