<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
<link rel="stylesheet" href="ACss.css">
</head>
<body>


<?php include('topbar.php'); ?>
   <div >
       <div style="width:200px; float:left;">
       <?php include('left.php'); ?>
       </div>
       <div style="width:800px;float:left">
        
<br /><br />

<?php include('connection.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into users values('" . $_POST["t1"] . "','" .$_POST["t2"] . "','". $_POST["t3"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}

?>
       <div class="AddUserForm">
       <form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd">Add User</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">User Name</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{3,15}" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password" name="t2"  required="required" pattern="[a-zA-Z0-9]{3,10}" title="please enter only character and numbers between 3 to 10 for password" /></td></tr>
<tr><td class="lefttd">Confirm Password</td><td><input type="password" name="t3" required="required" pattern="[a-zA-Z0-9]{3,10}" title="please enter only character and numbers between 3 to 10 for password" /></td></tr>

</select></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
</table>
</form>
      </div>
</body>
</html>