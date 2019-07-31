<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
 <div id="right-col">
    <h2>Login</h2>
    <div class="scroll">
      <form name="form1" method="post" action="login.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="26">User Name:</td>
          </tr>
          <tr>
          <td height="30"><span id="sprytextfield1">
            <label>
            <input type="text" name="txtUserName" id="txtUserName" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
          <tr>
            <td height="26">Password:</td>
          </tr>
          <tr>
            <td height="31"><span id="sprytextfield2">
          <label>
              <input type="password" name="txtPassword" id="txtPassword">
              </label>
            <span class="textfieldRequiredMsg">*</span></span></td>
          </tr>
          <tr>
            <td height="29">User Type:</td>
          </tr>
          <tr>
            <td height="52"><p>
              <label>
                <input type="radio" name="rdType" value="Admin" id="rdType_0">
                Admin</label>
              <br>
              <label>
                <input type="radio" name="rdType" value="Customer" id="rdType_1">
                Customer</label>
              <br>
            </p></td>
          </tr>
          <tr>
            <td><label>
              <div align="center">
                <input type="submit" name="button" id="button" value="Login">
                </div>
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form>
      <h3>&nbsp;</h3>
  </div>
    <h2>&nbsp;</h2>
   <ul class="side">
    
    </ul>
   
</div>
 <script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
