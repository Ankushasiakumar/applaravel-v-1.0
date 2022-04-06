@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Garden Room Builder</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li><a href="#" > Shop </a></li>
			<li>/</li>
			<li>Garden Room Builder</li>
		</ul>
	</div>
</section>


@foreach($all_records as $Buildshed)
	@php
		if($Buildshed->gardenroom_content != ''){
			$gardenroom_content = $Buildshed->gardenroom_content;
		}else{
			$gardenroom_content = '';
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

		if($Buildshed->product_featured_tab_1_section_1_video != ''){
			$product_featured_tab_1_section_1_video = $Buildshed->product_featured_tab_1_section_1_video;
		}else{
			$product_featured_tab_1_section_1_video = '';
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
		<h3>Garden Room Builder</h3>
		<p>{!! $gardenroom_content !!}</p>
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
								<span class="form-steps__item-text">Windows</span>
							</div>
						</div>

						<div class="form-steps__item step-4">
							<div class="form-steps__item-content">
								<span class="form-steps__item-icon">Step 4</span>
								<span class="form-steps__item-text">Door</span>
							</div>
						</div>


					</nav>

					<div class="steps-inner">
						<form action="#" method="post" id="raq_questions">
							<div class="question-container active_panel" id="question-1">
								<div class="row">
									<div class="col-md-6 col-md-6">
										<div class="form-group longest_side_group">
											<label>Longest Side</label>
											<select name="longest_side">
												<option value="10">10 ft</option>
												<option value="11">11 ft</option>
												<option value="12">12 ft</option>
												<option value="13">13 ft</option>
												<option value="14">14 ft</option>
												<option value="15">15 ft</option>
												<option value="16">16 ft</option>
												<option value="17">17 ft</option>
												<option value="18">18 ft</option>
												<option value="19">19 ft</option>
												<option value="20">20 ft</option>
												<option value="21">21 ft</option>
												<option value="22">22 ft</option>
												<option value="23">23 ft</option>
												<option value="24">24 ft</option>
												<option value="25">25 ft</option>
												<option value="26">26 ft</option>
												<option value="27">27 ft</option>
												<option value="28">28 ft</option>
												<option value="29">29 ft</option>
												<option value="30">30 ft</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-md-6">
										<div class="form-group shortest_side_group">
											<label>Shortest Side</label>
											<select name="shortest_side">
												<option value="10">10 ft</option>
												<!-- <option value="11">11 ft</option>
												<option value="12">12 ft</option>
												<option value="13">13 ft</option>
												<option value="14">14 ft</option> -->
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="question-container" id="question-2">
								<ul class="listing-detail">

									@if(!$layouts->isEmpty())
										@foreach($layouts as $layout)
										<li>
											 <div class="custom-radio-btn">
											 	<label for="{{ $layout->id }}">
													<span>{{ $layout->layout_name }}</span>
													<figure><img src="{{ $layout->layout_image }}"></figure>
													<input type="radio" id="{{ $layout->id }}" value="{{ $layout->id }}" name="layouts" img-src="{{ $layout->layout_image }}">
													<label>select</label>
												</label>
											  </div>
										</li>
										@endforeach
									@endif
									
								</ul>
							</div>
							<div class="question-container" id="question-3">
								<div class="frame-work-clading">
									<div class="inner-coft">
									    <h6>Window Modal <i class="fa fa-chevron-down"></i></h6>
										<ul> 
											@if(!$windowModels->isEmpty())
												@foreach($windowModels as $windowModel)
												<li>
													<div class="custom-radio-btn">
														<label for="wmodel{{ $windowModel->id }}">
															<figure><img src="{{ $windowModel->model_image }}"></figure>
															<p>{{ $windowModel->model_name }}</p>
															<p>{{ $windowModel->model_desc }}</p>
															<input type="radio" id="wmodel{{ $windowModel->id }}" value="{{ $windowModel->id }}" name="window_model" checked>
															<label>select</label>
														</label>
													 </div>
												</li>
												@endforeach
											@endif
										</ul>
									</div>
							
									<div class="inner-coft">
										<h6>Window Color <i class="fa fa-chevron-down"></i></h6>
										<ul> 
											@if(!$windowColors->isEmpty())
												@foreach($windowColors as $windowColor)
												<li>
													<div class="custom-radio-btn">
														<label for="wcolor{{ $windowColor->id }}">
											        	<span style="background-color: {{ $windowColor->color_val }}; border:1px solid; width:30px; height:30px;  border-radius:50%; display:inline-block;"></span>
													 	<p>{{ $windowColor->color_name }}</p>
														<input type="radio" id="wcolor{{ $windowColor->id }}" value="{{ $windowColor->id }}" name="window_color" color_name="{{ $windowColor->color_name }}">
														<label>select</label>
													</label>
													</div>
												</li>
												@endforeach
											@endif
										</ul>
									</div>

									<div class="inner-coft">
										<h6>Window Quantity <i class="fa fa-chevron-down"></i></h6>
									  	<ul class="window-quantity-select">
										 	<li>
												<div class="custom-radio-btn">
													<input type="radio" id="wquantity1" value="1" name="wquantity">
													<label for="wquantity1">1</label>
												</div>
											</li>
											<li>
												<div class="custom-radio-btn">
													<input type="radio" id="wquantity2" value="2" name="wquantity">
													<label for="wquantity2">2</label>
												</div>
											</li>
											<!--<li>
												<div class="custom-radio-btn">
													<input type="radio" id="wquantity3" value="3" name="wquantity">
													<label for="wquantity3">3</label>
												</div>
											</li>
											<li>
												<div class="custom-radio-btn">
													<input type="radio" id="wquantity4" value="4" name="wquantity">
													<label for="wquantity4">4</label>
												</div>
											</li>
											<li>
												<div class="custom-radio-btn">
													<input type="radio" id="wquantity5" value="5" name="wquantity">
													<label for="wquantity5">5</label>
												</div>
											</li>-->
										</ul>
									</div>
									
									<div class="inner-coft">
										<h6>Window Position <i class="fa fa-chevron-down"></i></h6>
										<ul>
											@if(!$windowPositions->isEmpty())
												@foreach($windowPositions as $windowPosition)
												<li class="{{ $windowPosition->position_name }}">
													<div class="custom-radio-btn">
														<label for="wposition{{ $windowPosition->id }}">
															<figure><img src="{{ $windowPosition->position_image }}"></figure>
															<p>{{ $windowPosition->position_name }}</p>
															<input type="radio" id="wposition{{ $windowPosition->id }}" value="{{ $windowPosition->id }}" name="window_position" window_position_name="{{ $windowPosition->position_name }}">
															<label>select</label>
														</label>
													</div>
												</li>
												@endforeach
											@endif
											<li class="describe_win_pos">
												<textarea placeholder="Or please describe here" name="window_position" style="border: 1px solid #ccc;"></textarea>
											</li>
										</ul>
									</div>

								</div>
							</div>
							<div class="question-container" id="question-4">
								<div class="frame-work-clading">
									<div class="inner-coft">
									    <h6>Door <i class="fa fa-chevron-down"></i></h6>
										<ul> 
											@if(!$doorModels->isEmpty())
												@foreach($doorModels as $doorModel)
												<li>
													<div class="custom-radio-btn">
														<label for="dmodel{{ $doorModel->id }}">
															<figure><img src="{{ $doorModel->model_image }}"></figure>
															<p>{{ $doorModel->model_name }}</p>
															<p>{{ $doorModel->model_desc }}</p>
															<input type="radio" id="dmodel{{ $doorModel->id }}" value="{{ $doorModel->id }}" name="door_model">
															<label>select</label>
														</label>
													 </div>
												</li>
												@endforeach
											@endif
										</ul>
									</div>
							
									<div class="inner-coft">
										<h6>Door Color <i class="fa fa-chevron-down"></i></h6>
										<ul> 
											@if(!$doorColors->isEmpty())
												@foreach($doorColors as $doorColor)
												<li>
													<div class="custom-radio-btn">
														<label for="dcolor{{ $doorColor->id }}">
												        	<span style="background-color: {{ $doorColor->color_val }}; border:1px solid; width:30px; height:30px;  border-radius:50%; display:inline-block;"></span>
														 	<p>{{ $doorColor->color_name }}</p>
															<input type="radio" id="dcolor{{ $doorColor->id }}" name="door_color" value="{{ $doorColor->id }}" door_color="{{ $doorColor->color_name }}">
															<label>select</label>
														</label>
													</div>
												</li>
												@endforeach
											@endif
										</ul>
									</div>
									
									<div class="inner-coft">
										<h6>Door Position <i class="fa fa-chevron-down"></i></h6>
										<ul>
											@if(!$doorPositions->isEmpty())
												@foreach($doorPositions as $doorPosition)
												<li class="door{{ $doorPosition->position_name }}">
													<div class="custom-radio-btn">
														<label for="dposition{{ $doorPosition->id }}">
															<figure><img src="{{ $doorPosition->position_image }}"></figure>
															<input type="radio" id="dposition{{ $doorPosition->id }}" name="door_position" value="{{ $doorPosition->id }}">
															<label>{{ $doorPosition->position_name }}</label>
														</label>
													</div>
												</li>
												@endforeach
											@endif
											<li  class="doorPositionDescribe">
												<textarea placeholder="Or please describe here" name="door_position" style="    border: 1px solid #ccc;"></textarea>
											</li>
										</ul>
									</div>

									<div class="inner-coft">
										<h6>Door Quantity <i class="fa fa-chevron-down"></i></h6>
									  	<ul class="window-quantity-select">
										 	<li>
												<div class="custom-radio-btn">
													<input type="radio" id="dquantity1" value="1" name="dquantity">
													<label for="dquantity1">1</label>
												</div>
											</li>
											<!--<li>
												<div class="custom-radio-btn">
													<input type="radio" id="dquantity2" value="2" name="dquantity">
													<label for="dquantity2">2</label>
												</div>
											</li>
											<li>
												<div class="custom-radio-btn">
													<input type="radio" id="dquantity3" value="3" name="dquantity">
													<label for="dquantity3">3</label>
												</div>
											</li>
											<li>
												<div class="custom-radio-btn">
													<input type="radio" id="dquantity4" value="4" name="dquantity">
													<label for="dquantity4">4</label>
												</div>
											</li>
											<li>
												<div class="custom-radio-btn">
													<input type="radio" id="dquantity5" value="5" name="dquantity">
													<label for="dquantity5">5</label>
												</div>
											</li>-->
										</ul>
									</div>
								</div>
							</div>
								

						</form>

						<div class="button-bar">
							<button  id="raq_back1" class="raq_back1"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</button>
							<button id="raq_next1" class="raq_next1">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button>
						</div>

					</div>
				</div>	
				  
				</div>
			
			<div class="col-md-4 col-sm-4 col-lg-4">
				<div class="right-side">
					<h3>LIVE PROGRESS</h3>
					<figure>
						<img src="{{ URL::asset('/public/front/img/live-progress.png') }}">
					</figure>
					<div class="img-sec">
						Image shows a basic representation of your shed e.g. layout, door & window type etc, some extras and options may not show.
					</div>
					<form action="{{ route('checkout_post') }}" method="post" enctype="multipart/form-data">
						@csrf
						<ul class="shed_attributes">

							<li class="price_calc" price="0">Price: <span></span></li>
							<input type="hidden" name="total_price" value="">
						</ul>
						<button class="save-shed" type="submit">Save This Room <i class="fa fa-angle-right" aria-hidden="true"></i></button>
						<div class="payment-icon"><img src="{{ URL::asset('/front/img/payment1.png') }}"></div>
					</form>
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
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Product Features</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
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
				<div class="nack-sec">
						<div class="col-md-6 col-sm-6">
							<div class="zick-zack">
								@if($product_featured_tab_1_section_3_icon != '')
									<div class="small-img">
										<img src="{{ $product_featured_tab_1_section_3_icon }}">
									</div>
								@endif
								<figcaption>
									<h4>{{ $product_featured_tab_1_section_3_title }}</h4>
									<p>{!! $product_featured_tab_1_section_3_content !!}</p>
								</figcaption>
							</div>
						</div>
						
						<div class="col-md-6 col-sm-6 padding-zero">
							@if($product_featured_tab_1_section_3_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_3_image }}"></figure>
							@endif
						</div>
					</div>
				</div>
				
				<div class="row ">
					<div class="nack-sec">
						<div class="col-md-6 col-sm-6 padding-zero">
							@if($product_featured_tab_1_section_4_image != '')
								<figure><img src="{{ $product_featured_tab_1_section_4_image }}"></figure>
							@endif
						</div>
						<div class="col-md-6 col-sm-6">
								<div class="zick-zack">
									@if($product_featured_tab_1_section_4_icon != '')
										<div class="small-img"><img src="{{ $product_featured_tab_1_section_4_icon }}"></div>
									@endif
									<figcaption>
										<h4>{{ $product_featured_tab_1_section_4_title }}</h4>
										<p>{!! $product_featured_tab_1_section_4_content !!}</p>
									</figcaption>
								</div>
						</div>
						</div>
				</div>
				<div class="row ">
					{!! $product_featured_tab_1_section_1_video !!}
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="profile">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="tab-info" style="height: 340px;">
							@if($product_featured_tab_2_section_1_image != '')
								<!-- <figure><img src="{{ $product_featured_tab_2_section_1_image }}"></figure> -->
							@endif
							<figcaption>
								<!-- <h4>{{ $product_featured_tab_2_section_1_title }}</h4> -->
								<!-- <p>{!! $product_featured_tab_2_section_1_content !!}</p> -->
								<iframe width="478" height="250" src="https://www.youtube.com/embed/_g1UUxzw6Uw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</figcaption>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="tab-info" style="height: 340px;">
							@if($product_featured_tab_2_section_2_image != '')
								<!-- <figure><img src="{{ $product_featured_tab_2_section_2_image }}"></figure> -->
							@endif
							<figcaption>
								<!-- <h4>{{ $product_featured_tab_2_section_2_title }}</h4> -->
								<!-- <p>{!! $product_featured_tab_2_section_2_content !!}</p> -->
								<iframe width="478" height="250" src="https://www.youtube.com/embed/X_bYd2Pe7fY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</figcaption>
						</div>
					</div>
				</div>

				<div class="row" style="display: none;">
					<div class="col-md-12 col-sm-12">
						<div class="tab-info">
							
						</div>
					</div>

					<div class="col-md-12 col-sm-12">
						<div class="tab-info">
							
						</div>
					</div>
				</div>

			</div>
			
		  </div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

jQuery('button#raq_next1').on('click', function(e) {
	if (jQuery('div#question-3').is(':visible')) {
		var getWindowColor = jQuery('input[name="window_color"]:checked').attr('color_name');
		jQuery('input[door_color="'+getWindowColor+'"]').click();
		jQuery('input[name="door_color"]').attr('disabled', 'disabled');
	}
});


jQuery('select[name="longest_side"]').on('change', function(e) {
	// console.log(jQuery(this).val());
	var current_val = jQuery(this).val();
	if (current_val == 10) {
		jQuery('select[name="shortest_side"]').html('<option value="10">10 ft</option>');		
	}else if (current_val == 11) {
		jQuery('select[name="shortest_side"]').html('<option value="10">10 ft</option><option value="11">11 ft</option>');		
	}else if (current_val == 12) {
		jQuery('select[name="shortest_side"]').html('<option value="10">10 ft</option><option value="11">11 ft</option><option value="12">12 ft</option>');
	}else if (current_val == 13) {
		jQuery('select[name="shortest_side"]').html('<option value="10">10 ft</option><option value="11">11 ft</option><option value="12">12 ft</option><option value="13">13 ft</option>');
	}else if (current_val == 14) {
		jQuery('select[name="shortest_side"]').html('<option value="10">10 ft</option><option value="11">11 ft</option><option value="12">12 ft</option><option value="13">13 ft</option><option value="14">14 ft</option>');
	}else{
		jQuery('select[name="shortest_side"]').html('<option value="10">10 ft</option><option value="11">11 ft</option><option value="12">12 ft</option><option value="13">13 ft</option><option value="14">14 ft</option>');
	}
});

jQuery('input[name="window_model"]').on('change', function(e) {
   	jQuery.ajax({
   	  headers: {
      	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ url('/selectwindowmodels') }}",
      method: 'post',
      data: {
         window_model_id: jQuery(this).val()
      },
      success: function(result){
      	process_item('window_model',"");
      	jQuery('ul.shed_attributes li.window_model').remove();

    	process_item('window_model',result);
    	var obj = jQuery.parseJSON(result);
	    jQuery('ul.shed_attributes').prepend('<li class="window_model">Window Model: <span>'+obj[1]+' (£'+obj[2]+')'+'</span><input type="hidden" name="window_model" value="'+obj[1]+' (£'+obj[2]+')'+'"></li>');
      }
  	});
});

jQuery('input[name="window_color"]').on('change', function(e) {
   	jQuery.ajax({
   	  headers: {
      	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ url('/selectwindowcolors') }}",
      method: 'post',
      data: {
         window_color_id: jQuery(this).val()
      },
      success: function(result){
      	process_item('window_color',"");
      	jQuery('ul.shed_attributes li.window_color').remove();

    	process_item('window_color',result);
    	var obj = jQuery.parseJSON(result);
	    jQuery('ul.shed_attributes').prepend('<li class="window_color">Window Color: <span>'+obj[1]+' (£'+obj[2]+')'+'</span><input type="hidden" name="window_color" value="'+obj[1]+' (£'+obj[2]+')'+'"></li>');
      }
  	});
});

jQuery('input[name="window_position"]').on('change', function(e) {
	jQuery.ajax({
   	  headers: {
      	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ url('/selectwindowpositions') }}",
      method: 'post',
      data: {
         window_position_id: jQuery(this).val()
      },
      success: function(result){
      	process_item('window_position',"");
      	jQuery('ul.shed_attributes li.window_position').remove();

    	process_item('window_position',result);
    	var obj = jQuery.parseJSON(result);
	    jQuery('ul.shed_attributes').prepend('<li class="window_position">Window Position: <span>'+obj[1]+' (£'+obj[2]+')'+'</span><input type="hidden" name="window_position" value="'+obj[1]+' (£'+obj[2]+')'+'"></li>');
      }
  	});
});



jQuery('input[name="wquantity"]').on('change', function(e) {
   	if (jQuery(this).val() == 1) {
   		jQuery('li.Left').show();
   		jQuery('li.Right').show();
   		jQuery('li.Center').hide();
   		jQuery('li.describe_win_pos').hide();
   		jQuery('li.door2.Window.Left').hide();
   		jQuery('li.door2.Window.Right').hide();

   		jQuery('li.doorLeft').show();
   		jQuery('li.doorRight').show();
   		jQuery('li.doorCenter').hide();
   		jQuery('li.2.Window.Right').hide();
   		jQuery('li.2.Window.Left').hide();
   		jQuery('li.doorPositionDescribe').hide();
   	}else if(jQuery(this).val() == 2){
   		jQuery('li.Left').hide();
   		jQuery('li.Right').hide();
   		jQuery('li.Center').css('display', 'inline-block');
   		jQuery('li.describe_win_pos').css('display', 'inline-block');
   		jQuery('li.door2.Window.Left').css('display', 'inline-block');
   		jQuery('li.door2.Window.Right').css('display', 'inline-block');


   		jQuery('li.doorLeft').hide();
   		jQuery('li.doorRight').hide();
   		jQuery('li.2.Window.Right').css('display', 'inline-block');
   		jQuery('li.2.Window.Left').css('display', 'inline-block');
   		jQuery('li.doorCenter').css('display', 'inline-block');
   		jQuery('li.doorPositionDescribe').css('display', 'inline-block');
   	}
});



/* Door AJAX */


jQuery('input[name="door_model"]').on('change', function(e) {
   	jQuery.ajax({
   	  headers: {
      	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ url('/selectdoormodels') }}",
      method: 'post',
      data: {
         door_model_id: jQuery(this).val()
      },
      success: function(result){
      	process_item('door_model',"");
      	jQuery('ul.shed_attributes li.door_model').remove();

    	process_item('door_model',result);
    	var obj = jQuery.parseJSON(result);
	    jQuery('ul.shed_attributes').prepend('<li class="door_model">Door Model: <span>'+obj[1]+' (£'+obj[2]+')'+'</span><input type="hidden" name="door_model" value="'+obj[1]+' (£'+obj[2]+')'+'"></li>');
      }
  	});
});


jQuery('input[name="door_color"]').on('change', function(e) {
   	jQuery.ajax({
   	  headers: {
      	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ url('/selectdoorcolors') }}",
      method: 'post',
      data: {
         door_color_id: jQuery(this).val()
      },
      success: function(result){
      	process_item('door_color',"");
      	jQuery('ul.shed_attributes li.door_color').remove();

    	process_item('door_color',result);
    	var obj = jQuery.parseJSON(result);
	    jQuery('ul.shed_attributes').prepend('<li class="door_color">Door Color: <span>'+obj[1]+' (£'+obj[2]+')'+'</span><input type="hidden" name="door_color" value="'+obj[1]+' (£'+obj[2]+')'+'"></li>');
      }
  	});
});

jQuery('input[name="door_position"]').on('change', function(e) {
   	jQuery.ajax({
   	  headers: {
      	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ url('/selectdoorpositions') }}",
      method: 'post',
      data: {
         door_position_id: jQuery(this).val()
      },
      success: function(result){
      	process_item('door_position',"");
      	jQuery('ul.shed_attributes li.door_position').remove();

    	process_item('door_position',result);
    	var obj = jQuery.parseJSON(result);
	    jQuery('ul.shed_attributes').prepend('<li class="door_position">Door Position: <span>'+obj[1]+' (£'+obj[2]+')'+'</span><input type="hidden" name="door_position" value="'+obj[1]+' (£'+obj[2]+')'+'"></li>');
      }
  	});
});



// ———— functions [START] ————

var items = [];

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

    var selectedLayout = jQuery('input[name="layouts"]:checked').val();

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

		if (item_id == 'layouts') {
			var obj = jQuery.parseJSON(item_value);
        	totalPrice.push(parseInt(obj[2]));
        }

        if (item_id == 'window_model') {
			var obj = jQuery.parseJSON(item_value);
        	totalPrice.push(parseInt(obj[2]));
        }

        if (item_id == 'window_color') {
			var obj = jQuery.parseJSON(item_value);
        	totalPrice.push(parseInt(obj[2]));

        	var windowPosition = '';
        	if(jQuery('input[name="window_position"]:checked').attr('window_position_name') !== undefined){
			    windowPosition = jQuery('input[name="window_position"]:checked').attr('window_position_name');
			}else{
			    windowPosition = 'Left';
			}

			var checkFileExist = checkFileExistCustom('http://petenew.bestwebdevs.com/public/images/garden-preview-images/l'+selectedLayout+'-win-'+windowPosition+'-'+obj[1]+'.jpg');

			if (checkFileExist != false) {
        		jQuery('.right-side figure img').attr('src','http://petenew.bestwebdevs.com/public/images/garden-preview-images/l'+selectedLayout+'-win-'+windowPosition+'-'+obj[1]+'.jpg');
			}

        }

        if (item_id.includes("window_position")) {
        	var obj = jQuery.parseJSON(item_value);
        	totalPrice.push(parseInt(obj[2]));

        	var selectedColor = jQuery('input[name="window_color"]:checked').attr('color_name');

        	var checkFileExist = checkFileExistCustom('http://petenew.bestwebdevs.com/public/images/garden-preview-images/l'+selectedLayout+'-win-'+obj[1]+'-'+selectedColor+'.jpg');

        	if (checkFileExist != false) {
        		jQuery('.right-side figure img').attr('src','http://petenew.bestwebdevs.com/public/images/garden-preview-images/l'+selectedLayout+'-win-'+obj[1]+'-'+selectedColor+'.jpg');
        	}
        }

        /* Door */

        if (item_id == 'door_model') {
			var obj = jQuery.parseJSON(item_value);
        	totalPrice.push(parseInt(obj[2]));
        }

        if (item_id == 'door_color') {
			var obj = jQuery.parseJSON(item_value);
        	totalPrice.push(parseInt(obj[2]));

        	/* Window Position */
        	var windowPosition = '';
        	if(jQuery('input[name="window_position"]:checked').attr('window_position_name') !== undefined){
			    windowPosition = jQuery('input[name="window_position"]:checked').attr('window_position_name');
			}else{
			    windowPosition = 'Left';
			}
			/* Window Position End*/


			/* Window Color */
        	var windowColor = '';
        	if(jQuery('input[name="window_color"]:checked').attr('color_name') !== undefined){
			    windowColor = jQuery('input[name="window_color"]:checked').attr('color_name');
			}else{
			    windowColor = 'White';
			}
			/* Window Color End*/

        	var checkFileExist = checkFileExistCustom('http://petenew.bestwebdevs.com/public/images/garden-preview-images/l'+selectedLayout+'-door-Left-win-'+windowPosition+'-'+obj[1]+'.jpg');
 
			if (checkFileExist != false) {
        	jQuery('.right-side figure img').attr('src','http://petenew.bestwebdevs.com/public/images/garden-preview-images/l'+selectedLayout+'-door-Left-win-'+windowPosition+'-'+obj[1]+'.jpg');
        	}
        }

        if (item_id.includes("door_position")) {
        	var obj = jQuery.parseJSON(item_value);
        	totalPrice.push(parseInt(obj[2]));

        	/* Window Position */
        	var windowPosition = '';
        	if(jQuery('input[name="window_position"]:checked').attr('window_position_name') !== undefined){
			    windowPosition = jQuery('input[name="window_position"]:checked').attr('window_position_name');
			}else{
			    windowPosition = 'Left';
			}
			/* Window Position End*/


			/* Window Color */
        	var doorColor = '';
        	if(jQuery('input[name="door_color"]:checked').attr('door_color') !== undefined){
			    doorColor = jQuery('input[name="door_color"]:checked').attr('door_color');
			}else{
			    doorColor = 'White';
			}
			/* Window Color End*/

			var checkFileExist = checkFileExistCustom('http://petenew.bestwebdevs.com/public/images/garden-preview-images/l'+selectedLayout+'-door-'+obj[1]+'-win-'+windowPosition+'-'+doorColor+'.jpg');

			if (checkFileExist != false) {
        		jQuery('.right-side figure img').attr('src','http://petenew.bestwebdevs.com/public/images/garden-preview-images/l'+selectedLayout+'-door-'+obj[1]+'-win-'+windowPosition+'-'+doorColor+'.jpg');
        	}else{
        		return false;
        	}
        }

        console.log("item_id: " + item_id + " >>> item_value: " + item_value + "<br />");
    }

    jQuery('ul.shed_attributes li.price_calc span').text('£ '+totalPrice.reduce((a, b) => a + b, 0));
    jQuery('ul.shed_attributes input[name="total_price"]').val(totalPrice.reduce((a, b) => a + b, 0));
}

function checkFileExistCustom(urlToFile) {
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', urlToFile, false);
    xhr.send();
     
    if (xhr.status == "404") {
        return false;
    } else {
        return true;
    }
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




jQuery('input[name="layouts"]').on('change', function(e) {
    // e.preventDefault();
	
    var getLayoutSrc = jQuery(this).attr('img-src');
    jQuery('.right-side figure img').attr('src',getLayoutSrc);

   	jQuery.ajax({
   	  headers: {
      	'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ url('/selectlayouts') }}",
      method: 'post',
      data: {
         layout_id: jQuery(this).val()
      },
      success: function(result){
      	process_item('layouts',"");
      	jQuery('ul.shed_attributes li.layout').remove();
      	// jQuery('div.selected_items div.layout').remove();

    	process_item('layouts',result);
    	var obj = jQuery.parseJSON(result);
	    jQuery('ul.shed_attributes').prepend('<li class="layout">Layout: <span>'+obj[1]+' (£'+obj[2]+')'+'</span><input type="hidden" name="layout" value="'+obj[1]+' (£'+obj[2]+')'+'"></li>');
	    // jQuery('div.selected_items').prepend('<div class="thum-sec layout"><figcaption><h4>Layout</h4><p>'+obj[1]+' (€'+obj[2]+')'+'</p></figcaption></div>');
      }
  	});
});




$('.window-quantity-select li').click( function(){
    if ( $(this).hasClass('current') ) {
        $(this).removeClass('current');
    } else {
        $('.window-quantity-select li.current').removeClass('current');
        $(this).addClass('current');    
    }
});
</script>

@endsection