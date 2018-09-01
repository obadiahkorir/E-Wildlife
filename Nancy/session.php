<?php
include('config.php');
session_start();
$check=$_SESSION['login_email'];
$session=mysqli_query($mysqli, "select username from registration where username='$check' ");
$row=mysqli_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
{
echo "You Failed !!";
 header('Location: index.php');
}
?>