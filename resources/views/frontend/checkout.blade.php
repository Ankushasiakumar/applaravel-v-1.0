@extends ('frontend.layout.app')
@section('content')
<section class="checkout-page">
	<div class="container">
		<form action="{{ route('checkout_post') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="col-md-6 col-sm-6">
				<h3>Personal Details</h3>
					<div class="form-group">
						<label class="control-label">First Name <span>*</span></label>
						<input type="text" name="billing_first_name" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Last Name</label>
						<input type="text" name="billing_last_name" class="form-control">
					</div>

					<div class="form-group">
						<label class="control-label">Email <span>*</span></label>
						<input type="text" name="billing_email" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Street Address <span>*</span></label>
						<input type="text" name="billing_street_address1" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Street Address 2</label>
						<input type="text" name="billing_street_address2" class="form-control">
					</div>

					<div class="form-group">
						<label class="control-label">Town / City <span>*</span></label>
						<input type="text" name="billing_city" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Country <span>*</span></label>
						<input type="text" name="billing_country" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Postcode <span>*</span></label>
						<input type="text" name="billing_postcode" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-label">Phone</label>
						<input type="text" name="billing_phone" class="form-control">
					</div>


					<div class="form-group">
						<label><input type="checkbox" name="shipping_address"> SHIP TO A DIFFERENT ADDRESS?</label>
					</div>

					<div class="shipping_address_fields" style="display: none;">
						<div class="form-group">
							<label class="control-label">First Name</label>
							<input type="text" name="shipping_first_name" class="form-control">
						</div>

						<div class="form-group">
							<label class="control-label">Last Name</label>
							<input type="text" name="shipping_last_name" class="form-control">
						</div>

						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="text" name="shipping_email" class="form-control">
						</div>

						<div class="form-group">
							<label class="control-label">Street Address</label>
							<input type="text" name="shipping_street_address1" class="form-control">
						</div>

						<div class="form-group">
							<label class="control-label">Street Address 2</label>
							<input type="text" name="shipping_street_address2" class="form-control">
						</div>

						<div class="form-group">
							<label class="control-label">Town / City</label>
							<input type="text" name="shipping_city" class="form-control">
						</div>

						<div class="form-group">
							<label class="control-label">Country</label>
							<input type="text" name="shipping_country" class="form-control">
						</div>

						<div class="form-group">
							<label class="control-label">Postcode</label>
							<input type="text" name="shipping_postcode" class="form-control">
						</div>

						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="shipping_phone" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label">Order Notes</label>
						<textarea class="form-control" name="order_notes"></textarea>
					</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="right-side-contact">
					<div id="order_review" class="woocommerce-checkout-review-order">
					   <div class="right-side">
					   	@if($total_price != '')
					   		<ul class="shed_attributes">

					   			@if($door_position != '')
					   				<li class="door_position">Door Position: <span>{{ $door_position }}</span><input type="hidden" name="door_position" value="{{ $door_position }}"></li>
					   			@endif

					   			@if($door_color != '')
					   			<li class="door_color">Door Color: <span>{{$door_color}}</span><input type="hidden" name="door_color" value="{{$door_color}}"></li>
					   			@endif

					   			@if($door_model != '')
					   			<li class="door_model">Door Model: <span>{{$door_model}}</span><input type="hidden" name="door_model" value="{{$door_model}}"></li>
					   			@endif

					   			@if($door_model != '')
					   			<li class="window_position">Window Position: <span>{{$door_model}}</span><input type="hidden" name="window_position" value="{{$door_model}}"></li>
					   			@endif

					   			@if($window_color != '')
					   			<li class="window_color">Window Color: <span>{{$window_color}}</span><input type="hidden" name="window_color" value="{{$window_color}}"></li>
					   			@endif

					   			@if($window_model != '')
					   			<li class="window_model">Window Model: <span>{{$window_model}}</span><input type="hidden" name="window_model" value="{{$window_model}}"></li>
					   			@endif

					   			@if($layout != '')
					   			<li class="layout">Layout: <span>{{$layout}}</span><input type="hidden" name="layout" value="{{$layout}}"></li>
					   			@endif

					   			@if($shortest_side != '')
					   			<li class="short_side">Short side: <span>{{$shortest_side}}</span><input type="hidden" name="shortest_side" value="{{$shortest_side}}"></li>
					   			@endif

					   			@if($longest_side != '')
					   			<li class="long_side">Long side: <span>{{$longest_side}}</span><input type="hidden" name="longest_side" value="{{$longest_side}}"></li>
					   			@endif

					   			@if($total_price != '')
								<li class="price_calc" price="0">Price: <span>£ {{$total_price}}</span></li><input type="hidden" name="total_price" value="{{$total_price}}">
					   			@endif
							</ul>
						@endif
					   </div>
					   <br><br>
					   <div id="payment" class="woocommerce-checkout-payment">
					      <ul class="wc_payment_methods payment_methods methods stripe-small">
					         <li class="wc_payment_method payment_method_cheque">
					            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="phone" checked="checked" data-order_button_text="">
					            <label for="payment_method_cheque">
					            Phone Payment 	</label>
					         </li>
					         <li class="wc_payment_method payment_method_stripe_cc">
					            <input id="payment_method_stripe_cc" type="radio" class="input-radio" name="payment_method" value="COD" data-order_button_text="">
					            <label for="payment_method_stripe_cc">
					            Cash on Delivery </label>
					         </li>
					      </ul>
					      <div class="form-row place-order">
					         <div class="woocommerce-terms-and-conditions-wrapper">
					            <div class="woocommerce-privacy-policy-text">
					               <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="http://pete.bestwebdevs.com/privacy-policy" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
					            </div>
					         </div>
					         <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>	
					      </div>
					   </div>
					</div>				
				</div>
			</div>
		</form>
	</div>
</section>

@endsection