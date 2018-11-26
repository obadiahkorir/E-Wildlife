<?php
include('config.php');
$login_email=$_POST['login_email'];
$password=$_POST['login_password'];
$login_password=md5($password);
/*connect to database*/
$select_cat=mysqli_query($conn,"SELECT category,username FROM registration WHERE  email='$login_email' ");
$row=mysqli_fetch_array($select_cat);
 

/*returns the value  of a field in a recordset*/
$cat=$row['category'];
$query=mysqli_query($conn,"SELECT * FROM registration WHERE email='$login_email' and password='$login_password'");
if(!$query)
{
die("Cannot execute query");
}
$count=mysqli_num_rows($query);
if($count==1)
{
session_start();
$_SESSION['session_email']=$_POST['login_email'];

			if($cat=="Admin")
			{
				echo"<script type='text/javascript'>var x=alert('Successfully Login As Admin');";
				  echo"window.location='Admin/index.php'";
echo"</script>";
			

			
			}			
			else{
			echo"<script type='text/javascript'>var x=alert('Successfully Login As Tourist');";
				  echo"window.location='Customer/customer_home.php'";
echo"</script>";

			}
}
else{
echo"<script type='text/javascript'>var x=alert('Login Unsuccessful. Please check your Email Password combination');";

echo"window.location='Sign In.php'";
echo"</script>";
}
?>