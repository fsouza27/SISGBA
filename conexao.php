<?php

$hostname= "localhost";
$username= "root";
$password= "";
$database= "sisgba_db";

$con=mysqli_connect($hostname,$username,$password,$database);
// Check connection
    if (mysqli_connect_errno())
      {
      echo "Falha na conexão!: " . mysqli_connect_error();
      }
    mysqli_select_db($con,$database);

?>
