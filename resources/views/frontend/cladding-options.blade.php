@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Cladding Options</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li>Cladding Options</li>
		</ul>
	</div>
</section>

<section class="builder-sec cladding_options">
	<div class="container">
		<div class="row">

			@foreach($all_records as $all_record)
				@php 
					if ($all_record->cladding_options_content != ''){
						$cladding_options_content = $all_record->cladding_options_content; 
					}else{
						$cladding_options_content = '';
					}

					if ($all_record->dip_treated_image != ''){
						$dip_treated_image = $all_record->dip_treated_image; 
					}else{
						$dip_treated_image = '';
					}

					if ($all_record->tanalized_image != ''){
						$tanalized_image = $all_record->tanalized_image; 
					}else{
						$tanalized_image = '';
					}

					if ($all_record->beast_image != ''){
						$beast_image = $all_record->beast_image; 
					}else{
						$beast_image = '';
					}

					if ($all_record->dip_treated_content != ''){
						$dip_treated_content = $all_record->dip_treated_content; 
					}else{
						$dip_treated_content = '';
					}

					if ($all_record->dip_treated_list != ''){
						$dip_treated_list = $all_record->dip_treated_list; 
					}else{
						$dip_treated_list = '';
					}

					if ($all_record->tanalized_content != ''){
						$tanalized_content = $all_record->tanalized_content; 
					}else{
						$tanalized_content = '';
					}

					if ($all_record->tanalized_list != ''){
						$tanalized_list = $all_record->tanalized_list; 
					}else{
						$tanalized_list = '';
					}

					if ($all_record->beast_content != ''){
						$beast_content = $all_record->beast_content; 
					}else{
						$beast_content = '';
					}

					if ($all_record->beast_list != ''){
						$beast_list = $all_record->beast_list; 
					}else{
						$beast_list = '';
					}

				@endphp
			  @endforeach

			<div class="page-content entry-content">
				{!! $cladding_options_content !!}
				
				{!! $dip_treated_content !!}
				
				<img src="{{$dip_treated_image}}" alt="Standard Framework" width="360" height="270" ><br>

				{!! $dip_treated_list !!}
				<hr>

				{!! $tanalized_content !!}
				<img src="{{$tanalized_image}}" alt="" width="175" height="282">

				{!! $tanalized_list !!}

				<hr>
				{!! $beast_content !!}
				<img src="{{$beast_image}}">

				{!! $beast_list !!}
				<hr>
			</div>
		</div>
	</div>
</section>
@endsection