<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   echo template("templates/partials/header.php");

   if (isset($_GET['return'])) {
      $msg = "";
      if ($_GET['return'] == "fail") {$msg = "Login Failed. Please try again.";}
      $data['message'] = "<p>$msg</p>";
   }

   if (isset($_SESSION['id'])) {
      $data['content'] = "<br><h2  class='text-center display-4 text-info'>WELCOME TO YOUR DASHBOARD</h2><br>
      <form action = 'insertseed.php'> 
      <div class='text-center'>
      <input type='submit' class='btn btn-primary' value='Generate 5 students' name='submit'/> 
      </div>
      </form>";
      echo template("templates/partials/nav.php");
      echo template("templates/default.php", $data);
   } else {
      echo template("templates/login.php", $data);
   }

   echo template("templates/partials/footer.php");

   // another test edit

?>
