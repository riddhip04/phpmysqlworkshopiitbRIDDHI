<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "result";
$conn = mysqli_connect($servername, $username, $password,$dbname);
$query= "UPDATE class1
         SET SUBJECT5=99
         WHERE (NAME='rohan')" ;


$run=mysqli_query($conn,$query) or die(sqli_error($conn));
echo " value updated";


?>
