<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You Have Not  selected any record";
}else{
$query="Delete from Customer where Cust_Id=".$delete."";
$result=mysqli_query($conn,$query);
header("location:Tourist_home.php?msg= Tourist  Deleted !!");
exit();
mysqli_close($conn);
}
?>