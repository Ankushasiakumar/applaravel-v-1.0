@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>How to Prepare a Base</h1>
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
	                <h3 class="card-title">How to Prepare a Base</h3>
	              </div>
	              <!-- /.card-header -->
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
	              <form action="{{ route('prepare_base_post') }}" enctype="multipart/form-data" method="post">
	              	@csrf
	                <div class="card-body">
	                  <div class="form-group">
	                  	<label>Content</label>
	                  	<textarea name="prepare_content" id="summernote" class="form-control">{{$prepare_content}}</textarea>
	                  </div>

	                  <div class="form-group">
	                  	<label>Prepare Base Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($prepare_base_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $prepare_base_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="prepare_base_image">
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
	                  	<label>Prepare Base Image 2</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($prepare_base_image2 != '')
			                    	<div class="img_section">
			                    		<img src="{{ $prepare_base_image2 }}" class="img-thumbnail">
			                    	</div>
			                	@endif
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="prepare_base_image2">
			                        <label class="custom-file-label" for="exampleInputBannerBackground">Choose file</label>
			                      </div>
			                      <div class="input-group-append">
			                        <span class="input-group-text">Upload</span>
			                      </div>
			                    </div>
			                </div>
			            </div>
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