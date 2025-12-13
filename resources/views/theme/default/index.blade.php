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
    <!-- Hero Banner Section -->
    <div class="hero-banner-pharmez">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 hero-content-left">
                    <div class="hero-tags">
                        <span>• Health</span>
                        <span>• Trust</span>
                        <span>• Online</span>
                    </div>
                    <h1 class="hero-title">Instant Pharmacy Access For You</h1>
                    <p class="hero-description">Order prescription and over-the-counter medicines online with confidence.</p>
                    <div class="hero-buttons">
                        <a href="{{ url('/shop') }}" class="btn-shop-now">Shop Now</a>
                        <a href="{{ url('/upload-prescription') }}" class="btn-upload-prescription">
                            <i class="fa fa-arrow-up"></i>
                            Upload Prescription
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 hero-content-right">
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
        </div>
    </div>
    <!--end Hero Banner-->

    <!-- Banner Cards Section -->
    <div class="banner-cards-section">
        <div class="container">
            <div class="row">
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
    <!--end Banner Cards-->

    <!-- Testimonials Section -->
    <div class="testimonials-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Testimonial 1 -->
                            <div class="carousel-item active">
                                <div class="testimonial-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('public/theme/default/images/patricsia1.jpg') }}" alt="Patricsia Petersen">
                                    </div>
                                    <h3 class="testimonial-name">Patricsia Petersen</h3>
                                    <div class="testimonial-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                            <!-- Testimonial 2 -->
                            <div class="carousel-item">
                                <div class="testimonial-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('public/theme/default/images/patricsia2.jpg') }}" alt="Sarah Johnson">
                                    </div>
                                    <h3 class="testimonial-name">Sarah Johnson</h3>
                                    <div class="testimonial-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-text">Amazing products! The quality is outstanding and my skin has never looked better. I absolutely love the natural ingredients and the results are visible within weeks. Highly recommend to anyone looking for genuine cosmetic products.</p>
                                </div>
                            </div>
                            <!-- Testimonial 3 -->
                            <div class="carousel-item">
                                <div class="testimonial-item">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('public/theme/default/images/patricsia3.jpg') }}" alt="Emily Williams">
                                    </div>
                                    <h3 class="testimonial-name">Emily Williams</h3>
                                    <div class="testimonial-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="testimonial-text">Best beauty products I've ever used! The customer service is excellent and the products are truly organic. My skin feels softer and more radiant. Will definitely continue using these products.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators testimonial-indicators">
                            <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end testimonials-->

    <!--deal of the day-->
    <div class="container-fluid">
        <div class="row deal-day" style="background-image: url('https://html.physcode.com/uray/imager/home/bg-deal-day.jpg');">
            <div class="content-deal-day">
                <div class="title">
                    <h2>deal of the day</h2>
	</div>
                <ul class="list-inline" id="dealday">
                    <li>
                        <h2 id="dealdays">5</h2>
                        <p>Days</p>
                    </li>
                    <li>
                        <h2 id="dealhours">23</h2>
                        <p>Hours</p>
                    </li>
                    <li>
                        <h2 id="dealminutes">19</h2>
                        <p>Mins</p>
                    </li>
                    <li>
                        <h2 id="dealseconds">36</h2>
                        <p>Secs</p>
                    </li>
                </ul>
                <button class="btn btn-lg">SHOP NOW</button>
				</div>
			</div>
		</div>
    <!--end deal of the day-->

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

    <!-- Promotional Discount Section -->
    <div class="container-fluid">
        <div class="promotional-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="promo-image">
                            <img src="{{ asset('public/theme/default/images/product_detail.jpg') }}" alt="Ocean Soap" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="promo-content">
                            <h3 class="promo-badge">ONE DAY <span class="pink-badge">SALE</span></h3>
                            <h2 class="promo-title">10 % DISCOUNT</h2>
                            <div class="promo-date">
                                <p>05/02 - 20/10/2019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Promotional Banner-->

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
    padding: 100px 0;
    overflow: hidden;
    min-height: 600px;
    display: flex;
    align-items: center;
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

.hero-content-left {
    position: relative;
    z-index: 2;
    padding: 40px 0;
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
    border: 2px dashed #8B5CF6;
    border-radius: 8px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
    background: rgba(255, 255, 255, 0.1);
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
    padding: 40px 0;
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
    .hero-banner-pharmez {
        padding: 60px 0;
        min-height: auto;
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

/* Banner Cards Section */
.banner-cards-section {
    padding: 60px 0;
    background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
    position: relative;
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
    background: #10B981;
    color: #fff;
    padding: 12px 22px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    font-size: 16px;
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
    z-index: 10;
    font-family: 'Poppins', sans-serif;
    white-space: nowrap;
}

.trusted-badge i {
    font-size: 20px;
}

@media (max-width: 991px) {
    .banner-cards-section {
        padding: 40px 0;
    }
    
    .banner-card-img {
        min-height: 300px;
    }
}

@media (max-width: 767px) {
    .banner-cards-section {
        padding: 30px 0;
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
    background: linear-gradient(135deg, #e8f5f7 0%, #f0f8f9 100%);
    padding: 100px 0;
    position: relative;
    overflow: hidden;
}
.testimonials-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 300px;
    height: 300px;
    background: url('{{ asset('public/theme/default/images/introduce.jpg') }}') no-repeat;
    background-size: contain;
    opacity: 0.3;
}
.testimonials-section::after {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 300px;
    height: 300px;
    background: url('{{ asset('public/theme/default/images/introduce1.jpg') }}') no-repeat;
    background-size: contain;
    opacity: 0.3;
}
.testimonial-item {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
    padding: 40px;
    position: relative;
    z-index: 2;
}
.testimonial-image {
    width: 150px;
    height: 150px;
    margin: 0 auto 30px;
    border-radius: 50%;
    overflow: hidden;
    border: 5px solid #ffa6a8;
    box-shadow: 0 10px 30px rgba(255, 166, 168, 0.3);
}
.testimonial-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.testimonial-name {
    font-size: 28px;
    font-weight: bold;
    color: #222;
    margin-bottom: 15px;
}
.testimonial-stars {
    margin-bottom: 25px;
}
.testimonial-stars i {
    color: #ffa6a8;
    font-size: 18px;
    margin: 0 3px;
}
.testimonial-text {
    font-size: 16px;
    line-height: 1.8;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
}
.testimonial-indicators {
    bottom: -50px;
}
.testimonial-indicators li {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #ddd;
    border: none;
    margin: 0 5px;
    cursor: pointer;
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
    .testimonials-section::before,
    .testimonials-section::after {
        width: 150px;
        height: 150px;
    }
    .testimonial-item {
        padding: 20px;
    }
    .testimonial-image {
        width: 100px;
        height: 100px;
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
</style>
@endsection
@section('js-script')
    <script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection
