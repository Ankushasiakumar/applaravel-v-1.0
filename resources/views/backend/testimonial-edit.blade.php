@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Testimonial</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      	<div class="container-fluid">
	        <div class="row">
	          	<div class="col-md-12">
                    
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
                            <h3 class="card-title">Edit Testimonial</h3>
                        </div>
                        <form action="{{ route('edit_testimonial_post') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Testimonial Image</label>
                                    <div class="row">
                                    	<div class="col-md-2">
                                    		<img src="{{ $edit_record->testimonial_image }}" class="img-thumbnail">
                                    	</div>
                                    	<div class="col-md-10">
                                    		<div class="input-group">
		                                      <div class="custom-file">
		                                        <input type="file" class="custom-file-input" name="testimonial_image" id="exampleInputTestimonialImage">
		                                        <label class="custom-file-label" for="exampleInputTestimonialImage">Choose file</label>
		                                      </div>
		                                      <div class="input-group-append">
		                                        <span class="input-group-text">Upload</span>
		                                      </div>
		                                    </div>	
                                    	</div>
                                    </div>
                                </div>
                                <input type="hidden" name="testimonial_id" value="{{ $edit_record->id }}">
                                <div class="form-group">
                                    <label>Testimonial Name</label>
                                    <input type="text" value="{{$edit_record->testimonial_name}}" class="form-control" name="testimonial_name">
                                </div>
                                <div class="form-group">
                                    <label>Testimonial Content</label>
                                    <textarea class="form-control" name="testimonial_content">{{ $edit_record->testimonial_content }}</textarea>
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