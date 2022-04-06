@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Door Position Edit</h1>
          </div>
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

                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                            @foreach($errors->all() as $error)
                                {{ $error }}<br/>
                            @endforeach
                        </div>
                    @endif


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Door Position Settings</h3>
                        </div>
                        <form action="{{ route('door_position_edit_post') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Position Name</label>
                                    <input type="text" name="position_name" value="{{ $edit_record->position_name }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Position Image</label>
                                    <div class="row">
                                    	<div class="col-md-2">
                                    		<img src="{{ $edit_record->position_image }}" class="img-thumbnail img-lg">
                                    	</div>
                                    	<div class="col-md-10">
		                                	<div class="input-group">
						                      <div class="custom-file">
						                        <input type="file" class="custom-file-input" name="position_image" id="exampleInputBannerBackground">
						                        <label class="custom-file-label" for="exampleInputBannerBackground">Choose file</label>
						                      </div>
						                      <div class="input-group-append">
						                        <span class="input-group-text">Upload</span>
						                      </div>
						                    </div>
						                </div>
						            </div>
                                </div>

                                <input type="hidden" name="door_position_id" value="{{ $edit_record->id }}">

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Position Description</label>
                                    <textarea class="form-control" name="position_desc">{{ $edit_record->position_desc }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{ $edit_record->price }}">
                                </div>

                                <div class="form-group">
                                	<label>Status</label><br>
                                	<label for="yes">Enable <input type="radio" name="is_active" value="Y" id="yes" @if($edit_record->is_active == 'Y') checked @endif></label>
                                	<label for="no">Disable <input type="radio" name="is_active" value="N" id="no" @if($edit_record->is_active == 'N') checked @endif></label>
                                </div>

                                <div class="card-footer">
	                              <button type="submit" class="btn btn-primary">Submit</button>
	                            </div>
                            </div>
                        </form>
              		</div>
          		</div>
      		</div>
      	</div>
  </section>
</div>

@endsection