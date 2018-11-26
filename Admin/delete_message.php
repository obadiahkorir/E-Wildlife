<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You Have Not  selected any record";
}else{
$query="Delete from Chatting where id=".$delete."";
$result=mysqli_query($conn,$query);
header("location:viewchats.php?msg= Chat Message  Deleted !!");
exit();
mysqli_close($conn);
}
?>