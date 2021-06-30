<?php
$con = mysqli_connect("localhost","root","","sinarto");
	
if (mysqli_Connect_errno())
{
  echo "Failed to connect to MYSQL". mysqli_Connect_errno();
  exit();
}

?>