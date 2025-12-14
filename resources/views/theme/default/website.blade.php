<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title Tag  -->
    <title>{{ isset($seo_title) ? $seo_title : get_option('site_title', config('app.name')) }}</title>

    <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : get_option('meta_keywords') }}"/>
    <meta name="description" content="{{ isset($meta_description) ? $meta_description : get_option('meta_description') }}"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ get_favicon() }}">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/bootstrap.min.css') }}">
	<!-- Icon Font -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/icon-font.min.css') }}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/niceselect.css') }}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/animate.css') }}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/flex-slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/flexslider.css') }}">
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/jquery-ui.css') }}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/owl.theme.default.css') }}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/slicknav.min.css') }}">

    <link href="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" />
	
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('public/theme/default/style.css?v=1.2') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/responsive.css?v=1.2') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/uray-custom.css?v=1.0') }}">  
    @include('theme.default.components.custom_styles') 
	@include('layouts.others.languages')

    <script type="text/javascript">
    	var _url = "{{ url('') }}";
    </script>
    
</head>
<body class="js">
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->	
	
	@if(\Session::has('checkout_error'))
		<div class="alert alert-danger rounded-0">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<p class="text-center m-0 text-white">{{ session('checkout_error') }}</p>
		</div>
	@endif
	
	<!-- Header Uray Template -->
	<header class="header">
		<!-- Search Header -->
		<div class="container-fluid search-header">
			<form>
				<input type="text" name="search" placeholder="Search">
				<span class="close-search">X</span>
			</form>
		</div>
		
		<!-- Header Desktop -->
		<div class="container-fluid">
			<div class="header-desktop">
				<div class="header-menu-desktop d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo-wrapper">
						<div class="logo">
							<a href="{{ url('') }}" class="logo-link">
								<img src="{{ asset('public/theme/default/images/logo.png') }}" alt="Pharmez Logo" class="logo-img">
							</a>
						</div>
					</div>
					
					<!-- Main Menu -->
					<div class="nav-menu-wrapper">
						<div class="menu">
							<ul>
								<li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'menu-active' : '' }}">Home</a></li>
								<li><a href="{{ url('/about-us') }}" class="{{ Request::is('about-us*') ? 'menu-active' : '' }}">About</a></li>
								<li><a href="{{ url('/shop') }}" class="{{ Request::is('shop*') || Request::is('product*') ? 'menu-active' : '' }}">Shop</a>
									<ul>
										@foreach(App\Entity\Category\Category::where('parent_id',null)->take(8)->get() as $category)
											<li><a href="{{ url('/shop?category='.$category->slug) }}">{{ $category->translation->name }}</a></li>
										@endforeach
										
									</ul>
								</li>
								
								
							</ul>
						</div>
					</div>
					
					<!-- Header Right -->
					<div class="header-actions">
						<div class="header-right">
							<ul class="list-inline">
								<li>
									<a href="javascript:void(0)" class="search-header1">
										<img src="{{ asset('public/theme/default/images/header-search.png') }}" alt="Search" class="header-icon">
									</a>
								</li>
								<li>
									<a href="#" class="cart-index">
										<img src="{{ asset('public/theme/default/images/header-cart.png') }}" alt="Cart" class="header-icon">
										<div class="number-cart">{{ \Cart::getTotalQuantity() }}</div>
									</a>
                                    <div class="widget_shopping_cart" id="mini-cart">
                                        @include('theme.default.components.mini-cart')
                                    </div>
								</li>
								<li>
									<a href="{{ url('/sign_in') }}" class="user-icon">
										<img src="{{ asset('public/theme/default/images/header-admin.png') }}" alt="User" class="header-icon">
									</a>
								</li>
								<li>
									<a href="{{ url('/contact') }}" class="btn-contact">Contact Us</a>
								</li>
								<li>
									<div class="language-selector">
										<a href="#" class="lang-btn" id="selectLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<img src="{{ asset('public/theme/default/images/header-flag1.png') }}" alt="Flag" class="flag-icon-img">
											<span class="lang-text">EN</span>
											<img src="{{ asset('public/theme/default/images/header-dropdown.png') }}" alt="Dropdown" class="dropdown-icon-img">
										</a>
										<div class="dropdown-menu" aria-labelledby="selectLanguage">
											@foreach( get_language_list() as $language )
												<a class="dropdown-item" href="{{ url('select_language/'.$language) }}">{{ $language }}</a>
											@endforeach
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					<!-- Introduce Sidebar -->
					{{-- <div class="introduce">
						<div class="content-introduce">
							<h3>follow instagram</h3>
							<p>@Cosmetic_beauty</p>
							<div class="img-controduce">
								<img src="{{ asset('public/theme/default/images/introduce.jpg') }}" alt="">
								<img src="{{ asset('public/theme/default/images/introduce1.jpg') }}" alt="">
								<img src="{{ asset('public/theme/default/images/introduce2.jpg') }}" alt="">
								<img src="{{ asset('public/theme/default/images/introduce3.jpg') }}" alt="">
								<img src="{{ asset('public/theme/default/images/introduce4.jpg') }}" alt="">
								<img src="{{ asset('public/theme/default/images/introduce5.jpg') }}" alt="">
							</div>
							<h4>newsletter</h4>
							<p>Subscribe to our newsletter</p>
							<form action="{{ url('/newsletter/subscribe') }}" method="POST">
								@csrf
								<input type="email" name="email" placeholder="Email" required>
                                <button class="bt" type="submit"><i class="fa fa-angle-right"></i></button>
							</form>
							<div class="icon-introduce">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
							</div>
							<span class="lnr lnr-cross close-introduce"></span>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		
		<!-- Header Mobile -->
		<div class="container-fluid">
			<div class="header-mobile">
				<div class="header-menu-mobile d-flex justify-content-between">
					<div>
						<button><span class="lnr lnr-menu click-mobile"></span></button>
					</div>
					<div class="logo">
						<a href="{{ url('') }}">
							<img src="{{ get_logo() }}" alt="logo" style="max-height: 50px;">
						</a>
					</div>
					<div>
						<div class="row header-right">
							<ul class="list-inline">
								<li>
									<a href="#" class="cart-index">
										<img src="{{ asset('public/theme/default/images/bag-2.png') }}" alt="" style="width: 16px;height: 22px;margin-top: -10px;">
										<div class="number-cart">{{ \Cart::getTotalQuantity() }}</div>
									</a>
                                    <div class="widget_shopping_cart" id="mini-cart">
                                        @include('theme.default.components.mini-cart')
                                    </div>
								</li>
								<li><a href="javascript:void(0)" class="search-header1"><img src="{{ asset('public/theme/default/images/search-header.png') }}" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a></li>
								<li><a href="javascript:void(0)" class="introduce1"><img src="{{ asset('public/theme/default/images/control-introduce.png') }}" alt="" style="width: 16px;height: 16px;margin-top: -10px;"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Introduce Sidebar Mobile -->
			{{-- <div class="introduce">
				<div class="content-introduce">
					<h3>follow instagram</h3>
					<p>@Cosmetic_beauty</p>
					<div class="img-controduce">
						<img src="{{ asset('public/theme/default/images/introduce.jpg') }}" alt="">
						<img src="{{ asset('public/theme/default/images/introduce1.jpg') }}" alt="">
						<img src="{{ asset('public/theme/default/images/introduce2.jpg') }}" alt="">
						<img src="{{ asset('public/theme/default/images/introduce3.jpg') }}" alt="">
						<img src="{{ asset('public/theme/default/images/introduce4.jpg') }}" alt="">
						<img src="{{ asset('public/theme/default/images/introduce5.jpg') }}" alt="">
					</div>
					<h4>newsletter</h4>
					<p>Subscribe to our newsletter</p>
					<form action="{{ url('/newsletter/subscribe') }}" method="POST">
						@csrf
						<input type="email" name="email" placeholder="Email" required>
                        <button class="bt" type="submit"><i class="fa fa-angle-right"></i></button>
					</form>
					<div class="icon-introduce">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
					</div>
					<span class="lnr lnr-cross close-introduce"></span>
				</div>
			</div> --}}
			
			<!-- Mobile Menu -->
			<div class="menu-mobile">
				<ul>
					<li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'menu-active' : '' }}">home</a></li>
                               
					<li><a href="{{ url('/shop') }}">shop</a><span class="lnr lnr-chevron-down drop-link"></span>
						<ul class="drop-menu">
							@foreach(App\Entity\Category\Category::where('parent_id',null)->take(8)->get() as $category)
								<li><a href="{{ url('/shop?category='.$category->slug) }}">{{ $category->translation->name }}</a></li>
							@endforeach
							<li><a href="{{ url('/cart') }}">Cart</a></li>
							<li><a href="{{ url('/wish_list') }}">Wish List</a></li>
						</ul>
					</li>
					
					<li><a href="{{ url('/contact') }}">contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!--/ End Header -->
	
	@yield('content') 

    <!-- Mobile Cart Badge for AJAX updates -->
    <div id="mobile-cart">
        <span class="total-count">{{ \Cart::getTotalQuantity() }}</span>
    </div>

	<!-- Quick View Shop -->
	<div class="modal fade" id="quickShop" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">


				</div>
			</div>
		</div>
	</div>
	<!-- Quick View Shop end -->
	
 
	<!-- Jquery -->
    <script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>

    <script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('public/theme/default/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('public/theme/default/js/bootstrap.min.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('public/theme/default/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('public/theme/default/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('public/theme/default/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('public/theme/default/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('public/theme/default/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('public/theme/default/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('public/theme/default/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('public/theme/default/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('public/theme/default/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('public/theme/default/js/easing.js') }}"></script>

	<script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
	
	<script src="{{ asset('public/theme/default/js/typeahead.bundle.js') }}"></script>

	<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>
	
	<!-- Active JS -->
	<script src="{{ asset('public/theme/default/js/active.js?v=1.2') }}"></script>

	<!-- Uray Template Custom JS -->
	<script>
		$(document).ready(function() {
			// Owl Carousel for brands
			$('.brand-slider').owlCarousel({
				loop: true,
				margin: 30,
				nav: false,
				dots: false,
				autoplay: true,
				autoplayTimeout: 3000,
				responsive: {
					0: { items: 2 },
					600: { items: 3 },
					1000: { items: 6 }
				}
			});
			
			// Testimonial Carousel Auto-play
			$('#testimonialCarousel').carousel({
				interval: 5000,
				pause: 'hover'
			});
			
			// Search Header Toggle
			$('.search-header1').click(function() {
				$('.search-header').toggleClass('active');
			});
			$('.close-search').click(function() {
				$('.search-header').removeClass('active');
			});
			
			// Introduce Sidebar Toggle
			$('.introduce1').click(function() {
				$('.introduce').addClass('active');
			});
			$('.close-introduce').click(function() {
				$('.introduce').removeClass('active');
			});
			
			// Mobile Menu Toggle
			$('.click-mobile').click(function() {
				$('.menu-mobile').toggleClass('active');
			});
			
			// Mobile Dropdown
			$('.drop-link').click(function() {
				$(this).siblings('.drop-menu').slideToggle();
				$(this).toggleClass('active');
			});
			
			// Cart Dropdown
			$('.cart-index').click(function(e) {
				e.preventDefault();
				$(this).siblings('.widget_shopping_cart').toggleClass('active');
			});

			// Make entire product cards clickable (home products carousel)
			$(document).on('click', '.product-out .card', function(e) {
				// Ignore clicks on interactive elements inside the card
				if ($(e.target).closest('.icon-product .btn, .add-to-cart-btn, .add_to_cart, a').length) {
					return;
				}
				var url = $(this).data('product-url');
				if (url) {
					window.location.href = url;
				}
			});
		});
	</script>

	<!-- Custom JS -->
	@yield('js-script')
</body>
</html>