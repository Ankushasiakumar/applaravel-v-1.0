@extends('backend.layout.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Terms and Conditions</h1>
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

	            @if (isset($success))
	            	<div class="alert alert-success" role="alert">
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">×</span>
		                </button>
		                {{ $success }}
		            </div>
	            @endif

	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Terms and Conditions</h3>
	              </div>
	              <!-- /.card-header -->
	              @foreach($all_records as $all_record)
					@php 
						if ($all_record->terms_content != ''){
							$terms_content = $all_record->terms_content; 
						}else{
							$terms_content = '';
						}
	              	@endphp
				  @endforeach
	              <form action="{{ route('terms_and_conditions_post') }}" enctype="multipart/form-data" method="post">
	              	@csrf
	                <div class="card-body">
	                  <div class="form-group">
	                  	<label>Terms and Conditions Content</label>
	                  	<textarea name="terms_content" id="summernote" class="form-control">{{$terms_content}}</textarea>
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