@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Build a Shed</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li><a href="{{ route('gallery') }}" > Gallery </a></li>
		</ul>
	</div>
</section>

<section class="tab-sec gallery-page">
	<div class="container">
		 <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-picture-o" aria-hidden="true"></i>Photo</a></li>
			<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-video-camera" aria-hidden="true"></i>Video</a></li>
		  </ul>
		  <!-- Tab panes -->
		  <div class="tab-content">
			<div class="filter-sec">
				<h4>Photo Filter</h4>
				<form>
					<input type="text" placeholder="Size">
					<button class="filter">Filter</button>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane active" id="home">
				<div class="row">
					@foreach($Galleryimages as $Galleryimage)
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="inner-info">
								@if($Galleryimage->gallery_image != '')
									<figure>
										<img src="{{ $Galleryimage->gallery_image }}">
									</figure>
								@endif
								<h4>{{ $Galleryimage->gallery_name }}</h4>
							</div>
						</div>
					@endforeach
				</div>
				<div class="load-more-btn"><a href="#" class="load-btn">load more</a></div>
			</div>
			<div role="tabpanel" class="tab-pane" id="profile">
				<div class="row">
					@foreach($Galleryvideos as $Galleryvideo)
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="inner-info">
							<h4>{{ $Galleryvideo->video_name }}</h4>
							{!! $Galleryvideo->video_code !!}
						</div>
					</div>
					@endforeach
				</div>
			</div>
		  </div>
	</div>
</section>

@endsection