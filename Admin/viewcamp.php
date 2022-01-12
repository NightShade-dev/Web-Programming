<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html>
<head>
<title>View Camp</title>
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


       <form method="post">
<table border="0" align="center" width="400px" height="30px" class="ViewCamps">
<tr><td colspan="2" align="center" class="toptd">View camps </td></tr>
<tr><td align="center" style="padding-top:10px">
<table border="1" align="center" width="80%" height="200px" >
<tr><td>camp Id </td><td align="center">Camp Title</td><td align="center">Organised By</td></tr>
<tr><td>
<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from camp";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td style='padding-left:10px'>$data[0]</td><td  style='padding-left:3s0px'>$data[1]</td><td  style='padding-left:70px'>$data[2]</td></tr>";
		}
		
		
		
	
	mysqli_close($cn);

?>
</td></tr>
</table>
</table>


</form>
       
   
</body>
</html>