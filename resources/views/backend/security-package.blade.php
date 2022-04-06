@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Security Package</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
	    <div class="container-fluid">
	        <div class="row">
	          <!-- left column -->
	          <div class="col-md-12">
	            <!-- general form elements -->

	            @if (isset($success))
	            	<div class="alert alert-success" role="alert">
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">×</span>
		                </button>
		                {{ $success }}
		            </div>
	            @endif

	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Security Package</h3>
	              </div>
	              <!-- /.card-header -->
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
	              <form action="{{ route('security_package_post') }}" enctype="multipart/form-data" method="post">
	              	@csrf
	                <div class="card-body">
	                  <div class="form-group">
	                  	<label>Content 1</label>
	                  	<textarea name="content1" id="summernote" class="form-control">{{$content1}}</textarea>
	                  </div>

	                  <div class="form-group">
	                  	<label>Image 1</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($image1 != '')
			                    	<div class="img_section">
			                    		<img src="{{ $image1 }}" class="img-thumbnail">
			                    	</div>
			                	@endif
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="image1">
			                        <label class="custom-file-label" for="exampleInputBannerBackground">Choose file</label>
			                      </div>
			                      <div class="input-group-append">
			                        <span class="input-group-text">Upload</span>
			                      </div>
			                    </div>
			                </div>
			            </div>
	                  </div>

	                  <div class="form-group">
	                  	<label>Content 2</label>
	                  	<textarea name="content2" id="summernote1" class="form-control">{{$content2}}</textarea>
	                  </div>

	                  <div class="form-group">
	                  	<label>Image 2</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($image2 != '')
			                    	<div class="img_section">
			                    		<img src="{{ $image2 }}" class="img-thumbnail">
			                    	</div>
			                	@endif
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="image2">
			                        <label class="custom-file-label" for="exampleInputBannerBackground">Choose file</label>
			                      </div>
			                      <div class="input-group-append">
			                        <span class="input-group-text">Upload</span>
			                      </div>
			                    </div>
			                </div>
			            </div>
	                  </div>

	                   <div class="form-group">
	                  	<label>Content 3</label>
	                  	<textarea name="content3" id="summernote2" class="form-control">{{$content3}}</textarea>
	                  </div>

	                   <div class="form-group">
	                  	<label>Video Code</label>
	                  	<textarea name="video_code" id="summernote3" class="form-control">{{$video_code}}</textarea>
	                  </div>

	                </div>

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	                </div>
	            </form>
	          	</div>
	          </div>
	      </div>
	  </div>
	</section>
</div>
@endsection