<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You Have Not  selected any record";
}else{
$query="Delete from bookings where Reserved_Id=".$delete."";
$result=mysqli_query($conn,$query);
header("location:Reservations.php?msg= Reservations  Deleted !!");
exit();
mysqli_close($conn);
}
?>