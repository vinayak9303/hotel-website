<?php
include '../connect.php';
$room_no=$_POST['room'];
$rid=$_POST['rid'];
$sql="UPDATE `booking` SET `label`='$room_no' WHERE id='$rid'";
$asign = mysqli_query($conn,$sql);
if($asign)
{
	header("location:index.php");
}
else{
	echo "something went wrong";
}
?>