<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="ACss.css">
</head>

<body>


<?php include('connection.php'); ?>

 
		<div class="logo">
			<h1><a href="Home.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	
		 <div class="nav">
		<a href="../index.php" target="_blank">Exit</a>
			</div>
  
<div class="AdminLogin">
     <form method="post">

   <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><img src="images/adminlog.jpg"  width="380px" height="90px"></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                <tr><td align="right"><img src="Images/login1.png" width="200px" height="150px" /></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0" height="200px">             


<tr><td class="lefttd">User Name</td><td><input type="text" name="t1" /></td></tr>
<tr><td class="lefttd">Password</td><td><input type="password"name="t2" /></td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background-color: #008CBA; width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>

                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>
</td></tr></table>


		
</form>
</div>
	
</div>


<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from users where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	
	
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["username"]=$_POST["t1"];
		$_SESSION["pwd"]=$_POST["t2"];
		

header("location:index.php");
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
	

?> 
</body>
</html>