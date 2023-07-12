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
			<link rel="stylesheet" href="{{ asset('guest/css/aboutUs.css') }}">
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

              <div>
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('/images/aboutUsBanner3.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/images/aboutUsBanner1.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/images/aboutUsBanner2.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
              </div>

                <div class="top-div">
                    <div class="layout-item-our">
                        <div class="header header3" id="layout-item-1-1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">Our story</div>
                        <div data-aos="fade-up" data-aos-duration="700">
                            <p class="p1">From a small bookstore with 5 employees established in 1998, with 25 years of development, Duc Tri has become a familiar place to buy books for customers all over Vietnam. We are committed to bringing the best quality books at affordable prices to our beloved customers.</p>
                        </div>
                    </div>
                </div>
                <div class="layout-about">
                    <div id="layout-item-1-2"  data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" class="layout-item"><img width="100%" src="{{ asset('/images/bs1.jpg')}}" alt=""></div>
                    <div id="layout-item-1-3"  data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" class="layout-item"><img width="100%" src="{{ asset('/images/bs2.jpg')}}" alt=""></div>
                    <div id="layout-item-1-4"  data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" class="layout-item"><img width="100%" src="{{ asset('/images/bs3.jpg')}}" alt=""></div>
                    <div id="layout-item-1-5"  data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" class="layout-item"><img width="100%" src="{{ asset('/images/bs4.jpg')}}" alt=""></div>
                </div>

                <div  data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="5000" data-aos-offset="0">
				<div class="top-div">
                    <div class="layout-item-our">
                        <div class="header header3" id="layout-item-1-1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">Our team</div>
                    </div>
                </div>
                    <div class="layout-about-2">
                        <div class="layout-about-item2">
                            <div class="card-about">
                                <img class="card-about" width="100%" src="{{ asset('/images/o1.jpg')}}" alt="Denim Jeans" style="width:100%">
                                <p class="item-name">Tri Bui</p>
                            </div>
                        </div>
                        <div class="layout-about-item2">
                            <div class="card-about">
                                <img class="card-about" width="100%" src="{{ asset('/images/o2.jpg')}}" alt="Denim Jeans" style="width:100%">
                                <p class="item-name">Trung Nguyen</p>
                            </div>
                        </div>
                        <div class="layout-about-item2">
                            <div class="card-about">
                                <img class="card-about" width="100%" src="{{ asset('/images/o3.jpg')}}" alt="Denim Jeans" style="width:100%">
                                <p class="item-name">Duc Pham</p>
                            </div>
                        </div>
                        <div class="layout-about-item2">
                            <div class="card-about">
                                <img class="card-about" width="100%" src="{{ asset('/images/o4.jpg')}}" alt="Denim Jeans" style="width:100%">
                                <p class="item-name">Phu Hoang</p>
                            </div>
                        </div>
                        <div class="layout-about-item2">
                            <div class="card-about">
                                <img class="card-about" width="100%" src="{{ asset('/images/o5.jpg')}}" alt="Denim Jeans" style="width:100%">
                                <p class="item-name">Phat Tai</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div ng-include="'../HTML/footer.html'"></div>
                <script>AOS.init();</script>
			

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

			<!-- <script src="{{ asset('guest/product/js/jquery-3.2.1.min.js') }}"></script> -->
			<script src="{{ asset('guest/product/styles/bootstrap4/popper.js') }}"></script>
			<script src="{{ asset('guest/product/styles/bootstrap4/bootstrap.min.js') }}"></script>
			<script src="{{ asset('guest/product/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
			<script src="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
			<script src="{{ asset('guest/product/plugins/easing/easing.js') }}"></script>
		</body>
	</html>



