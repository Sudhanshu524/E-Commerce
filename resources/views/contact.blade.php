
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>JumpStart-Sports</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body" style="background-image: url(../img/background.jpg); ">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
		<header class="site-navbar" role="banner">

			<div class="container">
			  <div class="row align-items-center">
				
				<div class="col-11 col-xl-2">
				  <h1 class="mb-0 site-logo"><a style="color: rgb(0, 0, 0)" href="{{ route('main') }}" class="text-white mb-0"><b> JumpStart-Sports</b></a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
				  <nav class="site-navigation position-relative text-right" role="navigation">
	  
					<ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
					  <li class=""><a href="{{ route('main') }}" style="color: black"><span><b>Home</b></span></a></li>
					  {{-- <li class="has-children">
						<a href="about.html"><span>Dropdown</span></a>
						<ul class="dropdown arrow-top">
						  <li><a href="#">Menu One</a></li>
						  <li><a href="#">Menu Two</a></li>
						  <li><a href="#">Menu Three</a></li>
						  <li class="has-children">
							<a href="#">Dropdown</a>
							<ul class="dropdown">
							  <li><a href="#">Menu One</a></li>
							  <li><a href="#">Menu Two</a></li>
							  <li><a href="#">Menu Three</a></li>
							  <li><a href="#">Menu Four</a></li>
							</ul>
						  </li>
						</ul>
					  </li> --}}
					  <li><a href="{{ route('about') }}" style="color: rgb(0, 0, 0)"><span><b> About Us</b></span></a></li>
					  <li><a href="{{ route('contact') }} " style="color: rgb(0, 0, 0)"><span><b>Contact Us</b></span></a></li>
					  <li><a href="{{ route('register') }}" style="color: rgb(0, 0, 0)"><span><b>Register</b></span></a></li>
					  <li><a href="{{ route('login') }}" style="color: rgb(0, 0, 0)"><span><b>Login</b></span></a></li>
					</ul>
				  </nav>
				</div>
	  
	  
				<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
	  
				</div>
	  
			  </div>
			</div>
			
		  </header>
        <!--
        End Fixed Navigation
        ==================================== -->
        <br>
        <br><br><br>
		
		<main class="site-content" role="main" style="background-color: rgba(0, 0, 0, 0.373)">
		
        
			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2 style="color: beige">Contact Us</h2>
							<p style="color: beige">Leave a Message</p>
						</div>
						
						
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Your Name...">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Your Email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subject...">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Messages..."></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3 style="color: beige">Contact Us</h3>						
								<p style="color: beige"><i class="fa fa-pencil"></i>JumpStart-Sports<span style="color: beige">50, Thiruvoodal Street,</span> <span style="color: beige">India.</span></p><br>
								<p style="color: beige"><i class="fa fa-phone"></i>+91 94884 87853</p>
								<p style="color: beige"><i class="fa fa-envelope"></i>jumpstartsports5@gmail.com</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
		
		</main>
		
		<footer id="footer">
            <div class="container">
              <div class="row text-center">
                <div class="footer-content">
                  <div class="wow animated fadeInDown">
                    <p>JumpStart-Sports</p>
                  </div>
                  <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
                    <div class="input-field">
                      <input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
                      <button type="submit" class="submit-icon">
                        <i class="fa fa-paper-plane fa-lg"></i>
                      </button>
                    </div>
                  </form>
                  <div class="footer-social">
                    <ul>
                      <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
                      <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                      <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
                      <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
                      <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A"><i class="fa fa-youtube fa-3x"></i></a></li>
                    </ul>
                  </div>
                  
                  <p>JumpStart-Sports &copy; Copyright 2016. Design and Developed By<a href="SAGI G3"> SUDHANSHU</a> </p>
                </div>
              </div>
            </div>
          </footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>