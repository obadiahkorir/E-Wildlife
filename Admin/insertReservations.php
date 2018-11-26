<?php
   include('../config.php');

$sql="INSERT INTO bookings(FullNames,Username,No_Of_People,From_Date,To_Date,Site,Price,Adress,PostalCode,email) 
VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[no]', '$_POST[from_date]', '$_POST[to_date]', '$_POST[site]', '$_POST[fee]', '$_POST[address]', '$_POST[pcode]','$_POST[email]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: viewReservations.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Reservation Registered Successfully. Thanks";
 ?>