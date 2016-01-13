/**
 * Created by Mbakwe.Caleb on 12-Jan-16.
 */
var Dashboard = {
    CONSTANTS: {
        url: "",
        center: "9.054906,7.1148515",
        zoom: 6,
        size: "700x700",
        key: "AIzaSyAGtX3dGB8IGC35TKQ8TLE-h9JACxHzGTY"
    },
    init: function(){
        //Dashboard.startStaticMap(
        //    Dashboard.CONSTANTS.center,
        //    Dashboard.CONSTANTS.zoom,
        //    Dashboard.CONSTANTS.size,
        //    Dashboard.CONSTANTS.key
        //);

        $('#select-frame').on('change', function(){
            console.log(this);
            Dashboard.CONSTANTS.url = this.value;
            if(Dashboard.CONSTANTS.url == -1){
                Dashboard.showMap();
            }
            else{
                Dashboard.hideMap();
                Dashboard.switchFeed();
            }
        });

        Dashboard.showMap();
    },
    startStaticMap: function(center, zoom, size, key){
        var url = 'https://maps.googleapis.com/maps/api/staticmap?center='
            + center + "&zoom=" + zoom + '&size=' + size + "&key=" + key;
        console.log(url);
        $('#static-map').attr('src', url);
    },
    showMap: function(){
        $('#video-feed').hide('slow');
        $('#static-map').show('slow');
    },
    hideMap: function(){
        $('#static-map').hide('slow');
        $('#video-feed').show('slow');
    },
    switchFeed: function(){
        $('#video-feed').attr('src', Dashboard.CONSTANTS.url);
    }
};

$(document).ready(function(){
    Dashboard.init();
});