<?php
   include('config.php');

$sql="INSERT INTO bookings (FullNames, No_Of_People,From_Date, To_Date, Type,Site,Price, Description) 
VALUES ('$_POST[name]', '$_POST[people]', '$_POST[date_from]', '$_POST[date_to]', '$_POST[type]', '$_POST[site]', '$_POST[price]', '$_POST[desc]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location:customer_home.php");
  echo "User Registered Successfully.";

 mysqli_close($mysqli);
?> 