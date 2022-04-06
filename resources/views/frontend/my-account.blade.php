@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>My Account</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li>My Account</li>
		</ul>
	</div>
</section>

<section class="builder-sec user_profile">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Profile</h3>

				<a href="{{ route('logout_user') }}" class="btn btn-primary">Logout</a>
			</div>
		</div>
	</div>
</section>
@endsection