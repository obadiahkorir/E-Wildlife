<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You Have Not  selected any record";
}else{
$query="Delete from animals where animals_id=".$delete."";
$result=mysqli_query($conn,$query);
header("location:add_animal.php?msg= Animals  Deleted !!");
exit();
mysqli_close($conn);
}
?>