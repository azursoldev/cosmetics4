(function($) {
   "use strict";

    $(document).on('click','.add_to_cart',function(event){
    	event.preventDefault();
    	event.stopPropagation();
    	var elem = $(this);
    	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

    	var product_type = $(this).data('type');

    	if(product_type != 'variable_product'){
    		$.ajax({
    			url: $(this).attr("href"),
    			method: "POST",
    			data: { 
					'quantity': typeof $('input[name="quantity"]').val() === "undefined" ? 1 : $('input[name="quantity"]').val()
				}, 
				beforeSend: function(){
					$(elem).find('i').remove();
					$(elem).html($(elem).html() + '<i class="fa fa-circle-o-notch fa-spin ml-2"></i>');
				},success: function(data){
					$(elem).find('i').remove();
					$(elem).html($(elem).html() + '<i class="fa fa-check text-success ml-2"></i>');
					
					var json = JSON.parse(JSON.stringify(data));

					if(json['result'] == true){
						//Update Dropdown Cart
						$("#mini-cart").html(json['data']);
						$("#mobile-cart .total-count").html(json['total_items']);
						//Update Cart Icon Badge
						$(".number-cart").html(json['total_items']);
						$(".cart-count").html(json['total_items']);
					}else{
						$.toast({
							text: json['message'],
							showHideTransition: 'slide',
							icon: 'error',
							position : 'top-right' 
						});
					}
	
				},
				error: function (request, status, error) {
					console.log(request.responseText);
				}
    		});
    	}else{
    		$.ajax({
    			url: $(this).attr("href"),
    			method: "POST",
    			data: { 
					'quantity': $('input[name="quantity"]').val(),
					'product_option[]': $('.select_product_option').serialize(),
				}, 
				beforeSend: function(){
					$(elem).find('i').remove();
					$(elem).html($(elem).html() + '<i class="fa fa-circle-o-notch fa-spin ml-2"></i>');
				},success: function(data){
					$(elem).find('i').remove();
					$(elem).html($(elem).html() + '<i class="fa fa-check text-success ml-2"></i>');
					
					var json = JSON.parse(JSON.stringify(data));
					
					if(json['result'] == true){
						//Update Dropdown Cart
						$("#mini-cart").html(json['data']);
						$("#mobile-cart .total-count").html(json['total_items']);
						//Update Cart Icon Badge
						$(".number-cart").html(json['total_items']);
						$(".cart-count").html(json['total_items']);
					}else{
						$.toast({
							text: json['message'],
							showHideTransition: 'slide',
							icon: 'error',
							position : 'top-right' 
						});
					}
				},
				error: function (request, status, error) {
					console.log(request.responseText);
				}
    		});
    	}

    });

    // Handler for .add-to-cart-btn and .add-to-cart-btn-horizontal buttons on home page
    $(document).on('click','.add-to-cart-btn, .add-to-cart-btn-horizontal',function(event){
    	event.preventDefault();
    	event.stopPropagation();
    	var elem = $(this);
    	var productId = $(this).data('product-id');
    	var originalText = $(this).html();
    	
    	if(!productId){
    		console.error('Product ID not found on button:', this);
    		return false;
    	}

    	// Get base URL - check multiple possible sources
    	var baseUrl = typeof _url !== 'undefined' ? _url : (window.location.origin + window.location.pathname.replace(/\/[^\/]*$/, ''));
    	if(!baseUrl || baseUrl === 'undefined'){
    		baseUrl = window.location.origin;
    	}

    	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

    	$.ajax({
    		url: baseUrl + '/add_to_cart/' + productId,
    		method: "POST",
    		data: { 
				'quantity': 1
			}, 
			beforeSend: function(){
				$(elem).prop('disabled', true);
				$(elem).html('<i class="fa fa-circle-o-notch fa-spin"></i>');
			},
			success: function(data){
				$(elem).prop('disabled', false);
				
				var json = JSON.parse(JSON.stringify(data));
				
				if(json['result'] == true){
					//Update Dropdown Cart
					if($("#mini-cart").length > 0){
						$("#mini-cart").html(json['data']);
					}
					if($("#mobile-cart .total-count").length > 0){
						$("#mobile-cart .total-count").html(json['total_items']);
					}
					//Update Cart Icon Badge
					if($(".number-cart").length > 0){
						$(".number-cart").html(json['total_items']);
					}
					if($(".cart-count").length > 0){
						$(".cart-count").html(json['total_items']);
					}
					
					// Update cart total amount if provided
					if(json['cart_total'] !== undefined && $('.cart-amount').length > 0){
						// Note: You may need to format this on the server side or use a helper function
						// For now, we'll just update if we have the formatted value
					}
					
					// Show success feedback
					$(elem).html('<i class="fa fa-check"></i> Added');
					setTimeout(function(){
						$(elem).html(originalText);
					}, 2000);
					
					// Show success toast
					if(typeof $.toast !== 'undefined'){
						$.toast({
							text: 'Product added to cart successfully!',
							showHideTransition: 'slide',
							icon: 'success',
							position : 'top-right' 
						});
					}
				}else{
					$(elem).html(originalText);
					if(typeof $.toast !== 'undefined'){
						$.toast({
							text: json['message'] || 'Failed to add product to cart',
							showHideTransition: 'slide',
							icon: 'error',
							position : 'top-right' 
						});
					}
				}
			},
			error: function (request, status, error) {
				$(elem).prop('disabled', false);
				$(elem).html(originalText);
				console.error('Add to cart error:', request, status, error);
				if(typeof $.toast !== 'undefined'){
					var errorMsg = 'An error occurred. Please try again.';
					if(request.responseJSON && request.responseJSON.message){
						errorMsg = request.responseJSON.message;
					}
					$.toast({
						text: errorMsg,
						showHideTransition: 'slide',
						icon: 'error',
						position : 'top-right' 
					});
				} else {
					alert('An error occurred. Please try again.');
				}
			}
    	});
    });

    $(document).on('click','#update-cart',function(event){
    	var elem = $(this);

    	$.ajax({
    		method: "POST",
    		url: $("#shopping-cart-form").attr('action'),
    		data: $("#shopping-cart-form").serialize(),
    		beforeSend: function(){
				$(elem).find('i').remove();
				$(elem).html($(elem).html() + '<i class="fa fa-circle-o-notch fa-spin ml-2"></i>');
    		},
    		success: function(data){
				$(elem).find('i').remove();
				
				var json = JSON.parse(JSON.stringify(data));
				
				if(json['result'] == true){
					//Update Shopping Cart
					$(".shopping-cart").html(json['shopping_cart']);
					$("#mini-cart").html(json['mini_cart']);
					$("#mobile-cart .total-count").html(json['total_items']);
					//Update Cart Icon Badge
					$(".number-cart").html(json['total_items']);
					
					//Trigger Cart Updated event
					$(document).trigger('cart-updated');
				}else{
					$.toast({
						text: json['message'],
						showHideTransition: 'slide',
						icon: 'error',
						position : 'top-right' 
					});

				}
				
    		},
			error: function (request, status, error) {
				console.log(request.responseText);
			}
    	});

    });

    $(document).on('change','.select-shipping-method',function(event){
    	//location.href = _url + '/shipping_method/' + $(this).val();
    	$.ajax({
    		url: _url + '/shipping_method/' + $(this).val(),
    		beforeSend: function(){
				$(".preloader").fadeIn();
    		},
    		success: function(data){
				$(".preloader").fadeOut();
				
				//Update Shopping Cart
				$(".shopping-cart").html(data);
    		},
			error: function (request, status, error) {
				console.log(request.responseText);
			}
    	});
    });

    //Remove Cart Item from Cart Page
    $(document).on('click','.remove-cart-item',function(event){  	
    	event.preventDefault();

    	var elem = $(this);

    	$.ajax({
    		url: $(this).attr('href'),
    		beforeSend: function(){
				$(elem).html('<i class="fa fa-circle-o-notch fa-spin"></i>');
    		},
    		success: function(data){
    			
				var json = JSON.parse(JSON.stringify(data));

    			if(json['result'] == true){
					//Update Shopping Cart
					$(".shopping-cart").html(json['shopping_cart']);
					$("#mini-cart").html(json['mini_cart']);
					$("#mobile-cart .total-count").html(json['total_items']);
					//Update Cart Icon Badge
					$(".number-cart").html(json['total_items']);
					
					//Trigger Cart Updated event
					$(document).trigger('cart-updated');
				}

    		},
			error: function (request, status, error) {
				$(elem).html('<i class="ti-trash remove-icon"></i>');
				console.log(request.responseText);
			}
    	});
    });

    //Remove Cart Item from Mini Cart Dropdown
    $(document).on('click','#mini-cart .remove',function(event){  	
    	event.preventDefault();

    	var elem = $(this);
    	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

    	$.ajax({
    		url: $(this).attr('href'),
    		method: "GET",
    		beforeSend: function(){
				$(elem).html('<i class="fa fa-circle-o-notch fa-spin"></i>');
    		},
    		success: function(data){
    			
				var json = JSON.parse(JSON.stringify(data));

    			if(json['result'] == true){
					//Update Mini Cart
					$("#mini-cart").html(json['mini_cart']);
					$("#mobile-cart .total-count").html(json['total_items']);
					//Update Cart Icon Badge
					$(".number-cart").html(json['total_items']);
					
					//Update Shopping Cart if on cart page
					if($(".shopping-cart").length > 0){
						$(".shopping-cart").html(json['shopping_cart']);
					}
					
					//Trigger Cart Updated event
					$(document).trigger('cart-updated');
				}

    		},
			error: function (request, status, error) {
				$(elem).html('<i class="fa fa-remove"></i>');
				console.log(request.responseText);
			}
    	});
    });

    if($('.ratng-bar').length > 0){
    	$('.ratng-bar').barrating({
			theme: 'css-stars',
			initialRating: '5',
		});
    }


})(jQuery);
