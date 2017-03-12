$(document).ready(function () {
    function initialize() {
        var mapCanvas = document.getElementById('map');
        var myLatLng = {lat: 21.382199, lng: -157.931267};
        var mapOptions = {
            center: new google.maps.LatLng(myLatLng),
            zoom: 17 ,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: '99-190 Heleconia Pl, Aiea, HI  96701'
        });

        var mapLabel = new MapLabel({
            text: '99-190 Heleconia Pl, Aiea, HI  96701',
            position: new google.maps.LatLng(myLatLng),
            map: map,
            fontSize: 15,
            // align: 'right'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
});