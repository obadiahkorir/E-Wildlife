<?php
include("../session.php");
include('../config.php');

$sql="INSERT INTO payment (Full_Name, Email, Postal_Code,No_of_People, Address, Country, City, Phone, Site, Mpesa, Total_Amount) 
VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[pcode]', '$_POST[nos]', '$_POST[address]', '$_POST[country]', '$_POST[city]', '$_POST[phone]', '$_POST[site]', '$_POST[mpesa]', '$_POST[amount]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  session_start();
if(session_destroy())
{
 header("location: ViewPayments.php");
 echo "1 payment method has been processed";
}

 mysqli_close($mysqli);
?> 
