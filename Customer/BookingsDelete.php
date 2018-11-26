<?php include("config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You Have Not Selected Any Record";

}else{
$query="Delete from bookings where Reserved_Id =".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: Bookings.php?msg= Reservation Deleted!!");
exit();
mysqli_close($mysqli);
}
?>