@extends('backend.layout.app')

@section('content')

<div class="content-wrapper">

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Order (#{{$all_records->id}})</h1>
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
                            <h3 class="card-title">Billing Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" value="{{$all_records->billing_first_name}}" class="form-control" disabled>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" value="{{$all_records->billing_last_name}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" value="{{$all_records->billing_email}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street Address 1</label>
                                        <input type="text" value="{{$all_records->billing_street_address1}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street Address 2</label>
                                        <input type="text" value="{{$all_records->billing_street_address2}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" value="{{$all_records->billing_city}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" value="{{$all_records->billing_country}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Postcode</label>
                                        <input type="text" value="{{$all_records->billing_postcode}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" value="{{$all_records->billing_phone}}" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Shipping Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" value="{{$all_records->shipping_first_name}}" class="form-control" disabled>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" value="{{$all_records->shipping_last_name}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" value="{{$all_records->shipping_email}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street Address 1</label>
                                        <input type="text" value="{{$all_records->shipping_street_address1}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Street Address 2</label>
                                        <input type="text" value="{{$all_records->shipping_street_address2}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" value="{{$all_records->shipping_city}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" value="{{$all_records->shipping_country}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Postcode</label>
                                        <input type="text" value="{{$all_records->shipping_postcode}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" value="{{$all_records->shipping_phone}}" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Order Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Order Notes</label>
                                        <textarea class="form-control" disabled>{{$all_records->order_notes}}</textarea>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Window Modal</label>
                                        <input type="text" value="{{$all_records->window_model}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Window Color</label>
                                        <input type="text" value="{{$all_records->window_color}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Window Position</label>
                                        <input type="text" value="{{$all_records->window_position}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Door Modal</label>
                                        <input type="text" value="{{$all_records->door_model}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Door Color</label>
                                        <input type="text" value="{{$all_records->door_color}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Door Position</label>
                                        <input type="text" value="{{$all_records->door_position}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Layout</label>
                                        <input type="text" value="{{$all_records->layout}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Longest Side</label>
                                        <input type="text" value="{{$all_records->longest_side}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Shortest Side</label>
                                        <input type="text" value="{{$all_records->shortest_side}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Total Price</label>
                                        <input type="text" value="{{$all_records->total_price}}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Payment Method</label>
                                        <input type="text" value="{{$all_records->payment_method}}" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
      </div>
  </section>
</div>

@endsection