<?php
   include('../config.php');

$sql="INSERT INTO employee(Employee_Name,Username,Picture,Pay_Roll,IdNumber) 
VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[picture]', '$_POST[pay]', '$_POST[id]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: viewEmployee.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Employee Registered Successfully. Thanks";
 ?>