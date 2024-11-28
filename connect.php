<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='tailor';
  
  $con=mysqli_connect($servername,$username,$password);
  mysqli_select_db($con,$dbname);
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
  }



?>