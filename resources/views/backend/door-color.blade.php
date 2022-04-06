@extends('backend.layout.app')

@section('content')
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Door Color</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('door_color_add') }}" class="btn btn-primary">Add New</a></li>
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
		                <h3 class="card-title">Door Color</h3>
		              </div>
		              <!-- /.card-header -->
		              <div class="card-body p-0">
		                <table class="table table-sm">
		                  <thead>
		                    <tr>
		                      <th style="width: 150px">#</th>
		                      <th>Name</th>
		                      <th>Color</th>
		                      <th>Price</th>
		                      <th>Is Active</th>
		                      <th style="width: 40px">Action</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                  	@foreach($allRecords as $allRecord)
								<tr>
									<td>{{ $allRecord->id }}</td>
									<td>{{ $allRecord->color_name }}</td>
									<td>
										<span style="background-color: {{ $allRecord->color_val }};    width: 25px;height: 25px;content: 'color';float: left;position: relative;border-radius: 16px;border: 2px solid #737070;"></span>
									</td>
									<td>{{ $allRecord->price }}</td>
									<td>
										@php
											if($allRecord->is_active == 'Y'){
												echo 'Yes';
											}else{
												echo 'No';
											}
										@endphp										
									</td>
									<td style="width: 200px">
										<span>
											<a href="{{ route('door_color_edit', ['id' => $allRecord->id]) }}" class="btn btn-primary btn-sm">Edit</a> <a href="{{ route('door_color_delete', ['id' => $allRecord->id]) }}" class="btn btn-danger btn-sm">Delete</a>
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