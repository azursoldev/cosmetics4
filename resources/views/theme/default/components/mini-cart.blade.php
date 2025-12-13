@php $cart_items = Cart::getContent(); @endphp
<!-- Shopping Item -->
<div class="shopping-item">
	<div class="dropdown-cart-header">
		<span>{{ \Cart::getTotalQuantity() }} {{ _lang('Items') }}</span>
		<a href="{{ url('/cart') }}">{{ _lang('View Cart') }}</a>
	</div>
	<ul class="shopping-list">
		@if(\Cart::isEmpty())
			<li class="text-center">{{ _lang('Cart is empty !') }}</li>
		@endif

		@foreach($cart_items as $cart)
		<li>
			<a href="{{ url('/remove_cart_item/'.$cart->id) }}" class="remove" title="{{ _lang('Remove this item') }}"><i class="fa fa-remove"></i></a>

			<a class="cart-img" href="{{ url('product/'.$cart->associatedModel->slug) }}">
				@if($cart->associatedModel->image && $cart->associatedModel->image->file_path)
					<img src="{{ asset('storage/app/'.$cart->associatedModel->image->file_path) }}" alt="{{ $cart->associatedModel->translation->name }}">
				@else
					<img src="{{ asset('public/theme/default/images/product.jpg') }}" alt="{{ $cart->associatedModel->translation->name }}">
				@endif
			</a>
			
			<div class="item-content">
				<div class="item-header">
					<h4><a href="{{ url('product/'.$cart->associatedModel->slug) }}">{{ $cart->associatedModel->translation->name }}</a></h4>
					<span class="item-price">{!! xss_clean(show_price($cart->price)) !!}</span>
				</div>
				<p class="quantity">{{ _lang('Qty') }}: {{ $cart->quantity }}</p>
				<small class="item-attrs">
					@foreach($cart->attributes as $key => $val)
						<b>{{ $key }}</b> : {{ $val }}<br>
					@endforeach
				</small>
			</div>
		</li>
		@endforeach
	</ul>
	<div class="bottom">
		<div class="total">
			<span>{{ _lang('Total') }}</span>
			<span class="total-amount">{!! xss_clean(show_price(\Cart::getSubTotal())) !!}</span>
		</div>
		@if(! Cart::isEmpty())
			<a href="{{ url('/cart') }}" class="btn animate">{{ _lang('View Cart') }} &amp; {{ _lang('Checkout') }}</a>
		@endif
	</div>
</div>
<!--/ End Shopping Item -->
