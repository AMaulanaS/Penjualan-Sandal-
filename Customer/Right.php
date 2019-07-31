
<div id="right-col">
    

    <div class="scroll">
       <ul class="side">
           <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("penjualan_sendal", $con);
// Specify the query to execute
$sql = "select * from Category_Master";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];


?>
     <li><a href="Products.php?CategoryId=<?php echo $Id;?>"><?php echo $CategoryName;?></a></li>
    
    <?php
	}
// Close the connection
mysql_close($con);
?>
    </ul>
    
  </div>
   
    <ul class="side">
      <table width="100%" height="122" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center"><a href="checkout.php">Procced To Checkout</a></div></td>
        </tr>
        <tr>
          <td><div align="center"><img src="img/checkout.png" width="32" height="32" /></div></td>
        </tr>
        <tr>
          <td><div align="center"><a href="History.php">Order History</a></div></td>
        </tr>
        <tr>
          <td><div align="center"><img src="img/order.png" width="32" height="32" /></div></td>
        </tr>
      </table>
  </ul>
   
</div>
 