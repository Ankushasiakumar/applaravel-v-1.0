@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Login</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li>Login User</li>
		</ul>
	</div>
</section>

<section class="builder-sec login_user">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Registration</h3>

				@if(isset($success))
                    <div class="alert alert-success" role="alert" style="float: left;width: 100%;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                        {{ $success }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger" role="alert" style="float: left;width: 100%;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                        @foreach($errors->all() as $error)
                            {{ $error }}<br/>
                        @endforeach
                    </div>
                @endif

				<form action="{{ route('register_user') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label class="control-label">Full Name</label>
						<input type="text" name="name" class="form-control" value="{{ old('name') }}">
					</div>

					<div class="form-group">
						<label class="control-label">Email</label>
						<input type="email" name="email" class="form-control" value="{{ old('email') }}">
					</div>

					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="form-group">
						<label class="control-label">Confirm Password</label>
						<input type="password" name="confirm_password" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="register" class="btn btn-primary" value="Submit">
					</div>
				</form>
			</div>

			<div class="col-md-6">
				<h3>Login</h3>

				@if(isset($success))
                    <div class="alert alert-success" role="alert" style="float: left;width: 100%;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                        {{ $success }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger" role="alert" style="float: left;width: 100%;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                        @foreach($errors->all() as $error)
                            {{ $error }}<br/>
                        @endforeach
                    </div>
                @endif
				
				<form action="{{ route('register_user') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label class="control-label">Email</label>
						<input type="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary" value="Login">
					</div>
				</form>
			</div>

		</div>
	</div>
</section>
@endsection