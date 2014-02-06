<?php 
	//php stuff to be run before maps api
?>

<!--========================= GOOGLE MAPS API =========================-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC3UlaujMEzESRgNZLxPNI9AQRzXytZxsI&sensor=true"></script>
<script type="text/javascript">
	function initialize() {
		var myOptions = {
			center: new google.maps.LatLng(39.764779,-105.034613),
			zoom: 15,
			disableDefaultUI: true,
			zoomControl: true,
			mapTypeControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.LARGE,
				position: google.maps.ControlPosition.LEFT_CENTER
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(39.762003,-105.036315),
			map: map,
			title:"Café Zuri"
		});
		var infowindow = new google.maps.InfoWindow({
			content:'<div class="map-logo"></div><div style="font-family: arial,sans-serif;width:430px;color:#000;"><b>Café Zuri</b><div style="font-size:12px;">Open early! Come on down and enjoy a cup of Coda coffee, or treat yourself to one of our many delicious treats.<br/><br/>(720) 381-4567</div></div>',
		});
		infowindow.open(map, marker);
	}
	$(document).ready( function() {
		initialize();
	});
</script>

<div id="map_canvas" style="width:100%; height:100%"></div>