<?php
   include('../config.php');

$sql="INSERT INTO gamepark (County,Address,PostalCode,Email,Gamepark,Telephone,animals,Price,Picture) 
VALUES ('$_POST[county]', '$_POST[address]', '$_POST[pcode]', '$_POST[email]', '$_POST[gamepark]', '$_POST[tel]', '$_POST[animals]', '$_POST[fee]', '$_POST[picture]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: viewGameparks.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Gamepark Registered Successfully. Thanks";
 ?>