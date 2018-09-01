<?php
include('config.php');
session_start();
$check=$_SESSION['login_email'];
$session=mysqli_query($mysqli, "select email from registration where Email='$check' ");
$row=mysqli_fetch_array($session);
$login_session=$row['email'];
if(!isset($login_session))
{
echo "You Failed !!";
 header('Location: Sign In.php');
}
?>