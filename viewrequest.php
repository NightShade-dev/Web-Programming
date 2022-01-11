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

	
<div class="ViewRequest">
     <form method="post" >
 <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"><img src="Images/brequest.png" height="90px" /></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:bisque" align="center" class="bold">            
             <td class="bold" style="color:red"  >Blood Group</td><td align="center">Name</td><td align="center">Gender</td><td align="center">Contact No</td><td align="center">Mobile No</td><td align="center">Email</td>
        </tr>
                   



<?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from requestes";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:50px'>$data[0]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[3]</td><td  style=' padding-left:50px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td></tr>";
			}
			mysqli_close($cn);
			?>



          
</body>
</html>