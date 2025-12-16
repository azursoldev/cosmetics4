<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utilities\CheckoutTax;
use App\Services\OrderService;
use App\User;
use App\CustomerAddress;
use App\Order;
use Validator;
use Cart;
use Auth;
use Hash;
use DB;

class CheckoutController extends Controller
{
  
    private $theme;

    public function __construct()
    { 
        $this->theme = env('ACTIVE_THEME','default');        
        date_default_timezone_set(get_option('timezone','Asia/Dhaka'));       
    }

    public function apply_tax(Request $request, $shipping_state, $billing_state){
    	Cart::removeConditionsByType('tax');
    	
    	if($shipping_state != '' && $billing_state != ''){
    		CheckoutTax::apply_tax($shipping_state, $billing_state);
    	}	

    	if( ! $request->ajax()){
           return back();
        }else{
           return view("theme.$this->theme.components.checkout-cart");
        }
    }

    public function make_order(Request $request, OrderService $orderService){
     // dd($orderService);

        if(Auth::check()){
            $validator = Validator::make($request->all(), [
                // 'shipping_address' => 'required',
                // 'billing_address'  => 'required',
            ]);
			
			// if(Auth::user()->phone == null){	 
			// 	if($request->ajax()){ 
			// 		return response()->json(['result' => 'error','message' => _lang('You must add your phone number before placing order !')]);
			// 	}else{
			// 		return back()->with('error', _lang('You must add your phone number before placing order !'))->withInput();
			// 	}           		
			// }
        }else{
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email'  => $request->create_account == 1 ? 'required|email|unique:users|max:191' : 'required|email',
                'phone'  => 'required',
                'country'  => 'required',
                'state'  => 'required',
                'post_code'  => 'required',
                'address'  => 'required',
                'password' => $request->create_account == 1 ? 'required|min:6|confirmed' : '',
            ]);
        }
        

        if ($validator->fails()) {
            if($request->ajax()){ 
                return response()->json(['result' => 'error','message' => $validator->errors()->all()]);
            }else{
                return back()->withErrors($validator)->withInput();
            }           
        }

        DB::beginTransaction();

        //Create User Account
        if($request->create_account == 1){
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->user_type = 'customer';
            $user->status = 1;
            $user->profile_picture = 'default.png';
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->password = Hash::make($request->password);

            $user->save();

            //Add New Address
            $customeraddress = new CustomerAddress();
            $customeraddress->customer_id = $user->id;
            $customeraddress->name = $request->input('name');
            //$customeraddress->email = $request->input('email');
            //$customeraddress->phone = $request->input('phone');
            $customeraddress->country = $request->input('country');
            $customeraddress->state = $request->input('state');
            $customeraddress->city = $request->input('city');
            $customeraddress->address = $request->input('address');
            $customeraddress->post_code = $request->input('post_code');
            $customeraddress->is_default = 1;

            $customeraddress->save();

        }

        //Place Order
        $order = $orderService->create($request);

        //Login User
        if($request->create_account == 1){
           Auth::loginUsingId($user->id, true);
        }

        //Clear Cart Items
        Cart::clear();
        Cart::clearCartConditions();

        DB::commit();

        if( $order->id > 0 ){
            return redirect('/payment/'.encrypt($order->id));
        }

        return back()->with('error',_lang('Error Occured, Please try again !'));
    	
    }

    public function payment(Request $request, $order_id){
        $order_id = decrypt($order_id);
        $order = Order::find($order_id);
        
        if($order->status == $order::PENDING_PAYMENT){
            return view("theme.$this->theme.payment",compact('order'));
        }

        return back();  
    }
    
// public function store(Request $request)
// {
//     $request->validate([
//         'name'  => 'required|string|max:255',
//         'email' => 'required|email|max:255',
//     ]);

//     $fakeValue = 'N/A';

//     // Create Order
//     $orderData = [
//         'customer_name'     => $request->name,
//         'customer_email'    => $request->email,
//         'customer_phone'    => $request->phone ?? '0000000000',
//         'billing_name'      => $request->name,
//         'billing_city'      => $request->city ?? $fakeValue,
//         'billing_state'     => $request->state ?? $fakeValue,
//         'billing_post_code' => '00000',
//         'billing_country'   => $request->country ?? 'Unknown',
//         'billing_address'   => $request->address ?? $fakeValue,
//         'shipping_name'     => $request->name,
//         'shipping_city'     => $request->city ?? $fakeValue,
//         'shipping_state'    => $request->state ?? $fakeValue,
//         'shipping_post_code'=> '00000',
//         'shipping_country'  => $request->country ?? 'Unknown',
//         'shipping_address'  => $request->address ?? $fakeValue,
//         'sub_total'         => Cart::getSubTotal(),
//         'shipping_method'   => 'flat_rate',
//         'shipping_cost'     => 0,
//         'discount'          => 0,
//         'total'             => Cart::getSubTotal(),
//         'payment_method'    => 'paypal',
//         'currency'          => 'USD',
//         'currency_rate'     => 1,
//         'locale'            => 'en',
//         'status'            => 'pending',
//         'note'              => $request->note ?? null,
//     ];

//     $order = \App\Order::create($orderData);

//     // Insert all order products
//     foreach (Cart::getContent() as $item) {
//         \DB::table('order_products')->insert([
//             'order_id'          => $order->id,
//             'product_id'        => $item->id,
//             'product_attributes'=> json_encode($item->attributes ?? []),
//             'unit_price'        => $item->price,
//             'qty'               => $item->quantity,
//             'line_total'        => $item->price * $item->quantity,
//             'created_at'        => now(),
//             'updated_at'        => now(),
//         ]);
//     }

//     // Get first product for URL
//   $firstItem = Cart::getContent()->first();

// $redirectUrl = "https://www.designmydress.us/clear/Pay1paypal/buyonline.php";
// $redirectUrl .= "?quantity=" . ($firstItem ? $firstItem->quantity : 1);
// $redirectUrl .= "&pg=standardPay";
// $redirectUrl .= "&product_name=" . ($firstItem ? urlencode($firstItem->name) : 'Product');
// $redirectUrl .= "&p_id=" . ($firstItem ? $firstItem->id : '0');
// $redirectUrl .= "&product_id=" . ($firstItem ? $firstItem->id : '0');
// $redirectUrl .= "&product_cost=" . ($firstItem ? $firstItem->price : 0); // use unit price
// $redirectUrl .= "&website_name=M11&target=";


//     // Clear Cart
//     Cart::clear();

//     // Redirect
//     return redirect()->away($redirectUrl);
// }

public function store(Request $request)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $fakeValue = 'N/A';

    // ðŸ‘‡ Get selected shipping rate from hidden input
    $shippingRate = $request->input('selected_shipping_rate', 0);

    // âœ… Create full order data (including customer details)
    $orderData = [
        'customer_name'     => $request->name,
        'customer_email'    => $request->email,
        'customer_phone'    => $request->phone ?? '0000000000',

        // Billing details
        'billing_name'      => $request->name,
        'billing_city'      => $request->city ?? $fakeValue,
        'billing_state'     => $request->state ?? $fakeValue,
        'billing_post_code' => '00000',
        'billing_country'   => $request->country ?? 'Unknown',
        'billing_address'   => $request->address ?? $fakeValue,

        // Shipping details
        'shipping_name'     => $request->name,
        'shipping_city'     => $request->city ?? $fakeValue,
        'shipping_state'    => $request->state ?? $fakeValue,
        'shipping_post_code'=> '00000',
        'shipping_country'  => $request->country ?? 'Unknown',
        'shipping_address'  => $request->address ?? $fakeValue,

        // Amounts
        'sub_total'         => Cart::getSubTotal(),
        'shipping_method'   => 'flat_rate', // default (you can enhance later)
        'shipping_cost'     => $shippingRate, // ðŸ‘ˆ uses selected rate
        'discount'          => 0,
        'total'             => Cart::getSubTotal() + $shippingRate,

        // Meta info
        'payment_method'    => 'paypal',
        'currency'          => 'USD',
        'currency_rate'     => 1,
        'locale'            => 'en',
        'status'            => 'pending',
        'note'              => $request->note ?? null,
    ];

    // âœ… Create order
    $order = \App\Order::create($orderData);

    // âœ… Insert ordered products
    foreach (Cart::getContent() as $item) {
        \DB::table('order_products')->insert([
            'order_id'          => $order->id,
            'product_id'        => $item->id,
            'product_attributes'=> json_encode($item->attributes ?? []),
            'unit_price'        => $item->price,
            'qty'               => $item->quantity,
            'line_total'        => $item->price * $item->quantity,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }

  // ✅ Prepare redirect URL for PayPal
$firstItem = Cart::getContent()->first();

// Calculate totals
$productCost = $firstItem ? $firstItem->price : 0;
$quantity = $firstItem ? $firstItem->quantity : 1;

// ✅ Add shipping rate inside product cost
$productCostWithShipping = ($productCost * $quantity) + $shippingRate;

$redirectUrl = "https://www.clearcosmetics.us/clear/Payments/buyonline.php";
$redirectUrl .= "?quantity=" . $quantity;
$redirectUrl .= "&pg=standardPay";
$redirectUrl .= "&product_name=Order id: " . urlencode($order->id);
$redirectUrl .= "&p_id=" . ($firstItem ? $firstItem->id : '0');
$redirectUrl .= "&product_id=" . ($firstItem ? $firstItem->id : '0');
$redirectUrl .= "&product_cost=" . $productCostWithShipping; // ✅ shipping included
$redirectUrl .= "&shipping_rate=" . $shippingRate; // optional (keep if you still want to show it separately)
$redirectUrl .= "&website_name=M11&target=";



    // âœ… Clear cart
    Cart::clear();

    // âœ… Redirect to PayPal page
    return redirect()->away($redirectUrl);
}








}