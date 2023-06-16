<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ ('guest/img/fav.png') }}">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Book</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('guest/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/nice-select.css') }}">					
			<link rel="stylesheet" href="{{ asset('guest/css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/main.css') }}">

			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/bootstrap4/bootstrap.min.css') }}">
			<link href="{{ asset('guest/product/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/animate.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/main_styles.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/responsive.css') }}">

			<link rel="stylesheet" href="{{ asset('guest/product/plugins/themify-icons/themify-icons.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/single_styles.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/single_responsive.css') }}">
		</head>
		<body>

			  <header id="header" id="home" style="background-color: black; opacity: 0.9" >
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{ Route('home')}}"><img src="{{ asset('guest/img/logo.png') }}" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="{{ Route('home')}}">Home</a></li>
				          <li><a href="{{ Route('products')}}">Product</a></li>
				          <li><a href="{{ Route('articles')}}">Articles</a></li>
						  <li><a href="{{ Route('aboutUs')}}">About us</a></li>
				          <li><a href="{{ Route('contactUs')}}">Contact us</a></li>
				          <li class="menu-has-children"><a href="">User</a>
				            <ul>
				              <li><a href="{{ Route('login') }}">Login</a></li>
				              <li><a href="{{ Route('register') }}">Sign up</a></li>
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			@yield('contents');
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="{{ ('guest/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{ ('guest/js/vendor/bootstrap.min.js') }}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{ ('guest/js/easing.min.js') }}"></script>			
			<script src="{{ ('guest/js/hoverIntent.js') }}"></script>
			<script src="{{ ('guest/js/superfish.min.js') }}"></script>	
			<script src="{{ ('guest/js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ ('guest/js/jquery.magnific-popup.min.js') }}"></script>	
			<script src="{{ ('guest/js/owl.carousel.min.js') }}"></script>			
			<script src="{{ ('guest/js/jquery.sticky.js') }}"></script>
			<script src="{{ ('guest/js/jquery.nice-select.min.js') }}"></script>			
			<script src="{{ ('guest/js/parallax.min.js') }}"></script>	
			<script src="{{ ('guest/js/waypoints.min.js') }}"></script>
			<script src="{{ ('guest/js/jquery.counterup.min.js') }}"></script>			
			<script src="{{ ('guest/js/mail-script.js') }}"></script>	
			<script src="{{ ('guest/js/main.js') }}"></script>	

			<!-- <script src="{{ asset('guest/product/js/jquery-3.2.1.min.js') }}"></script> -->
			<script src="{{ asset('guest/product/styles/bootstrap4/popper.js') }}"></script>
			<script src="{{ asset('guest/product/styles/bootstrap4/bootstrap.min.js') }}"></script>
			<script src="{{ asset('guest/product/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
			<script src="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
			<script src="{{ asset('guest/product/plugins/easing/easing.js') }}"></script>
			<script src="{{ asset('guest/product/js/custom.js') }}"></script>
		</body>
	</html>



