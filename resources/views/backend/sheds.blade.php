@extends('backend.layout.app')

@section('content')
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sheds</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('sheds_add') }}" class="btn btn-primary">Add New</a></li>
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
		                <h3 class="card-title">Sheds</h3>
		              </div>
		              <!-- /.card-header -->
		              <div class="card-body p-0">
		                <table class="table table-sm">
		                  <thead>
		                    <tr>
		                      <th style="width: 150px">#</th>
		                      <th>Name</th>
		                      <th>Image</th>
		                      <th>Category</th>
		                      <th>Price</th>
		                      <th style="width: 40px">Action</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                  	@foreach($sheds as $shed)
								<tr>
									<td>{{ $shed->id }}</td>
									<td>{{ $shed->shed_name }}</td>
									<td>
										<img src="{{ $shed->shed_image }}" class="img-thumbnail img-lg">
									</td>
									<td>{{ $shed->cat_name }}</td>
									<td>{{ $shed->price }}</td>
									<td style="width: 200px">
										<span>
											<a href="{{ route('sheds_edit', ['id' => $shed->id]) }}" class="btn btn-primary btn-sm">Edit</a> <a href="{{ route('sheds_delete', ['id' => $shed->id]) }}" class="btn btn-danger btn-sm">Delete</a>
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