<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html>
<html>
<head>

 <title>Update Password</title>
 <link rel="stylesheet" href="DCss.css">
</head>

<body>




		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
	    </div>

		<ul class="Topnav">
		 <a href="chngpwd.php">Change Password</a>	
		 <a href="updateprofile.php">Update Profile</a>            
		 <a href="blooddonated.php">Donate Blood</a>
           <a href="viewdonations.php">View Donations</a>
           <a href="viewrequest.php">View Requestes</a>
           <a href="logout.php">log Out</a>
           
            </ul>
	    <hr>
	    <br>
<div class="ChangePassword">
<form method="post">

     <table cellpadding="0" cellspacing="0" width="500px" class="tableborder" style="margin:auto" >

        <tr><td colspan="2" align="center"><img src="Images/chpass2.png" height="80px" /></td></tr>
   
                <tr><td><img src="Images/chpass.png" width="150px" height="150px" align="right"/></td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0">
   
        <tr><td class="lefttd"  style="vertical-align:middle"> Old Password </td><td><input type="password" name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> New Password:</td><td><input type="password" name="t3"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for new password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> Comfirm Password</td><td><input type="password"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for confirm password" name="t4"/></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Change" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></td></tr></table>	
        </form>
	</div>
	

<?php include('connection.php'); ?>
<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from donarregistration where email='" .$_SESSION["email"] . "' and  pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	if($r>0)
	{
	
	$s1="update donarregistration set pwd='" . $_POST["t3"]  ."' where email='" .$_SESSION["email"] ."'";
	mysqli_query($cn,$s1);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";

	}
	else
	{
		echo "<script>alert('Invalid old Password');</script>";
	}
		
		}	
	

?> 
</body>
</html>