<?php
include 'connect.php';
$get_data = mysqli_query($conn,"SELECT * FROM `rooms52` where type='AC-2B'");
if(mysqli_num_rows($get_data) > 0) {
  echo "hi";
}
else {
  # code...
  echo "bye";
}
?>