@foreach($products as $product)
	<div class="col-lg-4 col-md-6 col-12 {{ isset($class) ? $class : '' }}">
		<div class="single-product card-style-benoquin">
			<div class="product-img">
				<a href="{{ url('product/'.$product->slug) }}">
					<img class="default-img" src="{{ asset('storage/app/'. $product->image->file_path) }}" alt="{{ $product->translation->name }}">
					@if($product->in_stock == 0)
						<span class="out-of-stock">{{ _lang('Out Of Stock') }}</span>
					@elseif($product->featured_tag != NULL)
						<span class="{{ $product->featured_tag }}">{{ _dlang(str_replace('_',' ',$product->featured_tag)) }}</span>
                    @elseif($product->product_type != 'variable_product' && ($product->special_price != '' || (int) $product->special_price != 0))
                        @if($product->price > 0)
                            @php
                                $discount = round((($product->price - $product->special_price) / $product->price) * 100);
                            @endphp
                            @if($discount > 0)
                                <span class="price-dec">{{ $discount }}%</span>
                            @endif
                        @endif
                    @elseif($product->product_type == 'variable_product' && ($product->variation_prices[0]->special_price != '' || (int) $product->variation_prices[0]->special_price != 0))
                         @if($product->variation_prices[0]->price > 0)
                             @php
                                $discount = round((($product->variation_prices[0]->price - $product->variation_prices[0]->special_price) / $product->variation_prices[0]->price) * 100);
                            @endphp
                            @if($discount > 0)
                                <span class="price-dec">{{ $discount }}%</span>
                            @endif
                        @endif
					@endif
				</a>
                
                <!-- Wishlist Top Right -->
                <div class="wishlist-top-right">
                    <a title="{{ _lang('Wishlist') }}" class="btn-wishlist-icon" href="{{ wishlist_url($product) }}">
                        <i class="ti-heart"></i>
                    </a>
                </div>

			</div>

			<div class="product-content">
                <!-- Rating Stars -->
                <div class="product-rating">
					<ul class="reviews">
						{!! xss_clean(show_rating($product->reviews->avg('rating'))) !!}
					</ul>
                    <span class="rating-value">{{ $product->reviews->avg('rating') > 0 ? number_format($product->reviews->avg('rating'), 2) : '' }}</span>
				</div>

				<h3><a href="{{ url('product/'.$product->slug) }}">{{ $product->translation->name }}</a></h3>
				
				@if($product->product_type != 'variable_product')
					<div class="product-price">		
						@if($product->special_price != '' || (int) $product->special_price != 0 )
                            <span class="price-current">{!! xss_clean(show_price($product->special_price)) !!}</span>
							<span class="price-old">
								<s>{!! xss_clean(show_price($product->price)) !!}</s>
							</span>
						@else
							<span class="price-current">{!! xss_clean(show_price($product->price)) !!}</span>	
						@endif
					</div>
				@else
					<div class="product-price">		
						@if($product->variation_prices[0]->special_price != '' || (int) $product->variation_prices[0]->special_price != 0 )
                            <span class="price-current">
								{!! xss_clean(show_price($product->variation_prices[0]->special_price)) !!} 
								- 
								{!! xss_clean(show_price($product->variation_prices[count($product->variation_prices) - 1]->special_price)) !!}
							</span>
							<span class="price-old">
								<s>{!! xss_clean(show_price($product->variation_prices[0]->price)) !!}</s>
							</span>
						@else
							<span class="price-current">
								{!! xss_clean(show_price($product->variation_prices[0]->price)) !!}
								- 
								{!! xss_clean(show_price($product->variation_prices[count($product->variation_prices) - 1]->price)) !!}
							</span>	
						@endif
					</div>
				@endif

                <!-- Add to Cart Button (Always Visible) -->
                <div class="product-action-bottom">
                    @if($product->product_type != 'variable_product')
                        @if($product->in_stock == 1)
                            <a title="Add to cart" class="add_to_cart" data-type="{{ $product->product_type }}" href="{{ url('add_to_cart/'.$product->id) }}">{{ _lang('Add to cart') }}</a>
                        @else
                            <a title="Add to cart" class="add_to_cart disabled" href="#">{{ _lang('Add to cart') }}</a>
                        @endif
                    @else
                        <a title="Select options" class="add_to_cart" href="{{ url('product/'.$product->slug) }}">{{ _lang('Select options') }}</a>
                    @endif
                </div>

			</div>
		</div>
	</div>
	@endforeach