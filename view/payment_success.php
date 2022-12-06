<?php
include ("../settings/core.php");
include("../controllers/cart_controller.php");
check_login_index();
$c_id= $_SESSION["cid"];
$l_order=recent_order_ctr();

$l_order=$l_order['current'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Payment_Success| Home</title>
     <!-- title -->
	<title>BHS</title>

<!-- favicon -->
<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
<!-- fontawesome -->
<link rel="stylesheet" href="../assets/css/all.min.css">
<!-- bootstrap -->
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<!-- owl carousel -->
<link rel="stylesheet" href="../assets/css/owl.carousel.css">
<!-- magnific popup -->
<link rel="stylesheet" href="../assets/css/magnific-popup.css">
<!-- animate css -->
<link rel="stylesheet" href="../assets/css/animate.css">
<!-- mean menu css -->
<link rel="stylesheet" href="../assets/css/meanmenu.min.css">
<!-- main style -->
<link rel="stylesheet" href="../assets/css/main.css">
<!-- responsive -->
<link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<body>

<!--PreLoader-->
  <div class="loader">
      <div class="loader-inner">
          <div class="circle"></div>
      </div>
  </div>
  <!--PreLoader Ends-->

<!-- header -->
<div class="top-header-area" id="sticker">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 text-center">
        <div class="main-menu-wrap">
          <!-- logo -->
          <div class="site-logo">
            <a href="index.html">
              <img src="assets/img/logo.png" alt="">
            </a>
          </div>
          <!-- logo -->

          <!-- menu start -->
          <nav class="main-menu">
            <ul>
              <li class="current-list-item"><a href="home.php">Home</a>
                <ul class="sub-menu">
                
              </li>
              <li><a href="about.php">About</a></li>
              
              </li>
              <li><a href="programs.html">Programs</a>
              
              </li>
              <li><a href="shop.php">Shop</a>
              <li><a href="contact.php">Contact</a></li>
              
              </li>
              <li>
              <div class="header-icons">
                  <a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                  <form class="d-flex" role="search" action="search_results.php" method="POST";>
                                          <input class="form-control me-2" type="search" name="find" placeholder="Search by name" aria-label="Search"> &nbsp
                                          <button class="btn bg-dark text-light" name="submit" type="submit">Search</button>
                                      </form>
                </div>
              </li>
            </ul>
          </nav>
          <
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end header -->
          
       <!-- order details -->
       <h3 class="text-success" style="margin-left:150px;"> Payment was successful!</h3><br> <br>
       <h4 class="text-success" style="margin-left:150px;"> Your orderID is <?php echo $l_order ?></h4>



  <!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Brigham Healthcare Services is a registered private business in the country of Ghana in West Africa. It is located in the Capital city of Greater Accra.

It deals with the supply and distribution of healthcare products such as;

Healthcare consumables.

Educative Programs.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>A491/9 house Naa Ayaman Rd Accra</li>
							<li>support@bhs.com</li>
							<li>+233541318411</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="home.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="shop.php">Shop</a></li>
							<li><a href="program.php">Programs</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="#">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
				<p>Copyrights &copy; 2022 -BHS,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="../assets/js/main.js"></script>

</body>
</html>