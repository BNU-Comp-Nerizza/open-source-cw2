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
      $data['content'] .= "<br><h2  class='text-center display-4 text-info'>STUDENT LIST</h2><br>";
      $data['content'] .= "<form action = 'deletestudent.php' method ='post'>";
      $data['content'] .= "<table class='table table-striped '>
      <tbody><tr><th scope='row'>Student ID</th>
      <td>Date of Birth</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>House</td>
      <td>Town</td>
      <td>County</td>
      <td>Country</td>
      <td>Postcode</td>
      <td>Student image</td>
      <td>Selection box</td></tr>";
     
      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<tr>
         <td scope='row'>$row[studentid] </td>
         <td>$row[dob] </td>
         <td>$row[firstname]</td>
         <td>$row[lastname] </td>
         <td>$row[house] </td>
         <td>$row[town] </td>
         <td>$row[county] </td>
         <td>$row[country] </td>
         <td>$row[postcode] </td>";
         $data['content'] .= "<td><img src='savepic.php?studentid=$row[studentid]' height='100' width='100'</td>";
         $data['content'] .= "<td><input type='checkbox' name='selstudent[]' id='selstudent[]' value='".$row['studentid']."'> </td></tr>";
         
      }
      $data['content'] .= "</table>";
      $data['content'] .= "<input name='seldelete' id='seldelete' class='btn btn-primary' 
      type=submit onClick=\"javascript: return confirm('Please confirm deletion');\"  value='Delete'  /></form>";

      // render the template
      echo template("templates/default.php", $data);


   echo template("templates/partials/footer.php");

?>
