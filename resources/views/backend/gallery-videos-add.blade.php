@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery Videos</h1>
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
		                <h3 class="card-title">Add Gallery Videos</h3>
		              </div>
		              <!-- /.card-header -->


		            <!-- form start -->
		              <form action="{{ route('add_gallery_videos_post') }}" enctype="multipart/form-data" method="post">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group">
		                  	<label for="exampleInputBannerBackground">Video Code Embedd</label>
	                    	<textarea name="video_code" class="form-control"></textarea>
		                  </div>

		                  <div class="form-group">
		                    <label>Video Name</label>
		                    <input type="text" class="form-control" name="video_name">
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