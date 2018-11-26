<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You Have Not  selected any record";
}else{
$query="Delete from reserves  where id=".$delete."";
$result=mysqli_query($conn,$query);
header("location:add_gamereserves.php?msg= GameReserve Deleted !!");
exit();
mysqli_close($conn);
}
?>