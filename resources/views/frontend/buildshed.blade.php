@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Build a Shed</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li><a href="#" > Shop </a></li>
			<li>/</li>
			<li>Shed Builder</li>
		</ul>
	</div>
</section>

@foreach($Buildsheds as $Buildshed)
	@php
		if($Buildshed->shed_builder_content != ''){
			$shed_builder_content = $Buildshed->shed_builder_content;
		}else{
			$shed_builder_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_1_image != ''){
			$product_featured_tab_1_section_1_image = $Buildshed->product_featured_tab_1_section_1_image;
		}else{
			$product_featured_tab_1_section_1_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_1_title != ''){
			$product_featured_tab_1_section_1_title = $Buildshed->product_featured_tab_1_section_1_title;
		}else{
			$product_featured_tab_1_section_1_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_1_content != ''){
			$product_featured_tab_1_section_1_content = $Buildshed->product_featured_tab_1_section_1_content;
		}else{
			$product_featured_tab_1_section_1_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_2_image != ''){
			$product_featured_tab_1_section_2_image = $Buildshed->product_featured_tab_1_section_2_image;
		}else{
			$product_featured_tab_1_section_2_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_2_title != ''){
			$product_featured_tab_1_section_2_title = $Buildshed->product_featured_tab_1_section_2_title;
		}else{
			$product_featured_tab_1_section_2_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_2_content != ''){
			$product_featured_tab_1_section_2_content = $Buildshed->product_featured_tab_1_section_2_content;
		}else{
			$product_featured_tab_1_section_2_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_3_image != ''){
			$product_featured_tab_1_section_3_image = $Buildshed->product_featured_tab_1_section_3_image;
		}else{
			$product_featured_tab_1_section_3_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_3_icon != ''){
			$product_featured_tab_1_section_3_icon = $Buildshed->product_featured_tab_1_section_3_icon;
		}else{
			$product_featured_tab_1_section_3_icon = '';
		}

		if($Buildshed->product_featured_tab_1_section_3_title != ''){
			$product_featured_tab_1_section_3_title = $Buildshed->product_featured_tab_1_section_3_title;
		}else{
			$product_featured_tab_1_section_3_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_3_content != ''){
			$product_featured_tab_1_section_3_content = $Buildshed->product_featured_tab_1_section_3_content;
		}else{
			$product_featured_tab_1_section_3_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_4_image != ''){
			$product_featured_tab_1_section_4_image = $Buildshed->product_featured_tab_1_section_4_image;
		}else{
			$product_featured_tab_1_section_4_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_4_icon != ''){
			$product_featured_tab_1_section_4_icon = $Buildshed->product_featured_tab_1_section_4_icon;
		}else{
			$product_featured_tab_1_section_4_icon = '';
		}

		if($Buildshed->product_featured_tab_1_section_4_title != ''){
			$product_featured_tab_1_section_4_title = $Buildshed->product_featured_tab_1_section_4_title;
		}else{
			$product_featured_tab_1_section_4_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_4_content != ''){
			$product_featured_tab_1_section_4_content = $Buildshed->product_featured_tab_1_section_4_content;
		}else{
			$product_featured_tab_1_section_4_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_5_image != ''){
			$product_featured_tab_1_section_5_image = $Buildshed->product_featured_tab_1_section_5_image;
		}else{
			$product_featured_tab_1_section_5_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_5_icon != ''){
			$product_featured_tab_1_section_5_icon = $Buildshed->product_featured_tab_1_section_5_icon;
		}else{
			$product_featured_tab_1_section_5_icon = '';
		}

		if($Buildshed->product_featured_tab_1_section_5_title != ''){
			$product_featured_tab_1_section_5_title = $Buildshed->product_featured_tab_1_section_5_title;
		}else{
			$product_featured_tab_1_section_5_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_5_content != ''){
			$product_featured_tab_1_section_5_content = $Buildshed->product_featured_tab_1_section_5_content;
		}else{
			$product_featured_tab_1_section_5_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_6_image != ''){
			$product_featured_tab_1_section_6_image = $Buildshed->product_featured_tab_1_section_6_image;
		}else{
			$product_featured_tab_1_section_6_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_6_icon != ''){
			$product_featured_tab_1_section_6_icon = $Buildshed->product_featured_tab_1_section_6_icon;
		}else{
			$product_featured_tab_1_section_6_icon = '';
		}

		if($Buildshed->product_featured_tab_1_section_6_title != ''){
			$product_featured_tab_1_section_6_title = $Buildshed->product_featured_tab_1_section_6_title;
		}else{
			$product_featured_tab_1_section_6_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_6_content != ''){
			$product_featured_tab_1_section_6_content = $Buildshed->product_featured_tab_1_section_6_content;
		}else{
			$product_featured_tab_1_section_6_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_7_image != ''){
			$product_featured_tab_1_section_7_image = $Buildshed->product_featured_tab_1_section_7_image;
		}else{
			$product_featured_tab_1_section_7_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_7_icon != ''){
			$product_featured_tab_1_section_7_icon = $Buildshed->product_featured_tab_1_section_7_icon;
		}else{
			$product_featured_tab_1_section_7_icon = '';
		}

		if($Buildshed->product_featured_tab_1_section_7_title != ''){
			$product_featured_tab_1_section_7_title = $Buildshed->product_featured_tab_1_section_7_title;
		}else{
			$product_featured_tab_1_section_7_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_7_content != ''){
			$product_featured_tab_1_section_7_content = $Buildshed->product_featured_tab_1_section_7_content;
		}else{
			$product_featured_tab_1_section_7_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_8_image != ''){
			$product_featured_tab_1_section_8_image = $Buildshed->product_featured_tab_1_section_8_image;
		}else{
			$product_featured_tab_1_section_8_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_8_title != ''){
			$product_featured_tab_1_section_8_title = $Buildshed->product_featured_tab_1_section_8_title;
		}else{
			$product_featured_tab_1_section_8_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_8_content != ''){
			$product_featured_tab_1_section_8_content = $Buildshed->product_featured_tab_1_section_8_content;
		}else{
			$product_featured_tab_1_section_8_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_9_image != ''){
			$product_featured_tab_1_section_9_image = $Buildshed->product_featured_tab_1_section_9_image;
		}else{
			$product_featured_tab_1_section_9_image = '';
		}

		if($Buildshed->product_featured_tab_1_section_9_title != ''){
			$product_featured_tab_1_section_9_title = $Buildshed->product_featured_tab_1_section_9_title;
		}else{
			$product_featured_tab_1_section_9_title = '';
		}

		if($Buildshed->product_featured_tab_1_section_9_content != ''){
			$product_featured_tab_1_section_9_content = $Buildshed->product_featured_tab_1_section_9_content;
		}else{
			$product_featured_tab_1_section_9_content = '';
		}

		if($Buildshed->product_featured_tab_1_section_10_image_1 != ''){
			$product_featured_tab_1_section_10_image_1 = $Buildshed->product_featured_tab_1_section_10_image_1;
		}else{
			$product_featured_tab_1_section_10_image_1 = '';
		}

		if($Buildshed->product_featured_tab_1_section_10_image_2 != ''){
			$product_featured_tab_1_section_10_image_2 = $Buildshed->product_featured_tab_1_section_10_image_2;
		}else{
			$product_featured_tab_1_section_10_image_2 = '';
		}

		if($Buildshed->product_featured_tab_1_section_10_image_3 != ''){
			$product_featured_tab_1_section_10_image_3 = $Buildshed->product_featured_tab_1_section_10_image_3;
		}else{
			$product_featured_tab_1_section_10_image_3 = '';
		}

		if($Buildshed->product_featured_tab_1_section_10_image_4 != ''){
			$product_featured_tab_1_section_10_image_4 = $Buildshed->product_featured_tab_1_section_10_image_4;
		}else{
			$product_featured_tab_1_section_10_image_4 = '';
		}
		
		if($Buildshed->product_featured_tab_2_section_1_image != ''){
			$product_featured_tab_2_section_1_image = $Buildshed->product_featured_tab_2_section_1_image;
		}else{
			$product_featured_tab_2_section_1_image = '';
		}

		if($Buildshed->product_featured_tab_2_section_1_title != ''){
			$product_featured_tab_2_section_1_title = $Buildshed->product_featured_tab_2_section_1_title;
		}else{
			$product_featured_tab_2_section_1_title = '';
		}

		if($Buildshed->product_featured_tab_2_section_1_content != ''){
			$product_featured_tab_2_section_1_content = $Buildshed->product_featured_tab_2_section_1_content;
		}else{
			$product_featured_tab_2_section_1_content = '';
		}

		if($Buildshed->product_featured_tab_2_section_2_image != ''){
			$product_featured_tab_2_section_2_image = $Buildshed->product_featured_tab_2_section_2_image;
		}else{
			$product_featured_tab_2_section_2_image = '';
		}

		if($Buildshed->product_featured_tab_2_section_2_title != ''){
			$product_featured_tab_2_section_2_title = $Buildshed->product_featured_tab_2_section_2_title;
		}else{
			$product_featured_tab_2_section_2_title = '';
		}

		if($Buildshed->product_featured_tab_2_section_2_content != ''){
			$product_featured_tab_2_section_2_content = $Buildshed->product_featured_tab_2_section_2_content;
		}else{
			$product_featured_tab_2_section_2_content = '';
		}

	@endphp
@endforeach

<section class="builder-sec">
	<div class="container">
		<h3>Online Shed Builder</h3>
		<p>{!! $shed_builder_content !!}</p>
		<div class="row">
			<div class="col-md-8 col-sm-8 col-lg-8">
				<div class="inner-steps">
				  <nav class="form-steps">
						<div class="form-steps__item step-1 form-steps__item--completed">
							<div class="form-steps__item-content">
								<span class="form-steps__item-icon">Step 1</span>
								<span class="form-steps__item-text">Size</span>
							</div>
						</div>

						<div class="form-steps__item step-2">
							<div class="form-steps__item-content">
								<span class="form-steps__item-icon">Step 2</span>
								<span class="form-steps__item-text">Layout</span>
							</div>
						</div>

						<div class="form-steps__item step-3">
							<div class="form-steps__item-content">
								<span class="form-steps__item-icon">Step 3</span>
								<span class="form-steps__item-text">Framework <br>& Cladding</span>
							</div>
						</div>

						<div class="form-steps__item step-4">
							<div class="form-steps__item-content">
								<span class="form-steps__item-icon">Step 4</span>
								<span class="form-steps__item-text">Security</span>
							</div>
						</div>

						<div class="form-steps__item step-5">
							<div class="form-steps__item-content">
								<span class="form-steps__item-icon">Step 5</span>
								<span class="form-steps__item-text">Extras</span>
							</div>
						</div>
					</nav>

					<div class="steps-inner">
						<form action="#" method="post" id="raq_questions">
							<div class="question-container active_panel" id="question-1">
								<div class="row">
									<div class="col-md-6 col-md-6">
										<div class="form-group longest_side_group">
											<label class="control-label">Longest Side (meter Ex: 1.2)</label>
											<input type="text" name="longest_side" class="form-control" placeholder="Longest Side">
										</div>
									</div>
									<div class="col-md-6 col-md-6">
										<div class="form-group shortest_side_group">
											<label class="control-label">Shortest Side (meter Ex: 1.2)</label>
											<input type="text" name="shortest_side" class="form-control" placeholder="Shortest Side">
										</div>
									</div>
								</div>
							</div>
							<div class="question-container" id="question-2">
								<ul class="listing-detail">
									@if(!$sheds->isEmpty())
										@foreach($sheds as $shed)
										<li>
											<span>{{ $shed->shed_name }}</span>
											<figure><img src="{{ $shed->shed_image }}"></figure>
											 <div class="custom-radio-btn">
												<input type="radio" id="{{ $shed->id }}" value="{{ $shed->id }}" name="sheds">
												<label for="{{ $shed->id }}">select</label>
											  </div>
										</li>
										@endforeach
									@endif
								</ul>
							</div>
							<div class="question-container" id="question-3">
								<div class="frame-work-clading">

									@if(!$claddings->isEmpty())
										@foreach($claddings as $cladding)
											<div class="inner-comm">
												<figure>
													@php
														foreach(json_decode($cladding->cladding_images) as $image){
															@endphp
															<div class="top-img">
																<img src="{{ $image }}">
															</div>
															@php
														}
													@endphp
													<!-- <div class="bottom-img">
														<img src="{{ URL::asset('front/img/bottom.png') }}">
													</div> -->
												</figure>
												<figcaption>
													<h2>{{ $cladding->cladding_name }}</h2>
													<div class="select-option">
													<div class="custom-radio-btn">
														<input type="radio" id="test{{ $cladding->id }}" name="claddings" value="{{$cladding->id}}">
														<label for="test{{ $cladding->id }}">select</label>
													 </div>
													</div>
													{!!$cladding->cladding_desc!!}
												</figcaption>
											</div>
										@endforeach
									@endif
								</div>
							</div>
							<div class="question-container" id="question-4">
								<div class="security-sec">
									<ul>
										@if(!$securities->isEmpty())
											@php
												foreach($securities as $security){
												@endphp
												<li>
													<span>{{$security->security_name}}</span>
													<figure>
														<img src="{{$security->security_image}}">
													</figure>
													<div class="custom-radio-btn">
														<input type="radio" id="security{{$security->id}}" name="security" value="{{$security->id}}">
														<label for="security{{$security->id}}">select</label>
													</div>
												</li>
												@php
												}
											@endphp
										@endif
									</ul>
									<p>Select Security to help reduce the chance of unauthorised access to your shed.
									Bolts are used instead of screws on the hinges & lock, along with a bolted,
									heavy duty cast iron Hasp & Staple lock <a href="#">(as shown here)</a>
									The door and surround is braced with more framework. Choose the optional 
									<a href="#">security windows</a> for complete peace of mind.</p>
								</div>
							</div>
							<div class="question-container" id="question-5">
								<div class="show-select-list">
									<div class="extra-option">
									Options & Extras Detail (Please note, prices can vary depending on your shed size & type)
									</div>
									<div class="detail-all windows_select">
										<h3>Windows</h3>
										<p>Your current Windows' style, pane & fixing. Make changes where required.</p>
										
										@if(!$extras->isEmpty())
											@php
												foreach($extras as $extra){
												$selectArr = array();
												$selectArr[] = $extra->id;										
												$selectArr[] = $extra->extras_name;										
												$selectArr[] = $extra->price;
												$selectArr = json_encode($selectArr);
												@endphp
													<div class="thum-sec">
														<figure class="left">
															<img src="{{ $extra->extras_images }}">
														</figure>
														<figcaption>
															<h4>{{ $extra->extras_name }}</h4>
															{!! $extra->extras_desc !!}
															<div class="price-cust">€ {{ $extra->price }}</div>
															<div class="btn-sec">
																<button type="button" class="chnage-btn" selectArr="{{$selectArr}}">Select</button>
															</div>
														</figcaption>
													</div>
												@php
												}
											@endphp
										@endif
									</div>

									<div class="selected_items">
										<!-- <div class="thum-sec">
											<figure class="left">
												<img src="{{ URL::asset('front/img/translate.png') }}">
											</figure>
											<figcaption>
												<h4>Tanalised Bearers</h4>
												<p>Raise the shed up from ground by an extra 2 inches with rot-resistant Tanalised Bearers.</p>
											</figcaption>
										</div> -->
									</div>


								</div>
							</div>

						</form>

						<div class="button-bar">
							<button  id="raq_back"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</button>
							<button id="raq_next">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button>
						</div>

					</div>
				</div>	
				  
				</div>
			
				<div class="col-md-4 col-sm-4 col-lg-4">
					<div class="right-side">
						<h3>LIVE PROGRESS</h3>
						<figure>
							<img src="{{ URL::asset('front/img/house.png') }}">
						</figure>
						<div class="img-sec">
							Image shows a basic representation of your shed e.g. layout, door & window type etc, some extras and options may not show.
						</div>
						<ul class="shed_attributes">
							<!-- <li>External Height of tallest part: <span>2217 mm</span></li>
							<li>External Height of shortest side:<span>1877 mm</span></li> -->
							<!-- <li>Cladding Wood Type:<span>Standard</span></li>
							<li>Framework Wood Type:<span>Standard</span></li> -->
							<li class="price_calc" price="0">Price: <span></span></li>
						</ul>
						<button class="save-shed" type="button">Save This Shed <i class="fa fa-angle-right" aria-hidden="true"></i></button>
						<div class="payment-icon"><img src="{{ URL::asset('front/img/payment1.png')}}"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="tab-sec">
	<div class="container">
		 <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Productaccc Features</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Product Features</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="tab-info">
							@if($product_featured_tab_1_section_1_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_1_image }}"></figure>
							@endif
							<figcaption>
								<h4>{{ $product_featured_tab_1_section_1_title }}</h4>
								<p>{!! $product_featured_tab_1_section_1_content !!}</p>
							</figcaption>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="tab-info">
							@if($product_featured_tab_1_section_2_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_2_image }}"></figure>
							@endif
							<figcaption>
								<h4>{{ $product_featured_tab_1_section_2_title }}</h4>
								<p>{!! $product_featured_tab_1_section_2_content !!}</p>
							</figcaption>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="three-info">
							@if($product_featured_tab_1_section_3_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_3_image }}"></figure>
							@endif
							<figcaption>
								@if($product_featured_tab_1_section_3_icon != '')
									<div class="small-img">
										<img src="{{ $product_featured_tab_1_section_3_icon }}">
									</div>
								@endif
								<h4>{{ $product_featured_tab_1_section_3_title }}</h4>
								<p>{!! $product_featured_tab_1_section_3_content !!}</p>
							</figcaption>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="three-info">
							@if($product_featured_tab_1_section_4_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_4_image }}"></figure>
							@endif
							<figcaption>
							@if($product_featured_tab_1_section_4_icon != '')
								<div class="small-img"><img src="{{ $product_featured_tab_1_section_4_icon }}"></div>
							@endif
								<h4>{{ $product_featured_tab_1_section_4_title }}</h4>
								<p>{!! $product_featured_tab_1_section_4_content !!}</p>
							</figcaption>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="three-info">
							@if($product_featured_tab_1_section_5_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_5_image }}"></figure>
							@endif
							<figcaption>
							@if($product_featured_tab_1_section_5_icon != '')
								<div class="small-img"><img src="{{ $product_featured_tab_1_section_5_icon }}"></div>
							@endif
								<h4>{{ $product_featured_tab_1_section_5_title }}</h4>
								<p>{!! $product_featured_tab_1_section_5_content !!}</p>
							</figcaption>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="nack-sec">
						<div class="col-md-6 col-sm-6">
							<div class="zick-zack">
								@if($product_featured_tab_1_section_6_icon != '')
									<div class="small-img"><img src="{{ $product_featured_tab_1_section_6_icon }}"></figure></div>
								@endif
								<figcaption>
									<h4>{{ $product_featured_tab_1_section_6_title }}</h4>
									<p>{!! $product_featured_tab_1_section_6_content !!}</p>
								</figcaption>
							</div>
						</div>
						
						<div class="col-md-6 col-sm-6 padding-zero">
							@if($product_featured_tab_1_section_6_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_6_image }}"></figure>
							@endif
						</div>
					</div>
				</div>
				
				<div class="row ">
					<div class="nack-sec">
						<div class="col-md-6 col-sm-6 padding-zero">
							@if($product_featured_tab_1_section_7_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_7_image }}"></figure>
							@endif
						</div>
						<div class="col-md-6 col-sm-6">
								<div class="zick-zack">
									@if($product_featured_tab_1_section_7_icon != '')
										<div class="small-img"><img src="{{ $product_featured_tab_1_section_7_icon }}"></figure></div>
									@endif
									<figcaption>
										<h4>{{ $product_featured_tab_1_section_7_title }}</h4>
										<p>{!! $product_featured_tab_1_section_7_content !!}</p>
									</figcaption>
								</div>
						</div>
						</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="tab-info">
							@if($product_featured_tab_1_section_8_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_8_image }}"></figure>
							@endif
							<figcaption>
								<h4>{{ $product_featured_tab_1_section_8_title }}</h4>
								<p>{!! $product_featured_tab_1_section_8_content !!}</p>
							</figcaption>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="tab-info">
							@if($product_featured_tab_1_section_9_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_9_image }}"></figure>
							@endif
							<figcaption>
								<h4>{{ $product_featured_tab_1_section_9_title }}</h4>
								<p>{!! $product_featured_tab_1_section_9_content !!}</p>
							</figcaption>
						</div>
					</div>
				</div>
				<ul class="all-lists">
					@if($product_featured_tab_1_section_10_image_1 != '')
						<li>
							<figure><img src="{{ $product_featured_tab_1_section_10_image_1 }}"></figure>
						</li>	
					@endif

					@if($product_featured_tab_1_section_10_image_2 != '')
						<li>
							<figure><img src="{{ $product_featured_tab_1_section_10_image_2 }}"></figure>
						</li>
					@endif

					@if($product_featured_tab_1_section_10_image_3 != '')
						<li>
							<figure><img src="{{ $product_featured_tab_1_section_10_image_3 }}"></figure>
						</li>
					@endif

					@if($product_featured_tab_1_section_10_image_4 != '')
						<li>
							<figure><img src="{{ $product_featured_tab_1_section_10_image_4 }}"></figure>
						</li>
					@endif
				</ul>
			</div>
			<div role="tabpanel" class="tab-pane" id="profile">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="tab-info">
							@if($product_featured_tab_2_section_1_image != '')
								<figure><img src="{{ $product_featured_tab_2_section_1_image }}"></figure>
							@endif
							<figcaption>
								<h4>{{ $product_featured_tab_2_section_1_title }}</h4>
								<p>{!! $product_featured_tab_2_section_1_content !!}</p>
							</figcaption>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="tab-info">
							@if($product_featured_tab_2_section_2_image != '')
								<figure><img src="{{ $product_featured_tab_2_section_2_image }}"></figure>
							@endif
							<figcaption>
								<h4>{{ $product_featured_tab_2_section_2_title }}</h4>
								<p>{!! $product_featured_tab_2_section_2_content !!}</p>
							</figcaption>
						</div>
					</div>
				</div>
			</div>
			
		  </div>
	</div>
</section>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>


	(function($) {
	  $.fn.inputFilter = function(inputFilter) {
	    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
	      if (inputFilter(this.value)) {
	        this.oldValue = this.value;
	        this.oldSelectionStart = this.selectionStart;
	        this.oldSelectionEnd = this.selectionEnd;
	      } else if (this.hasOwnProperty("oldValue")) {
	        this.value = this.oldValue;
	        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
	      } else {
	        this.value = "";
	      }
	    });
	  };
	}(jQuery));

	jQuery('input[name="longest_side"]').inputFilter(function(value) {
		return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 100);
	});

	jQuery('input[name="shortest_side"]').inputFilter(function(value) {
		return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 100);
	});

	/* Array Start */

	// initialize array as global variable
    var items = [];
    
    /*jQuery(document).on('click','button.save-shed', function(){
    	
    });*/


    jQuery(document).on('click', '.detail-all.windows_select .btn-sec button.remove-btn', function(){

		var getArrExtras1 = jQuery.parseJSON(jQuery(this).attr('selectArr'));
		// alert(getArrExtras1[0]);
		process_item('extras'+getArrExtras1[0],"");
		jQuery('ul.shed_attributes li.extras'+getArrExtras1[0]).remove();

		jQuery(this).removeClass('remove-btn');
		jQuery(this).addClass('chnage-btn');
		jQuery(this).text('Select');
	});

    jQuery(document).on('click', '.detail-all.windows_select .btn-sec button.chnage-btn', function(){
    		
		var getArrExtras = jQuery.parseJSON(jQuery(this).attr('selectArr'));
		process_item('extras'+getArrExtras[0],jQuery(this).attr('selectArr'));
		jQuery('ul.shed_attributes').prepend('<li class="extras'+getArrExtras[0]+'">Extras: <span>'+getArrExtras[1]+' (€'+getArrExtras[2]+')'+'</span></li>');

		jQuery(this).removeClass('chnage-btn');
		jQuery(this).addClass('remove-btn');
		jQuery(this).text('Remove');
	});


    jQuery(document).ready(function(){

    	/*jQuery('input[name="longest_side"]').on('input',function(e){
    		if (jQuery(this).val().length != 0) {
			    // jQuery('li.long_side span').text(jQuery(this).val()+' m');
			    var getLongTotalPrice =+jQuery(this).val()*3;
			    process_item('longest_side_price',getLongTotalPrice);
			    jQuery('ul.shed_attributes').prepend('<li class="long_side">Long side: <span>'+jQuery(this).val()+' m'+'</span></li>');
    		}else{
    			jQuery('ul.shed_attributes li.long_side').remove();
    		}
		});*/

		/*jQuery('input[name="shortest_side"]').on('input',function(e){
    		if (jQuery(this).val().length != 0) {
			    // jQuery('li.short_side span').text(jQuery(this).val()+' m');
			    var getShortTotalPrice = jQuery(this).val()*2;
			    process_item('shortest_side_price',getShortTotalPrice);
			    jQuery('ul.shed_attributes').prepend('<li class="short_side">Short side: <span>'+jQuery(this).val()+' m'+'</span></li>');
			}else{
    			jQuery('ul.shed_attributes li.short_side').remove();
			}
		});*/
        
		jQuery('input[name="sheds"]').on('change', function(e) {
		    // e.preventDefault();
	   	
		   	jQuery.ajax({
		   	  headers: {
	          	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
	          },
		      url: "{{ url('/selectshed') }}",
		      method: 'post',
		      data: {
		         shed_id: jQuery(this).val()
		      },
		      success: function(result){
		      	process_item('sheds',"");
		      	jQuery('ul.shed_attributes li.layout').remove();
		      	jQuery('div.selected_items div.layout').remove();

		    	process_item('sheds',result);
		    	var obj = jQuery.parseJSON(result);
			    jQuery('ul.shed_attributes').prepend('<li class="layout">Layout: <span>'+obj[1]+' (€'+obj[2]+')'+'</span></li>');
			    jQuery('div.selected_items').prepend('<div class="thum-sec layout"><figcaption><h4>Layout</h4><p>'+obj[1]+' (€'+obj[2]+')'+'</p></figcaption></div>');
		      }
		  	});
		});

		jQuery('input[name="claddings"]').on('change', function(e) {
			jQuery.ajax({
		   	  headers: {
	          	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
	          },
		      url: "{{ url('/selectcladding') }}",
		      method: 'post',
		      data: {
		         cladding_id: jQuery(this).val()
		      },
		      success: function(result){
		    	process_item('claddings',"");
		    	jQuery('ul.shed_attributes li.cladding').remove();
		    	jQuery('div.selected_items div.cladding').remove();

		    	process_item('claddings',result);
		    	var obj = jQuery.parseJSON(result);
			    jQuery('ul.shed_attributes').prepend('<li class="cladding">Cladding: <span>'+ obj[1]+' (€'+obj[2]+')'+'</span></li>');
			    jQuery('div.selected_items').prepend('<div class="thum-sec cladding"><figcaption><h4>Cladding</h4><p>'+obj[1]+' (€'+obj[2]+')'+'</p></figcaption></div>');
		      }
		  	});
		});

		jQuery('input[name="security"]').on('change', function(e) {
			jQuery.ajax({
		   	  headers: {
	          	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
	          },
		      url: "{{ url('/selectsecurity') }}",
		      method: 'post',
		      data: {
		         security_id: jQuery(this).val()
		      },
		      success: function(result){
		    	process_item('security',"");
		    	jQuery('ul.shed_attributes li.security').remove();
		    	jQuery('div.selected_items div.security').remove();

		    	process_item('security',result);
		    	var obj = jQuery.parseJSON(result);
			    jQuery('ul.shed_attributes').prepend('<li class="security">Security: <span>'+ obj[1]+' (€'+obj[2]+')'+'</span></li>');
			    jQuery('div.selected_items').prepend('<div class="thum-sec security"><figcaption><h4>Security</h4><p>'+obj[1]+' (€'+obj[2]+')'+'</p></figcaption></div>');
		      }
		  	});
		});
    });
    
    // ———— functions [START] ————
 
    // process item, usually based in item id
    function process_item(item_id,item_value){
        
        if(item_value==""){
            //if item value is empty, delete from the array
            delete_item(item_id);
        }else if(checkIfExists(item_id)){
            //search if item_id exists in the array
            //if item exists, edit it
            edit(item_id,item_value);
        }else if(!checkIfExists(item_id)){
            //if item does not exist, add it
            add(item_id,item_value);
        }
        
        //read the items
        showAllItems();
    }
    
    // ADD
    function add(item_id,item_value){
        items.push({
            "item_id" : item_id,
            "item_value" : item_value
        });
        // $("#status").text("Successfully added.");
    }
 
    // EDIT
    function edit(item_id,item_value){
        
        //delete first
        items.remove("item_id", item_id);
        
        //then add again
        items.push({
            "item_id" : item_id,
            "item_value" : item_value
        });
        // $("#status").text("successfully edited.");
            
    }
    
    // DELETE
    function delete_item(item_id){
        items.remove("item_id", item_id);
        // $("#status").text("Successfully deleted.");
    }
    
    // READ
    function showAllItems(){
        
        var arr_len = items.length;
        
        var totalPrice = [];
        //loop through the array to read the items
        for(var x=0; x<arr_len; x++){
            var item_id = items[x]['item_id'];
            var item_value = items[x]['item_value'];
            
            //append to results div to display
            // ul.shed_attributes li.price_calc span
            // item_id: sheds >>> item_value: [2,"Pent A",100]<br />

            if (item_id == 'longest_side_price') {
            	totalPrice.push(item_value);
            }

            if (item_id == 'shortest_side_price') {
            	totalPrice.push(item_value);
            }

			if (item_id == 'sheds') {
				var obj = jQuery.parseJSON(item_value);
            	totalPrice.push(obj[2]);
            }

            if (item_id == 'claddings') {
				var obj = jQuery.parseJSON(item_value);
            	totalPrice.push(obj[2]);
            }

            if (item_id == 'security') {
				var obj = jQuery.parseJSON(item_value);
            	totalPrice.push(obj[2]);
            }

            if (item_id.includes("extras")) {
            	var obj = jQuery.parseJSON(item_value);
            	totalPrice.push(obj[2]);
            }

            console.log("item_id: " + item_id + " >>> item_value: " + item_value + "<br />");
        }

        jQuery('ul.shed_attributes li.price_calc span').text('€ '+totalPrice.reduce((a, b) => a + b, 0));
    }
    
    function checkIfExists(check_item_id){
        
        //get the array length first
        var arr_len = items.length;
        
        //search the array
        //there might be another way
        for(var x=0; x<arr_len; x++){
            var item_id = items[x]['item_id'];
            var item_value = items[x]['item_value'];
            
            if(check_item_id==item_id){
                //it means the item exists
                return true;
            }
        }
        
        return false;
    }
    
    //needs a remove function
    Array.prototype.remove = function(name, value) {
        array = this;
        var rest = $.grep(this, function(item){
            return (item[name] != value);  
        });
 
        array.length = rest.length;
        $.each(rest, function(n, obj) {
            array[n] = obj;
        });
    };
    // ———— functions [END] ————

	/* Array End */



/*
jQuery(document).ready(function(){
	jQuery('#raq_next').click(function(e){
	   	e.preventDefault();
	   	
	   	jQuery.ajax({
	   	  headers: {
          	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
          },
	      url: "{{ url('/selectshed') }}",
	      method: 'post',
	      data: {
	         shed_id: jQuery('input[name="sheds"]').val()
	      },
	      success: function(result){
	         console.log(result);
	      }
	  	});
   	});
});*/
</script>

@endsection