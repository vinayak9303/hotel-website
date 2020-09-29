<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<?php
include '../connect.php';
$rid=$_GET['rid'];
// echo $rid;
$get_bdetail=mysqli_query($conn,"SELECT * FROM `booking` where id='$rid'");
while($row=mysqli_fetch_array($get_bdetail) )
{
$checkin=$row['checkin_date'];
// echo $checkin;
$a=date_create($checkin);
$chi=date_format($a,"dS M Y");
$checkout=$row['checkout_date'];
// echo $checkout;
$b=date_create($checkout);
$cho=date_format($b,"dS M Y");
$room_no=$row['label'];
// echo $room_no;

$booking_id=$row['booking_id'];
// echo $booking_id;

$payment_status=$row['payment_status'];
// echo $payment_status;

$room_payment=$row['payment_amount'];
// echo $room_payment;
$remark=$row['remark'];

$get_pdetail=mysqli_query($conn,"SELECT * FROM `users` where ` booking_id`='$booking_id'");
while($srow=mysqli_fetch_array($get_pdetail) )
{
    $name=$srow['NAME'];
    // echo $name;
    $Email=$srow['EMAIL'];
    // echo $Email;
    $phone=$srow['CONTACT_NO'];
    // echo $phone;

    $total_payment=$srow['payment_amount'];
    // echo $total_payment;
}
                                    
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator    </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="icon" type="image/gif/png" href="../img/logo1.png">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                         <a href="../index.php#next" target="__blank"><i class="fa fa-desktop"></i> Check Availibility</a>
                    </li>
                    <li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="deletebooking.php"><i class="fa fa-qrcode"></i> Cancel Booking</a>
                    </li>
                    <li>
                        <a href="findroom.php"><i class="fa fa-search"></i>Find Booking</a>
                    </li>
                   <li>
                        <a href="costum.php"><i class="fa fa-search"></i>Custom Search</a>
                    </li>



                    
                    </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Personal Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
            <h3><label for="checkin_date" class="font-weight-bold text-black">NAME:</label><?php echo $name;?></h3><br>
            <h3><label for="checkin_date" class="font-weight-bold text-black">Email:</label><?php echo $Email;?></h3><br>
            <h3><label for="checkin_date" class="font-weight-bold text-black">Contact No:</label><?php echo $phone;?></h3><br>
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Booking Details<small> </small>
                        </h1>
                    </div>

                </div>
            <h3><label for="checkin_date" class="font-weight-bold text-black">CheckIn Date:</label><?php echo $chi;?></h3><br>
            <h3><label for="checkin_date" class="font-weight-bold text-black">CheckOut Date:</label><?php echo $cho;?></h3><br>
            <h3><label for="checkin_date" class="font-weight-bold text-black">Booking Id:</label><?php echo $booking_id;?></h3><br>
            <h3><label for="checkin_date" class="font-weight-bold text-black">Room No:</label><?php echo $room_no;?></h3><br>
            <h3><label for="checkin_date" class="font-weight-bold text-black">Room Payment:</label><?php echo $room_payment;?></h3><br>
            <h3><label for="checkin_date" class="font-weight-bold text-black">Total Payment:</label><?php echo $total_payment;?></h3><br>
            <h3><label for="checkin_date" class="font-weight-bold text-black">Payment Status:</label><?php echo $payment_status;?></h3><br>
            
            <h3><label for="checkin_date" class="font-weight-bold text-black">Remark:</label><?php echo $remark;?></h3><br>
            <a href="remark.php?rid=<?php  echo $rid?>" class='btn btn-primary'>Add Remark</a>
            </div>
            </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
