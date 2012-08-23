<?php ?>

<html>
	<head>

		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>

		<!-- Attach JavaScript files -->
		<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
      <script>
			<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>

    <script>
      var map;

      function initialize() {
        var mapOptions = {
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map_canvas'),
            mapOptions);

        // Try HTML5 geolocation
        if(navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
          	var lat = position.coords.latitude;
    var lng = position.coords.longitude;
            var pos = new google.maps.LatLng(position.coords.latitude,
                                             position.coords.longitude);

            var infowindow = new google.maps.InfoWindow({
              map: map,
              position: pos,
              content: 'Location found using HTML5.'
            });

            map.setCenter(pos);
          }, function() {
            handleNoGeolocation(true);
          });
        } else {
          // Browser doesn't support Geolocation
          handleNoGeolocation(false);
        }
        
      }

      function handleNoGeolocation(errorFlag) {
        if (errorFlag) {
          var content = 'Error: The Geolocation service failed.';
        } else {
          var content = 'Error: Your browser doesn\'t support geolocation.';
        }

        var options = {
          map: map,
          position: new google.maps.LatLng(60, 105),
          content: content
        };

        var infowindow = new google.maps.InfoWindow(options);
        map.setCenter(options.position);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    </head>
	<body>
		
		<header>
			<?php $this -> load -> view('navigation'); ?>
		</header>
		<section class="content">
			<form>
				<input type="text" name ="source" placeholder=" Choose a source" />
				<button>
					Current Location
				</button>
				<input type="text" name ="destination" placeholder="Choose a destination"/>
				<div class="message yes">
					Taxi Available
				</div>
				<div class="message no">
					Taxi Unavailable
				</div>
				<button>
					Book
				</button>
			</form>
			<div id="map_canvas"></div>
		</section>
		
	</body>

</html>