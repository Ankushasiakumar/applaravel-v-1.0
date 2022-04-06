@extends('backend.layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings Page</h1>
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
	                <h3 class="card-title">Setting</h3>
	              </div>
	              <!-- /.card-header -->

	              	@foreach($all_records as $all_record)
						@php
							if ($all_record->header_logo != ''){
								$header_logo = $all_record->header_logo; 
							}else{
								$header_logo = '';
							}

							if ($all_record->phone != ''){
								$phone = $all_record->phone; 
							}else{
								$phone = '';
							}

							if ($all_record->timing != ''){
								$timing = $all_record->timing; 
							}else{
								$timing = '';
							}

							if ($all_record->footer_logo != ''){
								$footer_logo = $all_record->footer_logo; 
							}else{
								$footer_logo = '';
							}

							if ($all_record->facebook != ''){
								$facebook = $all_record->facebook; 
							}else{
								$facebook = '';
							}

							if ($all_record->twitter != ''){
								$twitter = $all_record->twitter; 
							}else{
								$twitter = '';
							}

							if ($all_record->google != ''){
								$google = $all_record->google; 
							}else{
								$google = '';
							}

							if ($all_record->copyright != ''){
								$copyright = $all_record->copyright; 
							}else{
								$copyright = '';
							}

							if ($all_record->contact_info_address != ''){
								$contact_info_address = $all_record->contact_info_address; 
							}else{
								$contact_info_address = '';
							}

							if ($all_record->contact_info_email != ''){
								$contact_info_email = $all_record->contact_info_email; 
							}else{
								$contact_info_email = '';
							}

							if ($all_record->contact_info_phone != ''){
								$contact_info_phone = $all_record->contact_info_phone; 
							}else{
								$contact_info_phone = '';
							}

							if ($all_record->contact_form_email != ''){
								$contact_form_email = $all_record->contact_form_email; 
							}else{
								$contact_form_email = '';
							}

							if ($all_record->google_map != ''){
								$google_map = $all_record->google_map; 
							}else{
								$google_map = '';
							}

							if ($all_record->measurement != ''){
								$measurement = $all_record->measurement; 
							}else{
								$measurement = '';
							}

						@endphp
					@endforeach

	              <form action="{{ route('admin_settings_post') }}" enctype="multipart/form-data" method="post">
	              	@csrf
	                <div class="card-body">
	                  	<div class="form-group">
		                    <label for="exampleInputHeaderLogo">Header Logo</label>
		                    <div class="row">
		                    	<div class="col-md-2">
		                    		@if($header_logo != '')
				                    	<div class="img_section">
				                    		<img src="{{ $header_logo }}" class="img-thumbnail">
				                    	</div>
				                	@endif
		                    	</div>
		                    	<div class="col-md-10">
		                    		<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" name="header_logo" id="exampleInputHeaderLogo">
				                        <label class="custom-file-label" for="exampleInputHeaderLogo">Choose file</label>
				                      </div>
				                      <div class="input-group-append">
				                        <span class="input-group-text">Upload</span>
				                      </div>
				                    </div>	
		                    	</div>
		                    </div>
	                  	</div>

	                  	<div class="form-group">
		                    <label>Topbar Phone</label>
	                    	<input type="text" value="{{ $phone }}" class="form-control" name="phone">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Topbar Timing</label>
	                    	<input type="text" value="{{ $timing }}" class="form-control" name="timing">
	                  	</div>

	                  	<div class="form-group">
		                    <label for="exampleInputHeaderLogo">Footer Logo</label>
		                    <div class="row">
		                    	<div class="col-md-2">
		                    		@if($footer_logo != '')
				                    	<div class="img_section">
				                    		<img src="{{ $footer_logo }}" class="img-thumbnail">
				                    	</div>
				                	@endif
		                    	</div>
		                    	<div class="col-md-10">
		                    		<div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" class="custom-file-input" name="footer_logo" id="exampleInputHeaderLogo">
				                        <label class="custom-file-label" for="exampleInputHeaderLogo">Choose file</label>
				                      </div>
				                      <div class="input-group-append">
				                        <span class="input-group-text">Upload</span>
				                      </div>
				                    </div>	
		                    	</div>
		                    </div>
	                  	</div>

	                  	<div class="form-group">
		                    <label>Facebook</label>
	                    	<input type="text" value="{{ $facebook }}" class="form-control" name="facebook">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Twitter</label>
	                    	<input type="text" value="{{ $twitter }}" class="form-control" name="twitter">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Google</label>
	                    	<input type="text" value="{{ $google }}" class="form-control" name="google">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Copyright</label>
	                    	<input type="text" value="{{ $copyright }}" class="form-control" name="copyright">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Contact Info Address</label>
	                    	<input type="text" value="{{ $contact_info_address }}" class="form-control" name="contact_info_address">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Contact Info Email</label>
	                    	<input type="text" value="{{ $contact_info_email }}" class="form-control" name="contact_info_email">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Contact Info Phone</label>
	                    	<input type="text" value="{{ $contact_info_phone }}" class="form-control" name="contact_info_phone">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Contact Form Email</label>
	                    	<input type="text" value="{{ $contact_form_email }}" class="form-control" name="contact_form_email">
	                  	</div>

	                  	<div class="form-group">
		                    <label>Google Map</label>
		                    <textarea name="google_map" class="form-control">{{ $google_map }}</textarea>
	                  	</div>

	                  	<div class="form-group">
	                  		<label class="control-label">Select Measurement</label>
	                  		<select class="form-control" name="measurement">
	                  			<option value="">Choose</option>
	                  			@php
	                  				$selected_m = $selected_f = '';
	                  				if($measurement == "square_meter"){
		                  				$selected_m = "selected";
		                  			}else if($measurement == "square_foot"){
		                  				$selected_f = "selected";
			                  		}else{
		                  				$selected = "";
				                  	}
	                  			@endphp
	                  			<option value="square_meter" {{$selected_m}}>Square Meter</option>
	                  			<option value="square_foot" {{$selected_f}}>Square Foot</option>
	                  		</select>
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