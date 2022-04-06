@extends('backend.layout.app')

@section('content')
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Preview Images</h1>
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
                            <h3 class="card-title">Add Preview Images</h3>
                        </div>
                        <form action="{{ route('preview_images_add_post') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Preiview Image </label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image" id="exampleInputTestimonialImage">
                                        <label class="custom-file-label" for="exampleInputTestimonialImage">Choose file</label>
                                      </div>
                                      <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Select Layout:</label>
                                    <select name="layout_id" class="form-control">
                                        <option value="">Select Layout</option>
                                        @foreach($Layouts as $Layout)
                                            <option value="{{ $Layout->id }}">{{  $Layout->layout_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Window Model:</label>
                                    <select name="window_model" class="form-control">
                                        <option value="">Select Window Model</option>
                                        @foreach($Windowmodels as $Windowmodel)
                                            <option value="{{ $Windowmodel->id }}">{{  $Windowmodel->model_name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Select Window Color:</label>
                                    <select name="window_color" class="form-control">
                                        <option value="">Select Window Color</option>
                                        @foreach($Windowcolors as $Windowcolor)
                                            <option value="{{ $Windowcolor->id }}">{{  $Windowcolor->color_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Window Position:</label>
                                    <select name="window_position" class="form-control">
                                        <option value="">Select Window Position</option>
                                        @foreach($Windowpositions as $Windowposition)
                                            <option value="{{ $Windowposition->id }}">{{  $Windowposition->position_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Door Model:</label>
                                    <select name="door_model" class="form-control">
                                        <option value="">Select Door Model</option>
                                        @foreach($Doormodels as $Doormodel)
                                            <option value="{{ $Doormodel->id }}">{{  $Doormodel->model_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Door Color:</label>
                                    <select name="door_color" class="form-control">
                                        <option value="">Select Door Color</option>
                                        @foreach($Doorcolors as $Doorcolor)
                                            <option value="{{ $Doorcolor->id }}">{{  $Doorcolor->color_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Door Position:</label>
                                    <select name="door_position" class="form-control">
                                        <option value="">Select Door Position</option>
                                        @foreach($Doorpositions as $Doorposition)
                                            <option value="{{ $Doorposition->id }}">{{  $Doorposition->position_name }}</option>
                                        @endforeach
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