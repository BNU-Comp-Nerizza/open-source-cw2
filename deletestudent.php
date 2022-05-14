<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

    echo template("templates/partials/header.php");
    echo template("templates/partials/nav.php");

   // check logged in
   if(isset($_POST['seldelete']))
   {
       if(isset($_POST['selstudent']))
       {
           $checkbox =$_POST['selstudent'];
           foreach ($checkbox as $deleteid)
           {
               $sid = $conn->real_escape_string($deleteid);
               $sql = "DELETE FROM student WHERE studentid =". $sid;
               $result = mysqli_query($conn, $sql);
           }
       }

       echo "<div class='alert alert-warning' role='alert'>
       Record have been Deleted. Record have been updated. <br><br>
       <a href='student.php'><button type='button' class='btn btn-primary'>Go back to Student Table</button></a></div>";
   }
   else
   {
       echo "<div class='alert alert-warning' role='alert'> 
       No record have been Deleted. Try Again. <br><br>
       <a href='student.php'><button type='button' class='btn btn-primary'>Go back to Student Table</button></a></div>";
   }

   echo template("templates/partials/footer.php");

?>
