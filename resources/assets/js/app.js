var coordinates = require('./coordinates.js');
(function(){
   var app = {
     init : function(){
      app.showMap();
      app.addMarkers();
    },
    showMap : function(){
      var map = new L.Map('mapid', {scrollWheelZoom:false});
      var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
      var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
      var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 18, attribution: osmAttrib});
      map.setView(new L.LatLng(46, 2),6);
      map.addLayer(osm);
    },
  }
    app.init();
 })();
