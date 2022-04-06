@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Privacy Policy</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li>Privacy Policy</li>
		</ul>
	</div>
</section>

<section class="builder-sec privacy_policy">
	<div class="container">
		<div class="row">
			@foreach($all_records as $all_record)
				@php 
					if ($all_record->terms_content != ''){
						$terms_content = $all_record->terms_content; 
					}else{
						$terms_content = '';
					}
              	@endphp
			  @endforeach
			<div class="page-content entry-content">
				{!! $terms_content !!}
			</div>
		</div>
	</div>
</section>

@endsection