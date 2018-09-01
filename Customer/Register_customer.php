<?php
   include('../config.php');

$sql="INSERT INTO customer(FullName,Username,Email,Phone,Password,Re_Password,Country,City,Adress,PostalCode,Picture) 
VALUES ('$_POST[fname]', '$_POST[username]', '$_POST[email]', '$_POST[tel]', '$_POST[pass]','$_POST[pass1]','$_POST[country]' ,'$_POST[city]' ,'$_POST[address]', '$_POST[pcode]' ,'$_POST[picture]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  echo"<script type='text/javascript'>var x=alert('Details Registered Successfully. ');";
				  echo"window.location='viewTourists.php'";
echo"</script>";


 mysqli_close($conn);
?> 
 <?php
 echo"<script type='text/javascript'>var x=alert('Failed To Register.Kindly Check the Possible Error and Try Again');";

echo"window.location='Register_Details.php'";
echo"</script>";
 ?>