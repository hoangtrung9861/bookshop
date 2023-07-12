<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/images/onlyLogo.png') }}" />
    <!-- Author Meta -->
    <meta name="author" content="codepixer" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Book</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
    <!--
            CSS
            ============================================= -->
            
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('guest/css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/layout.css') }}">
    


    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/bootstrap4/bootstrap.min.css') }}" />
    <link href="{{ asset('guest/product/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/main_styles.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/responsive.css') }}" />

    <link rel="stylesheet" href="{{ asset('guest/product/plugins/themify-icons/themify-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/single_styles.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/single_responsive.css') }}" />
<!-- 
    <script src="{{ asset('guest/js/jquery.magnific-popup.min.js') }}"></script> -->
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
                        <li><a href="{{ Route('cart.index') }}"><i class="fa-solid fa-cart-shopping"></i></a></li>
                        <li><a href="{{ Route('wishlist.index')}}"><i class="fa-solid fa-heart"></i></a></li>
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

    @yield('contents');


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
                    Copyright 2023 Duc Tri Co. Ltd. All Right Reserve.
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->


	<!-- ==== -->

	<!-- ==== -->

    <script src="{{ asset('guest/product/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('guest/product/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('guest/product/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('guest/product/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('guest/product/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" ></script>

    <!-- New Script Stack -->
    @stack('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
            $(document).ready(function() {
    $('.add-to-cart-form').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                showAlert('Success! Product has been added to cart.');
            },
            error: function(response) {
                console.log(response);
            }
        });
    });

    $('.add-to-wishlist-form').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                showAlert('Success! Product has been added to wishlist.');
            },
            error: function(response) {
                console.log(response);
            }
        });
    });

    function showAlert(message) {
        var alertBox = '<div class="alert alert-success fixed-top" role="alert">' +
                        '<strong>' + message + '</strong>' +
                        '</div>';
        $('#alert-box').prepend(alertBox);
        setTimeout(function() {
            $('.alert-success').fadeOut('fast', function() {
                $(this).remove();
            });
        }, 1000);
    }
});

</script>
</body>
</html>
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush


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


