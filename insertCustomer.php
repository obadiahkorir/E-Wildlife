<?php
   include('config.php');

$sql="INSERT INTO customer (FullName, Phone, Email, Date_From, Date_To, Country, City, Adress, PostalCode) 
VALUES ('$_POST[name]', '$_POST[tell]', '$_POST[email]', '$_POST[date_from]', '$_POST[date_to]', '$_POST[country]', '$_POST[park]', '$_POST[address]', '$_POST[people]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: payments.php");
  echo "Registered Successfully";

 mysqli_close($mysqli);
?> 