@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Edit</h1>
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
                            <h3 class="card-title">Users Page Settings</h3>
                        </div>
                        <form action="{{ route('users_edit_post') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">User Name</label>
                                    <input type="text" name="name" value="{{ old('name', $editRecord->name) }}" class="form-control">
                                </div>

                                <!-- <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Extras Image</label>
                                    <div class="row">
                                    	<div class="col-md-2">
                                    		<img src="{{ $editRecord->extras_images }}" class="img-thumbnail img-lg">
                                    	</div>
                                    	<div class="col-md-10">
		                                	<div class="input-group">
						                      <div class="custom-file">
						                        <input type="file" class="custom-file-input" name="extras_images" id="exampleInputBannerBackground">
						                        <label class="custom-file-label" for="exampleInputBannerBackground">Choose file</label>
						                      </div>
						                      <div class="input-group-append">
						                        <span class="input-group-text">Upload</span>
						                      </div>
						                    </div>
						                </div>
						            </div>
                                </div> -->

                                <input type="hidden" name="users_id" value="{{ $editRecord->id }}">

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Email</label>
                                    <input type="text" name="email" value="{{ old('email', $editRecord->email)}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Password</label>
                                    <input type="password" name="confirm_password" class="form-control">
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