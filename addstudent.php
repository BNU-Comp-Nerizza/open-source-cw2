<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // Build SQL statment that selects a student's modules
      $sql = "SELECT * from student;";

      $result = mysqli_query($conn,$sql);

      // prepare page content
      $data['content'] .= "<br><h2  class='text-center display-4 text-info'>STUDENT FORM</h2><br>";
      $data['content'] .= "<html>
      <body>
      <form enctype='multipart/form-data' action='savestudent.php' method='post'>
       Student ID :
      <input type='text' name='studentid' size='15' class='form-control' required/>
      </br></br>
      Password :
      <input type='password' name='studentpw' minlength='8' class='form-control' required/>
      </br></br>
      Date of Birth:
      <input type='date' name='studentdob' size='15' class='form-control' />
      </br></br>
      First Name:
      <input type='text' name='studentfname' size='15' class='form-control' />
      </br></br>
      Last name :
      <input type='text' name='studentlname' size='15' class='form-control' />
      </br></br>
      House :
      <input type='text' name='studenthouse' size='15' class='form-control' />
      </br></br>
      Town :
      <input type='text' name='studenttown' size='15' class='form-control' />
      </br></br>
      County :
      <input type='text' name='studentcounty' size='15' class='form-control' />
      </br></br>
      Country :
      <input type='text' name='studentcountry' size='15' class='form-control' />
      </br></br>
      Postcode :
      <input type='text' name='studentpostcode' size='15' class='form-control' />
      </br></br>
      Student image :
      <input  type='file' name='studentimage' accept='image/jpeg image/png image/jpg' class='form-control' />
      </br></br>
      </br></br>
      <input type='submit' class='btn btn-primary' value='Save' />
      </form>
      </body>
      </html>"  ;
      
      // render the template
      echo template("templates/default.php", $data);


   echo template("templates/partials/footer.php");

?>
