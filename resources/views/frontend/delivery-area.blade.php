@extends ('frontend.layout.app')
@section('content')

<section class="inner-pahes-header">
	<div class="container">
		<h2>Delivery Area</h2>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li>/</li>
			<li><a href="{{ route('delivery_area') }}" > Delivery Area </a></li>
		</ul>
	</div>
</section>

<section class="builder-sec delivery-page">
	<div class="container">
		<h3>Check your postcode</h3>
		<div class="delivery_map">
			<div id='map' style='width: 100%; height: 500px;'></div>
		</div>
	</div>
</section>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoic3VmZmVzY29tMSIsImEiOiJjajdweDcyZDMzYXE3MzN0NXRvMnk3aTdsIn0.Xt-beaQbi7_EFKUgN37VGQ';
	
	var map = new mapboxgl.Map({
		container: 'map', // container ID
		style: 'mapbox://styles/mapbox/streets-v11', // style URL
		center: [-0.8853, 51.9983], // starting position [lng, lat]
		zoom: 8 // starting zoom
	});

	@php
		$i = 1;
		foreach ($deliveries as $key => $value){
			@endphp
				var marker@php echo $i; @endphp = new mapboxgl.Marker({color: "#58a906",draggable: false}).setLngLat([@php echo $value->latitude; @endphp, @php echo $value->longitude; @endphp]).setPopup(new mapboxgl.Popup().setHTML("<div class='image_box'><img src='/images/setting/6052e7025ac2618032021053706.png'></div>@php echo $value->delivery_desc; @endphp")).addTo(map);

				marker@php echo $i; @endphp.togglePopup(); 			
			@php
			$i++;
		}		
	@endphp

	var geocoder = new MapboxGeocoder({
		// Initialize the geocoder
		accessToken: mapboxgl.accessToken, // Set the access token
		mapboxgl: mapboxgl, // Set the mapbox-gl instance
		marker: false, // Do not use the default marker style
		placeholder: 'Search for places' // Placeholder text for the search bar
		/*bbox: [-122.30937, 37.84214, -122.23715, 37.89838], // Boundary for Berkeley
		proximity: {
			longitude: -122.25948,
			latitude: 37.87221
		} // Coordinates of UC Berkeley*/
	});
	 
	// Add the geocoder to the map
	map.addControl(geocoder);

	// After the map style has loaded on the page,
	// add a source layer and default styling for a single point
	map.on('load', function () {
		map.addSource('single-point', {
		'type': 'geojson',
		'data': {
			'type': 'FeatureCollection',
			'features': []
		}
	});
	 
	map.addLayer({
		'id': 'point',
		'source': 'single-point',
		'type': 'circle',
		'paint': {
			'circle-radius': 10,
			'circle-color': '#448ee4'
		}
	});
	 
	// Listen for the `result` event from the Geocoder // `result` event is triggered when a user makes a selection
	//  Add a marker at the result's coordinates
	geocoder.on('result', function (e) {
		map.getSource('single-point').setData(e.result.geometry);
	});
	});

</script>
@endsection