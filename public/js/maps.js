//  MAP Location 

	if ($('.contacts').length) {
		function initMap() {
		    var map, map2;

		    var myOptions = {
		    	zoom: 17,
					center: new google.maps.LatLng(40.3865406, 49.9589958),
		    	mapTypeId: google.maps.MapTypeId.ROADMAP
		    }

		    var myOptions2 = {
		    	zoom: 17,
		    	center: new google.maps.LatLng(40.408328, 49.946211),
		    	mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				
		    var myOptions3 = {
		    	zoom: 17,
		    	center: new google.maps.LatLng(40.382253, 49.802830),
		    	mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				
		    var myOptions4 = {
		    	zoom: 17,
		    	center: new google.maps.LatLng(40.388824, 49.872375),
		    	mapTypeId: google.maps.MapTypeId.ROADMAP
		    }

		    map = new google.maps.Map(document.getElementById("map_ahmedli"),
		    	myOptions);

		    map2 = new google.maps.Map(document.getElementById("map_neftci"),
					myOptions2);

		    map3 = new google.maps.Map(document.getElementById("map_inshat"),
					myOptions3);

		    map4 = new google.maps.Map(document.getElementById("map_sumq"),
					myOptions4);
					
		}		
	}








