@foreach($products as $product)
	<div class="col-lg-4 col-md-6 col-12 mb-4 {{ isset($class) ? $class : '' }}">
		<div class="product-card">
			<div class="product-image-wrapper">
				<a href="{{ url('product/'.$product->slug) }}">
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
				
				@if($product->product_type != 'variable_product' && ($product->special_price != '' || (int) $product->special_price != 0))
					@if($product->price > 0)
						@php
							$discount_percent = round((($product->price - $product->special_price) / $product->price) * 100);
						@endphp
						@if($discount_percent > 0)
							<span class="discount-badge">{{ $discount_percent }}%</span>
						@endif
					@endif
				@endif
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
				<a href="{{ url('product/'.$product->slug) }}">{{ $product->translation->name ?? $product->name }}</a>
			</h3>
			
			<div class="product-price">
				@if($product->product_type != 'variable_product')
					@if($product->special_price != '' || (int) $product->special_price != 0 )
						<span class="current-price">{!! xss_clean(show_price($product->special_price)) !!}</span>
						<span class="original-price">{!! xss_clean(show_price($product->price)) !!}</span>
					@else
						<span class="current-price">{!! xss_clean(show_price($product->price)) !!}</span>
					@endif
				@else
					 @if($product->variation_prices[0]->special_price != '' || (int) $product->variation_prices[0]->special_price != 0 )
						<span class="current-price">
							{!! xss_clean(show_price($product->variation_prices[0]->special_price)) !!} 
							- 
							{!! xss_clean(show_price($product->variation_prices[count($product->variation_prices) - 1]->special_price)) !!}
						</span>
					@else
						<span class="current-price">
							{!! xss_clean(show_price($product->variation_prices[0]->price)) !!}
							- 
							{!! xss_clean(show_price($product->variation_prices[count($product->variation_prices) - 1]->price)) !!}
						</span>	
					@endif
				@endif
			</div>
			
			 @if($product->product_type != 'variable_product')
				@if($product->in_stock == 1)
					 <button class="add-to-cart-btn" type="button" data-product-id="{{ $product->id }}">
						{{ _lang('Add to cart') }}
					</button>
				@else
					<button class="add-to-cart-btn disabled" type="button" disabled>
						{{ _lang('Out Of Stock') }}
					</button>
				@endif
			@else
				<a href="{{ url('product/'.$product->slug) }}" class="add-to-cart-btn">
					{{ _lang('Select options') }}
				</a>
			@endif
		</div>
	</div>
@endforeach