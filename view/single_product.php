<?php

include("../actions/product_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<!-- title -->
	<title>View Product</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
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
								
								</li>
								<li><a href="about.php">About</a></li>
								
								</li>
								<li><a href="programs.php">Programs</a>

								</li>
								
								<li><a href="shop.php">Shop</a>
									
								</li>
								<li><a href="contact.php">Contact</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<</div>
								</li>
							</ul>
						</nav>

						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->


  	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Shop</p>
							<h1>Product Description</h1>
							<div class="hero-btns">
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

    <!-- area for product display -->
    
    <div style="min-height:400px; padding-top:150px; padding-left:200px; padding-right:200px; padding-bottom:20px; background-color:#f5f5f5;">
    <h4 class='text-dark' style='color:white;'>  <?php echo  $product_title ; ?> </h4>
    <?php
    $product_cat=$cname['cat_name'];
    $product_brand=$bname['brand_name'];
    if (logged_in()==true) {
      echo "
        <div class='card mb-3' style='width: 1000px; min-height: 500px;'>
        <div class='row g-0'>
          <div class='col-md-6'  >
            <img src='../uploads/$product_image' class='img-fluid rounded-start' style=' min-height:500px;'alt='../images/mountain.png' >
          </div>
          <div class='col-md-6' >
            <div class='card-body'>
              <br><br>
              <h5 class='card-title'>Name: $product_title </h5>
              <p class='card-text'>Price:  GHS $product_price<br></p>
              <p class='card-text'>Description:  $product_desc</p>
              <p class='card-text'>Keywords:  $product_keywords</p> <br>
              <h5 class='card-text'>Category:  $product_cat<br></h5>
              <p class='card-text'>Brand: $product_brand</p>
              <br><br>
            
              <a href='../actions/add_to_cart.php?pid=$productID' class='btn btn-dark' style='width:250px;'>Add to Cart</a>
            </div>
          </div>
        </div>
        </div>
        ";
    }else {
      echo "
        <div class='card mb-3' style='width: 1000px; min-height: 500px;'>
        <div class='row g-0'>
          <div class='col-md-6'  >
            <img src='../uploads/$product_image' class='img-fluid rounded-start' style=' min-height:500px;'alt='../images/mountain.png' >
          </div>
          <div class='col-md-6' >
            <div class='card-body'>
              <br><br>
              <h5 class='card-title'>Name: $product_title </h5>
              <p class='card-text'>Price:  GHS $product_price<br></p>
              <p class='card-text'>Description:  $product_desc</p>
              <p class='card-text'>Keywords:  $product_keywords</p> <br>
              <h5 class='card-text'>Category:  $product_cat<br></h5>
              <p class='card-text'>Brand: $product_brand</p>
              <br><br>
            
              <a href='../login/login.php' class='btn btn-dark' style='width:250px;'>Add to Cart</a>
            </div>
          </div>
        </div>
        </div>
        ";
    }
    ?>
    

    </div>
  

  </div>

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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
