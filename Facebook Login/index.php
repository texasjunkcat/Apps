
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?sensor=false">
    </script>
    <script type="text/javascript">

    var map;
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(40.68972267178789, -73.9926473270451),
          zoom: 12
        };
        map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>

<?php

	$fourquareEndpoint = "https://api.foursquare.com/v2/venues/trending?ll=40.7,-74&oauth_token=JISIZCK10P5F4FO2WW4KGE1MRHGFKQEEMF4QGGVLQE0ZZDB1&v=20140205";

	function getTrendingLocations($endpoint){

    $searchTerm= $_REQUEST['search'];
    $endPoint=$endpoint . "&query=".$searchTerm;
		$rawJSON = file_get_contents($endpoint);
		$placesArray = json_decode($rawJSON, true);
		$places = $placesArray['response']['venues'];
		//print_r($places);

		for($i=0; $i<count($places); $i++){


			echo('<scri'.'pt>');
			echo('setTimeout(function(){');

			echo('var myLatlng = new google.maps.LatLng('.$places[$i]['location']['lat'].','.$places[$i]['location']['lng'].');');

			echo('</script>');

      echo('var marker = new google.maps.Marker({position: myLatlng, map: map, title: "Hello World!"});');
      echo('}, 2000);');

			//print_r($places[$i]);
		}



	}

	getTrendingLocations($fourquareEndpoint);


?>
<script>


</script>
	<body>
		 <div id="map-canvas" style="height:300px; width:300px"></div>

	</body>

</html>