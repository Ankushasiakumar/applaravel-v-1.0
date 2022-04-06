@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('add_new_testimonial') }}" class="btn btn-primary">Add New</a></li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      	<div class="container-fluid">
	        <div class="row">
	          	<div class="col-md-12">

	          		@if(isset($success))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                            {{ $success }}
                        </div>
                    @endif

	          		<div class="card">
		              <div class="card-header">
		                <h3 class="card-title">Gallery Images</h3>
		                
		                <div class="card-tools">
		                  <a href="{{ route('add_gallery_images') }}" class="btn btn-primary btn-sm">Add New</a>
		                </div>

		              </div>
		              <!-- /.card-header -->
		              <div class="card-body p-0">
		                <table class="table table-sm">
		                  <thead>
		                    <tr>
		                      <th style="width: 10px">#</th>
		                      <th>Name</th>
		                      <th>Image</th>
		                      <th style="width: 40px">Action</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                  	@if (isset($galleryImagesRecords))
			                  	@foreach($galleryImagesRecords as $galleryImagesRecord)
				                  	<tr>
				                  		<td style="width:100px;">{{ $galleryImagesRecord->id }}</td>
				                  		<td>{{ $galleryImagesRecord->gallery_name }}</td>
				                  		<td>
				                  			<img src="{{ $galleryImagesRecord->gallery_image }}" class="img-thumbnail img-lg">
				                  		</td>
				                  		<td style="width: 200px">
				                  			<span>
				                  				<a href="{{ route('gallery_image_edit', ['id' => $galleryImagesRecord->id]) }}" class="btn btn-primary btn-sm">Edit</a> <a href="{{ route('gallery_image_delete', ['id' => $galleryImagesRecord->id]) }}" class="btn btn-danger btn-sm">Delete</a>
				                  			</span>
				                  		</td>
				                  	</tr>
			                  	@endforeach
			                @endif
		                  </tbody>
		                </table>
		              </div>
		            </div>



              		<div class="card">
    	              <div class="card-header">
    	                <h3 class="card-title">Gallery Videos</h3>
    	                
    	                <div class="card-tools">
    	                  <a href="{{ route('add_gallery_videos') }}" class="btn btn-primary btn-sm">Add New</a>
    	                </div>

    	              </div>
    	              <!-- /.card-header -->
    	              <div class="card-body p-0">
    	                <table class="table table-sm">
    	                  <thead>
    	                    <tr>
    	                      <th style="width: 10px">#</th>
    	                      <th>Name</th>
    	                      <th style="width: 40px">Action</th>
    	                    </tr>
    	                  </thead>
    	                  <tbody>
    	                  	@if (isset($galleryVideosRecords))
	    	                  	@foreach($galleryVideosRecords as $galleryVideosRecord)
				                  	<tr>
				                  		<td style="width:100px;">{{ $galleryVideosRecord->id }}</td>
				                  		<td>{{ $galleryVideosRecord->video_name }}</td>
				                  		<td style="width: 200px">
				                  			<span>
				                  				<a href="{{ route('gallery_video_edit', ['id' => $galleryVideosRecord->id]) }}" class="btn btn-primary btn-sm">Edit</a> <a href="{{ route('gallery_video_delete', ['id' => $galleryVideosRecord->id]) }}" class="btn btn-danger btn-sm">Delete</a>
				                  			</span>
				                  		</td>
				                  	</tr>
			                  	@endforeach
			                @endif
    	                  </tbody>
    	                </table>
    	              </div>
    	            </div>
	          	</div>
	      	</div>
	    </div>
	</section>
</div>

@endsection