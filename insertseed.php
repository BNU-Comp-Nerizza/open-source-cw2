<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

echo template("templates/partials/header.php");
echo template("templates/partials/nav.php");

$pass1 = password_hash('helloworld', PASSWORD_DEFAULT);
$pass2 = password_hash('hello123', PASSWORD_DEFAULT);
$pass3 = password_hash('1234567', PASSWORD_DEFAULT);
$pass4 = password_hash('what123', PASSWORD_DEFAULT);
$pass5 = password_hash('hihello', PASSWORD_DEFAULT);

  
    $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, 
    house, town, county, country, postcode, image) VALUES 
    ('20000001', '$pass1', '1997-05-06', 'Chris', 'Pluto', '24 Grisnt', 'Bucks', 'Alysebury', 'UK', 'BH9 TJ8', LOAD_FILE('D:/xampp/htdocs/open-source-system-cw2/img/chris.jpg')),
    ('20000002', '$pass2', '1998-06-23', 'Ina', 'Law', '21 Town', 'Bucks', 'High Wycombe', 'UK', 'HP12 PO0', LOAD_FILE('D:/xampp/htdocs/open-source-system-cw2/img/ina.jpg')),
    ('20000003', '$pass3', '2002-12-14', 'Jude', 'Madden', '5 Rose', 'Bucks', 'Slough', 'UK', 'SB29 NB8' , LOAD_FILE('D:/xampp/htdocs/open-source-system-cw2/img/jude.jpg')),
    ('20000004', '$pass4', '2000-08-27', 'Lee', 'Hanson', '8 Patrick', 'Bucks', 'Alysebury', 'UK', 'BH2 T01', LOAD_FILE('D:/xampp/htdocs/open-source-system-cw2/img/lee.jpg')),
    ('20000005', '$pass5', '1998-03-14', 'Jane', 'Ivy', '11 Watson', 'Bucks', 'High Wycombe', 'UK', 'HP13 8EF', LOAD_FILE('D:/xampp/htdocs/open-source-system-cw2/img/jane.jpg'));";

    
  $result = mysqli_query($conn,$sql);
  echo "<div class='alert alert-warning' role='alert'>
  Auto-Generate 5 students. Record have been updated. <br><br>
  
  <a href='student.php'><button type='button' class='btn btn-primary'>Go back to Student Table</button></a></div>";



echo template("templates/partials/footer.php");      

?>
