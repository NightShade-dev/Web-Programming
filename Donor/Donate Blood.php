<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>

<title>Donate Blood</title>
<link rel="stylesheet" href="DCss.css">
</head>

<body>


<?php include('connection.php'); ?>
 
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
<div class="BloodDonated">
     <form method="post">
<table cellpadding="0" cellspacing="0" width="500px" class="tableborder" style="margin:auto" >

        <tr><td colspan="2" align="center"><img src="Images/bdonated.png" height="80px" /></td></tr>
             <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
  
   <tr><td class="lefttd">Select camp </td><td><select name="s3" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from camp";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s3"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from camp where camp_id='" .$_POST["s3"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$camp_title=$data[1];
	mysqli_close($cn);
}
?>
</td></tr>

         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle"> Date</td><td>
       <input type="date" required = "required" name="date" min="1940-01-01" style=" width:150px"/>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle">No. Of liters</td><td><input type="number" name="t3"  required="required" min="1" max ="5" title="please enter only numbers between 1 to 10 for no. of units" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle"> Other Detail</td><td><textarea name="t4"></textarea></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Save" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></table></td></tr>	</table></form>
	</div>
     <?php
if(isset($_POST["sbmt"])) 
{
	$d=$_POST["date"]."-";
	//echo $d;
$cn=makeconnection();
			$s="insert into donation(camp_id,ddate,units,detail,email) values('" . $_POST["s3"] . "','". $d ."' ,'" . $_POST["t3"] . "','" . $_POST["t4"] . "','". $_SESSION["email"] ."')";
			
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
		

?> 	 

 

</body>
</html>