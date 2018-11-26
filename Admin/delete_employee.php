<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You Have Not  selected any record";
}else{
$query="Delete from employee  where Employee_ID=".$delete."";
$result=mysqli_query($conn,$query);
header("location:Employee.php?msg= Employee Deleted !!");
exit();
mysqli_close($conn);
}
?>