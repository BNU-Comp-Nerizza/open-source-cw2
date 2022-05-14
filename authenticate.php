<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   // If the student has already been authenticated the $_SESSION['id'] variable
   // will been assigned their student id.

   $safeid = $conn->real_escape_string($_POST['txtid']);
   $safepwd = $conn->real_escape_string($_POST['txtpwd']);

   // redirect to index if $_POST values not set or $_SESSION['id'] is already set
   if (!isset($safeid) || !isset($safepwd) || isset($_SESSION['id'])) {
      header("Location: index.php");
	} else {
      if (validatelogin($safeid,$safepwd) == true) {
         // valid
         header("Location: index.php?return=success");
      } else {
         // invalid
         unset($_SESSION['id']);
         header("Location: index.php?return=fail");
      }
	}
?>
