@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Capillary Action</h1>
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
	                <h3 class="card-title">Capillary Action</h3>
	              </div>
	              <!-- /.card-header -->


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


	              	<form action="{{ route('capillary_action_post') }}" enctype="multipart/form-data" method="post">
	              	@csrf
	                <div class="card-body">
	                  <div class="form-group">
	                  	<label>Top Content</label>
	                  	<textarea name="top_content" id="summernote" class="form-control">{{$top_content}}</textarea>
	                  </div>


	                  <div class="form-group">
	                  	<label>Section 1 Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($section_1_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $section_1_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="section_1_image">
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
	                  	<label>Section 1 Content</label>
	                  	<textarea name="section_1_content" id="summernote1" class="form-control">{{$section_1_content}}</textarea>
	                  </div>

	                  <div class="form-group">
	                  	<label>Section 1</label>
	                  	<textarea name="section1" id="summernote2" class="form-control">{{$section1}}</textarea>
	                  </div>

	                  <!--  -->

	                  <div class="form-group">
	                  	<label>Section 2 Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($section_2_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $section_2_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="section_2_image">
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
	                  	<label>Section 2 Content</label>
	                  	<textarea name="section_2_content" id="summernote3" class="form-control">{{$section_2_content}}</textarea>
	                  </div>

	                  <div class="form-group">
	                  	<label>Section 2</label>
	                  	<textarea name="section2" id="summernote4" class="form-control">{{$section2}}</textarea>
	                  </div>

	                  <!--  -->

	                  <div class="form-group">
	                  	<label>Section 3 Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($section_3_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $section_3_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="section_3_image">
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
	                  	<label>Section 3 Content</label>
	                  	<textarea name="section_3_content" id="summernote5" class="form-control">{{$section_3_content}}</textarea>
	                  </div>

	                  <div class="form-group">
	                  	<label>Section 3</label>
	                  	<textarea name="section3" id="summernote6" class="form-control">{{$section3}}</textarea>
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

@endsection