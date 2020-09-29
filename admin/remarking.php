<?php
include '../connect.php';
$remark=$_POST['remark'];
$rid=$_POST['rid'];
$sql="UPDATE `booking` SET `remark`='$remark' WHERE id='$rid'";
$asign = mysqli_query($conn,$sql);
if($asign)
{
	header("location:index.php");
}
else{
	echo "something went wrong";
}
?>