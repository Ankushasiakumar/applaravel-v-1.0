@extends ('frontend.layout.app')
@section('content')
	
	@foreach($settings as $setting)
        @php
            if($setting->facebook != ''){
                $facebook = $setting->facebook;
            }else{
                $facebook = '';
            }

            if($setting->google != ''){
                $google = $setting->google;
            }else{
                $google = '';
            }

            if($setting->twitter != ''){
                $twitter = $setting->twitter;
            }else{
                $twitter = '';
            }

            if($setting->google_map != ''){
                $google_map = $setting->google_map;
            }else{
                $google_map = '';
            }

        @endphp
    @endforeach


	@foreach($contacts as $contact)
		@php
			if($contact->contact_description != ''){
				$contact_description = $contact->contact_description;
			}else{
				$contact_description = '';
			}

			if($contact->contact_address != ''){
				$contact_address = $contact->contact_address;
			}else{
				$contact_address = '';
			}

			if($contact->contact_phone != ''){
				$contact_phone = $contact->contact_phone;
			}else{
				$contact_phone = '';
			}

			if($contact->contact_email != ''){
				$contact_email = $contact->contact_email;
			}else{
				$contact_email = '';
			}

			if($contact->contact_timing != ''){
				$contact_timing = $contact->contact_timing;
			}else{
				$contact_timing = '';
			}

			if($contact->get_in_touch_description != ''){
				$get_in_touch_description = $contact->get_in_touch_description;
			}else{
				$get_in_touch_description = '';
			}
		@endphp
	@endforeach

<section class="contact-page">
	<div class="container">
		<div class="col-md-6 col-sm-6">
			<h3>Contact <span>Us</span></h3>
			<p>{!! $contact_description !!}</p>
			<ul class="detail-contact">
				@if($contact_address != '')
				<li>
					<span>
						<img src="{{ URL::asset('front/img/location-iocn.png') }}">
					</span>
					<h6>{{ $contact_address }}</h6>
				</li>
				@endif

				@if($contact_phone != '')
				<li>
					<a href="telto:0800 170 1401">
						<span>
							<img src="{{ URL::asset('front/img/call.png') }}">
						</span>
						<h6>{{ $contact_phone }}</h6>
					</a>	
				</li>
				@endif

				@if($contact_email != '')
				<li>
					<a href="mailto:info@shedsfreefitting">
						<span>
							<img src="{{ URL::asset('front/img/enve.png') }}">
						</span>
						<h6>{{ $contact_email }}</h6>
					</a>	
				</li>
				@endif

				@if($contact_timing != '')
					<li>
						<span>
							<img src="{{ URL::asset('front/img/watch.png') }}">
						</span>
						<h6>{{ $contact_timing }}</h6>
					</li>
				@endif
			</ul>
			<div class="folllow-us">
				<h6>Follow us on</h6>
				<ul>
					@if($twitter != '')
						<li><a href="{{ $twitter }}" target="_blank"><i class="fa fa-twitter"></i> </a></li>
					@endif

					@if($google != '')
						<li><a href="{{ $google }}" target="_blank"><i class="fa fa-google"></i> </a></li>
					@endif

					@if($facebook != '')
						<li><a href="{{ $facebook }}" target="_blank"> <i class="fa fa-facebook"></i></a></li>
					@endif
				</ul>
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="right-side-contact">
				<h3>Let’s get in touch</h3>
				<p>{!! $get_in_touch_description !!}</p>

				@if($errors->any())
		            <div class="alert alert-danger" role="alert" style="float: left;width: 100%;line-height: 25px;">
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">×</span>
		                </button>

		                @foreach($errors->all() as $error)
		                    {{ $error }}<br/>
		                @endforeach
		            </div>
		        @endif

				<form action="{{ route('contact_post') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<input type="text" placeholder="First Name" name="first_name">
						</div>
						<div class="col-md-6 col-sm-6">
							<input type="text" placeholder="Last Name" name="last_name">
						</div>
			
						<div class="col-md-6 col-sm-6">
							<input type="text" placeholder="Phone Number" name="phone_number">
						</div>
						<div class="col-md-6 col-sm-6">
							<input type="text" placeholder="Email Address" name="email_address">
						</div>
						<div class="col-xs-12">
							<textarea placeholder="Message" name="message"></textarea>
							<button class="submit" type="submit">Submit</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<div class="map">
	<div style="width: 100%">
		@if($google_map != '')
			{!! $google_map !!}
		@endif
	</div>
</div>

@endsection