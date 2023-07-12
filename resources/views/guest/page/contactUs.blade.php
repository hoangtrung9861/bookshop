<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset('/images/onlyLogo.png') }}">
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
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
			<link rel="stylesheet" href="{{ asset('guest/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/nice-select.css') }}">					
			<link rel="stylesheet" href="{{ asset('guest/css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset('guest/css/contact.css') }}">
			<link rel="stylesheet" href="{{ asset('guest/css/layout.css') }}">
			<!-- <link rel="stylesheet" href="{{ asset('guest/cart.css') }}"> -->

			<link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/bootstrap4/bootstrap.min.css') }}">
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
				        <a href="{{ Route('home')}}"><img src="{{ asset('/images/logo.jpg')}}" style="width: 80px"></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="{{ Route('home')}}">Home</a></li>
				          <li><a href="{{ Route('products')}}">Product</a></li>
				          <li><a href="{{ Route('articles')}}">Articles</a></li>
						  <li><a href="{{ Route('aboutUs')}}">About us</a></li>
				          <li><a href="{{ Route('contactUs')}}">Contact us</a></li>
						  <li><a href="{{ Route('cart.store') }}"><i class="fa-solid fa-cart-shopping"></i></a></li>
						  <li><a href=""><i class="fa-solid fa-heart"></i></a></li>
						  @guest
				          <li class="menu-has-children"><a href=""><i class="fa-solid fa-user"></i></a>
				            <ul>
				              <li><a class="{{ (request()->is('login')) ? 'active' : '' }}" href="{{ Route('login') }}">Login</a></li>
				              <li><a class="{{ (request()->is('register')) ? 'active' : '' }}" href="{{ Route('register') }}">Sign up</a></li>
                            </ul>
                          </li> 
							  @else 
						  <li class="menu-has-children"><a href="">{{auth()->user()->name}}</a>
							<ul> 
							  <li><a class="" href="{{ Route('profile') }}">Profile</a></li>
				              <li><a class="" href="{{ Route('logout') }}">LogOut</a></li> 
				            </ul>
				          </li>
						  @endguest
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

              <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Duc Tri Book Store</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<a href="#">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
                                                    </a>
												</div>
											</div>
                                            <div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Address: Dicstrict 3, HCM city</label>
												</div>
											</div>
                                            <div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Phone number: 012345678</label>
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
													<label class="label" for="name">Follow us: 
                                                        <span><a href="#" class="icon-social fa fa-facebook"></a></span>
                                                        <span><a href="#" class="icon-social fa fa-instagram"></a></span>
                                                        <span><a href="#" class="icon-social fa fa-twitter"></a></span>
                                                    </label>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <img src="{{ asset('/images/contactImg.jpg')}}" style="width: 380px; height: auto" alt="">
							</div>
						</div>
					</div>
				</div>
              
			</div>
		</div>
	</section>
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                    <h6 class="header-footer">About us</h6>
                        <ul class="ul-footer">
                            <li>Location: District 3, Nam Ky Khoi Nghia street, Ho Chi Minh city</li>
                            <li>Number: 012345678</li>
                            <li>Contact: <a href="#" style="text-decoration: none">triducstore@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="header-footer">Shopping</h6>
                        <ul class="ul-footer">
                            <li><a href="{{ Route('products') }}">Products</a></li>
                            <li><a href="{{ Route('articles') }}">Articles</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="header-footer">Information</h6>
                        <ul class="ul-footer">
                            <li><a href="{{ Route('contactUs') }}">About us</a></li>
                            <li><a href="{{ Route('aboutUs') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                    <img src="{{ asset('/images/logo.jpg')}}" alt="" class="logo-footer">
                        <div class="footer-social d-flex align-items-center social">
                            <a href="https://facebook.com">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://google.com">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="https://instagram.com">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hr-footer">
            <div class="row footer-end">
                <div class="col-lg-12">
                    Copyright 2023 Duc Tri Co. Ltd. All Right Reserved.
                </div>
            </div>
        </div>
    </footer>
			<!-- End footer Area -->	

			<script src="{{ asset('guest/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{ asset('guest/js/vendor/bootstrap.min.js') }}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{ asset('guest/js/easing.min.js') }}"></script>			
			<script src="{{ asset('guest/js/hoverIntent.js') }}"></script>
			<script src="{{ asset('guest/js/superfish.min.js') }}"></script>	
			<script src="{{ asset('guest/js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset('guest/js/jquery.magnific-popup.min.js') }}"></script>	
			<script src="{{ asset('guest/js/owl.carousel.min.js') }}"></script>			
			<script src="{{ asset('guest/js/jquery.sticky.js') }}"></script>
			<script src="{{ asset('guest/js/jquery.nice-select.min.js') }}"></script>			
			<script src="{{ asset('guest/js/parallax.min.js') }}"></script>	
			<script src="{{ asset('guest/js/waypoints.min.js') }}"></script>
			<script src="{{ asset('guest/js/jquery.counterup.min.js') }}"></script>			
			<script src="{{ asset('guest/js/mail-script.js') }}"></script>	
			<script src="{{ asset('guest/js/main.js') }}"></script>	
            <!-- <script src="{{ asset('guest/js/contact.js') }}"></script>	
            <script src="{{ asset('guest/js/popper.js') }}"></script>	
            <script src="{{ asset('guest/js/jquery.validate.min.js') }}"></script>	 -->

		</body>
	</html>



