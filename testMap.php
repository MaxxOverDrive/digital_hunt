<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Test Hunt</title>
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
          <h1>Test Hunt!!!</h1>
      </div>
    </div>
  </div>  
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="googleMap1" style="width:400px;height:300px;"></div>
<br>
<div id="googleMap2" style="width:400px;height:300px;"></div>
<br>
<div id="googleMap3" style="width:400px;height:300px;"></div>
<br>
<div id="googleMap4" style="width:400px;height:300px;"></div>

  <script>
    function myMap() {
      var mapOptions1 = {
      center: new google.maps.LatLng(45.2249610,-122.8410340),
      zoom:9,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      };
      var mapOptions2 = {
      center: new google.maps.LatLng(45.2249610,-122.8410340),
      zoom:9,
      mapTypeId: google.maps.MapTypeId.SATELLITE,
      panControl: true,
      zoomControl: true,
      mapTypeControl: true,
      scaleControl: true,
      streetViewControl: true,
      overviewMapControl: true,
      rotateControl: true   
      };
      var mapOptions3 = {
      center: new google.maps.LatLng(47.2249610,-121.8410340),
      zoom:9,
      mapTypeId: google.maps.MapTypeId.HYBRID
      };
      var mapOptions4 = {
      center: new google.maps.LatLng(47.2249610,-121.8410340),
      zoom:9,
      mapTypeId: google.maps.MapTypeId.TERRAIN
      };
      var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
      var map2 = new google.maps.Map(document.getElementById("googleMap2"),mapOptions2);
      var map3 = new google.maps.Map(document.getElementById("googleMap3"),mapOptions3);
      var map4 = new google.maps.Map(document.getElementById("googleMap4"),mapOptions4);
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
</body>
</html>

