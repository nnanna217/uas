/**
 * Created by Mbakwe.Caleb on 12-Jan-16.
 */
var Dashboard = {
    CONSTANTS: {
        feeds: [
            "http://aassd.viewnetcam.com:50000/nphMotionJpeg?Resolution=640x480&Quality=Clarity",
            "http://aassd.viewnetcam.com:50000/nphMotionJpeg?Resolution=640x480&Quality=Clarity",
            "http://aassd.viewnetcam.com:50000/nphMotionJpeg?Resolution=640x480&Quality=Clarity",
            "http://aassd.viewnetcam.com:50000/nphMotionJpeg?Resolution=640x480&Quality=Clarity",
            "http://aassd.viewnetcam.com:50000/nphMotionJpeg?Resolution=640x480&Quality=Clarity"
        ],
        center: "9.054906,7.1148515",
        zoom: 6,
        size: "1000x1000",
        key: "AIzaSyAGtX3dGB8IGC35TKQ8TLE-h9JACxHzGTY"
    },
    init: function(){
        Dashboard.startStaticMap(
            Dashboard.CONSTANTS.center,
            Dashboard.CONSTANTS.zoom,
            Dashboard.CONSTANTS.size,
            Dashboard.CONSTANTS.key
        );
    },
    startStaticMap: function(center, zoom, size, key){
        var url = 'https://maps.googleapis.com/maps/api/staticmap?center='
            + center + "&zoom=" + zoom + '&size=' + size + "&key=" + key;
        console.log(url);
        $('#static-map').attr('src', url);
    },
    switchFeed: function(index){

    }
};

$(document).ready(function(){
    Dashboard.init();
});