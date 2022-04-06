@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Garden Room Area</h1>
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
	                <h3 class="card-title">Garden Room</h3>
	              </div>
	              <!-- /.card-header -->

	              @foreach($all_records as $all_record)
					@php 
						if ($all_record->gardenroom_content != ''){
							$gardenroom_content = $all_record->gardenroom_content; 
						}else{
							$gardenroom_content = '';
						}

						if ($all_record->product_featured_tab_1_section_1_title != ''){
							$product_featured_tab_1_section_1_title = $all_record->product_featured_tab_1_section_1_title; 
						}else{
							$product_featured_tab_1_section_1_title = '';
						}

						if ($all_record->product_featured_tab_1_section_1_content != ''){
							$product_featured_tab_1_section_1_content = $all_record->product_featured_tab_1_section_1_content; 
						}else{
							$product_featured_tab_1_section_1_content = '';
						}

						if ($all_record->product_featured_tab_1_section_2_title != ''){
							$product_featured_tab_1_section_2_title = $all_record->product_featured_tab_1_section_2_title; 
						}else{
							$product_featured_tab_1_section_2_title = '';
						}

						if ($all_record->product_featured_tab_1_section_2_content != ''){
							$product_featured_tab_1_section_2_content = $all_record->product_featured_tab_1_section_2_content; 
						}else{
							$product_featured_tab_1_section_2_content = '';
						}

						if ($all_record->product_featured_tab_1_section_3_title != ''){
							$product_featured_tab_1_section_3_title = $all_record->product_featured_tab_1_section_3_title; 
						}else{
							$product_featured_tab_1_section_3_title = '';
						}

						if ($all_record->product_featured_tab_1_section_3_content != ''){
							$product_featured_tab_1_section_3_content = $all_record->product_featured_tab_1_section_3_content; 
						}else{
							$product_featured_tab_1_section_3_content = '';
						}

						if ($all_record->product_featured_tab_1_section_4_title != ''){
							$product_featured_tab_1_section_4_title = $all_record->product_featured_tab_1_section_4_title; 
						}else{
							$product_featured_tab_1_section_4_title = '';
						}

						if ($all_record->product_featured_tab_1_section_4_content != ''){
							$product_featured_tab_1_section_4_content = $all_record->product_featured_tab_1_section_4_content; 
						}else{
							$product_featured_tab_1_section_4_content = '';
						}

						if ($all_record->product_featured_tab_1_section_5_title != ''){
							$product_featured_tab_1_section_5_title = $all_record->product_featured_tab_1_section_5_title; 
						}else{
							$product_featured_tab_1_section_5_title = '';
						}

						if ($all_record->product_featured_tab_1_section_5_content != ''){
							$product_featured_tab_1_section_5_content = $all_record->product_featured_tab_1_section_5_content; 
						}else{
							$product_featured_tab_1_section_5_content = '';
						}

						if ($all_record->product_featured_tab_1_section_6_title != ''){
							$product_featured_tab_1_section_6_title = $all_record->product_featured_tab_1_section_6_title; 
						}else{
							$product_featured_tab_1_section_6_title = '';
						}

						if ($all_record->product_featured_tab_1_section_6_content != ''){
							$product_featured_tab_1_section_6_content = $all_record->product_featured_tab_1_section_6_content; 
						}else{
							$product_featured_tab_1_section_6_content = '';
						}

						if ($all_record->product_featured_tab_1_section_7_title != ''){
							$product_featured_tab_1_section_7_title = $all_record->product_featured_tab_1_section_7_title; 
						}else{
							$product_featured_tab_1_section_7_title = '';
						}

						if ($all_record->product_featured_tab_1_section_7_content != ''){
							$product_featured_tab_1_section_7_content = $all_record->product_featured_tab_1_section_7_content; 
						}else{
							$product_featured_tab_1_section_7_content = '';
						}

						if ($all_record->product_featured_tab_1_section_8_title != ''){
							$product_featured_tab_1_section_8_title = $all_record->product_featured_tab_1_section_8_title; 
						}else{
							$product_featured_tab_1_section_8_title = '';
						}

						if ($all_record->product_featured_tab_1_section_8_content != ''){
							$product_featured_tab_1_section_8_content = $all_record->product_featured_tab_1_section_8_content; 
						}else{
							$product_featured_tab_1_section_8_content = '';
						}

						if ($all_record->product_featured_tab_1_section_9_title != ''){
							$product_featured_tab_1_section_9_title = $all_record->product_featured_tab_1_section_9_title; 
						}else{
							$product_featured_tab_1_section_9_title = '';
						}

						if ($all_record->product_featured_tab_1_section_9_content != ''){
							$product_featured_tab_1_section_9_content = $all_record->product_featured_tab_1_section_9_content; 
						}else{
							$product_featured_tab_1_section_9_content = '';
						}
						
						if ($all_record->product_featured_tab_2_section_1_title != ''){
							$product_featured_tab_2_section_1_title = $all_record->product_featured_tab_2_section_1_title; 
						}else{
							$product_featured_tab_2_section_1_title = '';
						}
						
						if ($all_record->product_featured_tab_2_section_1_content != ''){
							$product_featured_tab_2_section_1_content = $all_record->product_featured_tab_2_section_1_content; 
						}else{
							$product_featured_tab_2_section_1_content = '';
						}

						if ($all_record->product_featured_tab_1_section_1_video != ''){
							$product_featured_tab_1_section_1_video = $all_record->product_featured_tab_1_section_1_video; 
						}else{
							$product_featured_tab_1_section_1_video = '';
						}
						

						if ($all_record->product_featured_tab_2_section_2_title != ''){
							$product_featured_tab_2_section_2_title = $all_record->product_featured_tab_2_section_2_title; 
						}else{
							$product_featured_tab_2_section_2_title = '';
						}
						
						if ($all_record->product_featured_tab_2_section_2_content != ''){
							$product_featured_tab_2_section_2_content = $all_record->product_featured_tab_2_section_2_content; 
						}else{
							$product_featured_tab_2_section_2_content = '';
						}



						if ($all_record->product_featured_tab_1_section_1_image != ''){
							$product_featured_tab_1_section_1_image = $all_record->product_featured_tab_1_section_1_image; 
						}else{
							$product_featured_tab_1_section_1_image = '';
						}

						if ($all_record->product_featured_tab_1_section_2_image != ''){
							$product_featured_tab_1_section_2_image = $all_record->product_featured_tab_1_section_2_image; 
						}else{
							$product_featured_tab_1_section_2_image = '';
						}

						if ($all_record->product_featured_tab_1_section_3_image != ''){
							$product_featured_tab_1_section_3_image = $all_record->product_featured_tab_1_section_3_image; 
						}else{
							$product_featured_tab_1_section_3_image = '';
						}

						if ($all_record->product_featured_tab_1_section_3_icon != ''){
							$product_featured_tab_1_section_3_icon = $all_record->product_featured_tab_1_section_3_icon; 
						}else{
							$product_featured_tab_1_section_3_icon = '';
						}

						if ($all_record->product_featured_tab_1_section_4_image != ''){
							$product_featured_tab_1_section_4_image = $all_record->product_featured_tab_1_section_4_image; 
						}else{
							$product_featured_tab_1_section_4_image = '';
						}

						if ($all_record->product_featured_tab_1_section_4_icon != ''){
							$product_featured_tab_1_section_4_icon = $all_record->product_featured_tab_1_section_4_icon; 
						}else{
							$product_featured_tab_1_section_4_icon = '';
						}

						if ($all_record->product_featured_tab_2_section_1_image != ''){
							$product_featured_tab_2_section_1_image = $all_record->product_featured_tab_2_section_1_image; 
						}else{
							$product_featured_tab_2_section_1_image = '';
						}

						if ($all_record->product_featured_tab_2_section_2_image != ''){
							$product_featured_tab_2_section_2_image = $all_record->product_featured_tab_2_section_2_image; 
						}else{
							$product_featured_tab_2_section_2_image = '';
						}

					@endphp
				  @endforeach

	               <!-- form start -->
	              <form action="{{ route('garden_room_post') }}" enctype="multipart/form-data" method="post">
	              	@csrf
	                <div class="card-body">
	                  <div class="form-group">
	                  	<label>Garden Room Content</label>
	                  	<textarea name="gardenroom_content" class="form-control">{{ $gardenroom_content }}</textarea>
	                  </div>

	                  <div class="row">
	                  	<div class="col-md-6">
                  		  <div class="form-group">
		                  	<label>Product Featured Tab 1 Section 1 Image</label>

		                  	<div class="row">
		                  		<div class="col-md-2">
		                  			@if($product_featured_tab_1_section_1_image != '')
				                    	<div class="img_section">
				                    		<img src="{{ $product_featured_tab_1_section_1_image }}" class="img-thumbnail">
				                    	</div>
				                	@endif	
		                  		</div>
		                  		<div class="col-md-10">
				                  	<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_1_image">
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
		                  	<label>Product Featured Tab 1 Section 1 Title</label>
		                  	<input type="text" name="product_featured_tab_1_section_1_title" value="{{ $product_featured_tab_1_section_1_title }}" class="form-control">
		                   </div>

		                   <div class="form-group">
		                  	<label>Product Featured Tab 1 Section 1 Content</label>
		                  	<textarea class="form-control" name="product_featured_tab_1_section_1_content">{{ $product_featured_tab_1_section_1_content }}</textarea>
		                   </div>
	                  	</div>
	                  	<div class="col-md-6">
	                  		<div class="form-group">
		                  	<label>Product Featured Tab 1 Section 2 Image</label>
		                  	<div class="row">
		                  		<div class="col-md-2">
		                  			@if($product_featured_tab_1_section_2_image != '')
				                    	<div class="img_section">
				                    		<img src="{{ $product_featured_tab_1_section_2_image }}" class="img-thumbnail">
				                    	</div>
				                	@endif	
		                  		</div>
		                  		<div class="col-md-10">
				                  	<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_2_image">
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
		                  	<label>Product Featured Tab 1 Section 2 Title</label>
		                  	<input type="text" name="product_featured_tab_1_section_2_title" class="form-control" value="{{ $product_featured_tab_1_section_2_title }}">
		                   </div>

		                   <div class="form-group">
		                  	<label>Product Featured Tab 1 Section 2 Content</label>
		                  	<textarea class="form-control" name="product_featured_tab_1_section_2_content">{{ $product_featured_tab_1_section_2_content }}</textarea>
		                   </div>
	                  	</div>
	                  </div>

	                  <br>	<br>

	                  <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 3 Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_3_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_3_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_3_image">
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
	                  	<label>Product Featured Tab 1 Section 3 Icon</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_3_icon != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_3_icon }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_3_icon">
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
	                  	<label>Product Featured Tab 1 Section 3 Title</label>
	                  	<input type="text" name="product_featured_tab_1_section_3_title" class="form-control" value="{{ $product_featured_tab_1_section_3_title }}">
	                   </div>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 3 Content</label>
	                  	<textarea class="form-control" name="product_featured_tab_1_section_3_content">{{ $product_featured_tab_1_section_3_content }}</textarea>
	                   </div>

	                   <br>	<br>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 4 Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_4_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_4_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_4_image">
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
	                  	<label>Product Featured Tab 1 Section 4 Icon</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_4_icon != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_4_icon }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_4_icon">
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
	                  	<label>Product Featured Tab 1 Section 4 Title</label>
	                  	<input type="text" name="product_featured_tab_1_section_4_title" class="form-control" value="{{ $product_featured_tab_1_section_4_title }}">
	                   </div>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 4 Content</label>
	                  	<textarea class="form-control" name="product_featured_tab_1_section_4_content">{{ $product_featured_tab_1_section_4_content }}</textarea>
	                   </div>

	                   <br>	<br>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Video</label>
	                  	<textarea class="form-control" name="product_featured_tab_1_section_1_video">{{ $product_featured_tab_1_section_1_video }}</textarea>
	                   </div>

	                  <div class="row">
	                  	<div class="col-md-6">
                  		  <div class="form-group">
		                  	<label>Product Featured Tab 2 Section 1 Image</label>
		                  	<div class="row">
		                  		<div class="col-md-2">
		                  			@if($product_featured_tab_2_section_1_image != '')
				                    	<div class="img_section">
				                    		<img src="{{ $product_featured_tab_2_section_1_image }}" class="img-thumbnail">
				                    	</div>
				                	@endif	
		                  		</div>
		                  		<div class="col-md-10">
				                  	<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_2_section_1_image">
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
		                  	<label>Product Featured Tab 2 Section 1 Title</label>
		                  	<input type="text" name="product_featured_tab_2_section_1_title" class="form-control" value="{{ $product_featured_tab_2_section_1_title }}">
		                   </div>

		                   <div class="form-group">
		                  	<label>Product Featured Tab 2 Section 1 Content</label>
		                  	<textarea class="form-control" name="product_featured_tab_2_section_1_content">{{ $product_featured_tab_2_section_1_content }}</textarea>
		                   </div>
	                  	</div>
	                  	<div class="col-md-6">
	                  		<div class="form-group">
		                  	<label>Product Featured Tab 2 Section 2 Image</label>
		                  	<div class="row">
		                  		<div class="col-md-2">
		                  			@if($product_featured_tab_2_section_2_image != '')
				                    	<div class="img_section">
				                    		<img src="{{ $product_featured_tab_2_section_2_image }}" class="img-thumbnail">
				                    	</div>
				                	@endif	
		                  		</div>
		                  		<div class="col-md-10">
				                  	<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_2_section_2_image">
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
		                  	<label>Product Featured Tab 2 Section 2 Title</label>
		                  	<input type="text" name="product_featured_tab_2_section_2_title" class="form-control" value="{{ $product_featured_tab_2_section_2_title }}">
		                   </div>

		                   <div class="form-group">
		                  	<label>Product Featured Tab 2 Section 2 Content</label>
		                  	<textarea class="form-control" name="product_featured_tab_2_section_2_content">{{ $product_featured_tab_2_section_2_content }}</textarea>
		                   </div>
	                  	</div>
	                  </div>



	              	</div>
	                <!-- /.card-body -->
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