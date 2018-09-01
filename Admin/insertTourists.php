<?php
   include('../config.php');

$sql="INSERT INTO customer(FullName,Username,Phone,Email,Password,Re_Password,Country,City,Adress,PostalCode,Picture) 
VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[tel]', '$_POST[email]', '$_POST[password]', '$_POST[password2]', '$_POST[country]', '$_POST[city]', '$_POST[address]', '$_POST[pcode]', '$_POST[picture]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: viewTourist.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Tourist Registered Successfully. Thanks";
 ?>