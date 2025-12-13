@extends('theme.default.website')

@section('content')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="{{ url('') }}">{{ _lang('Home') }}<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="">{{ _lang('Checkout') }}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">

				@if(\Session::has('success'))
					<div class="alert alert-success mt-4">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>{!! xss_clean(session('success')) !!}</span>
					</div>
				@endif

				@if(\Session::has('error'))
					<div class="alert alert-danger mt-4">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>{!! xss_clean(session('error')) !!}</span>
					</div>
				@endif

				<div class="checkout-form">

					<h2>{{ _lang('Make Your Checkout Here') }}</h2>

					<!-- Checkout Form -->
			<form id="checkout-form" method="POST" action="{{ route('checkout.store') }}">
    @csrf
    <div class="row">
        <div class="col-12 mb-3">
            <div class="form-group">
                <label>{{ _lang('Name') }} <span>*</span></label>
                <input type="text" name="name" placeholder="{{ _lang('Name') }}" 
                       value="{{ auth()->check() ? auth()->user()->name : old('name') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                @endif
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="form-group">
               <!-- Hidden shipping rate field -->
             <input type="hidden" name="selected_shipping_rate" id="selected_shipping_rate" value="0">

                <label>{{ _lang('Email Address') }} <span>*</span></label>
                <input type="email" name="email" placeholder="{{ _lang('Email Address') }}" 
                       value="{{ auth()->check() ? auth()->user()->email : old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                @endif
            </div>
        </div>
    </div>
</form>

					<!--/ End Form -->

				</div>
			</div>

			<!-- Right Section: Cart, Coupon, Shipping, Button -->
			<div class="col-lg-4 col-12">
				<div class="order-details">

					<!-- Order Widget -->
					<div class="single-widget">
						<h2>{{ _lang('CART  TOTALS') }}</h2>
						<div class="content" id="cart-contents">
							@include('theme.default.components.checkout-cart')
						</div>
					</div>
					<!--/ End Order Widget -->

					<div class="single-widget">
						<h2>{{ _lang('Apply Coupon') }}</h2>
						<div class="content">
							<ul>
								<li>
									<form id="apply_coupon" action="{{ url('/apply_coupon') }}" method="POST">
										@csrf
										<input type="text" name="coupon" placeholder="{{ _lang('Enter Coupon Code') }}" required>
										<button class="btn">{{ _lang('Apply Coupon') }}</button>
									</form>
								</li>
							</ul>
						</div>
					</div>

					<div class="single-widget">
						<h2>{{ _lang('Shipping Methods') }}</h2>
						<div class="content">
							@if(! Cart::isEmpty())
								<ul>
									@if(get_option('free_shipping_active') == 'Yes' && \Cart::getSubTotal() >= get_option('free_shipping_minimum_amount',0))
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="free_shipping" value="free_shipping" name="shipping_method" class="custom-control-input select-shipping-method" {{ empty(Cart::getCondition(get_option('free_shipping_label'))) ? '' : 'checked' }}>
												<label class="custom-control-label" for="free_shipping">{{ get_option('free_shipping_label') }}</label>
											</div>
										</li>
									@endif

									@if(get_option('flat_rate_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												@php
													$flatRateLabel = get_option('flat_rate_label');
													if(empty($flatRateLabel)) {
														$flatRateLabel = 'Flat Rate';
													}
													$hasFlatRateCondition = !empty(Cart::getCondition($flatRateLabel));
													$hasAnyShipping = !empty(Cart::getConditionsByType('shipping'));
													// Check flat_rate if it's already set, or if no shipping is set and flat_rate is available
													$shouldCheckFlatRate = $hasFlatRateCondition || (!$hasAnyShipping && get_option('flat_rate_active') == 'Yes');
												@endphp
												<input type="radio" id="flat_rate" value="flat_rate" name="shipping_method" class="custom-control-input select-shipping-method" {{ $shouldCheckFlatRate ? 'checked' : '' }}>
												<label class="custom-control-label" for="flat_rate">{{ get_option('flat_rate_label') }} + <b>{!! xss_clean(show_price(get_option('flat_rate_cost'))) !!}</b></label>
												</div>
											</div>
										</li>
									@endif

									@if(get_option('local_pickup_active') == 'Yes')
										<li>
											<div class="custom-control custom-radio">
												<input type="radio" id="local_pickup" value="local_pickup" name="shipping_method" class="custom-control-input select-shipping-method" {{ empty(Cart::getCondition(get_option('local_pickup_label'))) ? '' : 'checked' }}>
												<label class="custom-control-label" for="local_pickup">{{ get_option('local_pickup_label') }} + <b>{!! xss_clean(show_price(get_option('local_pickup_cost'))) !!}</b></label>
											</div>
										</li>
									@endif
								</ul>
							@endif
						</div>
					</div>

					<!-- Button Widget -->
					<div class="single-widget get-button">
						<div class="content">
							<div class="button">
							    <button type="submit" form="checkout-form" class="btn btn-primary w-100">
									{{ _lang('Checkout') }}
								</button>
								<!--<a class="btn" href="https://www.designmydress.us/clear/Pay1paypal/buyonline.php?quantity=1&pg=standardPay&product_name=Dr+Code+4679&p_id=092&product_id=092&product_cost={!! \Cart::getSubTotal() !!}&website_name=M11&target=">Checkout</a>-->
							</div>
						</div>
					</div>
					<!--/ End Button Widget -->

				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Checkout -->

@include('theme.default.components.services')

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
<script src="{{ asset('public/theme/default/js/checkout.js?v=1.1') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Function to update hidden shipping rate
    function updateShippingRate() {
        let selected = document.querySelector('input[name="shipping_method"]:checked');
        let rate = 0;

        if (selected) {
            if (selected.value === 'flat_rate') {
                rate = {{ get_option('flat_rate_cost', 0) }};
            } else if (selected.value === 'local_pickup') {
                rate = {{ get_option('local_pickup_cost', 0) }};
            } else if (selected.value === 'free_shipping') {
                rate = 0;
            }
        }

        document.getElementById('selected_shipping_rate').value = rate;
        console.log("Shipping rate set to:", rate);
    }

    // Set initial value on page load
    updateShippingRate();

    // Listen for change on all shipping radios
    document.querySelectorAll('input[name="shipping_method"]').forEach((radio) => {
        radio.addEventListener('change', updateShippingRate);
    });
});
</script>


@endsection
