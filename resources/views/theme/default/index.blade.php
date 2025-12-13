@extends('theme.default.website')

@section('content')
<style>
	a.carousel-control-prev {
    position: absolute !important;
    left: -34px !IMPORTANT;
}

	.content-deal-day {
		margin: 0 auto;
	}
	/* Banner with Product Image */
	.slide-with-product {
		background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
		min-height: 700px;
		display: flex;
		align-items: center;
	}
	.slide-with-product .content-slide h2 {
		font-size: 70px;
		color: #333;
	}
	.product-showcase {
		position: relative;
		animation: float 3s ease-in-out infinite;
		padding: 50px;
		text-align: center;
	}
	.product-showcase img {
		max-width: 100%;
		height: auto;
		filter: drop-shadow(0 10px 30px rgba(0,0,0,0.15));
	}
	@keyframes float {
		0%, 100% {
			transform: translateY(0px);
		}
		50% {
			transform: translateY(-20px);
		}
	}
	.slide-with-product .content-slide {
		z-index: 2;
	}
	@media (max-width: 768px) {
		.slide-with-product .content-slide h2 {
			font-size: 40px;
		}
		.product-showcase {
			padding: 20px;
			margin-top: 30px;
		}
	}
</style>
<div class="content-homepage">
    <!-- Hero Banner Section with Image Cards -->
    <div class="hero-banner-pharmez">
        <div class="container">
            <!-- Top Section: Text Content and Client Stats -->
            <div class="row align-items-center hero-top-section">
                <div class="col-lg-7 col-md-12 hero-content-left">
                    <div class="hero-tags">
                        <span>• Health</span>
                        <span>• Trust</span>
                        <span>• Online</span>
                    </div>
                    <h1 class="hero-title">Instant Pharmacy<br>Access For You</h1>
                    <p class="hero-description">Order prescription and over-the-counter medicines online with confidence.</p>
                    <div class="hero-buttons">
                        <a href="{{ url('/shop') }}" class="btn-shop-now">Shop Now</a>
                        <a href="{{ url('/upload-prescription') }}" class="btn-upload-prescription">
                            <i class="fa fa-cloud-upload-alt"></i>
                            Upload Prescription
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 hero-content-right">
                    <div class="hero-clients">
                        <div class="client-avatars">
                            <img src="{{ asset('public/theme/default/images/client-img1.jpg') }}" alt="Client" class="avatar-circle">
                            <img src="{{ asset('public/theme/default/images/client-img2.jpg') }}" alt="Client" class="avatar-circle">
                            <img src="{{ asset('public/theme/default/images/client-img3.jpg') }}" alt="Client" class="avatar-circle">
                            <img src="{{ asset('public/theme/default/images/client-img4.jpg') }}" alt="Client" class="avatar-circle">
                        </div>
                        <div class="client-stats">
                            <h2 class="client-count">4k+</h2>
                            <p class="client-text">Happy clients</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section: Image Cards -->
            <div class="row hero-bottom-section">
                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="banner-card banner-card-left">
                        <img src="{{ asset('public/theme/default/images/banner-img1.jpg') }}" alt="Trusted Drug Store" class="banner-card-img">
                        <div class="trusted-badge">
                            <i class="fa fa-check-circle"></i>
                            <span>Trusted Drug Store</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="banner-card banner-card-right">
                        <img src="{{ asset('public/theme/default/images/banner-img2.jpg') }}" alt="Professional Pharmacist" class="banner-card-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Hero Banner-->

    <!-- Benefits Section -->
    <div class="benefits-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="benefit-card">
                        <div class="benefit-icon-wrapper">
                            <img src="{{ asset('public/theme/default/images/benefits-icon1.png') }}" alt="Free Shipping" class="benefit-icon">
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Free Shipping & Returns</h3>
                            <p class="benefit-description">For all order over $200</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="benefit-card">
                        <div class="benefit-icon-wrapper">
                            <img src="{{ asset('public/theme/default/images/benefits-icon2.png') }}" alt="Secure Payment" class="benefit-icon">
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Secure Payment</h3>
                            <p class="benefit-description">Ensure Secure Payment</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="benefit-card">
                        <div class="benefit-icon-wrapper">
                            <img src="{{ asset('public/theme/default/images/benefits-icon3.png') }}" alt="Money Back" class="benefit-icon">
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Money Back Guarantee</h3>
                            <p class="benefit-description">Returning Money in 30 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="benefit-card">
                        <div class="benefit-icon-wrapper">
                            <img src="{{ asset('public/theme/default/images/benefits-icon4.png') }}" alt="Customer Support" class="benefit-icon">
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">24/7 Customer Support</h3>
                            <p class="benefit-description">Friendly Customer Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Benefits Section-->

    <!-- Popular Categories Section -->
    <div class="popular-categories-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">TOP CHOICES</span>
                <h2 class="section-title">Our Popular Categories</h2>
            </div>
            <div class="row categories-row">
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/popular-category1.jpg') }}" alt="Nutrition & Weight" class="category-image">
                            <div class="category-overlay">
                                <span>Nutrition & Weight</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/popular-category2.jpg') }}" alt="Skin Essentials" class="category-image">
                            <div class="category-overlay">
                                <span>Skin Essentials</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/popular-category3.jpg') }}" alt="Vitamins & Minerals" class="category-image">
                            <div class="category-overlay">
                                <span>Vitamins & Minerals</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/popular-category4.jpg') }}" alt="Cold & Flu Care" class="category-image">
                            <div class="category-overlay">
                                <span>Cold & Flu Care</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Popular Categories Section-->

    <!-- Featured Products Section -->
    <div class="featured-products-section">
        <div class="container">
            <div class="section-header-featured">
                <span class="section-badge-featured">BEST ITEMS</span>
                <h2 class="section-title-featured">Our Featured Products</h2>
            </div>
            
            <!-- Category Navigation -->
            <div class="category-nav">
                <ul class="category-nav-list">
                    <li><a href="#" class="category-nav-item active">All</a></li>
                    <li><a href="#" class="category-nav-item">Cardiology</a></li>
                    <li><a href="#" class="category-nav-item">Neurology</a></li>
                    <li><a href="#" class="category-nav-item">Pediatrics</a></li>
                    <li><a href="#" class="category-nav-item">Gynecology</a></li>
                </ul>
            </div>
            
            <!-- Products Grid -->
            <div class="products-carousel-container">
                <div class="products-carousel-track">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/product1.png') }}" alt="VitalEase Multivitamins" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Supplement</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">VitalEase Multivitamins</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$63.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/product2.png') }}" alt="DermaGlow Skin Cream" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Healthy Skin</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">DermaGlow Skin Cream</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$84.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/product3.png') }}" alt="CalmFlu Relief Syrup" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Flu Remedy</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">CalmFlu Relief Syrup</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$96.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="featured-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/product4.png') }}" alt="NutriSlim Capsules" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Herbal</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">NutriSlim Capsules</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$42.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="products-pagination">
                <span class="pagination-dot active"></span>
                <span class="pagination-dot"></span>
                <span class="pagination-dot"></span>
            </div>
        </div>
    </div>
    <!--end Featured Products Section-->

    <!-- How It Works Section -->
    <div class="how-it-works-section">
        <div class="container" style="position: relative; z-index: 2;">
            <div class="how-it-works-wrapper">
                <!-- Left Side: Image -->
                <div class="how-it-works-image">
                    <img src="{{ asset('pharmez1/pharmez1/images/work-img.jpg') }}" alt="Delivery Service" class="delivery-image">
                </div>
                
                <!-- Right Side: Content -->
                <div class="how-it-works-content">
                    <div class="process-badge">OUR PROCESS</div>
                    <h2 class="process-title">How it Works</h2>
                    
                    <div class="process-steps">
                        <!-- Step 1 -->
                        <div class="process-step">
                            <div class="step-icon">
                                <img src="{{ asset('pharmez1/pharmez1/images/work-icon1.png') }}" alt="Upload Prescription" class="step-icon-img">
                            </div>
                            <div class="step-content">
                                <h3 class="step-title">Upload Your Prescription</h3>
                                <p class="step-description">Snap a photo or upload your doctor's prescription securely.</p>
                            </div>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="process-step">
                            <div class="step-icon">
                                <img src="{{ asset('pharmez1/pharmez1/images/work-icon2.png') }}" alt="Choose Products" class="step-icon-img">
                            </div>
                            <div class="step-content">
                                <h3 class="step-title">Choose Your Products</h3>
                                <p class="step-description">Browse and select the medicines or health products you need.</p>
                            </div>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="process-step">
                            <div class="step-icon">
                                <img src="{{ asset('pharmez1/pharmez1/images/work-icon3.png') }}" alt="Get Delivered" class="step-icon-img">
                            </div>
                            <div class="step-content">
                                <h3 class="step-title">Get It Delivered</h3>
                                <p class="step-description">Receive your order at your doorstep — fast, safe, and hassle-free.</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ url('/shop') }}" class="shop-now-btn">Shop Now</a>
                </div>
                
            </div>
        </div>
    </div>
    <!--end How It Works Section-->

    <!-- Best Selling Products Section -->
    <div class="best-selling-section">
        <div class="container">
            <div class="section-header-best-selling">
                <span class="section-badge-best-selling">MOST DEMANDING</span>
                <h2 class="section-title-best-selling">Best Selling Products</h2>
            </div>
            
            <!-- Products Grid -->
            <div class="row best-selling-products-grid">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="best-selling-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('pharmez1/pharmez1/images/best-product1.png') }}" alt="ImmunoBoost" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Vitamin</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">ImmunoBoost</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$63.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="best-selling-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('pharmez1/pharmez1/images/best-product2.png') }}" alt="MetaboTrim" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Herbal</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">MetaboTrim</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$87.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="best-selling-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('pharmez1/pharmez1/images/best-product3.png') }}" alt="DermaGlow" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Cream</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">DermaGlow</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$55.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="best-selling-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('pharmez1/pharmez1/images/best-product4.png') }}" alt="CoughRelief Max" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Syrup</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">CoughRelief Max</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$42.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="best-selling-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('pharmez1/pharmez1/images/best-product5.png') }}" alt="NutriCore Essentials" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Vitamin</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">NutriCore Essentials</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$12.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="best-selling-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('pharmez1/pharmez1/images/best-product6.png') }}" alt="Slimvia Burn" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Herbal</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">Slimvia Burn</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$26.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="best-selling-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('pharmez1/pharmez1/images/best-product7.png') }}" alt="AcneShield Gel" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Cream</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">AcneShield Gel</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$82.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="best-selling-product-card">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('pharmez1/pharmez1/images/best-product8.png') }}" alt="FluAway Tabs" class="product-image">
                            <button class="product-wishlist-btn">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="product-details">
                            <div class="product-top-row">
                                <p class="product-category">Tablet</p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <span>4.8/5</span>
                                </div>
                            </div>
                            <h3 class="product-name">FluAway Tabs</h3>
                            <div class="product-bottom-row">
                                <button class="add-to-cart-btn">
                                    Add to cart
                                </button>
                                <div class="product-price">$36.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Best Selling Products Section-->

    <!-- Testimonials Section -->
    <div class="testimonials-section">
        <div class="container">
            <div class="testimonial-card">
                <div class="testimonial-header">
                    <span class="testimonial-badge">TESTIMONIALS</span>
                    <h2 class="testimonial-title">Our Client Reviews</h2>
                </div>
                
                <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Testimonial 1 -->
                        <div class="carousel-item active">
                            <div class="testimonial-content">
                                <div class="testimonial-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-text">"Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas aspernatur aurodit aut fugit, sed neatae vitae dicta ripiscing elit, sed do euismod tempor incidunt labore are dolore magna aliqua aut enim a minim adipiscing elit, sed do euismod tempor incidunt labore minima veniam."</p>
                                <div class="testimonial-author">
                                    <h3 class="testimonial-name">Fergus Douchebag</h3>
                                    <p class="testimonial-role">Happy Customer</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="carousel-item">
                            <div class="testimonial-content">
                                <div class="testimonial-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-text">"Amazing products! The quality is outstanding and my skin has never looked better. I absolutely love the natural ingredients and the results are visible within weeks. Highly recommend to anyone looking for genuine cosmetic products."</p>
                                <div class="testimonial-author">
                                    <h3 class="testimonial-name">Sarah Johnson</h3>
                                    <p class="testimonial-role">Happy Customer</p>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="carousel-item">
                            <div class="testimonial-content">
                                <div class="testimonial-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-text">"Best beauty products I've ever used! The customer service is excellent and the products are truly organic. My skin feels softer and more radiant. Will definitely continue using these products."</p>
                                <div class="testimonial-author">
                                    <h3 class="testimonial-name">Emily Williams</h3>
                                    <p class="testimonial-role">Happy Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Client Avatars Navigation -->
                    <div class="testimonial-avatars">
                        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <div class="avatars-row">
                            <div class="avatar-item active" data-target="#testimonialCarousel" data-slide-to="0">
                                <img src="{{ asset('pharmez1/pharmez1/images/user1.png') }}" alt="Client" class="avatar-img">
                            </div>
                            <div class="avatar-item" data-target="#testimonialCarousel" data-slide-to="1">
                                <img src="{{ asset('pharmez1/pharmez1/images/user2.png') }}" alt="Client" class="avatar-img">
                            </div>
                            <div class="avatar-item" data-target="#testimonialCarousel" data-slide-to="2">
                                <img src="{{ asset('pharmez1/pharmez1/images/user3.png') }}" alt="Client" class="avatar-img">
                            </div>
                            <div class="avatar-item" data-target="#testimonialCarousel" data-slide-to="3">
                                <img src="{{ asset('pharmez1/pharmez1/images/user4.png') }}" alt="Client" class="avatar-img">
                            </div>
                        </div>
                        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end testimonials-->

    <!--Product Our-->
    <div class="container">
        <div class="product-out">
            <div class="title">
                <h2 class="text-center">Our Products</h2>
            </div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    @php
                        $products = \App\Entity\Product\Product::where('is_active', 1)
                            ->orderBy('created_at', 'desc')
                            ->take(16)
                            ->get();
                        $chunks = $products->chunk(8);
                    @endphp
                    
                    @foreach($chunks as $key => $chunk)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="row product">
                            @foreach($chunk as $product)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card" data-product-url="{{ url('/product/'.$product->slug) }}" style="cursor: pointer;">
                                    <div class="card-img-top">
                                        <a href="{{ url('/product/'.$product->slug) }}" class="wp-post-image">
                                            @if($product->image && $product->image->file_path)
                                                <img class="image-cover" src="{{ asset('storage/app/'.$product->image->file_path) }}" alt="{{ $product->name }}">
                                            @else
                                                <img class="image-cover" src="{{ asset('public/theme/default/images/product.jpg') }}" alt="{{ $product->name }}">
                                            @endif
                                        </a>
                                        @if($product->created_at > now()->subDays(30))
                                            <p class="onnew">New</p>
											@endif
                                        @if($product->discount_price)
                                            <p class="onsale">Sale</p>
										@endif
                                        <div class="icon-product">
                                            @if($product->product_type != 'variable_product')
                                                <a href="{{ url('add_to_cart/'.$product->id) }}" class="btn add_to_cart" data-type="{{ $product->product_type }}" title="Add to Cart">
                                                    <span class="lnr lnr-cart"></span>
                                                </a>
                                            @else
                                                <a href="{{ url('/product/'.$product->slug) }}" class="btn" title="View Options">
                                                    <span class="lnr lnr-cart"></span>
                                                </a>
                                            @endif
                                            <a href="{{ url('/product/'.$product->slug) }}" class="btn" title="Quick View">
                                                <span class="lnr lnr-magnifier"></span>
                                            </a>
                                            <button class="btn" title="Wishlist">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                    </div>
								</div>
                                    <div class="card-body">
                                        @if($product->categories->first())
                                            <p class="card-title"><a href="{{ url('/shop') }}">{{ $product->categories->first()->name }}</a></p>
										@endif
                                        <p class="woocommerce-loop-product__title">
                                            <a href="{{ url('/product/'.$product->slug) }}">{{ $product->name }}</a>
                                        </p>
                                        <span class="price">
                                            @if($product->discount_price)
                                                <del>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">{{ get_option('currency_symbol') }}</span>{{ $product->price }}
											</span>
                                                </del>
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">{{ get_option('currency_symbol') }}</span>{{ $product->discount_price }}
											</span>
                                                </ins>
										@else
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">{{ get_option('currency_symbol') }}</span>{{ $product->price }}
											</span>	
                                                </ins>
										@endif
                                        </span>
                                    </div>
									</div>
								</div>
                            @endforeach
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
    <!--end Product Our-->

    <!-- Latest News (Blog) -->
    <div class="container">
        <div class="lastest">
            <div class="title">
                <h2>Latest News</h2>
            </div>
            <div class="row">
                <!-- Blog Post 1 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-1">
                        <div class="blog-card-content">
                            <div class="blog-image">
                                <img src="{{ asset('public/theme/default/images/lastest1.jpg') }}" alt="">
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">But I must explain to you how all this</a></h4>
                                <p class="blog-meta">By Sugar / May 18.2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-2">
                        <div class="blog-card-content">
                            <div class="blog-image">
                                <img src="{{ asset('public/theme/default/images/lastest2.jpg') }}" alt="">
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">Neque porr quisquam dolorem</a></h4>
                                <p class="blog-meta">By Sugar / May 18.2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-3">
                        <div class="blog-card-content">
                            <div class="blog-image">
                                <img src="{{ asset('public/theme/default/images/lastest3.jpg') }}" alt="">
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">Ut enim ad minima veniam quis nostrum</a></h4>
                                <p class="blog-meta">By Sugar / May 18.2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 4 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-4">
                        <div class="blog-card-content">
                            <div class="blog-image">
                                <img src="{{ asset('public/theme/default/images/lastest4.jpg') }}" alt="">
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">Itaque earum rerum hic tenetur</a></h4>
                                <p class="blog-meta">By Sugar / May 18.2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 5 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-5">
                        <div class="blog-card-content">
                            <div class="blog-image">
                                <img src="{{ asset('public/theme/default/images/lastest5.jpg') }}" alt="">
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">In a free hour, when our power</a></h4>
                                <p class="blog-meta">By Sugar / May 18.2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 6 -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-6">
                        <div class="blog-card-content">
                            <div class="blog-image">
                                <img src="{{ asset('public/theme/default/images/lastest6.jpg') }}" alt="">
                            </div>
                            <div class="blog-info">
                                <h4><a href="#">On the other hand, we denounce</a></h4>
                                <p class="blog-meta">By Sugar / May 18.2019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Latest News-->

    <!-- Brands Section -->
    {{-- <div class="container">
        <div class="brand">
            <div class="title">
                <h2>Brand</h2>
				</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme brand-slider">
				@php 
                            $brands = \App\Entity\Brand\Brand::all();
				@endphp
                        @foreach($brands as $brand)
                        <div class="item">
                            <a href="{{ url('/shop?brand='.$brand->id) }}">
                                @if($brand->image)
                                    <img src="{{ asset('public/uploads/media/'.$brand->image) }}" alt="{{ $brand->name }}">
										@else
                                    <img src="{{ asset('public/theme/default/images/brands/adidas.png') }}" alt="{{ $brand->name }}">
										@endif
                            </a>
                        </div>
                        @endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
    <!--end Brands-->
</div> --}}

<style>
/* Hero Banner Pharmez Styles */
.hero-banner-pharmez {
    background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
    position: relative;
    padding: 100px 0 80px 0;
    overflow: hidden;
    border-radius: 0 0 30px 30px;
}

/* Medical Cross Pattern Background */
.hero-banner-pharmez::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        /* Plus signs (crosses) */
        linear-gradient(90deg, transparent 45%, rgba(255,255,255,0.08) 48%, rgba(255,255,255,0.08) 52%, transparent 55%),
        linear-gradient(0deg, transparent 45%, rgba(255,255,255,0.08) 48%, rgba(255,255,255,0.08) 52%, transparent 55%),
        /* Hexagonal patterns */
        radial-gradient(circle at 30% 30%, rgba(255,255,255,0.06) 3px, transparent 3px),
        radial-gradient(circle at 70% 70%, rgba(255,255,255,0.06) 3px, transparent 3px);
    background-size: 
        80px 80px,
        80px 80px,
        120px 120px,
        120px 120px;
    background-position: 
        0 0,
        0 0,
        20px 20px,
        60px 60px;
    opacity: 0.4;
    pointer-events: none;
}

.hero-top-section {
    margin-bottom: 60px;
}

.hero-content-left {
    position: relative;
    z-index: 2;
    padding: 0;
}

.hero-tags {
    display: flex;
    gap: 15px;
    margin-bottom: 30px;
    flex-wrap: wrap;
}

.hero-tags span {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
}

.hero-title {
    font-size: 56px;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 25px;
    font-family: 'Poppins', sans-serif;
}

.hero-description {
    font-size: 18px;
    color: #fff;
    line-height: 1.6;
    margin-bottom: 40px;
    opacity: 0.95;
    font-family: 'Poppins', sans-serif;
}

.hero-buttons {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.btn-shop-now {
    display: inline-block;
    padding: 15px 35px;
    background: #FCD34D;
    color: #000;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
}

.btn-shop-now:hover {
    background: #FBBF24;
    color: #000;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(252, 211, 77, 0.3);
}

.btn-upload-prescription {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 35px;
    background: transparent;
    color: #fff;
    text-decoration: none;
    border: 2px solid #fff;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
}

.btn-upload-prescription i {
    font-size: 14px;
}

.btn-upload-prescription:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: #fff;
    color: #fff;
    transform: translateY(-2px);
}

.hero-content-right {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 0;
}

.hero-clients {
    display: flex;
    align-items: center;
    gap: 20px;
}

.client-avatars {
    display: flex;
    position: relative;
    margin-right: 15px;
}

.client-avatars .avatar-circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid rgba(255, 255, 255, 0.3);
    margin-left: -12px;
    position: relative;
    z-index: 1;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    object-fit: cover;
}

.client-avatars .avatar-circle:first-child {
    margin-left: 0;
    z-index: 4;
}

.client-avatars .avatar-circle:nth-child(2) {
    z-index: 3;
}

.client-avatars .avatar-circle:nth-child(3) {
    z-index: 2;
}

.client-avatars .avatar-circle:nth-child(4) {
    z-index: 1;
}

.client-stats {
    text-align: left;
}

.client-count {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    margin: 0;
    line-height: 1;
    font-family: 'Poppins', sans-serif;
}

.client-text {
    font-size: 16px;
    color: #fff;
    margin: 5px 0 0 0;
    opacity: 0.9;
    font-family: 'Poppins', sans-serif;
}

@media (max-width: 991px) {
    /* How It Works Section Tablet */
    .how-it-works-wrapper {
        flex-direction: column;
    }
    
    .how-it-works-image {
        height: 400px;
    }
    
    .how-it-works-content {
        height: auto;
        padding: 50px 40px;
    }
    
    .process-title {
        font-size: 40px;
    }
    
    .pill-overlay {
        display: none;
    }
    
    .hero-banner-pharmez {
        padding: 80px 0 60px 0;
    }
    
    .hero-top-section {
        margin-bottom: 50px;
    }
    
    .hero-title {
        font-size: 40px;
    }
    
    .hero-content-right {
        justify-content: flex-start;
        margin-top: 40px;
    }
    
    .hero-buttons {
        flex-direction: column;
    }
    
    .btn-shop-now,
    .btn-upload-prescription {
        width: 100%;
        text-align: center;
        justify-content: center;
    }
}

@media (max-width: 767px) {
    .hero-title {
        font-size: 32px;
    }
    
    .hero-description {
        font-size: 16px;
    }
    
    .client-count {
        font-size: 36px;
    }
}

/* Hero Bottom Section - Image Cards */
.hero-bottom-section {
    position: relative;
    z-index: 2;
    margin-top: 0;
}

.banner-card {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    transition: all 0.3s;
    height: 100%;
    background: #fff;
}

.banner-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.banner-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    min-height: 450px;
    border-radius: 20px;
}

.banner-card-left {
    position: relative;
}

.trusted-badge {
    position: absolute;
    bottom: 25px;
    left: 25px;
    background: rgba(255, 255, 255, 0.95);
    color: #10B981;
    padding: 12px 22px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    font-size: 16px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    z-index: 10;
    font-family: 'Poppins', sans-serif;
    white-space: nowrap;
}

.trusted-badge i {
    font-size: 20px;
    color: #10B981;
}

@media (max-width: 991px) {
    .hero-bottom-section {
        margin-top: 0;
    }
    
    .banner-card-img {
        min-height: 300px;
    }
}

@media (max-width: 767px) {
    .hero-banner-pharmez {
        padding: 60px 0 40px 0;
    }
    
    .hero-top-section {
        margin-bottom: 40px;
    }
    
    .banner-card-img {
        min-height: 250px;
    }
    
    .trusted-badge {
        bottom: 15px;
        left: 15px;
        padding: 8px 15px;
        font-size: 14px;
    }
    
    .trusted-badge i {
        font-size: 16px;
    }
}

/* Benefits Section Styles */
.benefits-section {
    background: #fff;
    padding: 60px 0;
    position: relative;
}

.benefits-section .row {
    display: flex;
    flex-wrap: nowrap;
    gap: 60px;
    justify-content: center;
    align-items: center;
}

.benefit-card {
    display: flex;
    align-items: center;
    gap: 18px;
    padding: 20px 15px;
    transition: all 0.3s ease;
    width: 335.7px;
    height: 85px;
    box-sizing: border-box;
    margin: 0 auto;
}

.benefits-section .col-lg-3 {
    padding-left: 0;
    padding-right: 0;
    margin-bottom: 0;
    flex: 0 0 auto;
    width: auto;
}

.benefit-card:hover {
    transform: translateY(-2px);
}

.benefit-icon-wrapper {
    width: 70px;
    height: 70px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 2px 10px rgba(139, 92, 246, 0.08);
    transition: all 0.3s ease;
}

.benefit-card:hover .benefit-icon-wrapper {
    box-shadow: 0 4px 15px rgba(139, 92, 246, 0.15);
}

.benefit-icon {
    width: 38px;
    height: 38px;
    object-fit: contain;
}

.benefit-content {
    flex: 1;
}

.benefit-title {
    font-size: 17px;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 6px;
    font-family: 'Poppins', sans-serif;
    line-height: 1.4;
}

.benefit-description {
    font-size: 14px;
    color: #6b7280;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    line-height: 1.5;
}

@media (max-width: 991px) {
    .benefits-section {
        padding: 50px 0;
    }
    
    .benefits-section .row {
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .benefit-card {
        gap: 15px;
        padding: 18px 12px;
        width: 100%;
        max-width: 335.7px;
        height: auto;
        min-height: 85px;
    }
    
    .benefit-icon-wrapper {
        width: 65px;
        height: 65px;
    }
    
    .benefit-icon {
        width: 35px;
        height: 35px;
    }
    
    .benefit-title {
        font-size: 16px;
        margin-bottom: 5px;
    }
    
    .benefit-description {
        font-size: 13px;
    }
}

@media (max-width: 767px) {
    .benefits-section {
        padding: 40px 0;
    }
    
    .benefits-section .row {
        flex-wrap: wrap;
        gap: 15px;
    }
    
    .benefit-card {
        padding: 15px 10px;
        margin-bottom: 0;
        gap: 12px;
        width: 100%;
        max-width: 335.7px;
        height: auto;
        min-height: 85px;
    }
    
    .benefit-icon-wrapper {
        width: 60px;
        height: 60px;
    }
    
    .benefit-icon {
        width: 32px;
        height: 32px;
    }
    
    .benefit-title {
        font-size: 15px;
        margin-bottom: 4px;
    }
    
    .benefit-description {
        font-size: 12px;
    }
}

/* Popular Categories Section Styles */
.popular-categories-section {
    background: #faf9f5;
    padding: 80px 0;
    position: relative;
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-badge {
    display: inline-block;
    color: #8B5CF6;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.section-title {
    font-size: 42px;
    font-weight: 700;
    color: #1f2937;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.categories-row {
    display: flex;
    flex-wrap: nowrap;
    gap: 50px;
    justify-content: center;
    align-items: stretch;
}

.category-card {
    background: transparent;
    border: none;
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    width: 322px;
    height: 378px;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.category-image-wrapper {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    border-radius: 15px;
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.category-card:hover .category-image {
    transform: scale(1.05);
}

.category-overlay {
    position: absolute;
    bottom: 0;
    left: 15px;
    right: 15px;
    background: rgba(255, 255, 255, 0.95);
    padding: 18px 20px;
    text-align: center;
    backdrop-filter: blur(5px);
    margin-bottom: 15px;
    border-radius: 8px;
}

.category-overlay span {
    color: #1f2937;
    font-size: 16px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    display: block;
    transition: all 0.3s ease;
}

.category-card:hover .category-overlay span {
    color: #8B5CF6;
}

.popular-categories-section .col-lg-3 {
    padding-left: 0;
    padding-right: 0;
    flex: 0 0 auto;
    width: auto;
}

@media (max-width: 991px) {
    .popular-categories-section {
        padding: 60px 0;
    }
    
    .section-title {
        font-size: 32px;
    }
    
    .categories-row {
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .category-card {
        width: 100%;
        max-width: 322px;
        height: auto;
        min-height: 378px;
    }
    
    .category-image-wrapper {
        height: 200px;
    }
}

@media (max-width: 767px) {
    .popular-categories-section {
        padding: 50px 0;
    }
    
    .section-header {
        margin-bottom: 40px;
    }
    
    .section-badge {
        font-size: 12px;
    }
    
    .section-title {
        font-size: 28px;
    }
    
    .categories-row {
        flex-wrap: wrap;
        gap: 15px;
    }
    
    .category-card {
        width: 100%;
        max-width: 322px;
        height: auto;
        min-height: 378px;
    }
    
    .category-image-wrapper {
        height: 100%;
    }
    
    .category-overlay {
        padding: 15px 18px;
    }
    
    .category-overlay span {
        font-size: 14px;
    }
}

/* Featured Products Section Styles */
.featured-products-section {
    background: #fff;
    padding: 80px 0;
    position: relative;
}

/* Promotional Banners Section Styles */
.promotional-banners-section {
    background: #fff;
    padding: 80px 0;
    position: relative;
}

.promotional-banners-grid {
    display: flex;
    flex-wrap: nowrap;
    gap: 30px;
    justify-content: center;
}

.promotional-banners-grid .col-lg-4 {
    flex: 0 0 auto;
    width: calc(33.333% - 20px);
    max-width: calc(33.333% - 20px);
}

.promotional-banner {
    border-radius: 20px;
    overflow: hidden;
    height: 280px;
    position: relative;
    transition: transform 0.3s ease;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.promotional-banner:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.banner-vitamins {
    background: #f5f1e8;
}

.banner-baby {
    background: #fce7f3;
}

.banner-wellness {
    background: #f3f4f6;
}

.banner-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 100%;
    padding: 30px;
    position: relative;
}

.banner-text {
    flex: 1;
    z-index: 2;
}

.banner-offer {
    margin-bottom: 15px;
}

.offer-label {
    font-size: 14px;
    font-weight: 600;
    color: #1f2937;
    font-family: 'Poppins', sans-serif;
    display: block;
    margin-bottom: 5px;
}

.offer-main {
    display: flex;
    align-items: baseline;
    gap: 5px;
}

.offer-percentage {
    font-size: 48px;
    font-weight: 700;
    color: #1f2937;
    font-family: 'Poppins', sans-serif;
    line-height: 1;
}

.offer-type {
    font-size: 18px;
    font-weight: 600;
    color: #1f2937;
    font-family: 'Poppins', sans-serif;
}

.banner-category {
    font-size: 20px;
    font-weight: 700;
    color: #1f2937;
    margin: 20px 0;
    font-family: 'Poppins', sans-serif;
    line-height: 1.3;
}

.browse-all-btn {
    display: inline-block;
    padding: 10px 24px;
    background: #374151;
    color: #fff;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    font-family: 'Poppins', sans-serif;
}

.banner-baby .browse-all-btn {
    background: #ec4899;
}

.browse-all-btn:hover {
    background: #1f2937;
    transform: translateY(-2px);
    color: #fff;
    text-decoration: none;
}

.banner-baby .browse-all-btn:hover {
    background: #db2777;
}

.banner-image {
    flex: 1;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    position: relative;
    z-index: 1;
}

.banner-img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
    height: 220px;
}

/* Responsive */
@media (max-width: 991px) {
    .promotional-banner {
        height: 250px;
    }
    
    .offer-percentage {
        font-size: 40px;
    }
    
    .banner-category {
        font-size: 18px;
    }
}

@media (max-width: 767px) {
    .promotional-banners-section {
        padding: 60px 0;
    }
    
    .promotional-banner {
        height: 220px;
    }
    
    .banner-content {
        padding: 20px;
    }
    
    .offer-percentage {
        font-size: 36px;
    }
    
    .banner-category {
        font-size: 16px;
        margin: 15px 0;
    }
    
    .banner-img {
        height: 160px;
    }
}

/* Best Selling Products Section Styles */
.best-selling-section {
    background: #fff;
    padding: 80px 0;
    position: relative;
}

.section-header-best-selling {
    text-align: center;
    margin-bottom: 50px;
}

.section-badge-best-selling {
    display: inline-block;
    color: #8B5CF6;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.section-title-best-selling {
    font-size: 42px;
    font-weight: 700;
    color: #1f2937;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.best-selling-products-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
}

.best-selling-product-card {
    background: #fff;
    border-radius: 20px;
    overflow: visible;
    transition: all 0.3s ease;
    width: 100%;
    max-width: 342.6px;
    height: 558.2px;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    position: relative;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.best-selling-product-card:hover {
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.best-selling-product-card .product-image-wrapper {
    position: relative;
    width: 100%;
    height: 350px;
    overflow: hidden;
    background: #f0f4f8;
    display: flex;
    align-items: center;
    justify-content: center;
}

.best-selling-product-card .product-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 30px;
    transition: transform 0.3s ease;
}

.best-selling-product-card .product-wishlist-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.9);
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 10;
}

.best-selling-product-card .product-wishlist-btn:hover {
    background: #fff;
    transform: scale(1.1);
}

.best-selling-product-card .product-wishlist-btn i {
    color: #6b7280;
    font-size: 16px;
}

.best-selling-product-card .product-wishlist-btn:hover i {
    color: #ef4444;
}

.best-selling-product-card .product-details {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 25px;
    padding-right: 25px;
    display: flex;
    flex-direction: column;
    background: #fff;
    border-radius: 12px;
    width: 321px;
    height: 171.6px;
    box-sizing: border-box;
    margin: -15px auto 0;
    position: relative;
    z-index: 2;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.best-selling-product-card .product-top-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.best-selling-product-card .product-category {
    color: #4b5563;
    font-size: 14px;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.best-selling-product-card .product-name {
    font-size: 18px;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 10px 0;
    font-family: 'Poppins', sans-serif;
    line-height: 1.3;
}

.best-selling-product-card .product-rating {
    display: flex;
    align-items: center;
    gap: 5px;
    margin: 0;
}

.best-selling-product-card .product-rating i {
    color: #fbbf24;
    font-size: 14px;
}

.best-selling-product-card .product-rating span {
    color: #4b5563;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
}

.best-selling-product-card .product-bottom-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
    gap: 15px;
}

.best-selling-product-card .add-to-cart-btn {
    padding: 10px 18px;
    background: #fff;
    color: #1f2937;
    border: 1px solid #1f2937;
    border-radius: 35px;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.best-selling-product-card .product-price {
    font-size: 24px;
    font-weight: 700;
    color: #8B5CF6;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    white-space: nowrap;
    transition: color 0.3s ease;
}

/* Hover Effects on Best Selling Product Card */
.best-selling-product-card:hover .product-details {
    background: #5d45bf;
}

.best-selling-product-card:hover .product-category {
    color: #fff;
}

.best-selling-product-card:hover .product-name {
    color: #fff;
}

.best-selling-product-card:hover .product-rating span {
    color: #fff;
}

.best-selling-product-card:hover .add-to-cart-btn {
    background: #fdf485;
    color: #1f2937;
    border: 1px solid #fdf485;
}

.best-selling-product-card:hover .product-price {
    color: #fff;
}

.section-header-featured {
    text-align: center;
    margin-bottom: 40px;
}

.section-badge-featured {
    display: inline-block;
    color: #8B5CF6;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.section-title-featured {
    font-size: 42px;
    font-weight: 700;
    color: #1f2937;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.category-nav {
    margin-bottom: 50px;
    display: flex;
    justify-content: center;
}

.category-nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: center;
}

.category-nav-item {
    color: #6b7280;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
    padding: 5px 0;
    position: relative;
}

.category-nav-item:hover,
.category-nav-item.active {
    color: #8B5CF6;
}

.category-nav-item.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: #8B5CF6;
}

.products-carousel-container {
    overflow: hidden;
    position: relative;
    width: 100%;
    max-width: 100%;
    margin: 0 auto 50px;
    padding: 0;
}

.featured-products-section .container {
    max-width: calc(342.6px * 4 + 30px * 3 + 120px) !important;
    padding-left: 15px;
    padding-right: 15px;
}

/* How It Works Section Styles */
.how-it-works-section {
    padding: 100px 0;
    background: #000;
    position: relative;
    overflow: hidden;
}

.how-it-works-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        /* Hexagon pattern */
        repeating-linear-gradient(60deg, transparent, transparent 40px, rgba(255, 255, 255, 0.04) 40px, rgba(255, 255, 255, 0.04) 41px),
        repeating-linear-gradient(-60deg, transparent, transparent 40px, rgba(255, 255, 255, 0.04) 40px, rgba(255, 255, 255, 0.04) 41px),
        repeating-linear-gradient(0deg, transparent, transparent 40px, rgba(255, 255, 255, 0.04) 40px, rgba(255, 255, 255, 0.04) 41px),
        /* Plus signs scattered */
        radial-gradient(circle at 15% 25%, rgba(255, 255, 255, 0.06) 2px, transparent 2px),
        radial-gradient(circle at 85% 75%, rgba(255, 255, 255, 0.06) 2px, transparent 2px),
        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.06) 2px, transparent 2px),
        radial-gradient(circle at 25% 80%, rgba(255, 255, 255, 0.06) 2px, transparent 2px),
        radial-gradient(circle at 75% 20%, rgba(255, 255, 255, 0.06) 2px, transparent 2px),
        radial-gradient(circle at 40% 60%, rgba(255, 255, 255, 0.06) 2px, transparent 2px),
        radial-gradient(circle at 60% 40%, rgba(255, 255, 255, 0.06) 2px, transparent 2px);
    background-size: 
        70px 70px,
        70px 70px,
        70px 70px,
        250px 250px,
        250px 250px,
        250px 250px,
        250px 250px,
        250px 250px,
        250px 250px,
        250px 250px,
        250px 250px;
    background-position: 
        0 0,
        0 0,
        0 0,
        0 0,
        100% 0,
        50% 50%,
        0 100%,
        100% 100%,
        20% 80%,
        80% 20%,
        40% 60%;
    opacity: 0.5;
    z-index: 1;
}

.how-it-works-wrapper {
    display: flex;
    align-items: center;
    position: relative;
    background: #fff;
    border-radius: 30px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    min-height: 600px;
}

.how-it-works-image {
    flex: 1;
    position: relative;
    height: 600px;
    overflow: hidden;
}

.how-it-works-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.how-it-works-content {
    flex: 1;
    background: #000;
    padding: 60px 50px;
    position: relative;
    height: 600px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-image: 
        radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
    background-size: 200px 200px;
    background-position: 0 0, 100% 100%;
}

.how-it-works-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.03) 4px),
        repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.03) 4px);
    background-size: 40px 40px;
    opacity: 0.3;
    pointer-events: none;
}

.process-badge {
    color: #fbbf24;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 15px;
    font-family: 'Poppins', sans-serif;
}

.process-title {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 50px 0;
    font-family: 'Poppins', sans-serif;
    line-height: 1.2;
}

.process-steps {
    margin-bottom: 40px;
    padding-left: 20px;
}

.process-step {
    display: flex;
    align-items: flex-start;
    margin-bottom: 35px;
    gap: 20px;
}

.step-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.step-icon-img {
    width: 32px;
    height: 32px;
    object-fit: contain;
}

.step-content {
    flex: 1;
}

.step-title {
    font-size: 22px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 8px 0;
    font-family: 'Poppins', sans-serif;
}

.step-description {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
    line-height: 1.6;
    font-family: 'Poppins', sans-serif;
}

.shop-now-btn {
    display: inline-block;
    padding: 16px 40px;
    background: #fbbf24;
    color: #000;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 30px;
    transition: all 0.3s ease;
    font-family: 'Poppins', sans-serif;
    align-self: flex-start;
}

.shop-now-btn:hover {
    background: #f59e0b;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(251, 191, 36, 0.4);
    color: #000;
    text-decoration: none;
}

.pill-overlay {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    pointer-events: none;
}

.capsule-icon-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    filter: drop-shadow(0 5px 15px rgba(139, 92, 246, 0.5));
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

@keyframes shine {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(100%);
    }
}

.products-carousel-track {
    display: flex;
    flex-wrap: nowrap;
    gap: 30px;
    transition: transform 0.6s ease;
    justify-content: flex-start;
    width: fit-content;
}

.products-carousel-track .col-lg-3,
.products-carousel-track .product-carousel-item {
    flex: 0 0 auto;
    width: 342.6px;
    padding: 0;
    margin: 0;
}

.featured-products-section .col-lg-3 {
    padding-left: 0;
    padding-right: 0;
    flex: 0 0 auto;
    width: auto;
    margin-right: 30px;
}

.featured-products-section .col-lg-3:last-child {
    margin-right: 0;
}

.featured-product-card {
    background: transparent;
    border-radius: 20px;
    overflow: visible;
    transition: all 0.3s ease;
    width: 342.6px;
    height: 558.2px;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    position: relative;
}


.product-image-wrapper {
    position: relative;
    width: 100%;
    height: 350px;
    overflow: hidden;
    background: #f0f4f8;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 30px;
    transition: transform 0.3s ease;
}


.product-wishlist-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.9);
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 10;
}

.product-wishlist-btn:hover {
    background: #fff;
    transform: scale(1.1);
}

.product-wishlist-btn i {
    color: #6b7280;
    font-size: 16px;
}

.product-wishlist-btn:hover i {
    color: #ef4444;
}

.product-details {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 25px;
    padding-right: 25px;
    display: flex;
    flex-direction: column;
    background: #fff;
    border-radius: 12px;
    width: 321px;
    height: 171.6px;
    box-sizing: border-box;
    margin: -15px auto 0;
    position: relative;
    z-index: 2;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.product-top-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.product-category {
    color: #4b5563;
    font-size: 14px;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.product-name {
    font-size: 18px;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 10px 0;
    font-family: 'Poppins', sans-serif;
    line-height: 1.3;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 5px;
    margin: 0;
}

.product-rating i {
    color: #fbbf24;
    font-size: 14px;
}

.product-rating span {
    color: #4b5563;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
}

.product-bottom-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
    gap: 15px;
}

.add-to-cart-btn {
    padding: 10px 18px;
    background: #fff;
    color: #1f2937;
    border: 1px solid #1f2937;
    border-radius: 35px;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.product-price {
    font-size: 24px;
    font-weight: 700;
    color: #8B5CF6;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    white-space: nowrap;
    transition: color 0.3s ease;
}

/* Hover Effects on Product Card */
.featured-product-card:hover .product-details {
    background: #5d45bf;
}

.featured-product-card:hover .product-category {
    color: #fff;
}

.featured-product-card:hover .product-name {
    color: #fff;
}

.featured-product-card:hover .product-rating span {
    color: #fff;
}

.featured-product-card:hover .add-to-cart-btn {
    background: #fdf485;
    color: #1f2937;
    border: 1px solid #fdf485;
}

.featured-product-card:hover .product-price {
    color: #fff;
}

.add-to-cart-btn:hover {
    background: #1f2937;
    color: #fff;
}

.products-pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 40px;
}

.pagination-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #d1d5db;
    cursor: pointer;
    transition: all 0.3s ease;
}

.pagination-dot.active {
    background: #1f2937;
    width: 12px;
    height: 12px;
}

.pagination-dot:hover {
    background: #9ca3af;
}

@media (max-width: 991px) {
    .featured-products-section {
        padding: 60px 0;
    }
    
    .section-title-featured {
        font-size: 32px;
    }
    
    .category-nav-list {
        gap: 20px;
    }
    
    .products-grid {
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .featured-product-card {
        width: 100%;
        max-width: 342.6px;
        height: auto;
        min-height: 558.2px;
    }
    
    .product-image-wrapper {
        height: 200px;
    }
}

@media (max-width: 767px) {
    .featured-products-section {
        padding: 50px 0;
    }
    
    .section-header-featured {
        margin-bottom: 30px;
    }
    
    /* How It Works Section Responsive */
    .how-it-works-section {
        padding: 60px 0;
    }
    
    .how-it-works-wrapper {
        flex-direction: column;
        min-height: auto;
    }
    
    .how-it-works-image {
        width: 100%;
        height: 400px;
    }
    
    .how-it-works-content {
        width: 100%;
        height: auto;
        padding: 40px 30px;
    }
    
    .process-title {
        font-size: 36px;
        margin-bottom: 40px;
    }
    
    .pill-overlay {
        display: none;
    }
    }
    
    .section-badge-featured {
        font-size: 12px;
    }
    
    .section-title-featured {
        font-size: 28px;
    }
    
    .category-nav {
        margin-bottom: 40px;
    }
    
    .category-nav-list {
        gap: 15px;
    }
    
    .category-nav-item {
        font-size: 14px;
    }
    
    .products-grid {
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 40px;
    }
    
    .featured-product-card {
        width: 100%;
        max-width: 342.6px;
        height: auto;
        min-height: 558.2px;
    }
    
    .product-image-wrapper {
        height: 180px;
    }
    
    .product-details {
        padding: 15px;
    }
    
    .product-name {
        font-size: 16px;
    }
    
    .product-price {
        font-size: 20px;
    }
}
.control-slider-homepage1 {
    position: absolute;
    bottom: 50px;
    right: 50px;
    display: flex;
    gap: 10px;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #222;
    transition: all 0.3s;
}
.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
    background: #ffa6a8;
    color: #fff;
}
.carousel-control-prev-icon span,
.carousel-control-next-icon span {
    font-size: 20px;
}

/* Cosmetic Section */
.cosmetic {
    padding: 100px 0;
}
.bg-cosmetic {
    background: #f5f5f5;
    padding: 50px;
}
.inner-cosmetic {
    padding: 50px;
}
.inner-cosmetic h2 {
    font-size: 40px;
    font-weight: bold;
    color: #ffa6a8;
    margin-bottom: 30px;
}
.inner-cosmetic h3 {
    font-size: 24px;
    color: #222;
    margin-bottom: 50px;
}
.inner-cosmetic h4 {
    font-size: 20px;
    font-weight: bold;
    color: #222;
    margin: 30px 0 15px 0;
}
.inner-cosmetic p {
    color: #666;
    line-height: 1.8;
}

/* Deal of the Day */
.deal-day {
    background-size: cover;
    background-position: center;
    padding: 100px 0;
}
.content-deal-day {
    text-align: center;
}
.content-deal-day .title h2 {
    font-size: 50px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    margin-bottom: 50px;
}
#dealday {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 50px;
}
#dealday li {
    background: rgba(255,255,255,0.9);
    padding: 30px 40px;
    border-radius: 10px;
}
#dealday h2 {
    font-size: 60px;
    font-weight: bold;
    color: #ffa6a8;
    margin: 0;
}
#dealday p {
    font-size: 18px;
    color: #222;
    margin: 0;
    text-transform: uppercase;
}
.content-deal-day .btn-lg {
    background: #ffa6a8;
    color: #fff;
    padding: 15px 50px;
    border-radius: 8px;
    font-weight: 500;
    border: none;
    transition: all 0.3s;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
}
.content-deal-day .btn-lg:hover {
    background: #ff8a8d;
}

/* Products */
.product-out {
    padding: 100px 0;
}
.product-out .title h2 {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 50px;
}
.product .card {
    border: none;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.card-img-top {
    position: relative;
    overflow: hidden;
}
.card-img-top img {
    width: 100%;
    transition: all 0.3s;
}
.card:hover .card-img-top img {
    transform: scale(1.1);
}
.onnew, .onsale {
    position: absolute;
    top: 20px;
    left: 20px;
    background: #ffa6a8;
    color: #fff;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 12px;
    text-transform: uppercase;
}
.onsale {
    background: #ffa6a8;
}
.product-out .card .card-img-top .icon-product {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex !important;
    align-items: center;
    justify-content: center;
    gap: 12px;
    opacity: 0;
    transition: opacity 0.25s ease;
    pointer-events: none;
}
.product-out .card:hover .card-img-top .icon-product { opacity: 1; }

.product-out .card .card-img-top .icon-product .btn {
    width: 42px;
    height: 42px;
    min-width: 42px;
    padding: 0 !important;
    border: none !important;
    background: rgba(255,255,255,0.95) !important;
    border-radius: 50% !important;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 14px rgba(0,0,0,0.12);
    transition: all 0.25s ease;
    color: var(--primary-color) !important;
    pointer-events: auto;
}
.product-out .card .card-img-top .icon-product .btn span {
    color: inherit !important;
    font-size: 16px;
    line-height: 1;
}
.product-out .card .card-img-top .icon-product .btn:hover {
    background: var(--primary-color) !important;
    color: #fff !important;
    transform: translateY(-2px);
}
.card-body .card-title a {
    color: #999;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
}
.woocommerce-loop-product__title a {
    color: #222;
    font-weight: bold;
    text-decoration: none;
    font-size: 16px;
}
.price {
    font-size: 18px;
    font-weight: bold;
    color: #ffa6a8;
}
.price del {
    color: #999;
    margin-right: 10px;
}

/* Latest News */
.lastest {
    padding: 100px 0;
    background: #fff;
}
.lastest .title h2 {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 50px;
    text-align: center;
}
.blog-card {
    margin-bottom: 30px;
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s;
}
.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}
.blog-card-content {
    display: flex;
    align-items: center;
    padding: 20px;
    min-height: 150px;
}
.blog-image {
    width: 100px;
    height: 100px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
    margin-right: 20px;
}
.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.blog-info {
    flex: 1;
}
.blog-info h4 {
    margin: 0 0 10px 0;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.4;
}
.blog-info h4 a {
    color: #222;
    text-decoration: none;
    transition: all 0.3s;
}
.blog-info h4 a:hover {
    color: #ffa6a8;
}
.blog-meta {
    color: #999;
    font-size: 13px;
    margin: 0;
}

/* Different colored backgrounds for blog cards */
.blog-card-1 {
    background: linear-gradient(135deg, #fff0f0 0%, #ffe8e8 100%);
}
.blog-card-2 {
    background: linear-gradient(135deg, #ffd7e8 0%, #ffc4dd 100%);
}
.blog-card-3 {
    background: linear-gradient(135deg, #d7e8ff 0%, #c4d9ff 100%);
}
.blog-card-4 {
    background: linear-gradient(135deg, #ffe8f0 0%, #ffd7e4 100%);
}
.blog-card-5 {
    background: linear-gradient(135deg, #e8f0ff 0%, #d7e4ff 100%);
}
.blog-card-6 {
    background: linear-gradient(135deg, #ffe8e8 0%, #ffd4d4 100%);
}

@media (max-width: 768px) {
    .blog-card-content {
        flex-direction: column;
        text-align: center;
    }
    .blog-image {
        margin-right: 0;
        margin-bottom: 15px;
    }
}

/* Promotional Discount Section */
.promotional-banner {
    background: linear-gradient(135deg, #d4e8ec 0%, #c8dfe4 100%);
    padding: 80px 0;
    margin: 80px 0;
}
.promo-image {
    text-align: center;
    padding: 40px;
}
.promo-image img {
    max-width: 100%;
    height: auto;
    filter: drop-shadow(0 15px 40px rgba(0,0,0,0.15));
}
.promo-content {
    padding: 40px;
}
.promo-badge {
    font-size: 36px;
    font-weight: bold;
    color: #222;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.pink-badge {
    background: #ffa6a8;
    color: #fff;
    padding: 5px 20px;
    border-radius: 5px;
    margin-left: 10px;
}
.promo-title {
    font-size: 60px;
    font-weight: bold;
    color: #222;
    margin-bottom: 30px;
    letter-spacing: 3px;
}
.promo-date {
    border: 2px solid #222;
    display: inline-block;
    padding: 15px 30px;
    border-radius: 5px;
}
.promo-date p {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    color: #222;
    letter-spacing: 1px;
}
@media (max-width: 768px) {
    .promotional-banner {
        padding: 40px 0;
        margin: 40px 0;
    }
    .promo-image {
        padding: 20px;
    }
    .promo-content {
        padding: 20px;
        text-align: center;
    }
    .promo-badge {
        font-size: 24px;
    }
    .promo-title {
        font-size: 40px;
    }
    .pink-badge {
        display: block;
        margin: 10px auto;
        width: fit-content;
    }
}

/* Testimonials Section */
.testimonials-section {
    background: #fff;
    padding: 100px 0;
    position: relative;
}

.testimonial-card {
    background: #8B5CF6;
    border-radius: 30px;
    padding: 60px 80px;
    position: relative;
    overflow: hidden;
    width: 1490.4px;
    height: 742.2px;
    max-width: 1490.4px;
    margin: 0 auto;
    box-sizing: border-box;
}

.testimonial-card::before {
    content: '"';
    position: absolute;
    left: 40px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 200px;
    font-weight: 700;
    color: rgba(139, 92, 246, 0.3);
    font-family: 'Georgia', serif;
    line-height: 1;
    z-index: 1;
}

.testimonial-card::after {
    content: '"';
    position: absolute;
    right: 40px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 200px;
    font-weight: 700;
    color: rgba(139, 92, 246, 0.3);
    font-family: 'Georgia', serif;
    line-height: 1;
    z-index: 1;
}

.testimonial-header {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
    z-index: 2;
}

.testimonial-badge {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.7);
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.testimonial-title {
    font-size: 42px;
    font-weight: 700;
    color: #fff;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.testimonial-content {
    text-align: center;
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin: 0 auto;
}

.testimonial-stars {
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
    gap: 5px;
}

.testimonial-stars i {
    color: #fbbf24;
    font-size: 24px;
}

.testimonial-text {
    font-size: 18px;
    line-height: 1.8;
    color: #fff;
    margin: 0 auto 40px;
    font-family: 'Poppins', sans-serif;
    position: relative;
    z-index: 2;
}

.testimonial-author {
    margin-top: 30px;
}

.testimonial-name {
    font-size: 24px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 8px 0;
    font-family: 'Poppins', sans-serif;
}

.testimonial-role {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.7);
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.testimonial-avatars {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 50px;
    position: relative;
    z-index: 2;
    width: 100%;
    flex-wrap: nowrap;
}

.avatars-row {
    display: flex;
    gap: 15px;
    align-items: center;
}

.avatar-item {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    border: 3px solid transparent;
    transition: all 0.3s ease;
}

.avatar-item.active {
    border-color: #fff;
    transform: scale(1.1);
}

.avatar-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.testimonial-avatars .carousel-control-prev,
.testimonial-avatars .carousel-control-next {
    width: 40px !important;
    height: 40px !important;
    background: rgba(255, 255, 255, 0.2) !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #fff !important;
    font-size: 18px !important;
    transition: all 0.3s ease !important;
    position: static !important;
    left: auto !important;
    right: auto !important;
    opacity: 1 !important;
    text-decoration: none !important;
    flex-shrink: 0 !important;
    margin: 0 !important;
}

.testimonial-avatars .carousel-control-prev:hover,
.testimonial-avatars .carousel-control-next:hover {
    background: rgba(255, 255, 255, 0.3);
    color: #fff;
    text-decoration: none;
}

.testimonial-avatars .carousel-control-prev:focus,
.testimonial-avatars .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
}

.testimonial-avatars .carousel-control-prev span,
.testimonial-avatars .carousel-control-next span {
    display: none;
}
.testimonial-indicators li.active {
    background: #ffa6a8;
    width: 30px;
    border-radius: 10px;
}
@media (max-width: 768px) {
    .testimonials-section {
        padding: 60px 0;
    }
    
    .testimonial-card {
        padding: 40px 30px;
    }
    
    .testimonial-card::before,
    .testimonial-card::after {
        font-size: 120px;
    }
    
    .testimonial-title {
        font-size: 32px;
    }
    
    .testimonial-text {
        font-size: 16px;
    }
    
    .avatar-item {
        width: 50px;
        height: 50px;
    }
    .testimonial-name {
        font-size: 22px;
    }
    .testimonial-text {
        font-size: 14px;
    }
    .testimonial-stars i {
        font-size: 16px;
    }
}

/* Brand */
.brand {
    padding: 50px 0;
}
.brand .title h2 {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 50px;
    text-align: center;
}
.brand-slider .item {
    padding: 20px;
}
.brand-slider .item img {
    max-width: 150px;
    opacity: 0.6;
    transition: all 0.3s;
}
.brand-slider .item:hover img {
    opacity: 1;
}

/* Footer Styles */
.main-footer {
    background: #000;
    padding: 80px 0 30px;
    position: relative;
    overflow: hidden;
}

.main-footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        /* Hexagon pattern */
        repeating-linear-gradient(60deg, transparent, transparent 40px, rgba(255, 255, 255, 0.03) 40px, rgba(255, 255, 255, 0.03) 41px),
        repeating-linear-gradient(-60deg, transparent, transparent 40px, rgba(255, 255, 255, 0.03) 40px, rgba(255, 255, 255, 0.03) 41px),
        repeating-linear-gradient(0deg, transparent, transparent 40px, rgba(255, 255, 255, 0.03) 40px, rgba(255, 255, 255, 0.03) 41px),
        /* Plus signs scattered */
        radial-gradient(circle at 15% 25%, rgba(255, 255, 255, 0.05) 2px, transparent 2px),
        radial-gradient(circle at 85% 75%, rgba(255, 255, 255, 0.05) 2px, transparent 2px),
        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.05) 2px, transparent 2px),
        radial-gradient(circle at 25% 80%, rgba(255, 255, 255, 0.05) 2px, transparent 2px),
        radial-gradient(circle at 75% 20%, rgba(255, 255, 255, 0.05) 2px, transparent 2px);
    background-size: 
        70px 70px,
        70px 70px,
        70px 70px,
        200px 200px,
        200px 200px,
        200px 200px,
        200px 200px,
        200px 200px;
    background-position: 
        0 0,
        0 0,
        0 0,
        0 0,
        100% 0,
        50% 50%,
        0 100%,
        100% 100%;
    opacity: 0.4;
    z-index: 1;
}

.footer-content {
    display: grid;
    grid-template-columns: 3fr 1fr 1fr;
    gap: 50px;
    margin-bottom: 50px;
    position: relative;
    z-index: 2;
}

.footer-right-section {
    display: flex;
    flex-direction: row;
    gap: 40px;
    align-items: flex-start;
}

.footer-contact {
    flex: 1;
}

.footer-social {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.social-icons {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.footer-payments {
    margin-top: 0;
}

.footer-payments .payment-methods-img {
    height: 30px;
    object-fit: contain;
}

.footer-nav,
.footer-contact {
    text-align: left;
    padding-top: 70px;
}

.footer-brand {
    position: relative;
    z-index: 2;
}

.footer-logo {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 40px;
    cursor: pointer;
}

.footer-logo:hover .logo-text {
    color: #5d45bf;
}

.logo-icon {
    width: 177px;
    height: 151px;
    object-fit: contain;
}

.logo-text {
    font-size: 113px;
    line-height: 130px;
    font-weight: 700;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    transition: color 0.3s ease;
}

.logo-text:hover {
    color: #5d45bf;
}

.newsletter-section {
    margin-top: 30px;
}

.newsletter-title {
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 15px;
    font-family: 'Poppins', sans-serif;
}

.newsletter-form {
    display: flex;
    gap: 10px;
}

.newsletter-input {
    flex: 1;
    padding: 12px 20px;
    border: none;
    border-radius: 30px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    background: #fff;
    color: #1f2937;
}

.newsletter-input::placeholder {
    color: #9ca3af;
}

.newsletter-btn {
    width: 50px;
    height: 50px;
    border: none;
    border-radius: 50%;
    background: #fbbf24;
    color: #000;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 18px;
}

.newsletter-btn:hover {
    background: #f59e0b;
    transform: scale(1.05);
}

.footer-heading {
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 25px;
    font-family: 'Poppins', sans-serif;
}

.footer-nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-nav-list li {
    margin-bottom: 12px;
}

.footer-nav-list a {
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s ease;
    justify-content: flex-start;
}

.footer-nav-list a i {
    font-size: 10px;
    color: #9ca3af;
}

.footer-nav-list a:hover {
    color: #fbbf24;
}

.contact-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.contact-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 20px;
    color: #fff;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    justify-content: flex-start;
}

.contact-list li i {
    color: #9ca3af;
    font-size: 16px;
    margin-top: 3px;
    flex-shrink: 0;
}

.social-icons {
    display: flex;
    flex-direction: column;
    gap: 15px;
    padding-top: 45px;
}

.social-icon {
    width: 45px;
    height: 45px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 18px;
    padding-top: 10px;
}

.social-icon:hover {
    background: #fbbf24;
    border-color: #fbbf24;
    color: #000;
    transform: translateY(-3px);
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    position: relative;
    z-index: 2;
}

.footer-copyright p {
    color: #fff;
    font-size: 14px;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.payment-methods-img {
    height: 30px;
    object-fit: contain;
}

/* Footer Responsive */
@media (max-width: 991px) {
    .footer-content {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }
    
    .footer-social {
        grid-column: 1 / -1;
    }
    
    .social-icons {
        flex-direction: row;
    }
}

@media (max-width: 767px) {
    .footer-content {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .footer-bottom {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .newsletter-form {
        flex-direction: column;
    }
    
    .newsletter-btn {
        width: 100%;
        border-radius: 30px;
    }
}
</style>

<!-- Footer Section -->
<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Brand/Logo Section -->
            <div class="footer-brand">
                <div class="footer-logo">
                    <img src="{{ asset('pharmez1/pharmez1/images/capsule-icon.png') }}" alt="Pharmez Logo" class="logo-icon">
                    <span class="logo-text">Pharmez.</span>
                </div>
                
                <!-- Newsletter Subscription -->
                <div class="newsletter-section">
                    <h4 class="newsletter-title">Subscribe to Our Newsletter:</h4>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter Email Address" class="newsletter-input">
                        <button type="submit" class="newsletter-btn">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Navigation Section -->
            <div class="footer-nav">
                <h4 class="footer-heading">Navigation</h4>
                <ul class="footer-nav-list">
                    <li><a href="{{ url('/') }}"><i class="fa fa-arrow-right"></i> Home</a></li>
                    <li><a href="{{ url('/about') }}"><i class="fa fa-arrow-right"></i> About</a></li>
                    <li><a href="{{ url('/shop') }}"><i class="fa fa-arrow-right"></i> Shop</a></li>
                    <li><a href="{{ url('/team') }}"><i class="fa fa-arrow-right"></i> Team</a></li>
                    <li><a href="{{ url('/blog') }}"><i class="fa fa-arrow-right"></i> Blog</a></li>
                </ul>
            </div>
            
            <!-- Contact Info and Social Media Section (Right Side) -->
            <div class="footer-right-section">
                <!-- Contact Info Section -->
                <div class="footer-contact">
                    <h4 class="footer-heading">Contact Info</h4>
                    <ul class="contact-list">
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>+61 3 8376 6284</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>Info@pharmez.com</span>
                        </li>
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                            <span>21 King Street Melbourne, 3000, Australia</span>
                        </li>
                        <li>
                            <i class="fa fa-clock"></i>
                            <span>Mon - Sat: 9:00 am to 6:00 pm</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Social Media Section -->
                <div class="footer-social">
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-copyright">
                <p>Copyright © 2025 pharmez. All Rights Reserved.</p>
            </div>
            <div class="footer-payments">
                <img src="{{ asset('pharmez1/pharmez1/images/payment-cards.png') }}" alt="Payment Methods" class="payment-methods-img">
            </div>
        </div>
    </div>
</footer>
<!--end Footer Section-->

@endsection
@section('js-script')
    <script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.products-carousel-track');
            if (!track) return;
            
            const products = track.querySelectorAll('.col-lg-3, .product-carousel-item');
            const productWidth = 342.6; // Product card width
            const gap = 30; // Gap between products
            const slideDistance = productWidth + gap; // Distance to slide for 1 product
            let currentIndex = 0;
            const totalProducts = products.length;
            const visibleProducts = 4;
            
            // Clone first 4 products for seamless loop
            for (let i = 0; i < visibleProducts; i++) {
                const clone = products[i].cloneNode(true);
                track.appendChild(clone);
            }
            
            function slideNext() {
                currentIndex++;
                const translateX = -currentIndex * slideDistance;
                track.style.transform = `translateX(${translateX}px)`;
                
                // Reset to beginning when we've shown all original products
                if (currentIndex >= totalProducts) {
                    setTimeout(() => {
                        track.style.transition = 'none';
                        track.style.transform = 'translateX(0px)';
                        currentIndex = 0;
                        
                        // Force reflow
                        void track.offsetHeight;
                        
                        // Re-enable transition
                        track.style.transition = 'transform 0.6s ease';
                    }, 600);
                }
            }
            
            // Auto-slide every 3 seconds
            setInterval(slideNext, 3000);
        });
        
        // Testimonials Avatar Click Handler
        $(document).ready(function() {
            const carousel = $('#testimonialCarousel');
            const avatarItems = $('.avatar-item');
            
            // Handle avatar clicks
            avatarItems.on('click', function() {
                const slideTo = $(this).data('slide-to');
                avatarItems.removeClass('active');
                $(this).addClass('active');
                carousel.carousel(slideTo);
            });
            
            // Update active avatar when carousel slides
            carousel.on('slide.bs.carousel', function(e) {
                avatarItems.removeClass('active');
                avatarItems.eq(e.to).addClass('active');
            });
        });
    </script>
@endsection
