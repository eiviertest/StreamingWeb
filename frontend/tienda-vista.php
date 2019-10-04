<?php
require 'frontend/principal-vista.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>visor responsivo con Leaflet</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Demo project with jQuery">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<style type="text/css">
		html, body, #container {
			height: 100%;
			width: 100%;
			overflow: hidden;
		}
		body > .container-fluid {
			padding: 0 0 0 0;
		}
		#mapid {
			margin-left: 5%;
			margin-right: 5%;
			display: block;
			width: 90%;
			height: 80%;
		}
	</style>
</head>
<body>
	<!-- Begin page content -->
	<div id="container" class="container-fluid">
		<div id="mapid"></div>
	</div>
</body>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<script type="text/javascript">
	var mymap = L.map('mapid');
	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(mymap);
	var circle = mymap.locate({setView: true, maxZoom: 16});

	function onLocationFound(e) {
		var radius = e.accuracy / 2;

		L.marker(e.latlng).addTo(mymap)
		.bindPopup("Tú estas aquí, con " + radius + " metros de aproximación").openPopup();

		L.circle(e.latlng, {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5,
			radius: 250
		}).addTo(mymap);
	}
	function onLocationError(e) {
		alert(e.message);
	}
	mymap.on('locationfound', onLocationFound);
	mymap.on('locationerror', onLocationError);

	L.marker(['21.159410321606696','-100.93406899684186']).addTo(mymap)
		.bindPopup("Reparación VideoJuegos").openPopup();

	L.marker(['21.16048541544245','-100.93237018528038']).addTo(mymap)
		.bindPopup("Videojuegos Retro").openPopup();

	L.marker(['21.161054115609055','-100.93293686037532']).addTo(mymap)
		.bindPopup("Casa de Empeño").openPopup();
</script>
</body>
</html>