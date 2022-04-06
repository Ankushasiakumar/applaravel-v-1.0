@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Capillary Action</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li>Capillary Action</li>
		</ul>
	</div>
</section>

<section class="builder-sec prepare_base">
	<div class="container">
		<div class="row">

			@foreach($all_records as $all_record)
				@php 
					if ($all_record->top_content != ''){
						$top_content = $all_record->top_content; 
					}else{
						$top_content = '';
					}

					if ($all_record->section_1_image != ''){
						$section_1_image = $all_record->section_1_image; 
					}else{
						$section_1_image = '';
					}

					if ($all_record->section_2_image != ''){
						$section_2_image = $all_record->section_2_image; 
					}else{
						$section_2_image = '';
					}

					if ($all_record->section_3_image != ''){
						$section_3_image = $all_record->section_3_image; 
					}else{
						$section_3_image = '';
					}

					if ($all_record->section_1_content != ''){
						$section_1_content = $all_record->section_1_content; 
					}else{
						$section_1_content = '';
					}

					if ($all_record->section1 != ''){
						$section1 = $all_record->section1; 
					}else{
						$section1 = '';
					}

					if ($all_record->section_2_content != ''){
						$section_2_content = $all_record->section_2_content; 
					}else{
						$section_2_content = '';
					}

					if ($all_record->section2 != ''){
						$section2 = $all_record->section2; 
					}else{
						$section2 = '';
					}

					if ($all_record->section_3_content != ''){
						$section_3_content = $all_record->section_3_content; 
					}else{
						$section_3_content = '';
					}

					if ($all_record->section3 != ''){
						$section3 = $all_record->section3; 
					}else{
						$section3 = '';
					}

				@endphp
			  @endforeach

			<div class="page-content entry-content">

				{!! $top_content !!}

				<div class="row">
					<div class="col-md-6">
						<img src="{{$section_1_image}}" style="width: 100%;">
					</div>
					<div class="col-md-6">
						{!!$section_1_content!!}
					</div>
				</div>

				{!!$section1!!}

				<div class="row">
					<div class="col-md-6">
						{!!$section_2_content!!}
					</div>
					<div class="col-md-6">
						<img src="{{$section_2_image}}" style="width: 100%;">
					</div>
				</div>

				{!!$section2!!}


				<div class="row">
					<div class="col-md-6">
						<img src="{{$section_3_image}}" style="width: 100%;">
					</div>
					<div class="col-md-6">
						{!!$section_3_content!!}
					</div>
				</div>

				{!!$section3!!}
			</div>
		</div>
	</div>
</section>
@endsection