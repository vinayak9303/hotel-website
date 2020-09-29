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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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

    <section class="site-hero overlay" style="background-image: url(img/hero_1.png)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="heading">We Can Make You <br>Feel At Home</h1>
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

    <section class="section bg-light"  id="next">
      <div class="container " id="check">
        <div class="row">
          <div class="col-md-7 mx-auto text-center mb-5">
            <h2 class="headingv">Check Availabilty</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <div class="block-32">

            <form action="check_availibility.php" method="post">
              <center><h2>Daily Booking</h2></center>
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                    <input type="date" class="form-control" name="checkin">
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                    <input type="date" name="checkout" class="form-control">
                </div>
</div>
<div class="row">
                <div class="col-md-6 mb-3 mb-md-0 col-lg-6">
                      <label for="adults" class="font-weight-bold text-black">TYPES</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="type" id="Types" class="form-control">
                          <option value="T">Select Type</option>
                          <option value="NON-AC-Double-Occupancy">NON AC Double Occupancy</option>
                          <option value="AC-Double-Occupancy">AC Double Occupancy</option>
                          <option value="AC-Triple-Occupancy">AC Triple Occupancy</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0 col-lg-6">
                      <label for="children" class="font-weight-bold text-black">No Of ROOMS</label>
                      <!-- <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div> -->
                        <input type="number" name="no_of_rooms" id="rooms" class="form-control">
                          
                    </div>
                  </div>
                  <br>
                  <center><button class="btn btn-primary btn-block text-white">Check Availabilty</button></center>
              <center>
              <span>Note: ONE BED IS ONLY FOR ONE PERSON</span>
              </center>

            </form>
          </div>



</div>
<div class="col-md-6">
          <div class="block-32">

            <form action="check_monthavailibility.php" method="post">
              <center><h2>Monthly Booking</h2></center>
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                    <input type="date" class="form-control" name="checkin">
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                    <input type="date" name="checkout" class="form-control">
                </div>
</div>
<div class="row">
                <div class="col-md-6 mb-3 mb-md-0 col-lg-6">
                      <label for="adults" class="font-weight-bold text-black">TYPES</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="type" id="Types" class="form-control">
                          <option value="T">Select Type</option>
                          <option value="NON-AC-Double-Occupancy">NON AC Double Occupancy</option>
                          <option value="AC-Double-Occupancy">AC Double Occupancy</option>
                          <option value="AC-Triple-Occupancy">AC Triple Occupancy</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0 col-lg-6">
                      <label for="children" class="font-weight-bold text-black">No Of ROOMS</label>
                      <!-- <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div> -->
                        <input type="number" name="no_of_rooms" id="rooms" class="form-control">
                          
                    </div>
                  </div>
                  <br>
                  <center><button class="btn btn-primary btn-block text-white">Check Availabilty</button></center>
              <center>
              <span>Note: ONE BED IS ONLY FOR ONE PERSON</span>
              </center>

            </form>
          </div>



</div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2" data-aos="fade-up">
            <img src="img/about_feature_image.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome <em>to</em> Rooms52</h2>
            <p class="lead">Rooms52 is the ideal place for those who want to stay at convenient location, home comfort and a great price. Become our guest and take advantages of our corporate-friendly nature. Make Rooms52 your temporary home, for a few days, weeks or for longer durations and enjoy terrific amenities at great prices with a convenient location</p>
            <p><a href="about.php" class="btn btn-primary text-white py-2 mr-3">Read More</a> 
          </div>
          
        </div>
      </div>
    </section>
    
    <section class="section bg-light">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Great Offers</h2>
            <p class="lead" data-aos="fade-up">Companies that rely on professionals, it’s expensive to rely and stay in a hotel. A long term stay with us can be more efficient and pocket friendly. For a longer-term stay, we offer fully furnished rooms with personal kitchen. We provide unbeatable combinations of better amenities at lower costs and at maximum comfort.</p>
          </div>
        </div>
      
        <div class="site-block-half d-flex bg-white" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="image d-block bg-image" style="background-image: url('img/img_1.png');"></a>
          <div class="text">
            <span class="d-block"><span class="display-4 text-primary" style="font-size: 36px;"><i class="fa fa-rupee" style="font-size:28px"></i>699</span> / per night </span>
            <span class="d-block"><span class="display-4 text-primary" style="font-size: 36px;"><i class="fa fa-rupee" style="font-size:28px"></i>8000</span> / per month </span>
            <h2>NON AC Double Occupancy</h2>
            <p class="lead">Standard rooms at Rooms52 are modern and provide you with essential facilities like personal washrooms, working space, TV, Wi-Fi, telephone and can accommodate up to 2 guests.</p>
            <p><a href="#check" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div>
        <div class="site-block-half d-flex bg-white" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="image d-block bg-image order-2" style="background-image: url('img/img_2.png');"></a>
          <div class="text order-1">
            <span class="d-block"><span class="display-4 text-primary" style="font-size: 36px;"><i class="fa fa-rupee" style="font-size:28px"></i>1000</span> / per night </span>
            <span class="d-block"><span class="display-4 text-primary" style="font-size: 36px;"><i class="fa fa-rupee" style="font-size:28px"></i>14000</span> / per month </span>
            <h2>AC Double Occupancy</h2>
            <p class="lead">The Deluxe rooms offer comfort and luxury to our guests. The rooms offer accommodation to up to 4 guests. The room has all basic amenities like A/C, Wi-Fi, TV, attached washroom, telephone, towels and a work space which are required for a comfortable stay.</p>
            <p><a href="#check" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div>

        <div class="row justify-content-center text-center mt-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-md-4"><p><a href="rooms.php" class="btn btn-primary text-white py-3 px-5">View All Rooms</a></p></div>
        </div>
      </div>
    </section>

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">See The Gallery</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100"> Check out our spacious and modern rooms.<br>
</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <img src="img/slider-1.png" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-2.png" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-3.png" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-4.png" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-5.png" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-6.png" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-7.png" alt="Image placeholder" class="img-fluid">
              </div>
            </div>
            <!-- END slider -->
          </div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    
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
    <section class="section blog-post-entry bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Facilities</h2>
            <p class="lead" data-aos="fade-up">Make Rooms52 your temporary home, for a few days, weeks or for longer durations and enjoy terrific amenities at great prices with a convenient location.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/6.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">April 26, 2020</span>
                <h2 class="mt-0 mb-3"><a href="#"><center>POOL TABLE</center>
To relax from workload and chill, take a look at our pool table and enjoy with it.</a></h2><br>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/7.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">May 1, 2020</span>
                <h2 class="mt-0 mb-3"><a href="#"><center>GYM</center> 
Guests at Rooms52 need not to worry about gaining calories as we have a fully equipped gym at our location.</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/8.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">April 12, 2020</span>
                <h2 class="mt-0 mb-3"><a href="#"><center>WIFI</center>
We provide free WiFi to all our guests to ensure their comfort.</a></h2><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section border-top">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Make Yourself Comfortable in Any of Our Fully Air-conditioned Rooms</h2>
          </div>
          <div class="col-md-6 text-right" data-aos="fade-up" data-aos-delay="200">
            <a href="#check" class="btn btn-primary py-3 text-white px-5">Book Now</a>
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
    <!-- <script type="text/javascript">
      $(document).ready(function () {
    $("#Types").change(function () {
        var val = $(this).val();
        if (val == "NON-AC-2B") {
            $("#rooms").html("<option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option>");
        } else if (val == "AC-2B") {
            $("#rooms").html("<option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option>");
        } else if (val == "AC-3B") {
            $("#rooms").html("<option value='1'>1</option>");
        } else if (val == "T") {
            $("#rooms").html("<option value=''>select-1</option>");
        }
    });
});
    </script> -->
    
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