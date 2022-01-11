<!DOCTYPE html5>
<head>
<title>Blood bank Management System</title>
<link rel="stylesheet" href="Css.css">
</head>

<body>
<?php include('admin/connection.php'); ?>

<div class = logo>
   <h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
</div>

<?php require('header.php');?>

  <br>
	    <br>

<div class="ContactUs">
    <form method="post">

<br><br>&nbsp;Name:<input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /> <br><br>

<br><br>&nbsp;E-Mail:<input type="email" name="t2" required="required" /><br><br>

<br><br>&nbsp;Mobile No:<input type="text" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /><br><br>

<br><br>&nbsp;Subject:<textarea name="t4"></textarea><br><br>

<br>&nbsp;<input type="submit" value="Send Us" name="sbmt">

</form>


</div>



<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>