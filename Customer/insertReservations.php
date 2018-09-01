<?php
   include('../config.php');

$sql="INSERT INTO bookings(FullNames,Username,email,No_Of_People,From_Date,To_Date,Site,Price,Adress,PostalCode) 
VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[email]', '$_POST[no]', '$_POST[from_date]', '$_POST[to_date]', '$_POST[site]', '$_POST[fee]', '$_POST[address]', '$_POST[pcode]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  header("location: BookingPayment.php");
  

 mysqli_close($conn);
?> 
 <?php
 echo "New Reservation Registered Successfully. Thanks";
 ?>