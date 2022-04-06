@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Build Shed</h1>
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
	                <h3 class="card-title">Build Shed</h3>
	              </div>
	              <!-- /.card-header -->

	              @foreach($all_records as $all_record)
					@php 
						if ($all_record->shed_builder_content != ''){
							$shed_builder_content = $all_record->shed_builder_content; 
						}else{
							$shed_builder_content = '';
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

						if ($all_record->product_featured_tab_1_section_5_image != ''){
							$product_featured_tab_1_section_5_image = $all_record->product_featured_tab_1_section_5_image; 
						}else{
							$product_featured_tab_1_section_5_image = '';
						}

						if ($all_record->product_featured_tab_1_section_5_icon != ''){
							$product_featured_tab_1_section_5_icon = $all_record->product_featured_tab_1_section_5_icon; 
						}else{
							$product_featured_tab_1_section_5_icon = '';
						}

						if ($all_record->product_featured_tab_1_section_6_image != ''){
							$product_featured_tab_1_section_6_image = $all_record->product_featured_tab_1_section_6_image; 
						}else{
							$product_featured_tab_1_section_6_image = '';
						}

						if ($all_record->product_featured_tab_1_section_6_icon != ''){
							$product_featured_tab_1_section_6_icon = $all_record->product_featured_tab_1_section_6_icon; 
						}else{
							$product_featured_tab_1_section_6_icon = '';
						}

						if ($all_record->product_featured_tab_1_section_7_image != ''){
							$product_featured_tab_1_section_7_image = $all_record->product_featured_tab_1_section_7_image; 
						}else{
							$product_featured_tab_1_section_7_image = '';
						}

						if ($all_record->product_featured_tab_1_section_7_icon != ''){
							$product_featured_tab_1_section_7_icon = $all_record->product_featured_tab_1_section_7_icon; 
						}else{
							$product_featured_tab_1_section_7_icon = '';
						}

						if ($all_record->product_featured_tab_1_section_8_image != ''){
							$product_featured_tab_1_section_8_image = $all_record->product_featured_tab_1_section_8_image; 
						}else{
							$product_featured_tab_1_section_8_image = '';
						}

						if ($all_record->product_featured_tab_1_section_9_image != ''){
							$product_featured_tab_1_section_9_image = $all_record->product_featured_tab_1_section_9_image; 
						}else{
							$product_featured_tab_1_section_9_image = '';
						}

						if ($all_record->product_featured_tab_1_section_10_image_1 != ''){
							$product_featured_tab_1_section_10_image_1 = $all_record->product_featured_tab_1_section_10_image_1; 
						}else{
							$product_featured_tab_1_section_10_image_1 = '';
						}

						if ($all_record->product_featured_tab_1_section_10_image_2 != ''){
							$product_featured_tab_1_section_10_image_2 = $all_record->product_featured_tab_1_section_10_image_2; 
						}else{
							$product_featured_tab_1_section_10_image_2 = '';
						}

						if ($all_record->product_featured_tab_1_section_10_image_3 != ''){
							$product_featured_tab_1_section_10_image_3 = $all_record->product_featured_tab_1_section_10_image_3; 
						}else{
							$product_featured_tab_1_section_10_image_3 = '';
						}

						if ($all_record->product_featured_tab_1_section_10_image_4 != ''){
							$product_featured_tab_1_section_10_image_4 = $all_record->product_featured_tab_1_section_10_image_4; 
						}else{
							$product_featured_tab_1_section_10_image_4 = '';
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
	              <form action="{{ route('build_shed_post') }}" enctype="multipart/form-data" method="post">
	              	@csrf
	                <div class="card-body">
	                  <div class="form-group">
	                  	<label>Shed Builder Content</label>
	                  	<textarea name="shed_builder_content" class="form-control">{{ $shed_builder_content }}</textarea>
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
	                  	<label>Product Featured Tab 1 Section 5 Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_5_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_5_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_5_image">
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
	                  	<label>Product Featured Tab 1 Section 5 Icon</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_5_icon != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_5_icon }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_5_icon">
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
	                  	<label>Product Featured Tab 1 Section 5 Title</label>
	                  	<input type="text" name="product_featured_tab_1_section_5_title" class="form-control" value="{{ $product_featured_tab_1_section_5_title }}">
	                   </div>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 5 Content</label>
	                  	<textarea class="form-control" name="product_featured_tab_1_section_5_content">{{ $product_featured_tab_1_section_5_content }}</textarea>
	                   </div>

	                   <br>	<br>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 6 Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_6_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_6_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_6_image">
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
	                  	<label>Product Featured Tab 1 Section 6 Icon</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_6_icon != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_6_icon }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_6_icon">
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
	                  	<label>Product Featured Tab 1 Section 6 Title</label>
	                  	<input type="text" name="product_featured_tab_1_section_6_title" class="form-control" value="{{ $product_featured_tab_1_section_6_title }}">
	                   </div>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 6 Content</label>
	                  	<textarea class="form-control" name="product_featured_tab_1_section_6_content">{{ $product_featured_tab_1_section_6_content }}</textarea>
	                   </div>


	                   <br>	<br>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 7 Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_7_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_7_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_7_image">
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
	                  	<label>Product Featured Tab 1 Section 7 Icon</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($product_featured_tab_1_section_7_icon != '')
			                    	<div class="img_section">
			                    		<img src="{{ $product_featured_tab_1_section_7_icon }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_7_icon">
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
	                  	<label>Product Featured Tab 1 Section 7 Title</label>
	                  	<input type="text" name="product_featured_tab_1_section_7_title" class="form-control" value="{{ $product_featured_tab_1_section_7_title }}">
	                   </div>

	                   <div class="form-group">
	                  	<label>Product Featured Tab 1 Section 7 Content</label>
	                  	<textarea class="form-control" name="product_featured_tab_1_section_7_content">{{ $product_featured_tab_1_section_7_content }}</textarea>
	                   </div>

	                   <br>	<br>


	                  <div class="row">
	                  	<div class="col-md-6">
                  		  <div class="form-group">
		                  	<label>Product Featured Tab 1 Section 8 Image</label>
		                  	<div class="row">
		                  		<div class="col-md-2">
		                  			@if($product_featured_tab_1_section_8_image != '')
				                    	<div class="img_section">
				                    		<img src="{{ $product_featured_tab_1_section_8_image }}" class="img-thumbnail">
				                    	</div>
				                	@endif	
		                  		</div>
		                  		<div class="col-md-10">
				                  	<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_8_image">
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
		                  	<label>Product Featured Tab 1 Section 8 Title</label>
		                  	<input type="text" name="product_featured_tab_1_section_8_title" class="form-control" value="{{ $product_featured_tab_1_section_8_title }}">
		                   </div>

		                   <div class="form-group">
		                  	<label>Product Featured Tab 1 Section 8 Content</label>
		                  	<textarea class="form-control" name="product_featured_tab_1_section_8_content">{{ $product_featured_tab_1_section_8_content }}</textarea>
		                   </div>
	                  	</div>
	                  	<div class="col-md-6">
	                  		<div class="form-group">
		                  	<label>Product Featured Tab 1 Section 9 Image</label>
		                  	<div class="row">
		                  		<div class="col-md-2">
		                  			@if($product_featured_tab_1_section_9_image != '')
				                    	<div class="img_section">
				                    		<img src="{{ $product_featured_tab_1_section_9_image }}" class="img-thumbnail">
				                    	</div>
				                	@endif	
		                  		</div>
		                  		<div class="col-md-10">
				                  	<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_9_image">
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
		                  	<label>Product Featured Tab 1 Section 9 Title</label>
		                  	<input type="text" name="product_featured_tab_1_section_9_title" class="form-control" value="{{ $product_featured_tab_1_section_9_title }}">
		                   </div>

		                   <div class="form-group">
		                  	<label>Product Featured Tab 1 Section 9 Content</label>
		                  	<textarea class="form-control" name="product_featured_tab_1_section_9_content">{{ $product_featured_tab_1_section_9_content }}</textarea>
		                   </div>
	                  	</div>
	                  </div>

	                  <br>	<br>

	                  <div class="row">
	                  	<div class="col-md-6">
	                  		<div class="form-group">
			                  	<label>Product Featured Tab 1 Section 10 Image 1</label>
			                  	<div class="row">
			                  		<div class="col-md-2">
			                  			@if($product_featured_tab_1_section_10_image_1 != '')
					                    	<div class="img_section">
					                    		<img src="{{ $product_featured_tab_1_section_10_image_1 }}" class="img-thumbnail">
					                    	</div>
					                	@endif	
			                  		</div>
			                  		<div class="col-md-10">
					                  	<div class="input-group">
					                      <div class="custom-file">
					                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_10_image_1">
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

	                  	<div class="col-md-6">
	                  		<div class="form-group">
			                  	<label>Product Featured Tab 1 Section 10 Image 2</label>
			                  	<div class="row">
			                  		<div class="col-md-2">
			                  			@if($product_featured_tab_1_section_10_image_2 != '')
					                    	<div class="img_section">
					                    		<img src="{{ $product_featured_tab_1_section_10_image_2 }}" class="img-thumbnail">
					                    	</div>
					                	@endif	
			                  		</div>
			                  		<div class="col-md-10">
					                  	<div class="input-group">
					                      <div class="custom-file">
					                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_10_image_2">
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

	                  	<div class="col-md-6">
	                  		<div class="form-group">
			                  	<label>Product Featured Tab 1 Section 10 Image 3</label>
			                  	<div class="row">
			                  		<div class="col-md-2">
			                  			@if($product_featured_tab_1_section_10_image_3 != '')
					                    	<div class="img_section">
					                    		<img src="{{ $product_featured_tab_1_section_10_image_3 }}" class="img-thumbnail">
					                    	</div>
					                	@endif	
			                  		</div>
			                  		<div class="col-md-10">
					                  	<div class="input-group">
					                      <div class="custom-file">
					                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_10_image_3">
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

	                  	<div class="col-md-6">
	                  		<div class="form-group">
			                  	<label>Product Featured Tab 1 Section 10 Image 4</label>
			                  	<div class="row">
			                  		<div class="col-md-2">
			                  			@if($product_featured_tab_1_section_10_image_4 != '')
					                    	<div class="img_section">
					                    		<img src="{{ $product_featured_tab_1_section_10_image_4 }}" class="img-thumbnail">
					                    	</div>
					                	@endif	
			                  		</div>
			                  		<div class="col-md-10">
					                  	<div class="input-group">
					                      <div class="custom-file">
					                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="product_featured_tab_1_section_10_image_4">
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
	                  </div>



	                  <br><br>


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

@endsection