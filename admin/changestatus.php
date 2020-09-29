<?php
include '../connect.php';
$status=$_POST['status'];
$rid=$_POST['rid'];
$sql="UPDATE `booking` SET `payment_status`='$status' WHERE id='$rid'";
$asign = mysqli_query($conn,$sql);
if($asign)
{
	header("location:index.php");
}
else{
	echo "something went wrong";
}
?>