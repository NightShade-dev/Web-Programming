<!DOCTYPE html5>
<head>
<title>Blood bank Management System</title>
<link rel="stylesheet" href="Css.css">
</head>

<body>
<?php include('admin/connection.php'); ?>

		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>

		<?php require('header.php');?>
		<hr>
	    <br>
	    <br>
<div class="RegistrationForm">
     <form method="post">

<br><br>&nbsp;

Donor Name: <input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" />
<br><br>&nbsp;
Gender: <input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female
<br><br>&nbsp;
Age: <input type="number" name="t2" required="required" min="20" max="80" title="please enter only  numbers between 20 to 80 for age" />

<br><br>&nbsp;
Mobile No: <input type="text" name="t3" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." />
<br><br>&nbsp;
 Blood Group: <select name="t4" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"]) && $data[0]== $_POST["s2"])
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
<br><br>&nbsp;
E-Mail: <input type="email" name="t5" required="required"/>
<br><br>&nbsp;
Password: <input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" />
<br><br>&nbsp;
Confirm Password: <input type="password" name="t7" required="required" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" />
<br><br>&nbsp;
<input type="submit" value="Register" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">

</form>
        </div>
          

<?php
if(isset($_POST["sbmt"])) {

		$cn=makeconnection();
			$s="insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','"  ."')";
				mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{
	    echo "sorry there was an error uploading your file.";
	}
		}
	
	

?> 
</body>
</html>