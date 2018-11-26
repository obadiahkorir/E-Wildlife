<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "You don't select any record";

}else{
$query="delete from shout_box where id =".$delete."";
$result=mysqli_query($mysqli,$query);
header("location: chatting table.php?msg= Chat Deleted!!");
exit();
mysqli_close($mysqli);
}
?>

