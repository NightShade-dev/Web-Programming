<!DOCTYPE html>
<html >
<head>
<title>Untitled Document</title>
</head>

<body>
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","bloodbank");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $cn;
}

?>
</body>
</html>