function initmap() {
    var map = new L.Map('mapid');
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 18, attribution: osmAttrib});

     map.setView(new L.LatLng(46, 2),6);
     map.addLayer(osm);
 }
 initmap();
