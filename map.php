<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blank!</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h1>Hunt!!!</h1>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

					<div id="map1" style="width:400px;height:300px;"></div><br>
					<div id="map2" style="width:400px;height:300px;"></div><br>
					<div id="map3" style="width:400px;height:300px;"></div><br>
					<div id="map4" style="width:400px;height:300px;"></div>
						
							<script>
								function myMap() {
									var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  									var mapOptions1 = {
    									var mapCanvas = document.getElementById("map1");
  										var mapOptions = {center: myCenter, zoom: 5};
  										var map = new google.maps.Map(mapCanvas, mapOptions);
  										var marker = new google.maps.Marker({position:myCenter});
  										marker.setMap(map);
    									mapTypeId: google.maps.MapTypeId.ROADMAP
  									};
  									var mapOptions2 = {
    									var mapCanvas = document.getElementById("map2");
  										var mapOptions = {center: myCenter, zoom: 5};
  										var map = new google.maps.Map(mapCanvas, mapOptions);
  										var marker = new google.maps.Marker({position:myCenter});
  										marker.setMap(map);
    									mapTypeId: google.maps.MapTypeId.SATELLITE
  									};
  									var mapOptions3 = {
    									var mapCanvas = document.getElementById("map3");
  										var mapOptions = {center: myCenter, zoom: 5};
  										var map = new google.maps.Map(mapCanvas, mapOptions);
  										var marker = new google.maps.Marker({position:myCenter});
  										marker.setMap(map);
    									mapTypeId: google.maps.MapTypeId.HYBRID
  									};
  									var mapOptions4 = {
    									var mapCanvas = document.getElementById("map4");
  										var mapOptions = {center: myCenter, zoom: 5};
  										var map = new google.maps.Map(mapCanvas, mapOptions);
  										var marker = new google.maps.Marker({position:myCenter});
  										marker.setMap(map);
    									mapTypeId: google.maps.MapTypeId.TERRAIN
  									};
  									var map = new google.maps.Map(document.getElementById("map1"),									mapOptions1);
  									var map = new google.maps.Map(document.getElementById("map2"),									mapOptions2);
  									var map = new google.maps.Map(document.getElementById("map3"),									mapOptions3);
  									var map = new google.maps.Map(document.getElementById("map4"),									mapOptions4);
									}
								</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC65y9PyvKQuFEx2dK_JqBPlMHExVgEzbI&callback=myMap"></script>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form action="" method="post">
					First Name: <input type="text" name="first_name" /><br />
					 Last Name: <input type="text" name="last_name" /><br />
					     Email: <input type="text" name="email" /><br />
					     <input type="reset" name="reset" />
					     <input type="submit" name="submit" />
				</form>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
	</div>		
</body>
</html>