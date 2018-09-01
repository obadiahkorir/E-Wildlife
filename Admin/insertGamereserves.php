<?php
   include('../config.php');

$sql="INSERT INTO reserves(reserve_name,telephone,county,picture,animals,fee,email) 
VALUES ('$_POST[name]', '$_POST[tel]', '$_POST[county]', '$_POST[picture]', '$_POST[total]', '$_POST[fee]', '$_POST[email]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: viewGamereserves.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New GameReserve Registered Successfully. Thanks";
 ?>