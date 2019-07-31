<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Penjualan Sandal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style11 {color: #192666}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  <div id="content">
    <h2><span style="color:#003300"> Welcome Administrator </span></h2>
    <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="33" bgcolor="#003300"><span class="style10 style11 style12">Edit Record</span></td>
      </tr>
      <tr>
        <td><?php
$Id=$_GET['CatId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("penjualan_sendal", $con);
// Specify the query to execute
$sql = "select * from Category_Master where CategoryId=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$Name=$row['CategoryName'];
$Description=$row['Description'];
}
?>
            <form method="post" action="UpdateCategory.php">
              <table width="100%" border="0">
                <tr>
                  <td height="32"><span class="style8">Category Id:</span></td>
                  <td><span id="sprytextfield1">
                    <label>
                    <input name="txtId" type="text" id="txtId" value="<?php echo $Id;?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td height="36"><span class="style8">Category Name:</span></td>
                  <td><span id="sprytextfield2">
                    <label>
                    <input name="txtName" type="text" id="txtName" value="<?php echo $Name;?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td height="36"><span class="style8">Description:</span></td>
                  <td><span id="sprytextfield3">
                    <label>
                    <textarea name="txtDesc" id="txtDesc" cols="45" rows="3" ><?php echo $Description;?></textarea>
                  
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Update Record" /></td>
                </tr>
</table>
            </form>
            <?php
// Close the connection
mysql_close($con);
?>
            </td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table>
    <p align="justify">&nbsp;</p>
    <h2>&nbsp;</h2>
    <table width="100%" border="0" cellspacing="3" cellpadding="3">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><p><img src="img/Jeans.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
        <td><p><img src="img/asd.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
        <td><p><img src="img/images.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
      </tr>
      <tr>
        <td height="26" bgcolor="#BCE0A8"><div align="center" class="style9">Jeans</div></td>
        <td bgcolor="#BCE0A8"><div align="center" class="style9">Bleasures</div></td>
        <td bgcolor="#BCE0A8"><div align="center" class="style9">T-Shirts</div></td>
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
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
