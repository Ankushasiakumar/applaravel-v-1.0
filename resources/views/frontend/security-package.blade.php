@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Security Package</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li>Security Package</li>
		</ul>
	</div>
</section>

<section class="builder-sec security_package">
	<div class="container">
		<div class="row">


			@foreach($all_records as $all_record)
				@php
					if ($all_record->content1 != ''){
							$content1 = $all_record->content1; 
						}else{
							$content1 = '';
						}

						if ($all_record->image1 != ''){
							$image1 = $all_record->image1; 
						}else{
							$image1 = '';
						}

						if ($all_record->content2 != ''){
							$content2 = $all_record->content2; 
						}else{
							$content2 = '';
						}

						if ($all_record->image2 != ''){
							$image2 = $all_record->image2; 
						}else{
							$image2 = '';
						}

						if ($all_record->content3 != ''){
							$content3 = $all_record->content3; 
						}else{
							$content3 = '';
						}

						if ($all_record->video_code != ''){
							$video_code = $all_record->video_code; 
						}else{
							$video_code = '';
						}
				@endphp
			@endforeach


			<div class="page-content entry-content">
				{!! $content1 !!}
				<p>&nbsp;</p>

				<p>
					<img decoding="async" data-tf-not-load="1" class="alignleft wp-image-6727 size-full" src="{{ $image1 }}" alt="" width="600" height="290" >
				</p>


				{!! $content2 !!}

				<p><img src="{{ $image2 }}" decoding="async" class="alignleft wp-image-6728 size-full" alt="" width="600" height="359"></p>
				<p>&nbsp;</p>

				{!! $content3 !!}

				<div class="post-video">
					{!! $video_code !!}
				</div>
			</div>
		</div>
	</div>
</section>

@endsection