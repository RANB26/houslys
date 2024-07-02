
function iniciarMapa(){
    var latitud = 10.912759628542808;
    var longitud = -74.80153090165516;

    var map = new google.maps.Map(document.getElementById('mapa'),
    {
        zoom: 16,
        center: new google.maps.LatLng(latitud, longitud)
    });

    var infoWindow = new google.maps.InfoWindow;
    downloadUrl('http://localhost/Houslys/public/xml', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        Array.prototype.forEach.call(markers, function(markerElem) {
            var id_vivienda = markerElem.getAttribute('id_vivienda');
            var direccion_vivienda = markerElem.getAttribute('direccion_vivienda');
            
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));
            const contentString =
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<center>'+
                '<h1 id="firstHeading" class="firstHeading">'+ id_vivienda +  '</h1>' +
                '</center>'+
                '<br>'+
                '<div id="bodyContent">' +
                '<br>'+
                "<p><b>" + direccion_vivienda + "</p>" +
                "</p>" +
                "</div>" +
                "</div>";

            var marker = new google.maps.Marker({
                map: map,
                position: point,
            });
            marker.addListener('click', function() {
                infoWindow.setContent(contentString);
                infoWindow.open(map, marker);
            });
        });
    });

}


function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;
    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };
    request.open('GET', url, true);
    request.send(null);
}