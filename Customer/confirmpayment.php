<?php
   include('config.php');

$sql="INSERT INTO confirmedpayments (mpesa, id, fee, email, people) 
VALUES ('$_POST[mpesa]', '$_POST[ids]', '$_POST[amount]', '$_POST[email]','$_POST[people]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  echo"<script type='text/javascript'>var x=alert('Reservation successful,Please wait for approval');";
				  echo"window.location='customer_home.php'";
echo"</script>";

 mysqli_close($conn);
?> 