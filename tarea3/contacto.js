function initMap() {
  var location = {lat: 39.702165, lng: 3.436044};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: location
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
    title: 'Nuestra ubicación'
  });
}
