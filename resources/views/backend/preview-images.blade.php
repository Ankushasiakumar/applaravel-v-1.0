@extends('backend.layout.app')

@section('content')
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Preview Images</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('preview_images_add') }}" class="btn btn-primary">Add New</a></li>
            </ol>
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

	          		<div class="card">
		              <div class="card-header">
		                <h3 class="card-title">Preview Images</h3>
		              </div>
		              <!-- /.card-header -->
		              <div class="card-body p-0">
		                <table class="table table-sm">
		                  <thead>
		                    <tr>
		                      <th style="width: 10px">#</th>
		                      <th>Layout</th>
		                      <th>Window Model</th>
		                      <th>Window Color</th>
		                      <th>Window Position</th>
		                      <th>Door Model</th>
		                      <th>Door Color</th>
		                      <th>Door Position</th>
		                      <th>Preview</th>
		                      <th style="width: 40px">Action</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                  	@foreach($all_records as $all_record)
			                    <tr>
			                     	<td>{{ $all_record->id }}</td>
			                      	<td>{{ $all_record->layout_id }}</td>
			                      	<td>{{ $all_record->window_modal_id }}</td>
			                      	<td>{{ $all_record->window_color_id }}</td>
			                      	<td>{{ $all_record->window_position_id }}</td>
			                      	<td>{{ $all_record->door_modal_id }}</td>
			                      	<td>{{ $all_record->door_color_id }}</td>
			                      	<td>{{ $all_record->door_position_id }}</td>
			                      	<td>
			                        	<img src="{{ $all_record->preview_image }}" class="img-fluid img-md">
			                      	</td>
			                      	<td style="width: 200px">
			                      		<span>
				                      		<a href="{{ route('preview_images_edit', ['id' => $all_record->id]) }}" class="btn btn-primary btn-sm">Edit</a> <a href="{{ route('preview_images_delete', ['id' => $all_record->id]) }}" class="btn btn-danger btn-sm">Delete</a>
			                      		</span>
			                      	</td>
			                    </tr>
		                  	@endforeach
		                  </tbody>
		                </table>
		              </div>
		              <!-- /.card-body -->
		            </div>
	          	</div>
	      	</div>
	    </div>
	</section>
</div>
@endsection