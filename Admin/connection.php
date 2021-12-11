<?php
function makeconnection()
{
	$cn=$mysqli = new mysqli("localhost","root","","bloodbank");

   // Check connection
  if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
  return $cn;
}

?>
