<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Penjualan Sandal</title>
<title>Penjualan Sandal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style3 {font-weight: bold}
-->
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style10 {color: #FFFFFF}
.style12 {font-weight: bold}
-->
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  <div id="content">
    <h2><span style="color:#003300"> User Management</span></h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="27" bgcolor="#003300"><span class="style10"><strong>Create New User</strong></span></td>
      </tr>
      <tr>
        <td height="26"><form id="form1" name="form1" method="post" action="InsertUser.php">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" >User Name:</td>
                <td><span id="sprytextfield1">
                  <label>
                  <input type="text" name="txtUserName" id="txtUserName" />
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td height="34">Password:</td>
                <td><span id="sprytextfield2">
                  <label>
                  <input type="password" name="txtPassword" id="txtPassword" />
                  </label>
                  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></td>
              </tr>
</table>
        </form></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#003300"><span class="style10"><strong>User List</strong></span></td>
      </tr>
      <tr>
        <td><table width="100%" border="1" bordercolor="#003300" >
            <tr>
              <th height="32" bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>UserName</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style9 style5"><strong>Edit</strong></div></th>
              <th bgcolor="#BDE0A8" class="style3"><div align="left" class="style12">Delete</div></th>
            </tr>
            <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("penjualan_sendal", $con);
// Specify the query to execute
$sql = "select * from admin_master";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['AdminId'];
$UserName=$row['UserName'];

?>
            <tr>
              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $UserName;?></strong></div></td>
              <td class="style3"><div align="left" class="style9 style5"><strong><a href="EditUser.php?AdminId=<?php echo $Id;?>">Edit</a></strong></div></td>
              <td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteUser.php?AdminId=<?php echo $Id;?>">Delete</a></strong></div></td>
            </tr>
            <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
            <tr>
              <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
            </tr>
            <?php
// Close the connection
mysql_close($con);
?>
        </table></td>
      </tr>
     
    </table>
    <p align="justify">&nbsp;</p>
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
