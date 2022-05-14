<?php

  header("Content-type: image/jpeg");
  include("_includes/config.inc");
  include("_includes/dbconnect.inc");
  include("_includes/functions.inc");

  $sid = $conn->real_escape_string($_GET['studentid']);

  $sql = "SELECT image FROM student WHERE studentid='$sid' ;";
	
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>
