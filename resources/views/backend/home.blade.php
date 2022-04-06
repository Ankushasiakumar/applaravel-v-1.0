@extends('backend.layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Page</h1>
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
                <h3 class="card-title">Homepage</h3>
              </div>
              <!-- /.card-header -->

				@foreach($all_records as $all_record)
					@php 
						if ($all_record->banner_title != ''){
							$banner_title = $all_record->banner_title; 
						}else{
							$banner_title = '';
						}

						if ($all_record->banner_link != ''){
							$banner_link = $all_record->banner_link; 
						}else{
							$banner_link = '';
						}

						if ($all_record->why_choose_title != ''){
							$why_choose_title = $all_record->why_choose_title; 
						}else{
							$why_choose_title = '';
						}

						if ($all_record->choose_grid_title_1 != ''){
							$choose_grid_title_1 = $all_record->choose_grid_title_1; 
						}else{
							$choose_grid_title_1 = '';
						}

						if ($all_record->choose_grid_title_2 != ''){
							$choose_grid_title_2 = $all_record->choose_grid_title_2; 
						}else{
							$choose_grid_title_2 = '';
						}

						if ($all_record->choose_grid_title_3 != ''){
							$choose_grid_title_3 = $all_record->choose_grid_title_3; 
						}else{
							$choose_grid_title_3 = '';
						}

						if ($all_record->choose_grid_title_4 != ''){
							$choose_grid_title_4 = $all_record->choose_grid_title_4; 
						}else{
							$choose_grid_title_4 = '';
						}

						if ($all_record->build_shed_title != ''){
							$build_shed_title = $all_record->build_shed_title; 
						}else{
							$build_shed_title = '';
						}

						if ($all_record->build_shed_content != ''){
							$build_shed_content = $all_record->build_shed_content; 
						}else{
							$build_shed_content = '';
						}

						if ($all_record->build_shed_link != ''){
							$build_shed_link = $all_record->build_shed_link; 
						}else{
							$build_shed_link = '';
						}

						if ($all_record->banner_background != ''){
							$banner_background = $all_record->banner_background; 
						}else{
							$banner_background = '';
						}

						if ($all_record->choose_grid_icon_1 != ''){
							$choose_grid_icon_1 = $all_record->choose_grid_icon_1; 
						}else{
							$choose_grid_icon_1 = '';
						}

						if ($all_record->choose_grid_icon_2 != ''){
							$choose_grid_icon_2 = $all_record->choose_grid_icon_2; 
						}else{
							$choose_grid_icon_2 = '';
						}

						if ($all_record->choose_grid_icon_3 != ''){
							$choose_grid_icon_3 = $all_record->choose_grid_icon_3; 
						}else{
							$choose_grid_icon_3 = '';
						}

						if ($all_record->choose_grid_icon_4 != ''){
							$choose_grid_icon_4 = $all_record->choose_grid_icon_4; 
						}else{
							$choose_grid_icon_4 = '';
						}

						if ($all_record->build_shed_image != ''){
							$build_shed_image = $all_record->build_shed_image; 
						}else{
							$build_shed_image = '';
						}
					@endphp
				@endforeach

              <!-- form start -->
              <form action="{{ route('admin_home_post') }}" enctype="multipart/form-data" method="post">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputBannerBackground">Banner Background</label>
                    <div class="row">
                    	<div class="col-md-2">
                    		@if($banner_background != '')
		                    	<div class="img_section">
		                    		<img src="{{ $banner_background }}" class="img-thumbnail">
		                    	</div>
		                	@endif	
                    	</div>
                    	<div class="col-md-10">
                    		<div class="input-group">
		                      <div class="custom-file">
		                        <input type="file" class="custom-file-input" name="banner_background" id="exampleInputBannerBackground">
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
                    <label for="banerTitle">Banner Title</label>
                    <input type="text" value="{{ $banner_title }}" class="form-control" id="banerTitle" name="banner_title">
                  </div>
                  <div class="form-group">
                    <label for="bannerLink">Banner Link</label>
                    <input type="text" value="{{ $banner_link }}" class="form-control" id="bannerLink" name="banner_link">
                  </div>
                  <div class="form-group">
                    <label for="bannerLink">Why Choose Title</label>
                    <input type="text" value="{{ $why_choose_title }}" class="form-control" id="bannerLink" name="why_choose_title">
                  </div>

                  	<div class="row">
	                  	<div class="col-md-6">
	                  		<div class="form-group">
			                    <label for="bannerLink">Choose Grid icon 1</label>
			                    <div class="row">
			                    	<div class="col-md-3">
			                    		@if($choose_grid_icon_1 != '')
					                    	<div class="img_section">
					                    		<img src="{{ $choose_grid_icon_1 }}" class="img-thumbnail">
					                    	</div>
					                	@endif	
			                    	</div>
			                    	<div class="col-md-9">
					                    <div class="input-group">
					                      <div class="custom-file">
					                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="choose_grid_icon_1">
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
			                    <label for="bannerLink">Choose Grid Title 1</label>
			                    <input type="text" value="{{ $choose_grid_title_1 }}" class="form-control" id="bannerLink" name="choose_grid_title_1">
			                </div>
	                  	</div>
	                  	<div class="col-md-6">
	                  		<div class="form-group">
			                    <label for="bannerLink">Choose Grid icon 2</label>
			                    <div class="row">
			                    	<div class="col-md-3">
			                    		@if($choose_grid_icon_2 != '')
					                    	<div class="img_section">
					                    		<img src="{{ $choose_grid_icon_2 }}" class="img-thumbnail">
					                    	</div>
					                	@endif	
			                    	</div>
			                    	<div class="col-md-9">
					                    <div class="input-group">
					                      <div class="custom-file">
					                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="choose_grid_icon_2">
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
			                    <label for="bannerLink">Choose Grid Title 2</label>
			                    <input type="text" value="{{ $choose_grid_title_2 }}" class="form-control" id="bannerLink" name="choose_grid_title_2">
			                </div>
	                  	</div>
                  	</div>

                  	<div class="row">
                  		<div class="col-md-6">
                  			<div class="form-group">
			                    <label for="bannerLink">Choose Grid icon 3</label>
			                    <div class="row">
			                    	<div class="col-md-3">
			                    		@if($choose_grid_icon_3 != '')
					                    	<div class="img_section">
					                    		<img src="{{ $choose_grid_icon_3 }}" class="img-thumbnail">
					                    	</div>
					                	@endif	
			                    	</div>
			                    	<div class="col-md-9">
					                    <div class="input-group">
					                      <div class="custom-file">
					                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="choose_grid_icon_3">
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
			                    <label for="bannerLink">Choose Grid Title 3</label>
			                    <input type="text" value="{{ $choose_grid_title_3 }}" class="form-control" id="bannerLink" name="choose_grid_title_3">
			                </div>	
                  		</div>
                  		<div class="col-md-6">
                  			<div class="form-group">
			                    <label for="bannerLink">Choose Grid icon 4</label>
			                    <div class="row">
			                    	<div class="col-md-3">
			                    		@if($choose_grid_icon_4 != '')
					                    	<div class="img_section">
					                    		<img src="{{ $choose_grid_icon_4 }}" class="img-thumbnail">
					                    	</div>
					                	@endif	
			                    	</div>
			                    	<div class="col-md-9">
					                    <div class="input-group">
					                      <div class="custom-file">
					                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="choose_grid_icon_4">
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
			                    <label for="bannerLink">Choose Grid Title 4</label>
			                    <input type="text" value="{{ $choose_grid_title_4 }}" class="form-control" id="bannerLink" name="choose_grid_title_4">
			                </div>	
                  		</div>
                  	</div>

                  	<div class="form-group">
	                    <label for="bannerLink">Build Shed Title</label>
	                    <input type="text" value="{{ $build_shed_title }}" class="form-control" id="bannerLink" name="build_shed_title">
	                </div>

	                <div class="form-group">
	                    <label for="bannerLink">Build Shed Content</label>
	                    <textarea class="form-control" name="build_shed_content">{{ $build_shed_content }}</textarea>
	                </div>

	                <div class="form-group">
	                    <label for="bannerLink">Build Shed Link</label>
	                    <input type="text" value="{{ $build_shed_link }}" class="form-control" id="bannerLink" name="build_shed_link">
	                </div>

	                <div class="form-group">
	                    <label for="bannerLink">Build Shed Image</label>
	                    <div class="row">
	                    	<div class="col-md-2">
	                    		@if($build_shed_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $build_shed_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif	
	                    	</div>
	                    	<div class="col-md-10">
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="build_shed_image">
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
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection