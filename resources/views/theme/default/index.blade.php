@extends('theme.default.website')

@section('content')
<style>
/* Font Awesome Icons Fix - Ensure all icons display */
.fa, .fas, .far, .fal, .fab {
    font-family: 'FontAwesome' !important;
    display: inline-block;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

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
    <!-- Hero Banner Section - 2 Divs Layout -->
    <div class="hero-section-wrapper">
        <div class="container">
            <div class="row hero-row justify-content-center">
                <!-- Div 1: Left Sidebar -->
                <div class="hero-sidebar-wrapper">
                    <div class="hero-sidebar-box">
                        <ul class="sidebar-categories-list">
                            @php
                                // Matching icons exactly as per the image description
                                $categories = [
                                    ['name' => 'Allergies', 'icon' => '006-test-tube.svg', 'slug' => 'allergies'], // Test tube with liquid bubbling
                                    ['name' => 'Cosmetics', 'icon' => '004-cream.svg', 'slug' => 'cosmetics'], // Tube for creams/lotions
                                    ['name' => 'Cough, Cold, Fever', 'icon' => '006-nose.svg', 'slug' => 'cough-cold-fever'], // Nose with spray (bottle with dropper alternative)
                                    ['name' => 'Dietary', 'icon' => '025-pills.svg', 'slug' => 'dietary'], // Blister pack with multiple pills
                                    ['name' => 'Health', 'icon' => '023-briefcase.svg', 'slug' => 'health'], // Medical briefcase/first aid kit
                                    ['name' => 'Medication', 'icon' => '013-syringe.svg', 'slug' => 'medication'], // Syringe
                                    ['name' => 'Medicine', 'icon' => '007-pills.svg', 'slug' => 'medicine'], // Two pills (one whole, one broken with powder)
                                    ['name' => 'Mouth & Teeth', 'icon' => '027-brush.svg', 'slug' => 'mouth-teeth'], // Brush (toothbrush alternative)
                                    ['name' => 'Nutrition', 'icon' => '016-notepad.svg', 'slug' => 'nutrition'], // Clipboard with checklist
                                    ['name' => 'Pollen Sneeze', 'icon' => '006-nose.svg', 'slug' => 'pollen-sneeze'], // Nose with spray bottle
                                    ['name' => 'Protection', 'icon' => '008-liposuction.svg', 'slug' => 'protection'] // Flexed arm with bicep (protection/strength)
                                ];
                            @endphp
                            @foreach($categories as $category)
                                <li class="sidebar-category-item">
                                    <a href="{{ url('/shop?category='.$category['slug']) }}" class="sidebar-category-link">
                                        <img src="{{ asset('public/theme/default/images/'.$category['icon']) }}" alt="{{ $category['name'] }}" class="sidebar-category-icon">
                                        <span class="sidebar-category-name">{{ $category['name'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Div 2: Right Hero Banner -->
                <div class="hero-banner-wrapper">
                    <div class="hero-banner-box">
                        <div class="hero-banner-carousel">
                            <!-- Navigation Arrows -->
                            <button class="banner-nav-arrow banner-nav-prev" aria-label="Previous slide">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="banner-nav-arrow banner-nav-next" aria-label="Next slide">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                            
                            <!-- Slide 1: Banner 01 -->
                            <div class="hero-slide active" style="background-image: url('{{ asset('public/theme/default/images/banner-01.jpg') }}');">
                                <div class="banner-content-overlay">
                                    <div class="banner-label">Exclusive Discounts</div>
                                    <h1 class="banner-heading">Magical Moments Awaits You at Every Corner</h1>
                                    <p class="banner-description">We Turn Ordinary Days Into Magical Adventures with Our Exciting Collection of Toys and Stylish Kidswear</p>
                                    <a href="{{ url('/shop') }}" class="banner-button">View Products</a>
                        </div>
                    </div>
                    
                            <!-- Slide 2: Banner 05 -->
                            <div class="hero-slide" style="background-image: url('{{ asset('public/theme/default/images/banner-05.jpg') }}');">
                                <div class="banner-content-overlay">
                                    <div class="banner-label">Exclusive Discounts</div>
                                    <h1 class="banner-heading">Cheerful Finds for Little Dreamer's Adventure and Fun</h1>
                                    <p class="banner-description">Your Gateway to a World of Fun and Creativity – Explore Our Store for the Best in Toys, Games, and Apparel for Kids</p>
                                    <a href="{{ url('/shop') }}" class="banner-button">View Products</a>
                </div>
            </div>

                            <!-- Slide 3: Banner 06 -->
                            <div class="hero-slide" style="background-image: url('{{ asset('public/theme/default/images/banner-06.jpg') }}');">
                                <div class="banner-content-overlay">
                                    <div class="banner-label">Exclusive Discounts</div>
                                    <h1 class="banner-heading">Creating Smiles and Precious Memories, One Toy at a Time</h1>
                                    <p class="banner-description">Transforming Ordinary Days into Magical Adventures with Our Exciting Collection of Toys and Stylish Kids' Clothing</p>
                                    <a href="{{ url('/shop') }}" class="banner-button">View Products</a>
                        </div>
                    </div>
                </div>
                        <div class="banner-pagination-dots">
                            <span class="dot-item active" data-slide="0"></span>
                            <span class="dot-item" data-slide="1"></span>
                            <span class="dot-item" data-slide="2"></span>
                        </div>
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
                            <img src="{{ asset('public/theme/default/images/computer.svg') }}" alt="Free Delivery" class="benefit-icon">
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Free Delivery</h3>
                            <p class="benefit-description">Quisque rhoncus orci neque, nec au nisi condimentum sit amet.</p>
                            <a href="#" class="benefit-link">View More <span class="arrow-icon">→</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="benefit-card">
                        <div class="benefit-icon-wrapper">
                            <img src="{{ asset('public/theme/default/images/security.svg') }}" alt="Money Return" class="benefit-icon">
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Money Return</h3>
                            <p class="benefit-description">Quisque rhoncus orci neque, nec au nisi condimentum sit amet.</p>
                            <a href="#" class="benefit-link">View More <span class="arrow-icon">→</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="benefit-card">
                        <div class="benefit-icon-wrapper">
                            <img src="{{ asset('public/theme/default/images/box.svg') }}" alt="Member Discount" class="benefit-icon">
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Member Discount</h3>
                            <p class="benefit-description">Quisque rhoncus orci neque, nec au nisi condimentum sit amet.</p>
                            <a href="#" class="benefit-link">View More <span class="arrow-icon">→</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="benefit-card">
                        <div class="benefit-icon-wrapper">
                            <img src="{{ asset('public/theme/default/images/phone.svg') }}" alt="Online Support 24/7" class="benefit-icon">
                        </div>
                        <div class="benefit-content">
                            <h3 class="benefit-title">Online Support 24/7</h3>
                            <p class="benefit-description">Quisque rhoncus orci neque, nec au nisi condimentum sit amet.</p>
                            <a href="#" class="benefit-link">View More <span class="arrow-icon">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Benefits Section-->

    <!-- Popular Products Section -->
    <div class="popular-products-section">
        <div class="container">
            <div class="section-header-popular">
                <h2 class="section-title-popular">Most popular products</h2>
                <a href="{{ url('/shop') }}" class="view-more-link">View More <span class="arrow-icon">→</span></a>
            </div>
            <div class="products-carousel-wrapper">
                <div class="products-carousel-track" id="popular-products-carousel">
                    @php
                        $popular_products = \App\Entity\Product\Product::where('is_active', 1)
                            ->where('in_stock', 1)
                            ->withCount('reviews')
                            ->with(['reviews', 'files', 'translation'])
                            ->orderBy('reviews_count', 'desc')
                            ->orderBy('created_at', 'desc')
                            ->take(10)
                            ->get();
                    @endphp
                    @foreach($popular_products as $product)
                        <div class="product-card-item">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <a href="{{ url('/product/'.$product->slug) }}">
                                        @php
                                            // Get product image from database - dynamic
                                            $product_image = null;
                                            if($product->image && isset($product->image->file_path) && $product->image->file_path && $product->image->file_path != 'media/no-image.png') {
                                                $product_image = asset('storage/app/'. $product->image->file_path);
                                            }
                                            // Fallback to default placeholder image
                                            if(!$product_image) {
                                                $product_image = asset('public/theme/default/images/product1.png');
                                            }
                                        @endphp
                                        <img src="{{ $product_image }}" alt="{{ $product->translation->name ?? $product->name }}" class="product-image" onerror="this.src='{{ asset('public/theme/default/images/product1.png') }}'">
                                    </a>
                                    @if($product->special_price && $product->price && $product->special_price < $product->price)
                                        @php
                                            $discount_percent = round((($product->price - $product->special_price) / $product->price) * 100);
                                        @endphp
                                        <span class="discount-badge">{{ $discount_percent }}%</span>
                                    @endif
                                    <button class="wishlist-btn" type="button">
                                        <i class="fa fa-heart"></i>
                                    </button>
                            </div>
                                <div class="product-rating">
                                    @php
                                        // Calculate dynamic rating from actual reviews
                                        $reviews_count = $product->reviews->count();
                                        $avg_rating = $reviews_count > 0 ? round($product->reviews->avg('rating'), 2) : 0;
                                        $full_stars = floor($avg_rating);
                                        $half_star = ($avg_rating - $full_stars) >= 0.5;
                                    @endphp
                                    <div class="stars">
                                        @for($i = 0; $i < $full_stars; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                        @if($half_star)
                                            <i class="fa fa-star-half-o"></i>
                                        @endif
                                        @for($i = $full_stars + ($half_star ? 1 : 0); $i < 5; $i++)
                                            <i class="fa fa-star-o"></i>
                                        @endfor
                                    </div>
                                    <span class="rating-number">{{ number_format($avg_rating, 2) }}</span>
                                </div>
                                <h3 class="product-name">
                                    <a href="{{ url('/product/'.$product->slug) }}">{{ $product->translation->name ?? $product->name }}</a>
                                </h3>
                                <div class="product-price">
                                    @if($product->special_price && $product->price && $product->special_price < $product->price)
                                        <span class="current-price">{!! show_price($product->special_price) !!}</span>
                                        <span class="original-price">{!! show_price($product->price) !!}</span>
                                    @else
                                        <span class="current-price">{!! show_price($product->price) !!}</span>
                                    @endif
                </div>
                                <button class="add-to-cart-btn" type="button" data-product-id="{{ $product->id }}">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    @endforeach
                    </div>
                <div class="carousel-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                    <span class="dot" data-slide="3"></span>
                    <span class="dot" data-slide="4"></span>
                </div>
                            </div>
                        </div>
                    </div>
    <!--end Popular Products Section-->

    <!-- Promotional Banners Section -->
    <div class="promotional-banners-section">
        <div class="container">
            <div class="promotional-banners-row">
                <!-- Banner 1 -->
                <div class="promotional-banner-item">
                    <div class="site-banner banner-style-default space-sm" style="background-image: url('{{ asset('public/theme/default/images/banner-02.jpg') }}');">
                        <div class="site-banner-content wrap-element items-center justify-start">
                            <div class="site-banner-inner w-70 md-w-80 lg-w-70 custom-color" style="--custom-color: #723c48;">
                                <div class="site-banner-content-header">
                                    <h4 class="entry-subtitle text-13 exclusive-discount-label">Exclusive Discount</h4>
                                    <h2 class="entry-title text-24 md:text-28 font-semibold tracking-tight custom-color" style="--custom-color: #723c48;">Playful Treasures for Happy Kids</h2>
                </div>
                                <div class="site-banner-content-body">
                                    <div class="entry-excerpt text-14">
                                        <p>Where Every Toy Sparks Creativity and Every Outfit Brings Smiles</p>
                            </div>
                                    <a href="{{ url('/shop') }}" class="link-text current-color">View More <span class="arrow-icon">→</span></a>
                        </div>
                    </div>
                </div>
                        <a href="{{ url('/shop') }}" class="wrap-element site-banner-link"></a>
            </div>
        </div>
                
                <!-- Banner 2 -->
                <div class="promotional-banner-item">
                    <div class="site-banner banner-style-default space-sm" style="background-image: url('{{ asset('public/theme/default/images/banner-03.jpg') }}');">
                        <div class="site-banner-content wrap-element items-center justify-start">
                            <div class="site-banner-inner w-70 md-w-80 lg-w-70 custom-color" style="--custom-color: #59466d;">
                                <div class="site-banner-content-header">
                                    <h4 class="entry-subtitle text-13 exclusive-discount-label">Exclusive Discount</h4>
                                    <h2 class="entry-title text-24 md:text-28 font-semibold tracking-tight custom-color" style="--custom-color: #59466d;">Cheerful Finds for the Little Dreamer</h2>
    </div>
                                <div class="site-banner-content-body">
                                    <div class="entry-excerpt text-14">
                                        <p>Explore a World of Playful Wonders and Delightful Finds for Every Child</p>
                                    </div>
                                    <a href="{{ url('/shop') }}" class="link-text current-color">View More <span class="arrow-icon">→</span></a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/shop') }}" class="wrap-element site-banner-link"></a>
                    </div>
                </div>
                
                <!-- Banner 3 -->
                <div class="promotional-banner-item">
                    <div class="site-banner banner-style-default space-sm" style="background-image: url('{{ asset('public/theme/default/images/banner-04.jpg') }}');">
                        <div class="site-banner-content wrap-element items-center justify-start">
                            <div class="site-banner-inner w-70 md-w-80 lg-w-70 custom-color" style="--custom-color: #1e5d63;">
                                <div class="site-banner-content-header">
                                    <h4 class="entry-subtitle text-13 exclusive-discount-label">Exclusive Discount</h4>
                                    <h2 class="entry-title text-24 md:text-28 font-semibold tracking-tight custom-color" style="--custom-color: #1e5d63;">Where Fun and Style Meet</h2>
            </div>
                                <div class="site-banner-content-body">
                                    <div class="entry-excerpt text-14">
                                        <p>Discover the Perfect Mix of Fun, Learning, and Style for Your Little Ones</p>
                                    </div>
                                    <a href="{{ url('/shop') }}" class="link-text current-color">View More <span class="arrow-icon">→</span></a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/shop') }}" class="wrap-element site-banner-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Promotional Banners Section-->

    <!-- Cash Back Banner Section -->
    <div class="cashback-banner-section">
        <div class="container">
            <div class="cashback-banner">
                <div class="cashback-content">
                    <div class="cashback-text-wrapper">
                        <h2 class="cashback-title">RETURN CASH BACK</h2>
                        <p class="cashback-description"><span class="cashback-earn-text">Earn 5% cash back on Bumedi.com</span> <span class="cashback-preapproved-text">See if you're pre-approved with no credit risk.</span></p>
                        <a href="{{ url('/shop') }}" class="cashback-button">Discover More</a>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Cash Back Banner Section-->

    <!-- Mixed Products and Banners Section -->
    <div class="mixed-products-banners-section">
        <div class="container">
            <div class="mixed-layout-row">
                <!-- Left Column - Products -->
                <div class="mixed-column products-column">
                    @php
                        $left_products = \App\Entity\Product\Product::where('is_active', 1)
                            ->orderBy('created_at', 'desc')
                            ->with(['reviews', 'files', 'translation'])
                            ->take(3)
                            ->get();
                @endphp
                    @foreach($left_products as $product)
                        <div class="mixed-product-card-item">
                            <div class="product-card-horizontal">
                                <div class="product-image-wrapper-horizontal">
                            <a href="{{ url('/product/'.$product->slug) }}">
                                        @php
                                            $image_files = ['1-56-500x500.jpg', '1-62-500x500.jpg', '1-65-500x500.jpg'];
                                            $image_index = $loop->index % count($image_files);
                                            $product_image = $image_files[$image_index];
                                        @endphp
                                        <img src="{{ asset('public/theme/default/images/'.$product_image) }}" alt="{{ $product->translation->name ?? $product->name }}" class="product-image-horizontal">
                                    </a>
                                    @if($product->special_price && $product->price && $product->special_price < $product->price)
                                        @php
                                            $discount_percent = round((($product->price - $product->special_price) / $product->price) * 100);
                                        @endphp
                                        <span class="discount-badge">{{ $discount_percent }}%</span>
                                    @endif
                                </div>
                                <div class="product-content-horizontal">
                                <div class="product-rating">
                                        @php
                                            $reviews_count = $product->reviews->count();
                                            $avg_rating = $reviews_count > 0 ? $product->reviews->avg('rating') : 2.00;
                                            $full_stars = floor($avg_rating);
                                            $half_star = ($avg_rating - $full_stars) >= 0.5;
                                        @endphp
                                        <div class="stars">
                                            @for($i = 0; $i < $full_stars; $i++)
                                    <i class="fa fa-star"></i>
                                            @endfor
                                            @if($half_star)
                                                <i class="fa fa-star-half-o"></i>
                                            @endif
                                            @for($i = $full_stars + ($half_star ? 1 : 0); $i < 5; $i++)
                                                <i class="fa fa-star-o"></i>
                                            @endfor
                                </div>
                                        <span class="rating-number">{{ number_format($avg_rating, 2) }}</span>
                            </div>
                                    <h3 class="product-name-horizontal">
                                        <a href="{{ url('/product/'.$product->slug) }}">{{ $product->translation->name ?? $product->name }}</a>
                            </h3>
                                    <div class="product-price-horizontal">
                                        @if($product->special_price && $product->price && $product->special_price < $product->price)
                                            <span class="current-price">{!! show_price($product->special_price) !!}</span>
                                            <span class="original-price">{!! show_price($product->price) !!}</span>
                                @else
                                            <span class="current-price">{!! show_price($product->price) !!}</span>
                                    @endif
                                </div>
                                    <button class="add-to-cart-btn-horizontal" type="button" data-product-id="{{ $product->id }}">
                                        Add to cart
                                    </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
                <!-- Middle Column - Promotional Banners -->
                <div class="mixed-column banners-column">
                    <!-- Banner 1 -->
                    <div class="mixed-banner-item">
                        <div class="site-banner banner-style-default space-sm" style="background-image: url('{{ asset('public/theme/default/images/banner-07.jpg') }}');">
                            <div class="site-banner-content wrap-element items-center justify-start">
                                <div class="site-banner-inner w-70 md-w-80 lg-w-70 custom-color" style="--custom-color: #1e5d63;">
                                    <div class="site-banner-content-header">
                                        <h4 class="entry-subtitle text-13 exclusive-discount-label">Exclusive Discount</h4>
                                        <h2 class="entry-title text-24 md:text-28 font-semibold tracking-tight custom-color" style="--custom-color: #1e5d63;">Magical Moments Start Here</h2>
            </div>
                                    <div class="site-banner-content-body">
                                        <div class="entry-excerpt text-14">
                                            <p>Find Joy with Our Exciting Selection of Kids Toys and Clothing</p>
        </div>
                                        <a href="{{ url('/shop') }}" class="link-text current-color">View More <span class="arrow-icon">→</span></a>
    </div>
                </div>
                            </div>
                            <a href="{{ url('/shop') }}" class="wrap-element site-banner-link"></a>
                            </div>
                        </div>
                        
                    <!-- Banner 2 -->
                    <div class="mixed-banner-item">
                        <div class="site-banner banner-style-default space-sm" style="background-image: url('{{ asset('public/theme/default/images/banner-08.jpg') }}');">
                            <div class="site-banner-content wrap-element items-center justify-start">
                                <div class="site-banner-inner w-70 md-w-80 lg-w-70 custom-color" style="--custom-color: #674b40;">
                                    <div class="site-banner-content-header">
                                        <h4 class="entry-subtitle text-13 exclusive-discount-label-brown">Exclusive Discount</h4>
                                        <h2 class="entry-title text-24 md:text-28 font-semibold tracking-tight custom-color" style="--custom-color: #674b40;">Fun Finds for Every Growing Mind</h2>
                            </div>
                                    <div class="site-banner-content-body">
                                        <div class="entry-excerpt text-14" style="color: #674b40;">
                                            <p>Your Go-To Destination for Toys and Apparel That Inspire and Delight</p>
                            </div>
                                        <a href="{{ url('/shop') }}" class="link-text current-color" style="color: #674b40;">View More <span class="arrow-icon">→</span></a>
                        </div>
                            </div>
                            </div>
                            <a href="{{ url('/shop') }}" class="wrap-element site-banner-link"></a>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Products -->
                <div class="mixed-column products-column">
                    @php
                        $right_products = \App\Entity\Product\Product::where('is_active', 1)
                            ->orderBy('created_at', 'desc')
                            ->with(['reviews', 'files', 'translation'])
                            ->skip(3)
                            ->take(3)
                            ->get();
                @endphp
                    @foreach($right_products as $product)
                        <div class="mixed-product-card-item">
                            <div class="product-card-horizontal">
                                <div class="product-image-wrapper-horizontal">
                            <a href="{{ url('/product/'.$product->slug) }}">
                                        @php
                                            $image_files = ['1-78-500x500.jpg', '1-79-500x500.jpg', '1-56-500x500.jpg'];
                                            $image_index = $loop->index % count($image_files);
                                            $product_image = $image_files[$image_index];
                                        @endphp
                                        <img src="{{ asset('public/theme/default/images/'.$product_image) }}" alt="{{ $product->translation->name ?? $product->name }}" class="product-image-horizontal">
                                    </a>
                                    @if($product->special_price && $product->price && $product->special_price < $product->price)
                                        @php
                                            $discount_percent = round((($product->price - $product->special_price) / $product->price) * 100);
                                        @endphp
                                        <span class="discount-badge">{{ $discount_percent }}%</span>
                                    @endif
                                </div>
                                <div class="product-content-horizontal">
                                <div class="product-rating">
                                        @php
                                            $reviews_count = $product->reviews->count();
                                            $avg_rating = $reviews_count > 0 ? $product->reviews->avg('rating') : 2.00;
                                            $full_stars = floor($avg_rating);
                                            $half_star = ($avg_rating - $full_stars) >= 0.5;
                                        @endphp
                                        <div class="stars">
                                            @for($i = 0; $i < $full_stars; $i++)
                                    <i class="fa fa-star"></i>
                                            @endfor
                                            @if($half_star)
                                                <i class="fa fa-star-half-o"></i>
                                            @endif
                                            @for($i = $full_stars + ($half_star ? 1 : 0); $i < 5; $i++)
                                                <i class="fa fa-star-o"></i>
                                            @endfor
                                </div>
                                        <span class="rating-number">{{ number_format($avg_rating, 2) }}</span>
                            </div>
                                    <h3 class="product-name-horizontal">
                                        <a href="{{ url('/product/'.$product->slug) }}">{{ $product->translation->name ?? $product->name }}</a>
                            </h3>
                                    <div class="product-price-horizontal">
                                        @if($product->special_price && $product->price && $product->special_price < $product->price)
                                            <span class="current-price">{!! show_price($product->special_price) !!}</span>
                                            <span class="original-price">{!! show_price($product->price) !!}</span>
                                @else
                                            <span class="current-price">{!! show_price($product->price) !!}</span>
                                    @endif
                                </div>
                                    <button class="add-to-cart-btn-horizontal" type="button" data-product-id="{{ $product->id }}">
                                        Add to cart
                                    </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!--end Mixed Products and Banners Section-->

    <!-- Category Cards Section -->
    <div class="category-cards-section">
        <div class="container">
            <div class="category-cards-row">
                <!-- Category Card 1: Baby Girl -->
                <div class="category-card-item">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/banner-09.png') }}" alt="Baby Girl" class="category-image">
                        </div>
                        <h3 class="category-title">Baby Girl</h3>
                        <p class="category-subtitle">3.457 K Products</p>
                    </div>
                </div>
                
                <!-- Category Card 2: Toddler Girl -->
                <div class="category-card-item">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/banner-10.png') }}" alt="Toddler Girl" class="category-image">
                                </div>
                        <h3 class="category-title">Toddler Girl</h3>
                        <p class="category-subtitle">3.457 K Products</p>
                                </div>
                            </div>
                
                <!-- Category Card 3: Best Seller -->
                <div class="category-card-item">
                    <div class="category-card category-card-bestseller">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/banner-15.png') }}" alt="Best Seller" class="category-image">
                        </div>
                        <h3 class="category-title category-title-bestseller">Best Seller</h3>
                        <p class="category-subtitle category-subtitle-bestseller">3.457 K Products</p>
                                </div>
                                </div>
                
                <!-- Category Card 4: Kid Girl -->
                <div class="category-card-item">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/banner-11.png') }}" alt="Kid Girl" class="category-image">
                            </div>
                        <h3 class="category-title">Kid Girl</h3>
                        <p class="category-subtitle">3.457 K Products</p>
                        </div>
                                </div>
                
                <!-- Category Card 5: Baby Boy -->
                <div class="category-card-item">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/banner-12.png') }}" alt="Baby Boy" class="category-image">
                                </div>
                        <h3 class="category-title">Baby Boy</h3>
                        <p class="category-subtitle">3.457 K Products</p>
                            </div>
                </div>
                
                <!-- Category Card 6: Trending -->
                <div class="category-card-item">
                    <div class="category-card category-card-trending">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/banner-16.png') }}" alt="Trending" class="category-image">
                        </div>
                        <h3 class="category-title category-title-trending">Trending</h3>
                        <p class="category-subtitle category-subtitle-trending">3.457 K Products</p>
                        </div>
                    </div>
                    
                <!-- Category Card 7: Toddler Boy -->
                <div class="category-card-item">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/banner-13.png') }}" alt="Toddler Boy" class="category-image">
                            </div>
                        <h3 class="category-title">Toddler Boy</h3>
                        <p class="category-subtitle">3.457 K Products</p>
                            </div>
                            </div>
                
                <!-- Category Card 8: Kid Boy -->
                <div class="category-card-item">
                    <div class="category-card">
                        <div class="category-image-wrapper">
                            <img src="{{ asset('public/theme/default/images/banner-14.png') }}" alt="Kid Boy" class="category-image">
                            </div>
                        <h3 class="category-title">Kid Boy</h3>
                        <p class="category-subtitle">3.457 K Products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--end Category Cards Section-->

    <!-- Brand Logos Section -->
    <div class="brand-logos-section">
        <div class="container">
            <div class="brand-logos-row">
                <div class="brand-logo-item">
                    <img src="{{ asset('public/theme/default/images/logo-01.png') }}" alt="Brand Logo 1" class="brand-logo">
    </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('public/theme/default/images/logo-02.png') }}" alt="Brand Logo 2" class="brand-logo">
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('public/theme/default/images/logo-03.png') }}" alt="Brand Logo 3" class="brand-logo">
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('public/theme/default/images/logo-04.png') }}" alt="Brand Logo 4" class="brand-logo">
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('public/theme/default/images/logo-05.png') }}" alt="Brand Logo 5" class="brand-logo">
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('public/theme/default/images/logo-06.png') }}" alt="Brand Logo 6" class="brand-logo">
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('public/theme/default/images/logo-07.png') }}" alt="Brand Logo 7" class="brand-logo">
                </div>
                <div class="brand-logo-item">
                    <img src="{{ asset('public/theme/default/images/logo-08.png') }}" alt="Brand Logo 8" class="brand-logo">
                </div>
            </div>
        </div>
    </div>
    <!--end Brand Logos Section-->

    <!-- Weekly Sales Products Section -->
    <div class="weekly-sales-section">
    <div class="container">
            <div class="section-header-sales">
                <h2 class="section-title-sales">Don't miss this weeks sales</h2>
                <a href="{{ url('/shop') }}" class="view-more-link-sales">View More <span class="arrow-icon">→</span></a>
            </div>
            
            <div class="products-carousel-wrapper">
                <div class="products-carousel-track">
                    @php
                        // Get products with special prices (sales) - weekly sales should show products on discount
                        $weekly_sales_products = \App\Entity\Product\Product::where('is_active', 1)
                            ->where('in_stock', 1)
                            ->whereNotNull('special_price')
                            ->whereRaw('special_price < price')
                            ->withCount('reviews')
                            ->with(['reviews', 'files', 'translation'])
                            ->orderBy('created_at', 'desc')
                            ->take(10)
                            ->get();
                    @endphp
                    @foreach($weekly_sales_products as $product)
                        <div class="product-card-item">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <a href="{{ url('/product/'.$product->slug) }}">
                                        @php
                                            // Get product image from database - dynamic
                                            $product_image = null;
                                            if($product->image && isset($product->image->file_path) && $product->image->file_path && $product->image->file_path != 'media/no-image.png') {
                                                $product_image = asset('storage/app/'. $product->image->file_path);
                                            }
                                            // Fallback to default placeholder image
                                            if(!$product_image) {
                                                $product_image = asset('public/theme/default/images/product1.png');
                                            }
                                        @endphp
                                        <img src="{{ $product_image }}" alt="{{ $product->translation->name ?? $product->name }}" class="product-image" onerror="this.src='{{ asset('public/theme/default/images/product1.png') }}'">
                                    </a>
                                    @if($product->special_price && $product->price && $product->special_price < $product->price)
                                        @php
                                            $discount_percent = round((($product->price - $product->special_price) / $product->price) * 100);
                                        @endphp
                                        <span class="discount-badge">{{ $discount_percent }}%</span>
                                    @endif
                                    <button class="wishlist-btn" type="button">
                                        <i class="fa fa-heart"></i>
                                            </button>
                                    </div>
                                <div class="product-rating">
                                    @php
                                        // Calculate dynamic rating from actual reviews
                                        $reviews_count = $product->reviews->count();
                                        $avg_rating = $reviews_count > 0 ? round($product->reviews->avg('rating'), 2) : 0;
                                        $full_stars = floor($avg_rating);
                                        $half_star = ($avg_rating - $full_stars) >= 0.5;
                                    @endphp
                                    <div class="stars">
                                        @for($i = 0; $i < $full_stars; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                        @if($half_star)
                                            <i class="fa fa-star-half-o"></i>
										@endif
                                        @for($i = $full_stars + ($half_star ? 1 : 0); $i < 5; $i++)
                                            <i class="fa fa-star-o"></i>
                                        @endfor
                                    </div>
                                    <span class="rating-number">{{ number_format($avg_rating, 2) }}</span>
                                </div>
                                <h3 class="product-name">
                                    <a href="{{ url('/product/'.$product->slug) }}">{{ $product->translation->name ?? $product->name }}</a>
                                </h3>
                                <div class="product-price">
                                    @if($product->special_price && $product->price && $product->special_price < $product->price)
                                        <span class="current-price">{!! show_price($product->special_price) !!}</span>
                                        <span class="original-price">{!! show_price($product->price) !!}</span>
										@else
                                        <span class="current-price">{!! show_price($product->price) !!}</span>
										@endif
                                    </div>
                                <button class="add-to-cart-btn" type="button" data-product-id="{{ $product->id }}">
                                    Add to cart
                                </button>
									</div>
								</div>
                            @endforeach
							</div>
						</div>
            
            <!-- Carousel Navigation Dots -->
            <div class="products-carousel-dots">
                <span class="dot-item active" data-slide="0"></span>
                <span class="dot-item" data-slide="1"></span>
                <span class="dot-item" data-slide="2"></span>
                <span class="dot-item" data-slide="3"></span>
                <span class="dot-item" data-slide="4"></span>
				</div>
			</div>
		</div>
    <!--end Weekly Sales Products Section-->

    <!-- Dual Promotional Banners Section -->
    <div class="dual-promotional-banners-section">
        <div class="container">
            <div class="dual-banners-row">
                <!-- Banner 1 - Teal Background -->
                <div class="dual-banner-item">
                    <div class="site-banner banner-style-default space-sm" style="background-image: url('{{ asset('public/theme/default/images/banner-17.jpg') }}'); background-color: #0d9488;">
                        <div class="site-banner-content wrap-element items-center justify-start">
                            <div class="site-banner-inner w-70 md-w-80 lg-w-70 custom-color" style="--custom-color: #78350f;">
                                <div class="site-banner-content-header">
                                    <h4 class="entry-subtitle text-13 exclusive-discount-label">Exclusive Discount</h4>
                                    <h2 class="entry-title text-24 md:text-28 font-semibold tracking-tight custom-color" style="--custom-color: #78350f;">Discover a World of Joyful Surprises for Kids</h2>
            </div>
                                <div class="site-banner-content-body">
                                    <div class="entry-excerpt text-14" style="color: #78350f;">
                                        <p>Transforming Childhood into an Exciting Journey with Our Handpicked Selection of Joyful Toys and Trendy Clothing</p>
                        </div>
                                    <a href="{{ url('/shop') }}" class="link-text current-color" style="color: #78350f;">View More <span class="arrow-icon">→</span></a>
                        </div>
                    </div>
                </div>
                        <a href="{{ url('/shop') }}" class="wrap-element site-banner-link"></a>
                        </div>
                        </div>
                
                <!-- Banner 2 - Off-white Background -->
                <div class="dual-banner-item">
                    <div class="site-banner banner-style-default space-sm" style="background-image: url('{{ asset('public/theme/default/images/banner-18.jpg') }}'); background-color: #fef3c7;">
                        <div class="site-banner-content wrap-element items-center justify-start">
                            <div class="site-banner-inner w-70 md-w-80 lg-w-70 custom-color" style="--custom-color: #991b1b;">
                                <div class="site-banner-content-header">
                                    <h4 class="entry-subtitle text-13 exclusive-discount-label">Exclusive Discount</h4>
                                    <h2 class="entry-title text-24 md:text-28 font-semibold tracking-tight custom-color" style="--custom-color: #991b1b;">Discover a Wonderland of Magical Moments for Kids</h2>
                    </div>
                                <div class="site-banner-content-body">
                                    <div class="entry-excerpt text-14" style="color: #991b1b;">
                                        <p>Filling Your Child's World with Color and Fun - Discover Toys and Gifts That Inspire Creativity and Happiness</p>
                </div>
                                    <a href="{{ url('/shop') }}" class="link-text current-color" style="color: #991b1b;">View More <span class="arrow-icon">→</span></a>
                        </div>
                        </div>
                    </div>
                        <a href="{{ url('/shop') }}" class="wrap-element site-banner-link"></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end Dual Promotional Banners Section-->

    <!-- Testimonials Section -->
    <div class="testimonials-section">
        <div class="container">
            <div class="testimonials-row">
                <!-- Testimonial 1 -->
                <div class="testimonial-card-item">
                    <div class="testimonial-card">
                        <h3 class="testimonial-name">Teresa Holland</h3>
                        <p class="testimonial-text">In vel malesuada nisi, vitae porttitor odio. Ut efficitur, lorem a tempus efficitur, nunc massa tempus.</p>
                        <span class="testimonial-time">2 week ago</span>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card-item">
                    <div class="testimonial-card">
                        <h3 class="testimonial-name">Jolane Kohen</h3>
                        <p class="testimonial-text">In vel malesuada nisi, vitae porttitor odio. Ut efficitur, lorem a tempus efficitur, nunc massa tempus.</p>
                        <span class="testimonial-time">2 week ago</span>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card-item">
                    <div class="testimonial-card">
                        <h3 class="testimonial-name">Jessica Lindström</h3>
                        <p class="testimonial-text">In vel malesuada nisi, vitae porttitor odio. Ut efficitur, lorem a tempus efficitur, nunc massa tempus.</p>
                        <span class="testimonial-time">2 week ago</span>
                    </div>
                </div>
                
                <!-- Testimonial 4 -->
                <div class="testimonial-card-item">
                    <div class="testimonial-card">
                        <h3 class="testimonial-name">Teresa Holland</h3>
                        <p class="testimonial-text">In vel malesuada nisi, vitae porttitor odio. Ut efficitur, lorem a tempus efficitur, nunc massa tempus.</p>
                        <span class="testimonial-time">2 week ago</span>
                    </div>
                </div>
                
                <!-- Testimonial 5 -->
                <div class="testimonial-card-item">
                    <div class="testimonial-card">
                        <h3 class="testimonial-name">Jessica Lindström</h3>
                        <p class="testimonial-text">In vel malesuada nisi, vitae porttitor odio. Ut efficitur, lorem a tempus efficitur, nunc massa tempus.</p>
                        <span class="testimonial-time">2 week ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Testimonials Section-->


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
/* Hero Section - 2 Divs Layout */
.hero-section-wrapper {
    background: #fff;
    padding: 30px 0;
    margin-bottom: 40px;
    width: 100%;
    overflow-x: hidden;
}

.hero-section-wrapper .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.hero-row {
    display: flex;
    gap: 15px;
    margin: 0;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: nowrap;
    max-width: 100%;
    width: 100%;
    box-sizing: border-box;
}

/* Div 1: Left Sidebar - Exact Dimensions */
.hero-sidebar-wrapper {
    flex-shrink: 0;
    max-width: 323.78px;
}

.hero-sidebar-box {
    width: 323.78px;
    max-width: 100%;
    height: 600px;
    background: #fff;
    border: 2px solid #b3d9ff;
    border-radius: 8px;
    padding: 0;
    overflow: hidden;
}

.sidebar-categories-list {
    list-style: none;
    padding: 0;
    margin: 0;
    height: 100%;
    overflow-y: auto;
}

.sidebar-category-item {
    padding: 0;
    margin: 0;
}

.sidebar-category-link {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 20px;
    color: #333;
    text-decoration: none;
    transition: all 0.3s;
}

.sidebar-category-link:hover {
    background: #f8f9fa;
    color: #2563eb;
}

.sidebar-category-link:hover .sidebar-category-icon {
    filter: brightness(0) saturate(100%) invert(30%) sepia(93%) saturate(2898%) hue-rotate(214deg) brightness(98%) contrast(101%);
}

.sidebar-category-icon {
    width: 24px;
    height: 24px;
    flex-shrink: 0;
    object-fit: contain;
    filter: brightness(0) saturate(100%) invert(30%) sepia(93%) saturate(2898%) hue-rotate(214deg) brightness(98%) contrast(101%);
}

.sidebar-category-name {
    font-size: 14px;
    font-weight: 500;
    font-family: 'Fredoka', sans-serif;
}

/* Div 2: Right Hero Banner - Exact Dimensions */
.hero-banner-wrapper {
    flex-shrink: 1;
    min-width: 0;
    max-width: 1031.22px;
}

.hero-banner-box {
    width: 1031.22px;
    max-width: 100%;
    height: 607.5px;
    background: #f5f5f5;
    border-radius: 8px;
    padding: 0px 0px;
    position: relative;
    overflow: hidden;
    box-sizing: border-box;
}

.hero-banner-carousel {
    position: relative;
    width: 100%;
    height: 100%;
}

.hero-banner-carousel:hover .banner-nav-arrow {
    opacity: 1;
    visibility: visible;
}

.banner-nav-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.9);
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.banner-nav-arrow:hover {
    background: rgba(255, 255, 255, 1);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.banner-nav-arrow i {
    font-size: 20px;
    color: #333;
    display: inline-block;
    font-family: 'FontAwesome' !important;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.banner-nav-prev {
    left: 20px;
}

.banner-nav-next {
    right: 20px;
}

.hero-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.5s ease-in-out;
    padding: 50px 40px;
    border-radius: 8px;
}

.hero-slide.active {
    opacity: 1;
    visibility: visible;
    position: relative;
}

.banner-content-overlay {
    position: relative;
    z-index: 2;
    max-width: 60%;
    padding: 0;
    margin-left: 0;
    text-align: left;
}

.banner-content-left {
    position: relative;
    z-index: 2;
    max-width: 60%;
    padding: 0;
}

.banner-label {
    font-size: 13px;
    color: #333;
    margin-bottom: 12px;
    font-weight: 500;
    font-family: 'Fredoka', sans-serif;
    text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
}

.banner-heading {
    font-size: 48px;
    font-weight: 700;
    color: #15803d;
    line-height: 1.2;
    margin-bottom: 20px;
    font-family: 'Fredoka', sans-serif;
    text-shadow: 0 1px 3px rgba(255, 255, 255, 0.8);
}

.banner-description {
    font-size: 15px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 35px;
    font-family: 'Fredoka', sans-serif;
    text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
}

.banner-button {
    display: inline-block;
    padding: 14px 35px;
    background: #ff6b35;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s;
    font-family: 'Fredoka', sans-serif;
    text-transform: capitalize;
}

.banner-button:hover {
    background: #ff5722;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
}


.banner-pagination-dots {
    position: absolute;
    bottom: 25px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 8px;
    z-index: 3;
}

.dot-item {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #ddd;
    cursor: pointer;
    transition: all 0.3s;
}

.dot-item.active {
    background: #2563eb;
    width: 30px;
    border-radius: 5px;
}

/* Hero Banner Pharmez Styles */
.hero-banner-pharmez {
    background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
    position: relative;
    padding: 100px 0 80px 0;
    overflow: hidden;
    border-radius: 0 0 30px 30px;
    width: 95%;
    margin: 0 auto;
    border-radius: 30px;
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
    font-family: 'Fredoka', sans-serif;
}

.hero-title {
    font-size: 56px;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 25px;
    font-family: 'Fredoka', sans-serif;
}

.hero-description {
    font-size: 18px;
    color: #fff;
    line-height: 1.6;
    margin-bottom: 40px;
    opacity: 0.95;
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
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
    /* display: flex;
    justify-content: flex-end;
    align-items: center; */
    padding: 0;
}
.hero-botom {
    display: flex;
    flex-direction: column;
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
    font-family: 'Fredoka', sans-serif;
}

.client-text {
    font-size: 16px;
    color: #fff;
    margin: 5px 0 0 0;
    opacity: 0.9;
    font-family: 'Fredoka', sans-serif;
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
    
    .hero-section-wrapper .container {
        padding: 0 15px;
    }
    
    .hero-row {
        flex-direction: column;
        align-items: stretch;
    }
    
    .hero-sidebar-wrapper {
        width: 100%;
        margin-bottom: 15px;
    }
    
    .hero-sidebar-box {
        width: 100%;
        height: auto;
        max-height: 400px;
    }
    
    .hero-banner-wrapper {
        width: 100%;
    }
    
    .hero-banner-box {
        width: 100%;
        max-width: 100%;
        height: auto;
        min-height: 400px;
    }
    
    .banner-content-left {
        max-width: 100%;
        padding-right: 0;
    }
    
    .banner-heading {
        font-size: 32px;
    }
    
    .banner-image-right {
        position: relative;
        width: 100%;
        margin-top: 20px;
        height: auto;
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
        justify-content: center;
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
    .banner-heading {
        font-size: 24px;
    }
    
    .banner-description {
        font-size: 14px;
    }
    
    .hero-banner-box {
        padding: 30px 20px;
        min-height: 350px;
    }
    
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
    font-family: 'Fredoka', sans-serif;
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
    gap: 75px;
    justify-content: center;
    align-items: flex-start;
}

.benefit-card {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 25px 20px;
    transition: all 0.3s ease;
    width: 321.25px;
    height: 91px;
    box-sizing: border-box;
    flex-shrink: 0;
}

.benefits-section .col-lg-3 {
    padding-left: 15px;
    padding-right: 15px;
    margin-bottom: 0;
    flex: 0 0 auto;
    width: auto;
}

.benefit-card:hover {
    transform: translateY(-3px);
}

.benefit-icon-wrapper {
    width: 60px;
    height: 60px;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.benefit-icon {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

.benefit-content {
    flex: 1;
}

.benefit-title {
    font-size: 15px;
    font-weight: 500;
    font-style: normal;
    color: rgb(0, 0, 0);
    margin-bottom: 8px;
    font-family: 'Fredoka', sans-serif;
    line-height: 18px;
}

.benefit-description {
    font-size: 13px;
    font-weight: 400;
    font-style: normal;
    color: rgb(107, 114, 128);
    margin: 0 0 12px 0;
    font-family: 'Fredoka', sans-serif;
    line-height: 20px;
}

.benefit-link {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 13px;
    font-weight: 500;
    font-style: normal;
    color: rgb(0, 0, 0);
    text-decoration: none;
    font-family: 'Fredoka', sans-serif;
    line-height: 20px;
    transition: all 0.3s ease;
}

.benefit-link:hover {
    color: rgb(0, 0, 0);
    text-decoration: underline;
}

.benefit-link .arrow-icon {
    display: inline-block;
    transition: transform 0.3s ease;
}

.benefit-link:hover .arrow-icon {
    transform: translateX(5px);
}

@media (max-width: 991px) {
    .benefits-section {
        padding: 50px 0;
    }
    
    .benefits-section .row {
        flex-wrap: wrap;
        gap: 25px;
    }
    
    .benefits-section .col-lg-3 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    
    .benefit-card {
        gap: 18px;
        padding: 20px 15px;
        width: 321.25px;
        height: 91px;
        max-width: 100%;
    }
    
    .benefit-icon-wrapper {
        width: 55px;
        height: 55px;
    }
    
    .benefit-icon {
        width: 55px;
        height: 55px;
    }
    
    .benefit-title {
        font-size: 17px;
        margin-bottom: 6px;
    }
    
    .benefit-description {
        font-size: 13px;
        font-weight: 400;
        font-style: normal;
        color: rgb(107, 114, 128);
        line-height: 20px;
        margin-bottom: 10px;
    }
    
    .benefit-link {
        font-size: 13px;
        font-weight: 500;
        font-style: normal;
        color: rgb(0, 0, 0);
        line-height: 20px;
    }
}

@media (max-width: 767px) {
    .benefits-section {
        padding: 40px 0;
    }
    
    .benefits-section .row {
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .benefit-card {
        padding: 15px 10px;
        gap: 12px;
        width: 321.25px;
        height: 91px;
        max-width: 100%;
    }
    
    .benefit-icon-wrapper {
        width: 50px;
        height: 50px;
    }
    
    .benefit-icon {
        width: 50px;
        height: 50px;
    }
    
    .benefit-title {
        font-size: 15px;
        font-weight: 500;
        font-style: normal;
        color: rgb(0, 0, 0);
        line-height: 18px;
        margin-bottom: 5px;
    }
    
    .benefit-description {
        font-size: 13px;
        font-weight: 400;
        font-style: normal;
        color: rgb(107, 114, 128);
        line-height: 20px;
        margin-bottom: 8px;
    }
    
    .benefit-link {
        font-size: 13px;
        font-weight: 500;
        font-style: normal;
        color: rgb(0, 0, 0);
        line-height: 20px;
    }
}

/* Promotional Banners Section Styles */
.promotional-banners-section {
    background: #fff;
    padding: 60px 0;
    width: 100%;
}

.promotional-banners-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.promotional-banners-row {
    display: flex;
    gap: 30px;
    justify-content: center;
    align-items: stretch;
    flex-wrap: nowrap;
}

.promotional-banner-item {
    flex: 0 0 437.34px;
    width: 437.34px;
    min-width: 437.34px;
    max-width: 437.34px;
    height: 260px;
}

.site-banner {
    position: relative;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    display: flex;
    align-items: center;
    width: 437.34px;
    height: 260px;
    transition: all 0.3s ease;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.site-banner:hover {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
}

.site-banner-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.site-banner-content {
    position: relative;
    z-index: 2;
    padding: 20px;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.site-banner-inner {
    width: 70%;
}

.site-banner-inner.w-70.md-w-80.lg-w-70.custom-color {
    padding: 30px;
}

.site-banner-content-header {
    margin-bottom: 15px;
}

.site-banner-content-body {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.site-banner-image {
    position: relative;
    z-index: 2;
    width: 50%;
    height: 100%;
    flex-shrink: 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}


.entry-subtitle {
    font-size: 16px;
    font-weight: 400;
    font-style: normal;
    color: rgb(0, 146, 219);
    line-height: 24px;
    margin-bottom: 8px;
    font-family: 'Fredoka', sans-serif;
    display: block;
}

.exclusive-discount-label {
    font-style: normal;
    font-weight: 400;
    color: #075445;
    font-size: 16px;
    line-height: 24px;
}

.exclusive-discount-label-brown {
    font-style: normal;
    font-weight: 400;
    color: #674b40;
    font-size: 16px;
    line-height: 24px;
}

.entry-title {
    font-size: 24px;
    font-weight: 600;
    margin: 0;
    line-height: 1.3;
    font-family: 'Fredoka', sans-serif;
    letter-spacing: -0.5px;
}


.entry-excerpt {
    font-size: 14px;
    line-height: 1.6;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.entry-excerpt p {
    margin: 0;
}

.link-text {
    font-size: 14px;
    text-decoration: none;
    font-weight: 500;
    font-family: 'Fredoka', sans-serif;
    transition: opacity 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.link-text:hover {
    opacity: 0.8;
}

.link-text i {
    font-size: 12px;
}

.link-text .arrow-icon {
    display: inline-block;
    transition: transform 0.3s ease;
}

.link-text:hover .arrow-icon {
    transform: translateX(5px);
}

.custom-color {
    color: var(--custom-color, #723c48);
}

.current-color {
    color: inherit;
}

.wrap-element {
    display: flex;
}

.items-center {
    align-items: center;
}

.justify-start {
    justify-content: flex-start;
}

.overflow-hidden {
    overflow: hidden;
}

.rounded-base {
    border-radius: 8px;
}

.space-sm {
    padding: 0;
}

@media (max-width: 768px) {
    .lg\:rounded-lg {
        border-radius: 12px;
    }
}

/* Mixed Products and Banners Section Styles */
.mixed-products-banners-section {
    background: #fff;
    padding: 60px 0;
    width: 100%;
}

.mixed-products-banners-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.mixed-layout-row {
    display: flex;
    gap: 30px;
    align-items: flex-start;
}

.mixed-column {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.products-column {
    flex: 1;
}

.banners-column {
    flex: 1;
}

.mixed-product-card-item {
    width: 436.68px;
    height: 199.2px;
    flex-shrink: 0;
}

.mixed-product-card-item .product-card {
    width: 100%;
    height: auto;
}

.product-card-horizontal {
    display: flex;
    align-items: center;
    gap: 20px;
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    width: 436.68px;
    height: 199.2px;
    border: 1px solid transparent;
    transition: all 0.3s ease;
    box-sizing: border-box;
}

.product-card-horizontal:hover {
    border: 1px solid #ffb366;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
}

.product-image-wrapper-horizontal {
    position: relative;
    flex-shrink: 0;
    width: 120px;
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f9f9f9;
    border-radius: 8px;
    overflow: hidden;
}

.product-image-horizontal {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.product-image-wrapper-horizontal .discount-badge {
    position: absolute;
    top: 8px;
    right: 8px;
    background: #ef4444;
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    padding: 4px 8px;
    border-radius: 20px;
    z-index: 2;
    font-family: 'Fredoka', sans-serif;
}

.product-content-horizontal {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.product-content-horizontal .product-rating {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 0;
    padding: 0;
}

.product-content-horizontal .product-rating .stars {
    display: flex;
    gap: 2px;
    font-size: 14px;
}

.product-content-horizontal .product-rating .stars .fa-star {
    color: #fbbf24;
}

.product-content-horizontal .product-rating .stars .fa-star-o {
    color: #d1d5db;
}

.product-content-horizontal .product-rating .stars .fa-star-half-o {
    color: #fbbf24;
}

.product-content-horizontal .product-rating .rating-number {
    font-size: 13px;
    color: #6b7280;
    font-weight: 500;
    font-family: 'Fredoka', sans-serif;
}

.product-name-horizontal {
    font-size: 15px;
    font-weight: 500;
    color: #000;
    margin: 0;
    line-height: 1.4;
    font-family: 'Fredoka', sans-serif;
}

.product-name-horizontal a {
    color: #000;
    text-decoration: none;
    transition: color 0.3s ease;
}

.product-name-horizontal a:hover {
    color: #0066cc;
}

.product-price-horizontal {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0;
}

.product-price-horizontal .current-price {
    font-size: 18px;
    font-weight: 600;
    color: #10b981;
    font-family: 'Fredoka', sans-serif;
}

.product-price-horizontal .original-price {
    font-size: 14px;
    color: #9ca3af;
    text-decoration: line-through;
    font-family: 'Fredoka', sans-serif;
}

.add-to-cart-btn-horizontal {
    background: #ffb366;
    color: #d97706;
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Fredoka', sans-serif;
    align-self: flex-start;
    margin-top: 5px;
}

.add-to-cart-btn-horizontal:hover {
    background: #ff9500;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(255, 149, 0, 0.3);
}

.mixed-banner-item {
    width: 100%;
}

.mixed-banner-item {
    width: 436.68px;
    height: 305px;
    flex-shrink: 0;
}

.mixed-banner-item .site-banner {
    width: 436.68px;
    height: 305px;
}

@media (max-width: 991px) {
    .mixed-layout-row {
        flex-direction: column;
        gap: 30px;
    }
    
    .mixed-column {
        width: 100%;
    }
    
    .mixed-banner-item .site-banner {
        height: 300px;
    }
}

@media (max-width: 767px) {
    .mixed-products-banners-section {
        padding: 40px 0;
    }
    
    .mixed-layout-row {
        gap: 20px;
    }
    
    .mixed-column {
        gap: 20px;
    }
    
    .mixed-banner-item {
        width: 100%;
        height: auto;
    }
    
    .mixed-banner-item .site-banner {
        width: 100%;
        height: 220px;
    }
    
    .mixed-product-card-item {
        width: 100%;
        height: auto;
    }
    
    .product-card-horizontal {
        width: 100%;
        height: auto;
        flex-direction: column;
        align-items: flex-start;
    }
    
    .product-image-wrapper-horizontal {
        width: 100%;
        height: 200px;
    }
    
    .product-content-horizontal {
        width: 100%;
    }
    
    .add-to-cart-btn-horizontal {
        width: 100%;
        text-align: center;
    }
}

/* Category Cards Section Styles */
.category-cards-section {
    background: #fff;
    padding: 60px 0;
    width: 100%;
}

.category-cards-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.category-cards-row {
    display: flex;
    gap: 20px;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
}

.category-card-item {
    flex: 0 0 calc(12.5% - 17.5px);
    min-width: 140px;
    max-width: 180px;
    background: #fff;
}

.category-card {
    background: #f3f4f6;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.category-card:hover {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    transform: translateY(-5px);
}

.category-card-bestseller {
    background: #fff1f2;
    
}

.category-card-trending {
    background: #fff1f2;
}

.category-image-wrapper {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    background: #f9f9f9;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.category-title {
    font-size: 16px;
    font-weight: 600;
    color: #000;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
    line-height: 1.3;
}

.category-subtitle {
    font-size: 13px;
    font-weight: 400;
    color: #6b7280;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
    line-height: 1.4;
}

/* Best Seller Card - Custom Title and Subtitle Styles */
.category-title-bestseller {
   color: #e2244d;
   font-size: 16px;
   line-height: 24px;
   font-weight: 600;
}

.category-subtitle-bestseller {
    color: #fb7386;
}

/* Trending Card - Custom Title and Subtitle Styles */
.category-title-trending {
   color: #e2244d;
   font-size: 16px;
   line-height: 24px;
   font-weight: 600;
}

.category-subtitle-trending {
    color: #fb7386;
}

@media (max-width: 1200px) {
    .category-card-item {
        flex: 0 0 calc(25% - 15px);
        min-width: 150px;
        max-width: 200px;
    }
}

@media (max-width: 768px) {
    .category-cards-section {
        padding: 40px 0;
    }
    
    .category-cards-row {
        gap: 15px;
    }
    
    .category-card-item {
        flex: 0 0 calc(33.333% - 10px);
        min-width: 120px;
        max-width: 160px;
    }
    
    .category-image-wrapper {
        width: 80px;
        height: 80px;
    }
    
    .category-title {
        font-size: 14px;
    }
    
    .category-subtitle {
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .category-card-item {
        flex: 0 0 calc(50% - 7.5px);
        min-width: 140px;
        max-width: 180px;
    }
}

/* Brand Logos Section Styles */
.brand-logos-section {
    background: #fff;
    padding: 60px 0;
    width: 100%;
}

.brand-logos-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.brand-logos-row {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    flex-wrap: nowrap;
}

.brand-logo-item {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.6;
    transition: opacity 0.3s ease;
}

.brand-logo-item:hover {
    opacity: 1;
}

.brand-logo {
    width: 138px;
    height: 68px;
    object-fit: contain;
    filter: grayscale(100%) brightness(0.7);
    transition: filter 0.3s ease;
}

.brand-logo-item:hover .brand-logo {
    filter: grayscale(0%) brightness(1);
}

@media (max-width: 1200px) {
    .brand-logos-row {
        gap: 30px;
        flex-wrap: nowrap;
    }
    
    .brand-logo {
        width: 120px;
        height: 59px;
    }
}

@media (max-width: 768px) {
    .brand-logos-section {
        padding: 40px 0;
    }
    
    .brand-logos-row {
        gap: 20px;
        flex-wrap: nowrap;
        overflow-x: auto;
        justify-content: flex-start;
        padding: 0 15px;
        -webkit-overflow-scrolling: touch;
    }
    
    .brand-logo-item {
        flex-shrink: 0;
    }
    
    .brand-logo {
        width: 100px;
        height: 49px;
    }
}

@media (max-width: 480px) {
    .brand-logos-row {
        gap: 15px;
        flex-wrap: nowrap;
    }
    
    .brand-logo {
        width: 80px;
        height: 39px;
    }
}

/* Weekly Sales Products Section Styles */
.weekly-sales-section {
    background: #fff;
    padding: 60px 0;
    width: 100%;
}

.weekly-sales-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.section-header-sales {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.section-title-sales {
    font-size: 24px;
    font-weight: 500;
    font-style: normal;
    color: rgb(0, 0, 0);
    line-height: 29px;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.view-more-link-sales {
    font-size: 16px;
    font-weight: 500;
    color: #0066cc;
    text-decoration: none;
    font-family: 'Fredoka', sans-serif;
    transition: color 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.view-more-link-sales:hover {
    color: #0052a3;
    text-decoration: underline;
}

.view-more-link-sales .arrow-icon {
    display: inline-block;
    transition: transform 0.3s ease;
}

.view-more-link-sales:hover .arrow-icon {
    transform: translateX(5px);
}

.weekly-sales-section .products-carousel-wrapper {
    overflow: hidden;
    position: relative;
    margin-bottom: 30px;
}

.weekly-sales-section .products-carousel-track {
    display: flex;
    gap: 15px;
    justify-content: flex-start;
    margin: 0 auto;
    transition: transform 0.3s ease;
    flex-wrap: nowrap;
    width: 100%;
}

.weekly-sales-section .product-card-item {
    flex: 0 0 calc(20% - 12px);
    min-width: calc(20% - 12px);
    max-width: calc(20% - 12px);
    width: calc(20% - 12px);
}

.weekly-sales-section .product-card {
    width: 100%;
    height: 436.2px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.weekly-sales-section .product-card:hover {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    transform: translateY(-5px);
}

.weekly-sales-section .product-image-wrapper {
    position: relative;
    width: 100%;
    max-width: 225px;
    height: 225px;
    margin: 0 auto;
    padding-top: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f9f9f9;
}

.weekly-sales-section .product-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.weekly-sales-section .discount-badge {
    position: absolute;
    top: 20px;
    left: 15px;
    background: #10b981;
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 20px;
    z-index: 2;
    font-family: 'Fredoka', sans-serif;
}

.weekly-sales-section .wishlist-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #ffc0cb;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 2;
    transition: all 0.3s ease;
}

.weekly-sales-section .wishlist-btn:hover {
    background: #ffb6c1;
    transform: scale(1.1);
}

.weekly-sales-section .wishlist-btn i {
    color: #fff;
    font-size: 14px;
}

.weekly-sales-section .product-rating {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 15px 10px;
}

.weekly-sales-section .stars {
    display: flex;
    gap: 2px;
    font-size: 14px;
}

.weekly-sales-section .stars .fa-star {
    color: #fbbf24;
}

.weekly-sales-section .stars .fa-star-o {
    color: #d1d5db;
}

.weekly-sales-section .stars .fa-star-half-o {
    color: #fbbf24;
}

.weekly-sales-section .rating-number {
    font-size: 13px;
    color: #6b7280;
    font-weight: 500;
    font-family: 'Fredoka', sans-serif;
}

.weekly-sales-section .product-name {
    font-size: 15px;
    font-weight: 500;
    color: #000;
    margin: 0;
    padding: 0 15px 14px;
    line-height: 1.4;
    font-family: 'Fredoka', sans-serif;
}

.weekly-sales-section .product-name a {
    color: #000;
    text-decoration: none;
    transition: color 0.3s ease;
}

.weekly-sales-section .product-name a:hover {
    color: #0066cc;
}

.weekly-sales-section .product-price {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0 15px 18px;
}

.weekly-sales-section .current-price {
    font-size: 18px;
    font-weight: 600;
    color: #000;
    font-family: 'Fredoka', sans-serif;
}

.weekly-sales-section .original-price {
    font-size: 14px;
    color: #9ca3af;
    text-decoration: line-through;
    font-family: 'Fredoka', sans-serif;
}

.weekly-sales-section .add-to-cart-btn {
    background: #ffb366;
    color: #d97706;
    border: none;
    border-radius: 8px;
    padding: 12px 20px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Fredoka', sans-serif;
    margin: 0 15px 15px;
}

.weekly-sales-section .add-to-cart-btn:hover {
    background: #ff9500;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(255, 149, 0, 0.3);
}

.weekly-sales-section .products-carousel-dots {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    margin-top: 30px;
}

.weekly-sales-section .products-carousel-dots .dot-item {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #d1d5db;
    cursor: pointer;
    transition: all 0.3s ease;
}

.weekly-sales-section .products-carousel-dots .dot-item.active {
    background: #0066cc;
    width: 12px;
    height: 12px;
}

.weekly-sales-section .products-carousel-dots .dot-item:hover {
    background: #9ca3af;
}

@media (max-width: 991px) {
    .weekly-sales-section {
        padding: 50px 0;
    }
    
    .section-header-sales {
        margin-bottom: 30px;
    }
    
    .weekly-sales-section .products-carousel-track {
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    
    .weekly-sales-section .products-carousel-track::-webkit-scrollbar {
        display: none;
    }
    
    .weekly-sales-section .product-card-item {
        flex: 0 0 calc(50% - 8px);
        min-width: calc(50% - 8px);
        max-width: calc(50% - 8px);
        scroll-snap-align: start;
    }
}

@media (max-width: 767px) {
    .weekly-sales-section {
        padding: 40px 0;
    }
    
    .section-title-sales {
        font-size: 20px;
    }
    
    .view-more-link-sales {
        font-size: 14px;
    }
    
    .weekly-sales-section .product-card-item {
        flex: 0 0 calc(100% - 0px);
        min-width: calc(100% - 0px);
        max-width: calc(100% - 0px);
    }
}

/* Dual Promotional Banners Section Styles */
.dual-promotional-banners-section {
    background: #fff;
        padding: 60px 0;
    width: 100%;
}

.dual-promotional-banners-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.dual-banners-row {
    display: flex;
    gap: 30px;
    justify-content: center;
    align-items: stretch;
}

.dual-banner-item {
    flex: 1;
    max-width: 667.5px;
    width: 667.5px;
    height: 300px;
    flex-shrink: 0;
}

.dual-banner-item .site-banner {
    position: relative;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    display: flex;
    align-items: center;
    width: 667.5px;
    height: 300px;
    transition: all 0.3s ease;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.dual-banner-item .site-banner:hover {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
}

.dual-banner-item .site-banner-link {
    position: absolute;
    top: 0;
    left: 0;
        width: 100%;
    height: 100%;
    z-index: 1;
}

.dual-banner-item .site-banner-content {
    position: relative;
    z-index: 2;
    padding: 30px;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.dual-banner-item .site-banner-inner {
    width: 60%;
}

.dual-banner-item .site-banner-content-header {
    margin-bottom: 20px;
}

.dual-banner-item .entry-subtitle {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 12px;
    font-family: 'Fredoka', sans-serif;
}

.dual-banner-item .entry-title {
    font-size: 28px;
    font-weight: 700;
    line-height: 1.3;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.dual-banner-item .site-banner-content-body {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.dual-banner-item .entry-excerpt {
    font-size: 15px;
    line-height: 1.6;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.dual-banner-item .entry-excerpt p {
    margin: 0;
}

.dual-banner-item .link-text {
    font-size: 16px;
    font-weight: 400;
    line-height: 24px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: opacity 0.3s ease;
    font-family: 'Fredoka', sans-serif;
}

.dual-banner-item .link-text:hover {
    opacity: 0.8;
}

.dual-banner-item .link-text i {
    font-size: 12px;
    transition: transform 0.3s ease;
}

.dual-banner-item .link-text:hover i {
    transform: translateX(3px);
}

@media (max-width: 991px) {
    .dual-banners-row {
        flex-direction: column;
        gap: 30px;
    }
    
    .dual-banner-item {
        max-width: 100%;
        width: 100%;
        height: auto;
    }
    
    .dual-banner-item .site-banner {
        width: 100%;
        height: 350px;
        max-width: 100%;
    }
    
    .dual-banner-item .site-banner-inner {
        width: 70%;
    }
}

@media (max-width: 767px) {
    .dual-promotional-banners-section {
        padding: 40px 0;
    }
    
    .dual-banners-row {
        gap: 20px;
    }
    
    .dual-banner-item {
        width: 100%;
        height: auto;
    }
    
    .dual-banner-item .site-banner {
        width: 100%;
        height: 300px;
        max-width: 100%;
    }
    
    .dual-banner-item .site-banner-inner {
        width: 80%;
        
    }
    
    .dual-banner-item .entry-title {
        font-size: 22px;
    }
    
    .dual-banner-item .entry-excerpt {
        font-size: 14px;
    }
}

/* Testimonials Section Styles */
.testimonials-section {
    background: #fff;
    padding: 60px 0;
    width: 100%;
}

.testimonials-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.testimonials-row {
    display: flex;
    gap: 30px;
    justify-content: center;
    align-items: stretch;
    flex-wrap: nowrap;
}

.testimonial-card-item {
    flex: 1;
    min-width: 0;
}

.testimonial-card {
    background: transparent;
    padding: 0;
    box-shadow: none;
    border: none;
    display: flex;
    flex-direction: column;
    transition: none;
}

.testimonial-name {
    font-style: normal;
    font-weight: 500;
    color: rgb(0, 0, 0) !important;
    font-size: 15px;
    line-height: 23px;
    margin: 0 0 15px 0;
    font-family: 'Fredoka', sans-serif;
}

.testimonial-text {
    font-size: 14px;
    font-weight: 400;
    color: 
    rgb(156, 163, 175) !important;
    margin: 0 0 0 0;
    line-height: 21px;
    font-family: 'Fredoka', sans-serif;
    flex: 1;
}

.testimonial-time {
        font-size: 12px;
    font-weight: 400;
    line-height: 18px;
    color: 
    rgb(156, 163, 175) !important;
    font-family: 'Fredoka', sans-serif;
    padding-top: 10px;
}

@media (max-width: 991px) {
    .testimonials-section {
        padding: 50px 0;
    }
    
    .testimonials-row {
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .testimonial-card-item {
        flex: 1 1 calc(50% - 10px);
        min-width: calc(50% - 10px);
    }
}

@media (max-width: 767px) {
    .testimonials-section {
        padding: 40px 0;
    }
    
    .testimonials-row {
        flex-direction: column;
        gap: 20px;
    }
    
    .testimonial-card-item {
        flex: 1 1 100%;
        min-width: 100%;
    }
    
    .testimonial-name {
        font-style: normal;
        font-weight: 500;
        color: rgb(0, 0, 0) !important;
        font-size: 15px;
        line-height: 23px;
    }
    
    .testimonial-text {
        font-size: 14px;
    }
}

    .promotional-banners-row {
        gap: 20px;
    }
    
    .promotional-banner-item {
        flex: 1 1 calc(50% - 10px);
        min-width: 280px;
    }
    
    .site-banner {
        height: 320px;
    }
    
    .site-banner-inner {
        width: 80%;
    }
}

@media (max-width: 767px) {
    .promotional-banners-section {
        padding: 40px 0;
    }
    
    .promotional-banners-row {
        flex-direction: column;
        gap: 20px;
    }
    
    .promotional-banner-item {
        max-width: 100%;
        min-width: 100%;
    }
    
    .site-banner {
        height: 220px;
        flex-direction: column;
    }
    
    .site-banner-content {
        width: 100%;
        padding: 15px;
    }
    
    .site-banner-inner {
        width: 100%;
    }
    
    .site-banner-image {
        width: 100%;
        height: 50%;
    }
    
    .entry-title {
        font-size: 20px;
    }
}

/* Cash Back Banner Section Styles */
.cashback-banner-section {
    background: #fff;
    padding: 0px 0;
    width: 100%;
}

.cashback-banner-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.cashback-banner {
    background: #f5f5f5;
    border-radius: 12px;
    width: 1360px;
    height: 64px;
    max-width: 100%;
    margin: 0 auto;
    padding: 0 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    flex-direction: row;
    box-sizing: border-box;
}

.cashback-content {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.cashback-text-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
}

.cashback-title {
    font-size: 18px;
    font-weight: 700;
    line-height: 22px;
    color: rgb(12, 74, 110);
    margin: 0;
    font-family: 'Fredoka', sans-serif;
    display: inline-block;
}

.cashback-description {
    font-size: 16px;
    color: #0c4a6e;
    margin: 0;
    line-height: 1.5;
    font-family: 'Fredoka', sans-serif;
    display: inline-block;
}

.cashback-earn-text {
    font-style: normal;
    font-weight: 600;
    color: rgb(12, 74, 110);
    font-size: 14px;
    line-height: 21px;
}

.cashback-preapproved-text {
    font-style: normal;
    font-weight: 400;
    color: rgb(12, 74, 110);
    font-size: 14px;
    line-height: 21px;
}

.cashback-button {
    background: #f5f5f5;
    color: #0c4a6e !important;
    border: 1px solid #0c4a6e;
    border-radius: 8px;
    padding: 8px 18px;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
    font-family: 'Fredoka', sans-serif;
    transition: all 0.3s ease;
    white-space: nowrap;
}

@media (max-width: 767px) {
    .cashback-banner {
        padding: 25px 20px;
    }
    
    .cashback-button {
        width: auto;
    }
}

/* Popular Products Section Styles */
.popular-products-section {
    background: #fff;
    padding: 60px 0;
    position: relative;
    width: 100%;
    overflow-x: hidden;
}

.popular-products-section .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

.section-header-popular {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.section-title-popular {
    font-size: 24px;
    font-weight: 500;
    font-style: normal;
    color: rgb(0, 0, 0);
    line-height: 29px;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.view-more-link {
    font-size: 16px;
    font-weight: 500;
    color: #2563eb;
    text-decoration: none;
    font-family: 'Fredoka', sans-serif;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.view-more-link:hover {
    color: #1d4ed8;
    text-decoration: underline;
}

.view-more-link .arrow-icon {
    display: inline-block;
    transition: transform 0.3s ease;
}

.view-more-link:hover .arrow-icon {
    transform: translateX(5px);
}

.products-carousel-wrapper {
    position: relative;
    max-width: 100%;
    overflow: hidden;
}

.products-carousel-track {
    display: flex;
        gap: 15px;
    overflow: visible;
    padding-bottom: 20px;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: nowrap;
    max-width: 100%;
    margin: 0 auto;
}

.products-carousel-track::-webkit-scrollbar {
    display: none;
}

.product-card-item {
    flex: 0 0 263px;
    max-width: 263px;
    width: 263px;
}

.product-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    width: 263px;
    height: 436.2px;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    position: relative;
}

/* Popular Products Section Specific Styles */
.popular-products-section .products-carousel-wrapper {
    overflow: hidden;
    position: relative;
    margin-bottom: 30px;
}

.popular-products-section .products-carousel-track {
    display: flex;
    gap: 15px;
    justify-content: flex-start;
    margin: 0 auto;
    transition: transform 0.3s ease;
    flex-wrap: nowrap;
        width: 100%;
    overflow: hidden;
    padding-bottom: 20px;
}

.popular-products-section .product-card-item {
    flex: 0 0 calc(20% - 12px);
    min-width: calc(20% - 12px);
    max-width: calc(20% - 12px);
    width: calc(20% - 12px);
}

.popular-products-section .product-card {
    width: 100%;
    height: 436.2px;
}

.popular-products-section .product-image-wrapper {
    width: 100%;
    max-width: 225px;
    height: 225px;
}

.product-card:hover {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
}

.product-image-wrapper {
    position: relative;
    width: 225px;
    height: 225px;
    margin: 0 auto;
    overflow: hidden;
    background: #f9fafb;
}

.product-image-wrapper a {
    display: block;
    width: 100%;
        height: 100%;
    }
    
.product-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    background: #fff;
}

.discount-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: #10b981;
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    padding: 5px 12px;
    border-radius: 20px;
    font-family: 'Fredoka', sans-serif;
    z-index: 2;
    line-height: 1.2;
}

.wishlist-btn {
    position: absolute;
    top: 12px;
    right: 12px;
    background: #ffc0cb;
    border: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 2;
    color: #fff;
}

.wishlist-btn:hover {
    background: #ffb3c1;
}

.wishlist-btn i {
    font-size: 15px;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 15px 10px;
}

.stars {
    display: flex;
    gap: 3px;
    color: #fbbf24;
}

.stars i {
        font-size: 14px;
}

.rating-number {
    font-size: 13px;
    color: #6b7280;
    font-family: 'Fredoka', sans-serif;
    font-weight: 400;
}

.product-name {
    margin: 0;
    padding: 0 15px 14px;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.5;
    font-family: 'Fredoka', sans-serif;
    flex: 1;
    color: #1f2937;
}

.product-name a {
    color: #1f2937;
    text-decoration: none;
    transition: color 0.3s ease;
}

.product-name a:hover {
    color: #1f2937;
}

.product-price {
    padding: 0 15px 16px;
    display: flex;
    align-items: baseline;
    gap: 10px;
}

.current-price {
    font-size: 18px;
    font-weight: 600;
    color: #10b981;
    font-family: 'Fredoka', sans-serif;
}

.original-price {
    font-size: 14px;
    color: #9ca3af;
    text-decoration: line-through;
    font-family: 'Fredoka', sans-serif;
    font-weight: 400;
}

.add-to-cart-btn {
    margin: 0 15px 15px;
    padding: 12px 20px;
    background: #ffb366;
    color: #d97706;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Fredoka', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
    width: calc(100% - 30px);
    margin-top: auto;
}

.add-to-cart-btn:hover {
    background: #ffa366;
    color: #b45309;
}

.add-to-cart-btn:hover {
    background: #1d4ed8;
    transform: translateY(-1px);
}

.carousel-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 30px;
}

.carousel-dots .dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #d1d5db;
    cursor: pointer;
    transition: all 0.3s ease;
}

.carousel-dots .dot.active {
    background: #2563eb;
    width: 30px;
    border-radius: 5px;
}

@media (max-width: 991px) {
    .popular-products-section {
        padding: 50px 0;
    }
    
    .section-title-popular {
        font-size: 28px;
    }
    
    .popular-products-section .products-carousel-track {
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    
    .popular-products-section .products-carousel-track::-webkit-scrollbar {
        display: none;
    }
    
    .popular-products-section .product-card-item {
        flex: 0 0 calc(50% - 8px);
        min-width: calc(50% - 8px);
        max-width: calc(50% - 8px);
        scroll-snap-align: start;
    }
    
    .product-card-item {
        flex: 0 0 263px;
        max-width: 263px;
        width: 263px;
    }
    
    .product-card {
        width: 263px;
        height: 436.2px;
    }
}

@media (max-width: 767px) {
    .popular-products-section {
        padding: 40px 0;
    }
    
    .section-header-popular {
        flex-direction: column;
    }
    
    .popular-products-section .product-card-item {
        flex: 0 0 calc(100% - 0px);
        min-width: calc(100% - 0px);
        max-width: calc(100% - 0px);
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 30px;
    }
    
    .section-title-popular {
        font-size: 24px;
    }
    
    .view-more-link {
        font-size: 14px;
    }
    
    .product-card-item {
        flex: 0 0 263px;
        max-width: 263px;
        width: 263px;
    }
    
    .product-card {
        width: 263px;
        height: 436.2px;
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
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
    line-height: 1;
}

.offer-type {
    font-size: 18px;
    font-weight: 600;
    color: #1f2937;
    font-family: 'Fredoka', sans-serif;
}

.banner-category {
    font-size: 20px;
    font-weight: 700;
    color: #1f2937;
    margin: 20px 0;
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
}

.section-title-best-selling {
    font-size: 42px;
    font-weight: 700;
    color: #1f2937;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
}

.best-selling-product-card .product-name {
    font-size: 18px;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 10px 0;
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
    text-decoration: none;
    display: inline-block;
}

.best-selling-product-card .product-price {
    font-size: 24px;
    font-weight: 700;
    color: #8B5CF6;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
    white-space: nowrap;
    transition: color 0.3s ease;
}

.best-selling-product-card .product-price .price-old {
    font-size: 18px;
    color: #999;
    text-decoration: line-through;
    margin-right: 8px;
    font-weight: 400;
}

.best-selling-product-card .product-price .price-new {
    color: #8B5CF6;
    font-weight: 700;
}

.best-selling-product-card:hover .product-price .price-new {
    color: #fff;
}

.best-selling-product-card .product-image-wrapper a {
    display: block;
    width: 100%;
    height: 100%;
}

.best-selling-product-card .product-name a {
    color: #1f2937;
    text-decoration: none;
    transition: color 0.3s;
}

.best-selling-product-card:hover .product-name a {
    color: #fff;
}

.best-selling-product-card .product-category a {
    color: #4b5563;
    text-decoration: none;
    transition: color 0.3s;
}

.best-selling-product-card:hover .product-category a {
    color: #fff;
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
    font-family: 'Fredoka', sans-serif;
}

.section-title-featured {
    font-size: 42px;
    font-weight: 700;
    color: #1f2937;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
}

.process-title {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 50px 0;
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
}

.step-description {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
    line-height: 1.6;
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
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
    justify-content: center;
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
    font-family: 'Fredoka', sans-serif;
}

.product-name {
    font-size: 18px;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 10px 0;
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
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
    font-family: 'Fredoka', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
    text-decoration: none;
    display: inline-block;
}

.product-price {
    font-size: 24px;
    font-weight: 700;
    color: #8B5CF6;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
    white-space: nowrap;
    transition: color 0.3s ease;
}

.product-price .price-old {
    font-size: 18px;
    color: #999;
    text-decoration: line-through;
    margin-right: 8px;
    font-weight: 400;
}

.product-price .price-new {
    color: #8B5CF6;
    font-weight: 700;
}

.featured-product-card:hover .product-price .price-new {
    color: #fff;
}

.featured-product-card .product-image-wrapper a {
    display: block;
    width: 100%;
    height: 100%;
}

.featured-product-card .product-name a {
    color: #1f2937;
    text-decoration: none;
    transition: color 0.3s;
}

.featured-product-card:hover .product-name a {
    color: #fff;
}

.featured-product-card .product-category a {
    color: #4b5563;
    text-decoration: none;
    transition: color 0.3s;
}

.featured-product-card:hover .product-category a {
    color: #fff;
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
    font-family: 'Fredoka', sans-serif;
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
        min-height: 338px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: #faf7ff;
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
    color: #000000;
}
.price del {
    color: #999;
    margin-right: 10px;
}

/* Blog Posts Section */
.blog-posts-section {
    background: #fff;
    padding: 80px 0;
    position: relative;
}

.blog-section-header {
    text-align: center;
    margin-bottom: 50px;
}

.blog-section-badge {
    display: inline-block;
    color: #8B5CF6;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
    font-family: 'Fredoka', sans-serif;
}

.blog-section-title {
    font-size: 42px;
    font-weight: 700;
    color: #1f2937;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.blog-posts-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 0px;
    justify-content: center;
}

.blog-post-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    width: 100%;
    max-width: 411px;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}

.blog-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.blog-post-image {
    width: 100%;
    height: 293px;
    overflow: hidden;
    position: relative;
    background: #f0f0f0;
}

.blog-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.blog-post-card:hover .blog-img {
    transform: scale(1.05);
}

.blog-post-content {
    padding: 30px;
    display: flex;
    flex-direction: column;
    background: #fff;
}

.blog-post-title {
    font-size: 20px;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 15px 0;
    font-family: 'Fredoka', sans-serif;
    line-height: 1.4;
}

.blog-post-description {
    font-size: 15px;
    color: #4b5563;
    margin: 0;
    line-height: 1.6;
    font-family: 'Fredoka', sans-serif;
}

@media (max-width: 991px) {
    .blog-posts-section {
        padding: 60px 0;
    }
    
    .blog-section-title {
        font-size: 32px;
    }
    
    .blog-posts-grid {
        gap: 20px;
    }
    
    .blog-post-card {
        max-width: 100%;
    }
    
    .blog-post-image {
        height: 250px;
    }
}

@media (max-width: 767px) {
    .blog-posts-section {
        padding: 50px 0;
    }
    
    .blog-section-header {
        margin-bottom: 40px;
    }
    
    .blog-section-badge {
        font-size: 12px;
    }
    
    .blog-section-title {
        font-size: 28px;
    }
    
    .blog-posts-grid {
        gap: 20px;
    }
    
    .blog-post-image {
        height: 220px;
    }
    
    .blog-post-content {
        padding: 20px;
    }
    
    .blog-post-title {
        font-size: 18px;
    }
    
    .blog-post-description {
        font-size: 14px;
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
    padding: 100px 0 0px;
    position: relative;
}

.testimonial-card {
    padding: 0px 0px;
    position: relative;
    max-width: 237px;
    margin: 0 auto;
    box-sizing: border-box;
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
    font-family: 'Fredoka', sans-serif;
}

.testimonial-title {
    font-size: 42px;
    font-weight: 700;
    color: #fff;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
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
    font-size: 14px;
    line-height: 21px;
    color: #fff;
    margin: 0 auto 0px;
    font-family: 'Fredoka', sans-serif;
    position: relative;
    z-index: 2;
}

.testimonial-author {
    margin-top: 30px;
}

.testimonial-name {
    font-size: 15px;
    font-weight: 600;
    line-height: 23px;
    color: #fff;
    margin: 0 0 8px 0;
    font-family: 'Fredoka', sans-serif;
}

.testimonial-role {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.7);
    margin: 0;
    font-family: 'Fredoka', sans-serif;
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
/* Footer Styles */
.main-footer {
    background: #fff;
    padding: 60px 0 30px;
    width: 100%;
}

.main-footer .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
    width: 100%;
    box-sizing: border-box;
}

/* Newsletter Section */
.footer-newsletter-section {
    padding: 40px 0;
    border-bottom: 1px solid #e5e7eb;
    margin-bottom: 50px;
}

.newsletter-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
    flex-wrap: wrap;
}

.newsletter-text {
    flex: 1;
    min-width: 300px;
}

.newsletter-heading {
    font-size: 26px;
    font-weight: 600;
    font-style: normal;
    color: rgb(0, 0, 0);
    line-height: 31px;
    margin: 0 0 10px 0;
    font-family: 'Fredoka', sans-serif;
}

.newsletter-description {
    font-size: 14px;
    font-weight: 400;
    font-style: normal;
    color: rgb(107, 114, 128);
    line-height: 21px;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
    width: 390px;
}

.newsletter-form-wrapper {
    flex: 1;
    min-width: 300px;
}

.newsletter-form {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
    align-items: center;
}

.newsletter-input {
    width: 425.28px;
    height: 50px;
    padding: 12px 20px;
    border: 1px solid #000;
    border-radius: 8px;
    font-size: 14px;
    font-family: 'Fredoka', sans-serif;
    background: #fff;
    color: #000;
    outline: none;
    box-sizing: border-box;
}

.newsletter-input::placeholder {
    color: #9ca3af;
}

.newsletter-send-btn {
    height: 50px;
    padding: 12px 30px;
    border: 1px solid #000;
    border-radius: 8px;
    background: #2563eb;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: 'Fredoka', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
    box-sizing: border-box;
}

.newsletter-send-btn:hover {
    background: #1d4ed8;
}

.newsletter-terms {
    font-size: 12px;
    color: #6b7280;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.newsletter-terms a {
    color: #2563eb;
    text-decoration: none;
}

.newsletter-terms a:hover {
    text-decoration: underline;
}

/* Footer Links Section */
.footer-links-section {
    margin-bottom: 40px;
}

.footer-links-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 40px;
}

.footer-column {
    display: flex;
    flex-direction: column;
}

.footer-column-title {
    font-size: 15px;
    font-weight: 600;
    line-height: 18px;
    color: #000;
    margin: 0 0 20px 0;
    font-family: 'Fredoka', sans-serif;
}

.footer-column-text {
    font-size: 14px;
    font-weight: 400;
    color: #6b7280;
    margin: 0 0 15px 0;
    line-height: 21px;
    font-family: 'Fredoka', sans-serif;
    width: 320px;
    height: 42px;
}

.footer-phone {
    margin: 0 0 5px 0;
}

.phone-link {
    font-size: 24px;
    font-weight: 600;
    line-height: 36px;
    color: 
    rgb(0, 146, 219);
    text-decoration: none;
    font-family: 'Fredoka', sans-serif;
}

.phone-link:hover {
    text-decoration: underline;
}

.footer-phone-note {
    font-size: 14px;
    color: rgb(107, 114, 128);
    font-weight: 400;
    line-height: 21px;
    margin: 0 0 15px 0;
    font-family: 'Fredoka', sans-serif;
}

.footer-email {
    font-size: 14px;
    line-height: 21px;
    color: rgb(156, 163, 175);
    margin: 0 0 15px 0;
    font-family: 'Fredoka', sans-serif;
}

.footer-email a {
    color: #2563eb;
    text-decoration: none;
}

.footer-email a:hover {
    text-decoration: underline;
}

.footer-hours {
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.footer-hours-label {
    font-size: 14px;
    color: rgb(156, 163, 175);
    font-weight: 400;
    line-height: 21px;
}

.footer-hours-time {
    font-size: 14px;
    color: rgb(107, 114, 128);
    font-weight: 600;
    line-height: 21px;
}

.footer-links-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links-list li {
    margin-bottom: 1px;
}

.footer-links-list a {
    font-size: 14px;
    color: #6b7280;
    text-decoration: none;
    font-family: 'Fredoka', sans-serif;
    transition: color 0.3s ease;
}

.footer-links-list a:hover {
    color: #2563eb;
}

/* Footer Bottom */
.footer-bottom {
    font-size: 13px;
    font-weight: 400;
    line-height: 20px;
    padding-top: 25px;
    border-top: 1px solid #e5e7eb;
    text-align: justify;
}

.footer-copyright {
    font-size: 14px;
    color: #6b7280;
    margin: 0;
    font-family: 'Fredoka', sans-serif;
}

.footer-copyright a {
    color: #2563eb;
    text-decoration: none;
}

.footer-copyright a:hover {
    text-decoration: underline;
}

/* Footer Responsive */
@media (max-width: 1200px) {
    .footer-links-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
}

@media (max-width: 991px) {
    .newsletter-content {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .footer-links-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }
}

@media (max-width: 767px) {
    .main-footer {
        padding: 40px 0 20px;
    }
    
    .footer-newsletter-section {
        padding: 30px 0;
    }
    
    .newsletter-form {
        flex-direction: column;
    }
    
    .newsletter-send-btn {
        width: 100%;
    }
    
    .footer-links-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
}
</style>

<!-- Footer Section -->
<footer class="main-footer">
    <div class="container">
        <!-- Newsletter Section -->
        <div class="footer-newsletter-section">
            <div class="newsletter-content">
                <div class="newsletter-text">
                    <h2 class="newsletter-heading">Join our newsletter for £10 off</h2>
                    <p class="newsletter-description">Register now to get latest updates on promotions & coupons. Don't worry, we not spam</p>
                </div>
                <div class="newsletter-form-wrapper">
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email address" class="newsletter-input">
                        <button type="submit" class="newsletter-send-btn">SEND</button>
                    </form>
                    <p class="newsletter-terms">By subscribing you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy & Cookie Policy</a></p>
                </div>
                </div>
            </div>
            
        <!-- Footer Links Section -->
        <div class="footer-links-section">
            <div class="footer-links-grid">
                <!-- Column 1: Do You Need Help? -->
                <div class="footer-column">
                    <h3 class="footer-column-title">Do You Need Help?</h3>
                    <p class="footer-column-text">Autoseligen zy Nek dianak frobomba. När antipol kynadanynat. Pressa famoska.</p>
                    <p class="footer-phone">
                        <a href="tel:0800300353" class="phone-link">0 800 300-353</a>
                    </p>
                    <p class="footer-phone-note">Free from fixed and mobile phones in USA</p>
                    <p class="footer-email">
                        Email: <a href="mailto:info@example.com">info@example.com</a>
                    </p>
                    <p class="footer-hours">
                        <span class="footer-hours-label">Call Center hours:</span><br> <span class="footer-hours-time">Mon-Sun 09:00-19:00</span>
                    </p>
                </div>
                
                <!-- Column 2: Let Us Help You -->
                <div class="footer-column">
                    <h3 class="footer-column-title">Let Us Help You</h3>
                    <ul class="footer-links-list">
                        <li><a href="#">Your Orders</a></li>
                        <li><a href="#">Returns & Replacements</a></li>
                        <li><a href="#">Shipping Rates & Policies</a></li>
                        <li><a href="#">Refund and Return Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Cookie Settings</a></li>
                        <li><a href="#">Help Center</a></li>
                </ul>
            </div>
            
                <!-- Column 3: Make Money with Us -->
                <div class="footer-column">
                    <h3 class="footer-column-title">Make Money with Us</h3>
                    <ul class="footer-links-list">
                        <li><a href="#">Sell on Bumedi</a></li>
                        <li><a href="#">Sell Your Services on Bumedi</a></li>
                        <li><a href="#">Sell on Bumedi Business</a></li>
                        <li><a href="#">Sell Your Apps on Bumedi</a></li>
                        <li><a href="#">Become an Affiliate</a></li>
                        <li><a href="#">Advertise Your Products</a></li>
                        <li><a href="#">Sell-Publish with Us</a></li>
                        <li><a href="#">Become an Bumedi Vendor</a></li>
                    </ul>
                </div>
                
                <!-- Column 4: Get to Know Us -->
                <div class="footer-column">
                    <h3 class="footer-column-title">Get to Know Us</h3>
                    <ul class="footer-links-list">
                        <li><a href="#">Careers for Bumedi</a></li>
                        <li><a href="#">About Bumedi</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Bumedi Devices</a></li>
                        <li><a href="#">Customer reviews</a></li>
                        <li><a href="#">Social Responsibility</a></li>
                        <li><a href="#">Store Locations</a></li>
                    </ul>
                    </div>
                
                <!-- Column 5: For Buyers -->
                <div class="footer-column">
                    <h3 class="footer-column-title">For Buyers</h3>
                    <ul class="footer-links-list">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p class="footer-copyright">Copyright 2005 Bumedi WooCommerce WordPress Theme. All right reserved. Powered by <a href="#">KLTTheme</a></p>
        </div>
    </div>
</footer>
<!--end Footer Section-->

@endsection
@section('js-script')
    <script src="{{ asset('public/theme/default/js/cart.js?v=1.2') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hero Banner Carousel
            const heroSlides = document.querySelectorAll('.hero-slide');
            const heroDots = document.querySelectorAll('.banner-pagination-dots .dot-item');
            let currentHeroSlide = 0;
            const totalHeroSlides = heroSlides.length;
            
            function showHeroSlide(index) {
                heroSlides.forEach((slide, i) => {
                    slide.classList.remove('active');
                    if (i === index) {
                        slide.classList.add('active');
                    }
                });
                
                heroDots.forEach((dot, i) => {
                    dot.classList.remove('active');
                    if (i === index) {
                        dot.classList.add('active');
                    }
                });
            }
            
            // Dot navigation
            heroDots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    currentHeroSlide = index;
                    showHeroSlide(currentHeroSlide);
                });
            });
            
            // Arrow navigation
            const prevArrow = document.querySelector('.banner-nav-prev');
            const nextArrow = document.querySelector('.banner-nav-next');
            
            if (prevArrow) {
                prevArrow.addEventListener('click', function() {
                    currentHeroSlide = (currentHeroSlide - 1 + totalHeroSlides) % totalHeroSlides;
                    showHeroSlide(currentHeroSlide);
                });
            }
            
            if (nextArrow) {
                nextArrow.addEventListener('click', function() {
                    currentHeroSlide = (currentHeroSlide + 1) % totalHeroSlides;
                    showHeroSlide(currentHeroSlide);
                });
            }
            
            // Auto-rotate hero banner disabled - manual navigation only
            // if (totalHeroSlides > 1) {
            //     setInterval(function() {
            //         currentHeroSlide = (currentHeroSlide + 1) % totalHeroSlides;
            //         showHeroSlide(currentHeroSlide);
            //     }, 5000);
            // }
            
            const track = document.querySelector('.products-carousel-track');
            if (!track) return;
            
            const products = track.querySelectorAll('.col-lg-3, .product-carousel-item');
            const productWidth = 342.6; // Product card width
            const gap = 15; // Gap between products
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
