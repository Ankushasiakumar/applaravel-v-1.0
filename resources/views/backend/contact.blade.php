@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us</h1>
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

                    @foreach($all_records as $all_record)
                        @php
                            if ($all_record->contact_description != ''){
                                $contact_description = $all_record->contact_description;
                            }else{
                                $contact_description = '';
                            }

                            if ($all_record->contact_address != ''){
                                $contact_address = $all_record->contact_address;
                            }else{
                                $contact_address = '';
                            }

                            if ($all_record->contact_phone != ''){
                                $contact_phone = $all_record->contact_phone;
                            }else{
                                $contact_phone = '';
                            }

                            if ($all_record->contact_email != ''){
                                $contact_email = $all_record->contact_email;
                            }else{
                                $contact_email = '';
                            }

                            if ($all_record->contact_timing != ''){
                                $contact_timing = $all_record->contact_timing;
                            }else{
                                $contact_timing = '';
                            }

                            if ($all_record->get_in_touch_description != ''){
                                $get_in_touch_description = $all_record->get_in_touch_description;
                            }else{
                                $get_in_touch_description = '';
                            }

                            if ($all_record->contact_form_email != ''){
                                $contact_form_email = $all_record->contact_form_email;
                            }else{
                                $contact_form_email = '';
                            }
                        @endphp
                    @endforeach

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Contact Us Page Settings</h3>
                        </div>
                        <form action="{{ route('contact_us_post') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Contact Description</label>
                                    <textarea class="form-control" name="contact_description">{{ $contact_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Contact Address</label>
                                    <input type="text" class="form-control" name="contact_address" value="{{ $contact_address }}">
                                </div>

                                <div class="form-group">
                                    <label>Contact Phone</label>
                                    <input type="text" class="form-control" name="contact_phone" value="{{ $contact_phone }}">
                                </div>
                                <div class="form-group">
                                    <label>Contact Email</label>
                                    <input type="text" class="form-control" name="contact_email" value="{{ $contact_email }}">
                                </div>
                                <div class="form-group">
                                    <label>Contact Timing</label>
                                    <input type="text" class="form-control" name="contact_timing" value="{{ $contact_timing }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTestimonialImage">Get in touch Description</label>
                                    <textarea class="form-control" name="get_in_touch_description">{{ $get_in_touch_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Contact Form Email</label>
                                    <input type="text" class="form-control" name="contact_form_email" value="{{ $contact_form_email }}">
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