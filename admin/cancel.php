<?php
include '../connect.php';
$rid=$_GET['rid'];
echo $rid;
$sql= "delete from `booking` where id='$rid'";
$del = mysqli_query($conn,$sql);
if($del){
header("location:index.php");
}
else{
	echo "something went wrong";
}
?>