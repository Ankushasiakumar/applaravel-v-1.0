@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>How to prepare a base?</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li>How to prepare a base?</li>
		</ul>
	</div>
</section>

<section class="builder-sec prepare_base">
	<div class="container">
		<div class="row">
			<div class="page-content entry-content">

				@foreach($all_records as $all_record)
				@php 
					if ($all_record->prepare_content != ''){
						$prepare_content = $all_record->prepare_content; 
					}else{
						$prepare_content = '';
					}

					if ($all_record->prepare_base_image != ''){
						$prepare_base_image = $all_record->prepare_base_image; 
					}else{
						$prepare_base_image = '';
					}

					if ($all_record->prepare_base_image2 != ''){
						$prepare_base_image2 = $all_record->prepare_base_image2; 
					}else{
						$prepare_base_image2 = '';
					}

              	@endphp
              	@endforeach

				{!! $prepare_content !!}

				<div class="col-md-4">
					<img src="{{$prepare_base_image}}" alt="" width="400" height="533"> 
					
				</div>
				<div class="col-md-8">
					<img src="{{$prepare_base_image2}}" alt="" width="708" height="531">
				</div>
			</div>
		</div>
	</div>
</section>

@endsection