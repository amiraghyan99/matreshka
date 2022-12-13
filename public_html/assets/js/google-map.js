jQuery(document).ready(function($) {
        // ---------------Google Map------------------------------
        var myCenter = new google.maps.LatLng(40.19931171239167, 44.584189292044506);
        var animation = google.maps.Animation.BOUNCE;

        function initialize() {
            var mapProp = {
                center: myCenter,
                scrollwheel: false,
                zoom: 17,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("gmap"), mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
                animation: animation
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    
});
