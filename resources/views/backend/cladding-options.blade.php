@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cladding Options</h1>
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
	                <h3 class="card-title">Cladding Options</h3>
	              </div>
	              <!-- /.card-header -->

	              @foreach($all_records as $all_record)
					@php 
						if ($all_record->cladding_options_content != ''){
							$cladding_options_content = $all_record->cladding_options_content; 
						}else{
							$cladding_options_content = '';
						}

						if ($all_record->dip_treated_image != ''){
							$dip_treated_image = $all_record->dip_treated_image; 
						}else{
							$dip_treated_image = '';
						}

						if ($all_record->tanalized_image != ''){
							$tanalized_image = $all_record->tanalized_image; 
						}else{
							$tanalized_image = '';
						}

						if ($all_record->beast_image != ''){
							$beast_image = $all_record->beast_image; 
						}else{
							$beast_image = '';
						}

						if ($all_record->dip_treated_content != ''){
							$dip_treated_content = $all_record->dip_treated_content; 
						}else{
							$dip_treated_content = '';
						}

						if ($all_record->dip_treated_list != ''){
							$dip_treated_list = $all_record->dip_treated_list; 
						}else{
							$dip_treated_list = '';
						}

						if ($all_record->tanalized_content != ''){
							$tanalized_content = $all_record->tanalized_content; 
						}else{
							$tanalized_content = '';
						}

						if ($all_record->tanalized_list != ''){
							$tanalized_list = $all_record->tanalized_list; 
						}else{
							$tanalized_list = '';
						}

						if ($all_record->beast_content != ''){
							$beast_content = $all_record->beast_content; 
						}else{
							$beast_content = '';
						}

						if ($all_record->beast_list != ''){
							$beast_list = $all_record->beast_list; 
						}else{
							$beast_list = '';
						}

					@endphp
				  @endforeach

	              <form action="{{ route('cladding_options_post') }}" enctype="multipart/form-data" method="post">
	              	@csrf
	                <div class="card-body">
	                  <div class="form-group">
	                  	<label>Cladding Options Content</label>
	                  	<textarea name="cladding_options_content" id="summernote" class="form-control">{{$cladding_options_content}}</textarea>
	                  </div>

	                  <div class="row">
	                  	<div class="col-md-6">
                  		  <div class="form-group">
		                  	<label>Dip Treated Image</label>
		                  	<div class="row">
		                  		<div class="col-md-2">
		                  			@if($dip_treated_image != '')
				                    	<div class="img_section">
				                    		<img src="{{ $dip_treated_image }}" class="img-thumbnail">
				                    	</div>
				                	@endif
		                  		</div>
		                  		<div class="col-md-10">
				                  	<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="dip_treated_image">
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
		                  	<label>Tanalized Image</label>
		                  	<div class="row">
		                  		<div class="col-md-2">
		                  			@if($tanalized_image != '')
				                    	<div class="img_section">
				                    		<img src="{{ $tanalized_image }}" class="img-thumbnail">
				                    	</div>
				                	@endif
		                  		</div>
		                  		<div class="col-md-10">
				                  	<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="tanalized_image">
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

              		  <div class="form-group">
	                  	<label>Beast Image</label>
	                  	<div class="row">
	                  		<div class="col-md-2">
	                  			@if($beast_image != '')
			                    	<div class="img_section">
			                    		<img src="{{ $beast_image }}" class="img-thumbnail">
			                    	</div>
			                	@endif
	                  		</div>
	                  		<div class="col-md-10">
			                  	<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" id="exampleInputBannerBackground" name="beast_image">
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
                  		<label>Dip Treated Content</label>
                  		<textarea class="form-control" id="summernote1" name="dip_treated_content">{{$dip_treated_content}}</textarea>
                    </div>

                    <div class="form-group">
                  		<label>Dip Treated List</label>
                  		<textarea class="form-control" id="summernote2" name="dip_treated_list">{{$dip_treated_list}}</textarea>
                    </div>

                    <!-- Tanalized -->

                    <div class="form-group">
                  		<label>Tanalized Content</label>
                  		<textarea class="form-control" id="summernote3" name="tanalized_content">{{$tanalized_content}}</textarea>
                    </div>

                    <div class="form-group">
                  		<label>Tanalized List</label>
                  		<textarea class="form-control" id="summernote4" name="tanalized_list">{{$tanalized_list}}</textarea>
                    </div>

                    <!-- Beast -->

                    <div class="form-group">
                  		<label>Beast Content</label>
                  		<textarea class="form-control" id="summernote5" name="beast_content">{{$beast_content}}</textarea>
                    </div>

                    <div class="form-group">
                  		<label>Beast List</label>
                  		<textarea class="form-control" id="summernote6" name="beast_list">{{$beast_list}}</textarea>
                    </div>

                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

	          	</div>
	          </div>
	      </div>
	  </div>
	</section>
</div>
@endsection