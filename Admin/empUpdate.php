<?php
include '../config.php';

?>

<?php 

if (isset($_POST['submit'])){

echo $Title=$_POST['name'];
echo  $Author=$_POST['username'];
echo $PublisherName=$_POST['password'];
$id=$_POST['ID'];

echo $query="update users  set names='$Title',Username='$Author',Password='$PublisherName'where id=$id";
$rows=mysqli_query($mysqli,$query);
echo "succes full updated ".$rows;
mysqli_close($con);
header("location: Employee.php?msg=succes full update one record");
exit();
}

?>

