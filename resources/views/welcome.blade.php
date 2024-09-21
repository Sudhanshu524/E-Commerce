
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
	
    <body id="body">

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
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
								<h2>JumpStart-Sports</h2>
                                <span>Playing sports like there is no tomorrow.</span>
                                <a href="{{ route('register') }}" class="btn btn-blue btn-effect">Join US</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>JumpStart-Sports</h2>
                                <span>Be the best athlete that you can be.
                                </span>
                                <a href="{{ route('register') }}" class="btn btn-blue btn-effect">Join US</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>JumpStart-Sports</h2>
                                <span>Your #1 sports buddy.</span>
                                <a href="{{ route('register') }}" class="btn btn-blue btn-effect">Join US</a>
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
      
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