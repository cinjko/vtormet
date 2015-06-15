function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,30.52035594),
    zoom:6,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);