<?php
   include('../config.php');

$sql="INSERT INTO animals (animal_name,Gamepark,Description,Picture,entry_fee,total_animals,county,Address) 
VALUES ('$_POST[animal_name]', '$_POST[gamepark]', '$_POST[desc]', '$_POST[picture]', '$_POST[fee]', '$_POST[nos]', '$_POST[county]', '$_POST[address]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: viewAnimals.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Animal Registered Successfully. Thanks";
 ?>