<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You Have Not  selected any record";
}else{
$query="Delete from Gamepark where Gamepark_ID=".$delete."";
$result=mysqli_query($conn,$query);
header("location:ViewGameparks.php?msg= Animal Deleted  !!");
exit();
mysqli_close($conn);
}
?>
