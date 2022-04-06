@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sheds Edit</h1>
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
                            <h3 class="card-title">Sheds Edit</h3>
                        </div>
                        <form action="{{ route('sheds_edit_post') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Shed Name</label>
                                    <input type="text" name="shed_name" value="{{ $edit_record->shed_name }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Shed Image</label>
                                    <div class="row">
                                    	<div class="col-md-2">
                                    		<img src="{{ $edit_record->shed_image }}" class="img-thumbnail img-lg">
                                    	</div>
                                    	<div class="col-md-10">
		                                	<div class="input-group">
						                      <div class="custom-file">
						                        <input type="file" class="custom-file-input" name="shed_image" id="exampleInputBannerBackground">
						                        <label class="custom-file-label" for="exampleInputBannerBackground">Choose file</label>
						                      </div>
						                      <div class="input-group-append">
						                        <span class="input-group-text">Upload</span>
						                      </div>
						                    </div>
						                </div>
						            </div>
                                </div>

                                <input type="hidden" name="shed_id" value="{{ $edit_record->id }}">

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Shed Description</label>
                                    <textarea class="form-control" name="shed_desc">{{ $edit_record->shed_desc }}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Choose Category</label>
                                            <select class="form-control custom-select" name="cat_id">
                                                <option value="">Choose</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" @if($category->id == $edit_record->cat_id) selected @endif>{{ $category->cat_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        	<label>Status</label><br>
                                        	<label for="yes">Enable <input type="radio" name="is_active" value="Y" id="yes" @if($edit_record->is_active == 'Y') checked @endif></label>
                                        	<label for="no">Disable <input type="radio" name="is_active" value="N" id="no" @if($edit_record->is_active == 'N') checked @endif></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{$edit_record->price}}">
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