<?php
include('config.php');
$login_email=$_POST['login_email'];
$password=$_POST['login_password'];
$login_password=md5($password);
/*connect to database*/
$select_cat=mysqli_query($mysqli,"SELECT category,username FROM registration WHERE  email='$login_email' ");
$row=mysqli_fetch_array($select_cat);
 

/*returns the value  of a field in a recordset*/
$cat=$row['category'];
$query=mysqli_query($mysqli,"SELECT * FROM registration WHERE email='$login_email' and password='$login_password'");
if(!$query)
{
die("cannot execute query");
}
$count=mysqli_num_rows($query);
if($count==1)
{
session_start();
$_SESSION['session_email']=$_POST['login_email'];

			if($cat=="customer")
			{
			header("location:Customer/customer_home.php");
			
			}			
			else{
			header("location:Admin/index.php");
			}
}
else{
echo"<script type='text/javascript'>var x=alert('login unsuccessful. please check your email password combination');";

echo"window.location='index.php'";
echo"</script>";
}
?>