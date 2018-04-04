<!DOCTYPE html>
<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function loadMap() {
 var mapOptions = {
 center:new google.maps.LatLng(19.373341, 78.662109),
 zoom:5,
 mapTypeControl: true,
 mapTypeControlOptions: {
 style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
 mapTypeIds: [
 google.maps.MapTypeId.ROADMAP,
 google.maps.MapTypeId.TERRAIN
 ]
 },
 zoomControl: true,
 zoomControlOptions: {
 style: google.maps.ZoomControlStyle.SMALL
 }

 }
 var map=new google.maps.Map(document.getElementById("sample"),mapOptions);
}
</script>
</head>
<body onload="loadMap()">
<div id="sample" style="width:580px;height:400px;"></div
</body>
</html>