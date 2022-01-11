<!DOCTYPE html5>
<head>
<title>Blood bank Management System</title>
<link rel="stylesheet" href="Css.css">
</head>

<body>
<?php include('Admin/connection.php'); ?>

 
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	
		<?php require('header.php');?>
<hr>
	    <br>
	    <br>
  
   
<div class="search">

     <form method="post">

    <br><br>&nbsp;     
      <img src="Images/search.png" height="80px" />
   <br><br>&nbsp; 
        <tr><td class="lefttd" style="padding-left:40px">Select Blood Group </td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
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
$s="select * from bloodgroup where bg_id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
	
		
		
	mysqli_close($cn);
}
?>


<input type="submit" value="Search" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
         

		
</form>
</div>

       
        
<?php 
if(isset($_POST["sbmt"]))
{
	echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}

?>

</body>
</html>