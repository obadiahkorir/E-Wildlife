<?php
   include('config.php');
 $sql="INSERT INTO payments (category, date, amount, phone,transact_id) 
VALUES ('$_POST[option]', '$_POST[dates]', '$_POST[amounts]', '$_POST[tell]', '$_POST[transaction]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
   echo"<script type='text/javascript'>alert('Request sent.PLEASE wait for a confirmation of this transaction and check the book status after a while');";
echo"window.location='payment_profile.php'";
echo"</script>";

 mysqli_close($mysqli);
?> 