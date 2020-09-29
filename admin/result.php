<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?>  
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
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
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
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
                        <a class="active-menu" href="costum.php"><i class="fa fa-search"></i>Custom Search</a>
                    </li>



                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Booking <small> Result</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
				<?php
                        include '../connect.php';
                        $checkin=$_POST['checkin'];
                        $checkout=$_POST['checkout'];
                        $a=date_create($checkin);
                        $chi=date_format($a,"Y-m-d ");
                        $b=date_create($checkout);
                        $cho=date_format($b,"Y-m-d");
						$sql= "SELECT * FROM `booking` WHERE ((checkin_date <= '$chi' AND checkin_date <= '$cho') AND (checkout_date >= '$chi' AND checkout_date >= '$cho')) OR (checkin_date BETWEEN '$chi' AND '$cho' OR checkout_date BETWEEN '$chi' AND '$cho')";
						$re = mysqli_query($conn,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
					    
									$c = $c + 1;
									
						}
						
									
									

						
				?>

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<button class="btn btn-default" type="button">
												 result  <span class="badge"><?php echo $c ; ?></span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
											<th>label</th>
											<th>Check In</th>
											<th>Check Out</th>
                                            <th>Booking Id</th>
                                            <th>Payment Status</th>
                                            <th>Payment Amount</th>
											<th>Room No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
                                    include '../connect.php';
									$tsql = "SELECT * FROM `booking` WHERE ((checkin_date <= '$chi' AND checkin_date <= '$cho') AND (checkout_date >= '$chi' AND checkout_date >= '$cho')) OR (checkin_date BETWEEN '$chi' AND '$cho' OR checkout_date BETWEEN '$chi' AND '$cho')";
									$tre = mysqli_query($conn,$tsql);
									while($trow=mysqli_fetch_array($tre) )
									{	
										
											echo"<tr>
												<th>".$trow['id']."</th>
												<th>".$trow['room_no']."</th>
												<th>".$trow['checkin_date']."</th>
												<th>".$trow['checkout_date']."</th>
												<th>".$trow['booking_id']."</th>
												<th>".$trow['payment_status']."</th>
												<th>".$trow['payment_amount']."</th>
                                                <th>".$trow['label']."</th>
												
												<th><a href='details.php?rid=".$trow['id']." ' class='btn btn-primary'>Details</a></th>
                                                <th><a href='asign.php?rid=".$trow['id']." ' class='btn btn-success'>asign</a></th>
                                                <th><a href='status.php?rid=".$trow['id']." ' class='btn btn-danger'>status</a></th>
                                                </tr>"; 
                                        
									
									}
									?>
                                        
                                    </tbody>
                                </table>
								
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  --> 
                                      
                                       
                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
			
				<!-- DEOMO-->
				
				<!--DEMO END-->
				
										
                    

                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>