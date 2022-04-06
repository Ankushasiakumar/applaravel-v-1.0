@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery Images</h1>
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
		                <h3 class="card-title">Add Gallery Images</h3>
		              </div>
		              <!-- /.card-header -->


		            <!-- form start -->
		              <form action="{{ route('add_gallery_images_post') }}" enctype="multipart/form-data" method="post">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group">
		                  	<label for="exampleInputBannerBackground">Image</label>
	                    		<div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="gallery_image" id="exampleInputBannerBackground">
			                        <label class="custom-file-label" for="exampleInputBannerBackground">Choose file</label>
			                      </div>
			                      <div class="input-group-append">
			                        <span class="input-group-text">Upload</span>
			                      </div>
			                    </div>	
		                  </div>

		                  <div class="form-group">
		                    <label>Name</label>
		                    <input type="text" class="form-control" name="gallery_name">
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