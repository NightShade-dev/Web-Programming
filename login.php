<?php session_start();  ?>
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
   
 <div class="login">
  <form method="post">
<img src="Images/login2.png" style="width:300px;height:100px;">

  <br><br>&nbsp;
  
E-Mail: <input type="email" name="t1" required="required" />

<br><br>&nbsp;

Password: <input type="password"name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  />

<br><br>&nbsp;

<input type="submit" value="Log In" name="sbmt" style="border:0px; background-color: #008CBA;; width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
&nbsp; <span style="font-size:14px">
<br>
<br>
New User!  </span><a href="registration.php" style="color:#C30">Click here</a> To Register.     

<span style="font-size:14px">
<br>
<br>
Admin </span> <a href = "Admin/adminlogin.php" style="color:#C30">Click here</a>
                        
		
</form>
</div>

      
<?php


if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from donarregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["email"]=$_POST["t1"];
      
//header("location:donor/index.php");
echo "<script>location.replace('donor/index.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?> 
</body>
</html>