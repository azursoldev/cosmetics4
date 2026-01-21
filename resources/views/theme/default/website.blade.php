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
	<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	
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
    <!-- Font Awesome CDN Fallback -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoess0OP0BzACB+Q1xw5J7eJq9+7P9m6w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/uray-custom.css?v=1.1') }}">  
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
	
	<!-- Top Promo Bar -->
	<div class="top-promo-bar">
		<div class="top-promo-slider">
			<div class="top-promo-item active">
				<div class="top-promo-content">
					<button class="top-promo-nav top-promo-prev" aria-label="Previous">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<polyline points="15 18 9 12 15 6"></polyline>
						</svg>
					</button>
					<span class="top-promo-text">Free shipping all orders on over $60</span>
					<button class="top-promo-nav top-promo-next" aria-label="Next">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<polyline points="9 18 15 12 9 6"></polyline>
						</svg>
					</button>
				</div>
			</div>
			<div class="top-promo-item">
				<div class="top-promo-content">
					<button class="top-promo-nav top-promo-prev" aria-label="Previous">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<polyline points="15 18 9 12 15 6"></polyline>
						</svg>
					</button>
					<span class="top-promo-text">New arrivals - Shop now!</span>
					<button class="top-promo-nav top-promo-next" aria-label="Next">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<polyline points="9 18 15 12 9 6"></polyline>
						</svg>
					</button>
				</div>
			</div>
			<div class="top-promo-item">
				<div class="top-promo-content">
					<button class="top-promo-nav top-promo-prev" aria-label="Previous">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<polyline points="15 18 9 12 15 6"></polyline>
						</svg>
					</button>
					<span class="top-promo-text">Special discount up to 50% off</span>
					<button class="top-promo-nav top-promo-next" aria-label="Next">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<polyline points="9 18 15 12 9 6"></polyline>
						</svg>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Top Promo Bar -->
	
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
		<div class="header-desktop">
			
			<!-- Div 1: Top Utility Bar (First Image Section) -->
			<div class="header-section-1">
		<div class="container-fluid">
					<div class="utility-row">
						<!-- Left: All Items -->
						<div class="utility-left">
							@if(get_option('phone'))
							<a href="tel:{{ get_option('phone') }}" class="utility-item">
								<i class="fa fa-phone"></i>
								<span>{{ get_option('phone') }}</span>
							</a>
							@endif
							@if(get_option('email'))
							<a href="mailto:{{ get_option('email') }}" class="utility-item">
								<i class="fa fa-envelope"></i>
								<span>{{ get_option('email') }}</span>
							</a>
							<span class="utility-separator"></span>
							@endif
							<a href="{{ url('/about-us') }}" class="utility-link">About Us</a>
							<a href="{{ url('/contact') }}" class="utility-link">Contact</a>
							<span class="utility-badge">
								<i class="fa fa-check-circle"></i>
								<span>Safe Payment</span>
							</span>
							<span class="utility-badge">
								<i class="fa fa-check-circle"></i>
								<span>Free Shipping</span>
							</span>
						</div>
						<!-- Right: Language and Currency -->
						<div class="utility-right">
							<span class="utility-separator"></span>
									<div class="language-selector">
										<a href="#" class="lang-btn" id="selectLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="lang-text">{{ get_language() }}</span>
									<i class="fa fa-chevron-down"></i>
										</a>
										<div class="dropdown-menu" aria-labelledby="selectLanguage">
											@foreach( get_language_list() as $language )
												<a class="dropdown-item" href="{{ url('select_language/'.$language) }}">{{ $language }}</a>
											@endforeach
										</div>
									</div>
							<div class="currency-selector">
								<a href="#" class="currency-btn" id="selectCurrency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="currency-text">{{ session('currency') ? session('currency') : currency() }}</span>
									<i class="fa fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="selectCurrency">
									@foreach(\App\Currency::all() as $curr)
										<a class="dropdown-item" href="{{ url('?currency='.$curr->name) }}">{{ $curr->name }}</a>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Div 2: Main Header Row (Second Image Section) -->
			<div class="header-section-2">
				<div class="container-fluid">
					<div class="header-main-row">
						<!-- Logo -->
						<div class="header-logo">
							<a href="{{ url('') }}" class="bumedi-logo">
								<img src="{{ asset('public/theme/default/images/logo.png') }}" alt="bumedi" class="logo-img-bumedi">
							</a>
						</div>
					
						<!-- Search Bar -->
						<div class="header-search-wrapper">
							<form action="{{ url('/shop') }}" method="GET" class="header-search-form">
								<div class="search-input-wrapper">
									<i class="fa fa-search search-icon"></i>
									<input type="text" name="search" class="header-search-input" placeholder="Search everything at bumedi store...">
							</div>
								<button type="submit" class="search-submit-btn">Search</button>
							</form>
						</div>
						
						<!-- User Actions -->
						<div class="header-actions">
							<div class="action-icons">
								<a href="{{ url('/wish_list') }}" class="action-icon action-icon-wishlist" title="Wishlist">
									<i class="fa fa-heart-o"></i>
								</a>
								<a href="javascript:void(0)" class="action-icon" title="Compare">
									<i class="fa fa-arrows-h"></i>
								</a>
								<div class="action-icon-user-wrapper">
									@if(Auth::check())
									<a href="{{ url('/account') }}" class="action-icon" title="Account">
										<i class="fa fa-user"></i>
									</a>
									@else
									<a href="{{ url('/sign_in') }}" class="action-icon" title="Sign In">
										<i class="fa fa-user"></i>
									</a>
									@endif
									<div class="user-link-text">
										<div class="sign-in-text">Sign In</div>
										<div class="account-text">Account</div>
									</div>
								</div>
							</div>
							<div class="header-cart-section">
								<a href="#" class="cart-icon-wrapper cart-index">
									<i class="fa fa-shopping-cart"></i>
									<span class="cart-count">{{ \Cart::getTotalQuantity() }}</span>
								</a>
								<div class="cart-info">
									<div class="cart-total">
										<span class="cart-amount">{{ show_price(\Cart::getTotal()) }}</span>
										<span class="cart-label">Cart Total</span>
									</div>
								</div>
								<div class="widget_shopping_cart" id="mini-cart">
									@include('theme.default.components.mini-cart')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Div 3: Navigation Menu (Third Image Section) -->
			<div class="header-section-3">
				<div class="container-fluid">
					<nav class="main-navigation">
						<ul class="nav-menu">
							<li class="nav-item has-dropdown">
								<a href="{{ url('/shop') }}" class="nav-link">Categories <i class="fa fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									@foreach(App\Entity\Category\Category::where('parent_id',null)->take(10)->get() as $category)
										<li><a href="{{ url('/shop?category='.$category->slug) }}">{{ $category->translation->name }}</a></li>
									@endforeach
								</ul>
							</li>
							<li class="nav-item has-dropdown">
								<a href="{{ url('/') }}" class="nav-link">Home <i class="fa fa-chevron-down"></i></a>
							</li>
							<li class="nav-item has-dropdown">
								<a href="{{ url('/shop') }}" class="nav-link">Shop <i class="fa fa-chevron-down"></i></a>
								<ul class="dropdown-menu">
									@foreach(App\Entity\Category\Category::where('parent_id',null)->take(10)->get() as $category)
										<li><a href="{{ url('/shop?category='.$category->slug) }}">{{ $category->translation->name }}</a></li>
									@endforeach
								</ul>
							</li>
							<li class="nav-item">
								<a href="{{ url('/shop?category=medication') }}" class="nav-link">Medication</a>
							</li>
							<li class="nav-item">
								<a href="{{ url('/shop?category=allergies') }}" class="nav-link">Allergies</a>
							</li>
							<li class="nav-item">
								<a href="{{ url('/contact') }}" class="nav-link">Contact</a>
							</li>
							<li class="nav-item">
								<a href="{{ url('/blog') }}" class="nav-link">Blog</a>
							</li>
							<li class="nav-item has-dropdown">
								<a href="{{ url('/shop') }}" class="nav-link nav-link-blue">Exclusive Products <i class="fa fa-chevron-down"></i></a>
							</li>
							<li class="nav-item has-dropdown">
								<a href="{{ url('/campaigns') }}" class="nav-link nav-link-orange">Campaigns <i class="fa fa-chevron-down"></i></a>
							</li>
						</ul>
						<div class="nav-actions">
							<a href="{{ url('/order-tracking') }}" class="nav-action-link">
								<i class="fa fa-cube"></i>
								<span>Order Tracking</span>
							</a>
							<a href="{{ url('/faq') }}" class="nav-action-link">
								<i class="fa fa-map-marker"></i>
								<span>FAQ</span>
							</a>
						</div>
					</nav>
				</div>
			</div>
			
		</div>
		<!--/ End Header Desktop -->
		
		<!-- Header Mobile -->
		<div class="container-fluid">
			<div class="header-mobile">
				<div class="header-menu-mobile d-flex justify-content-between align-items-center">
					<div>
						<button class="mobile-menu-toggle click-mobile" type="button" aria-label="Toggle menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<div class="logo">
						<a href="{{ url('') }}" class="bumedi-logo">
							<img src="{{ asset('public/theme/default/images/bumedi-logo.svg') }}" alt="bumëdi" class="logo-img-bumedi">
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
				<button class="mobile-menu-close" type="button" aria-label="Close menu">
					<i class="fa fa-times"></i>
				</button>
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
			// Top Promo Bar Carousel
			let currentPromoIndex = 0;
			const promoItems = $('.top-promo-item');
			const totalItems = promoItems.length;
			
			// Function to update promo text
			function updatePromoText(index) {
				promoItems.removeClass('active');
				promoItems.eq(index).addClass('active');
			}
			
			// Next button
			$('.top-promo-next').click(function(e) {
				e.preventDefault();
				currentPromoIndex = (currentPromoIndex + 1) % totalItems;
				updatePromoText(currentPromoIndex);
			});
			
			// Previous button
			$('.top-promo-prev').click(function(e) {
				e.preventDefault();
				currentPromoIndex = (currentPromoIndex - 1 + totalItems) % totalItems;
				updatePromoText(currentPromoIndex);
			});
			
			// Auto-rotate promo messages every 5 seconds
			setInterval(function() {
				currentPromoIndex = (currentPromoIndex + 1) % totalItems;
				updatePromoText(currentPromoIndex);
			}, 5000);
			
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
			
			// Mobile Menu Close
			$('.mobile-menu-close').click(function() {
				$('.menu-mobile').removeClass('active');
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