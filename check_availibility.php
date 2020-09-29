<?php
include 'connect.php';
$date=date("Y-m-d");
// PHP code to find the number of days 
// between two given dates 
  
// Function to find the difference  
// between two dates. 
function dateDiffInDays($date1, $date2)  
{ 
    // Calculating the difference in timestamps 
    $diff = strtotime($date2) - strtotime($date1); 
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds 
    return abs(round($diff / 86400)); 
} 
  
// Start date 
$date1 = $_POST['checkin']; 
  
// End date 
$date2 = $_POST['checkout']; 
  
// Function call to find date difference 
$dateDiff = dateDiffInDays($date1, $date2); 
//echo $dateDiff;
  if($_POST['checkin']<$_POST['checkout']&&$_POST['checkin']>=$date&&$_POST['no_of_rooms']>0)
  {
  	$checkin=mysqli_real_escape_string($conn, htmlspecialchars($_POST['checkin']));
    $a=date_create($checkin);
    $chi=date_format($a,"Y-m-d 01:00:00");
  	$checkout=mysqli_real_escape_string($conn, htmlspecialchars($_POST['checkout']));
    $b=date_create($checkout);
    $cho=date_format($b,"Y-m-d");
    //$cho1 = date('Y-m-d', strtotime($cho .' -1 day'));
    //echo $cho1;
    //echo $cho;
  	$type=mysqli_real_escape_string($conn, htmlspecialchars($_POST['type']));
  	$no_of_rooms=mysqli_real_escape_string($conn, htmlspecialchars($_POST['no_of_rooms']));
  	 $get_data = mysqli_query($conn,"SELECT * FROM `rooms52` where `room_no` NOT in (SELECT `room_no` FROM `booking` WHERE ((checkin_date <= '$chi' AND checkin_date <= '$cho') AND (checkout_date >= '$chi' AND checkout_date >= '$cho')) OR (checkin_date BETWEEN '$chi' AND '$cho' OR checkout_date BETWEEN '$chi' AND '$cho')) AND type='$type'");
  	if(mysqli_num_rows($get_data) > 0) {
      if(mysqli_num_rows($get_data) >= $no_of_rooms){
       $get_prize= mysqli_query($conn,"SELECT `price`FROM `rooms52` WHERE `type`='$type' LIMIT 1");
       while ($row = mysqli_fetch_assoc($get_prize)) {
          $price=$row['price'];
          //echo $rn;
          //echo $price;
          
        }
        $total=$price*$dateDiff*$no_of_rooms;
        //echo $total;
        $pri=$price*$dateDiff;
       ?>
  		<!doctype html>
<html lang="en">
  <head>
    <title>Rooms52</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="icon" type="image/gif/png" href="img/logo1.png">
    


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <style >
      iframe{
        width:600px; 
        height:400px;
      }
      @media screen and (max-width: 480px) {
  iframe {
    width: 300px;
    height: 200px;
  }
}
    </style>
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="index.html"><img width=60% src="img/LOGO.png"></a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto text-center">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="rooms.php">Rooms</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero inner-page overlay" style="background-image: url(img/slider-4.png)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center text-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="heading">Reservation</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    
    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            
            <form action="insert.php" method="post" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="name">*Name</label>
                  <input type="text" id="name" class="form-control"name="name" placeholder="firstname lastname" required>
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="phone">*Phone</label>
                  <input type="tel" id="phone" class="form-control " name="phone" placeholder="012-345-6789" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">*Email</label>
                  <input type="email" id="email" class="form-control " name="email" placeholder="abc123@gmail.com" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                  <input type="date" id="checkin_date1" value="<?php echo $_POST['checkin']?>" class="form-control" name="checkin" readonly>
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkout_date">Date Check Our</label>
                  <input type="date" id="checkout_date1"value="<?php echo $_POST['checkout']?>" class="form-control" name="checkout"readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="adults" class="font-weight-bold text-black">ROOM TYPE</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <input name="type" id="types" value="<?php echo $_POST['type']?>"class="form-control" name="type" readonly>
                      
                    
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="children" class="font-weight-bold text-black">No_Of_Rooms</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <input name="no_of_rooms" id="room_no" value="<?php echo $_POST['no_of_rooms']?>"class="form-control" name="no_of_rooms" readonly>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label for="children" class="font-weight-bold text-black">Total Payment</label>
                  <div class="field-icon-wrap">
                    <input name="total" id="total" value="<?php echo $total?>"class="form-control" name="no_of_rooms" readonly>
                    <input name="price" id="price" value="<?php echo $pri?>"class="form-control" name="no_of_rooms" readonly hidden>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Pay At Hotel" class="btn btn-primary text-white py-3 px-5">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
<div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Address:</span> <span> Rooms52

Bohra Market<br>

Near Artemis Hospital<br>

Wazirabad, Sector 52<br>

Gurgaon 122001<br>

Haryana</span></p>
                <p><span class="d-block">Phone:</span> <span> +91 7576152000</span></p>
                <p><span class="d-block">Email:</span> <span> rooms52@gmail.com</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- END section -->
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>


        
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_1.png" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;;We visit this hotel at least once a year to spend a weekend and chill. Its always been a great experience and this time was no different. The rooms are good. Reception services, room service, in room dining, house keeping are all excellent. Very well trained and responsive staff. The choice of restaurants is also good but we normally eat the buffet at Citrus. It is superb, especially the Sunday Brunch. Excellent service too.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Vinayak</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_2.png" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;The room was modern and the bathroom comfortable. The Hotel is very near the airport, which is important if you have a morning flight (taking into account the traffic in gurgaon!) Breakfast and dinner were ok. Nothing especial. However, the help from the staff was great. In the evening they helped us with our flight reservations.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Pranav</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_3.png" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;;We visit this hotel at least once a year to spend a weekend and chill. Its always been a great experience and this time was no different. The rooms are good. Reception services, room service, in room dining, house keeping are all excellent. Very well trained and responsive staff. The choice of restaurants is also good but we normally eat the buffet at Citrus. It is superb, especially the Sunday Brunch. Excellent service too.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Avinash</em></p>
            </div>


            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_1.png" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;The room was modern and the bathroom comfortable. The Hotel is very near the airport, which is important if you have a morning flight (taking into account the traffic in gurgaon!) Breakfast and dinner were ok. Nothing especial. However, the help from the staff was great. In the evening they helped us with our flight reservations.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; carlson</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_2.png" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;;We visit this hotel at least once a year to spend a weekend and chill. Its always been a great experience and this time was no different. The rooms are good. Reception services, room service, in room dining, house keeping are all excellent. Very well trained and responsive staff. The choice of restaurants is also good but we normally eat the buffet at Citrus. It is superb, especially the Sunday Brunch. Excellent service too.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Vishawnath</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_3.png" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;The room was modern and the bathroom comfortable. The Hotel is very near the airport, which is important if you have a morning flight (taking into account the traffic in gurgaon!) Breakfast and dinner were ok. Nothing especial. However, the help from the staff was great. In the evening they helped us with our flight reservations.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Priyanka</em></p>
            </div>

          </div>
            <!-- END slider -->
        </div>

      </div>
    </section>
    
    <section class="section">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Make Yourself Comfortable in Any of Our Fully Air-conditioned Rooms</h2>
          </div>
          <div class="col-md-6 text-right" data-aos="fade-up" data-aos-delay="200">
            <a href="reservation.html" class="btn btn-primary py-3 text-white px-5">Reserve Now</a>
          </div>
        </div>
      </div>
    </section>
    <footer class="section footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-12">
            <ul class="list-unstyled link">
              <li><a href="#">About Us</a></li>
             <li><a href="#">Rooms</a></li>
             <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-12 ">
            <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> Rooms52

Bohra Market<br>

Near Artemis Hospital<br>

Wazirabad, Sector 52<br>

Gurgaon 122001<br>

Haryana</span></p>
            <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> +91 7576152000</span></p>
            <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> rooms52@gmail.com</span></p>
            <p>
            
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
          </p>
          </div>
          <div class="col-md-6  col-12   contact-info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1754.22121725723!2d77.0741541715069!3d28.436076389538734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19674625aa97%3A0x56fe90b015a34010!2sRooms52!5e0!3m2!1sen!2sin!4v1599595112356!5m2!1sen!2sin"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
      <center><a href="https://wa.link/e4io0c" target="__blank">FOR CANCELLATION OF YOUR ROOM RESERVATION PLEASE CONTACT WITH US ON WHATSAPP<span class="fa fa-whatsapp"></span></a></center>
    </footer>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    
    <script src="js/aos.js"></script>
    
    <script src="js/bootstrap-datepicker.js"></script> 
    <script src="js/jquery.timepicker.min.js"></script> 

    

    <script src="js/main.js"></script>
  </body>
</html>
<?php
  		# code...
    }
    else{?>
      <!DOCTYPE html>
      <html>
      <head>
        <title></title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
      </head>
      <body>
        <style type="text/css">
          .container{
            margin-left: 25%;
            margin-top: 17%;
          }
        </style>
        <div class="container" style="width:500px; align-content: center;">      
      <center><img src="img/ta.png" width="70%"></center>
      <center><a href="/" style="color: black;"><i class='fas fa-arrow-alt-circle-left'></i>BACK TO HOME PAGE</a></center>
      </div>
      </body>
      </html>
    <?php
  }
  	}
    else
      {?>
      <!DOCTYPE html>
      <html>
      <head>
        <title></title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
      </head>
      <body>
        <style type="text/css">
          .container{
            margin-left: 25%;
            margin-top: 17%;
          }
        </style>
        <div class="container" style="width:500px; align-content: center;">      
      <center><img src="img/ta.png" width="70%"></center>
      <center><a href="/" style="color: black;"><i class='fas fa-arrow-alt-circle-left'></i>BACK TO HOME PAGE</a></center>
      </div>
      </body>
      </html>
    <?php
    }
  }
  else
  {?>
      <!DOCTYPE html>
      <html>
      <head>
        <title></title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
      </head>
      <body>
        <style type="text/css">
          .container{
            margin-left: 25%;
            margin-top: 17%;
          }
        </style>
        <div class="container" style="width:500px; align-content: center;">      
      <center><img src="img/in.jpg" width="70%"></center>
      <center><a href="/" style="color: black;"><i class='fas fa-arrow-alt-circle-left'></i>BACK TO HOME PAGE</a></center>
      </div>
      </body>
      </html>
    <?php
  }

  ?>