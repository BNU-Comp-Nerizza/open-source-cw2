<?php
  
  include("_includes/config.inc");
  include("_includes/dbconnect.inc");
  include("_includes/functions.inc");
  echo template("templates/partials/header.php");
  echo template("templates/partials/nav.php");

// Obtain the file sent to the server within the response.
  

  $sid = $conn->real_escape_string($_POST['studentid']);
  $dob = $conn->real_escape_string($_POST['studentdob']);
  $firstname = $conn->real_escape_string($_POST['studentfname']);
  $lastname = $conn->real_escape_string($_POST['studentlname']);
  $house = $conn->real_escape_string($_POST['studenthouse']);
  $town = $conn->real_escape_string($_POST['studenttown']); 
  $county = $conn->real_escape_string($_POST['studentcounty']);
  $country = $conn->real_escape_string($_POST['studentcountry']);
  $postcode = $conn->real_escape_string($_POST['studentpostcode']);
  $pass = $conn->real_escape_string($_POST['studentpw']);
  $image = $_FILES['studentimage']['tmp_name']; 
  // Get the file binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));

  if ($pass) {
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    }

  $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode, image) 
  VALUES 
  ('$sid', '$hash', '$dob', '$firstname', '$lastname', '$house', '$town', '$county', '$country', '$postcode', '$imagedata');";

  echo "<div class='alert alert-warning' role='alert'>
        New student have been added. Record have been updated. <br><br>
        <a href='student.php'><button type='button' class='btn btn-primary'>Go back to Student Table</button></a></div>";

  $result = mysqli_query($conn, $sql);

?>
