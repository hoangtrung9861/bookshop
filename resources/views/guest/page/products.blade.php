<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/images/onlyLogo.png') }}" />
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


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ asset('guest/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('guest/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('guest/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('guest/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('guest/css/nice-select.css') }}">					
	<link rel="stylesheet" href="{{ asset('guest/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('guest/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('guest/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('guest/css/layout.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('guest/product/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/categories_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('guest/product/styles/categories_responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"/>

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

    <div class="super_container">
        <div class="container product_section_container">
            <div class="row">
                <div class="col product_section clearfix">

                    <div class="breadcrumbs d-flex flex-row align-items-center">
                        <ul>
                            <li><a href="{{ Route('home') }}">Home</a></li>
                            <li class="active"><a href="{{ Route('products') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Product</a></li>
                        </ul>
                    </div>

                    <div class="sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">
                                <h5>Book Category</h5>
                            </div>
                            <form action="{{ URL::current() }}" method="get" name="filter">
                                @foreach($category as $cate)
                                    @php
                                        $checked = [];
                                        if(isset($_GET['filter_cate']))
                                        {
                                            $checked = $_GET['filter_cate'];
                                        }
                                    @endphp
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="filter_cate[]" value="{{$cate->id}}"
                                            @if(in_array($cate->id, $checked)) checked @endif>
                                            {{$cate->name}}
                                        </div>								
                                @endforeach

                                <hr>
                                <div class="sidebar_title">
                                    <h5>Filter by Price</h5>
                                </div>
                                <div id="slider-range"></div>
                                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                <input type="hidden" name="start_price" id="start_price">
                                <input type="hidden" name="end_price" id="end_price">
                                <div class="d-grid">
                                    <input class="btn btn-danger btn-block" type="submit" value="FILTER" style="margin-top: 10px">
                                </div>
                                
                            </form>
                        </div>
                    </div>

                    <div class="main_content">
                        <div class="products_iso">
                            <div class="row">
                                <div class="col">

                                    <div class="product_sorting_container product_sorting_container_top">
                                        <!-- sorting -->
                                        <ul class="product_sorting">
                                            <form action="">
                                                @csrf
                                                <select name="sort" id="sort" class="">
                                                    <option value="{{URL::current()}}?sort_by=none">All</option>
                                                    <option value="{{URL::current()}}?sort_by=price_desc">Price: High to Low</option>
                                                    <option value="{{Request::url()}}?sort_by=price_asc">Price: Low to High</option>
                                                    <option value="{{Request::url()}}?sort_by=title_asc">Name: A-Z</option>
                                                    <option value="{{Request::url()}}?sort_by=title_desc">Name: Z-A</option>
                                                    <option value="{{Request::url()}}?sort_by=latest">Latest</option>
                                                    <option value="{{Request::url()}}?sort_by=oldest">Oldest</option>
                                                </select>	
                                            </form>
                                        </ul>
                                        <!-- end sorting -->

                                        <!-- search -->
                                        <div class="pages d-flex flex-row align-items-center">
                                            <form action="{{ Route('search') }}" method="get">
                                                <div class="input-group">
                                                    <input class="form-control border-end-0 border rounded-pill" name="keywords" type="text" placeholder="Search..." id="example-search-input">
                                                    <span class="input-group-append">
                                                        <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end search -->
                                    <div class="product-grid">
                                        @foreach($books as $item)
                                            <div class="product-item men" style="margin-bottom: 20px">
                                                <div class="product discount product_filter" style="margin-bottom: -5px; height: 340px">
                                                    <div class="product_image" style="margin-top: 10px">
                                                        <img src="{{ asset('/images/'. $item->image) }}" alt="">
                                                    </div>

                                                    <a href="{{ route('wishlist.store', $item->id) }}" class="favorite favorite_left"></a>
                                                    <div class="product_info">
                                                    <h6 class="product_name"><a href="{{ Route('singleProducts', $item->slug) }}" style="margin-top: -20px">{{ $item->title}}</a></h6>
                                                    <div class="product_price">{{ number_format($item->price, 0, ',', '.') }}₫<span>{{ number_format($item->price, 0, ',', '.') }}₫</span></div>
                                                </div>

                                                </div>
                                                <form class="add-to-cart-form" method="POST" action="{{ route('cart.store') }}">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $item->id }}" />
                                                        <input type="hidden" name="quantity" value="1" />
                                                        <button id="add-to-cart-button" type="submit" style="width: 215px" class="btn btn-danger btn-sm">Add to Cart</button>
                                                    </form>
                                                </div>

                                        @endforeach
                                    </div>
                                        <div class="d-flex justify-content-center">

                                                {{ $books->onEachSide(1)->links() }}
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

 

        <div class="benefit">
            <div class="container">
                <div class="row benefit_row">
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                            <div class="benefit_content">
                                <h6>free shipping</h6>
                                <p>Suffered Alteration in Some Form</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <div class="benefit_content">
                                <h6>cach on delivery</h6>
                                <p>The Internet Tend To Repeat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                            <div class="benefit_content">
                                <h6>45 days return</h6>
                                <p>Making it Look Like Readable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            <div class="benefit_content">
                                <h6>opening all week</h6>
                                <p>8AM - 09PM</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


		<div class="newsletter" style="margin-bottom: 70px">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
							<h4>Newsletter</h4>
							<p>Subscribe to our newsletter and get 20% off your first purchase</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
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


    <!-- ==== -->


    <!-- ==== -->

    <script src="{{ asset('guest/product/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('guest/product/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('guest/product/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('guest/product/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('guest/product/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('guest/product/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ asset('guest/product/js/categories_custom.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#sort').on('change', function(){
                var url = $(this).val();
                if(url){
                    window.location = url;
                }
                return false;
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#cate_filter').on('change', function(){
                var url = $(this).val();
                if(url){
                    window.location = url;
                }
                return false;
            });
        });
    </script>

   <script type="text/javascript">
    $(document).ready(function() {
        $("#slider-range").slider({
            range: true,
            min: {{$min_price_range}},
            max: {{$max_price_range}},
            values: [{{$min_price}}, {{$max_price}}],
            slide: function(event, ui) {
                $("#amount").val(ui.values[0].toLocaleString('vi-VN') + "₫ - " + ui.values[1].toLocaleString('vi-VN') + "₫");
                $("#start_price").val(ui.values[0]);
                $("#end_price").val(ui.values[1]);
            }
        });

        $("#amount").val($("#slider-range").slider("values", 0).toLocaleString('vi-VN') + "₫ - " + $("#slider-range").slider("values", 1).toLocaleString('vi-VN') + "₫");
    });
</script>

</body>
</html>

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush

