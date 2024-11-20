<?php
  $dbserver = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "knackles";
  $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

  // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>