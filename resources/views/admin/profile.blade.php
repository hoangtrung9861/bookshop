<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - ProFile</title>

    <!-- Custom fonts for this template-->
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

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="margin-top: 100px">
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
						  <li class="menu-has-children"><a href="">{{auth()->user()->name}} </a>
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
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5" >
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Your Profile</h1>
                            </div>
                            <form class="user" action="{{route('profile')}}" method="POST">
                                @csrf
                                <div class="form-group row">

                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleFirstName"
                                            placeholder="UserName" name="name" value="{{auth()->user()->name}}">
                                            @if ($errors->has('name'))
                                           <span class="text-danger" style=" font-size: 14px">{{ $errors->first('name') }}</span>
                                           @endif
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                             value="{{auth()->user()->email}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user @error('phone') is-invalid @enderror" id="exampleInputPhone"

                                            placeholder="Phone number" name="phone" value="{{auth()->user()->phone}}">

                                            @if ($errors->has('phone'))
                                           <span class="text-danger" style=" font-size: 14px">{{ $errors->first('phone') }}</span>
                                           @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                            @if ($errors->has('password'))
                                           <span class="text-danger" style=" font-size: 14px">{{ $errors->first('password') }}</span>
                                           @endif
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user @error('address') is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Address" name="address" value="{{auth()->user()->address}}">
                                            @if ($errors->has('address'))
                                           <span class="text-danger" style=" font-size: 14px">{{ $errors->first('address') }}</span>
                                           @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" >
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js')}}"></script>
</body>

</html>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>