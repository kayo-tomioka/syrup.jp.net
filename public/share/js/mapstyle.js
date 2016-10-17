// Google Map
function initialize() {
	$("#access").addClass("google-map");
	$(".map-img").addClass("hidden");

	var latlng = new google.maps.LatLng(35.655040, 139.715006);
	var myOptions = {
		zoom: 17,
		center: latlng,
		scrollwheel: false,
		//draggable: false,
		disableDefaultUI: true,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.LEFT_TOP
		},
	mapTypeControlOptions: { mapTypeIds: ['jvrs', google.maps.MapTypeId.ROADMAP] }
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);

	var icon = {
		url: '/01/share/img/icon_map_01.png',
		scaledSize: new google.maps.Size(50, 78)
	}

	var markerOptions = {
		position: latlng,
		map: map,
		icon: icon,
		title: 'ロイヤルパークホテル'
	};
	var marker = new google.maps.Marker(markerOptions);

	var styleOptions = [
		{
			"featureType": "poi",
			"elementType": "labels",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"featureType": "water",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"featureType": "road",
			"elementType": "labels.icon",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"featureType": "road",
			"elementType": "labels.text",
			"stylers": [
				{ "visibility": "simplified" }
			]
		},{
			"featureType": "transit.line",
			"elementType": "labels",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			"stylers": [
				{ "saturation": -100 },
				{ "lightness": -16 }
			]
		}
	];
	var styledMapOptions = {name: 'ロイヤルパークホテル'}
	var jvrsType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('jvrs', jvrsType);
	map.setMapTypeId('jvrs');

	google.maps.event.addDomListener(window, "resize", function () {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center);
	});
}