<!DOCTYPE html5>
<head>
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
    <div>
<div style="height:500px; width:100%; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:3px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">


  <div   class="col span_2_of_3"> <div class="contact-form" style="padding-left:100px;">
				  	<img src="Images/contact.png" align="center" />
  
    <table  cellspacing="0" cellpadding="0"  width="500px" height="300px">               

<tr><td class="lefttd"  style="vertical-align:middle"> Name:</td><td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td></tr>



<tr><td class="lefttd"  style="vertical-align:middle">E-Mail</td><td><input type="email" name="t2" required="required" /></td></tr>
<tr><td class="lefttd"  style="vertical-align:middle">Mobile No</td><td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>

<tr><td class="lefttd"  style="vertical-align:middle">Subject</td><td><textarea name="t4"></textarea></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="Send Us" name="sbmt"></td></tr></table>

</div>
</div>
		
		  </div>
</form>
        </div>
         </div> 
         </div>
   <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
	</div>
		<div class="copy">
			<p class="title">All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
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