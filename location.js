// Initialize and add the map

function initMap() {
    // The location of Uluru
    const uluru = { lat: 11.649959358968077, lng: 104.91373070100548 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 13,
      center: uluru,
    }); 
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }

  window.initMap = initMap;

//   const marker = new google.maps.Marker({
//     position: uluru,
//     map: map,
//   });



// function getlocation() {
// 	if (navigator.geolocation) {
// 		navigator.geolocation.getCurrentPosition(showLoc, errHand);
// 	}
// 	}
// 	function showLoc(pos) {
// 	latt = pos.coords.latitude;
// 	long = pos.coords.longitude;
// 	var lattlong = new google.maps.LatLng(latt, long);
// 	var OPTions = {
// 		center: lattlong,
// 		zoom: 10,
// 		mapTypeControl: true,
// 		navigationControlOptions: {
// 		style: google.maps.NavigationControlStyle.SMALL,
// 		},
// 	};
// 	var mapg = new google.maps.Map(
// 		document.getElementById("demo2"),
// 		OPTions
// 	);
// 	var markerg = new google.maps.Marker({
// 		position: lattlong,
// 		map: mapg,
// 		title: "You are here!",
// 	});
// 	}

// 	function errHand(err) {
// 	switch (err.code) {
// 		case err.PERMISSION_DENIED:
// 		result.innerHTML =
// 			"The application doesn't have the permission" +
// 			"to make use of location services";
// 		break;
// 		case err.POSITION_UNAVAILABLE:
// 		result.innerHTML = "The location of the device is uncertain";
// 		break;
// 		case err.TIMEOUT:
// 		result.innerHTML = "The request to get user location timed out";
// 		break;
// 		case err.UNKNOWN_ERROR:
// 		result.innerHTML =
// 			"Time to fetch location information exceeded" +
// 			"the maximum timeout interval";
// 		break;
// 	}
// 	}