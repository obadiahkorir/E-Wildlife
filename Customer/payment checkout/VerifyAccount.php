<?php
include("config.php");
$id=mysqli_query($conn,"SELECT user_id FROM registration WHERE email='$session'");
session_start();
$session=$_SESSION["session_email"];
$sql=mysqli_query($conn,"SELECT * FROM bookings");
if(!$sql)
{
echo"Sorry We are Unacle to Verify Your Account";
}
$row=mysql_fetch_array($sql);
?>