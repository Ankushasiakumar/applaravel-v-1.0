@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Delivery Area Edit</h1>
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
                            <h3 class="card-title">Delivery Area Settings</h3>
                        </div>
                        <form action="{{ route('add_new_delivery_edit_post') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Delivery Name</label>
                                    <input type="text" name="delivery_name" value="{{ $edit_record->delivery_name }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Latitude</label>
                                    <input type="text" name="latitude" value="{{ $edit_record->latitude }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Longitude</label>
                                    <input type="text" name="longitude" value="{{ $edit_record->longitude }}" class="form-control">
                                </div>

                                <input type="hidden" name="delivery_id" value="{{ $edit_record->id }}">

                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Delivery Description</label>
                                    <textarea id="summernote" name="delivery_desc">{{ $edit_record->delivery_desc }}</textarea>
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