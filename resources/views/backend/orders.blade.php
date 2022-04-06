@extends('backend.layout.app')

@section('content')
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="" class="btn btn-primary">Add New</a></li>
            </ol>
          </div> -->
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
		                <h3 class="card-title">Orders</h3>
		              </div>
		              <!-- /.card-header -->
		              <div class="card-body p-0">
		                <table class="table table-sm">
		                  <thead>
		                    <tr>
		                      <th style="width: 10px">#</th>
		                      <th>Name</th>
		                      <th>Email</th>
		                      <th style="width: 40px">Action</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                  	@foreach($all_records as $all_record)
			                    <tr>
			                     	<td>{{ $all_record->id }}</td>
			                      	<td>{{ $all_record->billing_first_name }} {{ $all_record->billing_last_name }}</td>
			                      	<td>{{ $all_record->billing_email }}</td>
			                      	<td style="width: 200px">
			                      		<span>
				                      		<a href="{{ route('order_view', ['id' => $all_record->id]) }}" class="btn btn-primary btn-sm">View</a> <a href="{{ route('order_delete', ['id' => $all_record->id]) }}" class="btn btn-danger btn-sm">Delete</a>
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