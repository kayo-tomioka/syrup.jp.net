// Google Map
function initialize() {
	$("#access").addClass("google-map");
	$(".map-img").addClass("hidden");

	var latlng = new google.maps.LatLng(35.655087, 139.715007);
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
	mapTypeControlOptions: { mapTypeIds: ['syrup', google.maps.MapTypeId.ROADMAP] }
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);

	var icon = {
		url: '/share/img/index/company_icon_mapflag.png',
		scaledSize: new google.maps.Size(112, 81)
	}

	var markerOptions = {
		position: latlng,
		map: map,
		icon: icon,
		title: '株式会社 シロップ'
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
	var styledMapOptions = {name: '株式会社 シロップ'}
	var syrupType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('syrup', syrupType);
	map.setMapTypeId('syrup');

	google.maps.event.addDomListener(window, "resize", function () {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center);
	});
}