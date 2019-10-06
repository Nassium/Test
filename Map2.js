var Map = ol.Map;
var View = ol.View;
var Draw = ol.interaction.Draw;
var TileLayer = ol.layer.Tile;
var VectorLayer = ol.layer.Vector;
var OSM = ol.source.OSM;
var VectorSource = ol.source.Vector;	  
var {Style, Stroke, Fill} = ol.style;
var typeSelect = document.getElementById('type');
var color = document.getElementById('color');
var draw; 

var firstStyle = new Style({ 
    stroke: new Stroke({ 
        color: color.value, 
        width: 3 
    }),
    fill: new Fill({
        color: color.value
    })
}); 

var raster = new TileLayer({
    source: new OSM()
});

var source = new VectorSource({wrapX: false});

var vector = new VectorLayer({
    source: source
});

var map = new Map({
    layers: [raster, vector],
    target: 'map',
    view: new View({
        center: [-11000000, 4600000],
        zoom: 4
    })
});


function addInteraction() {
    var value = typeSelect.value;
    if (value !== 'None') {
        draw = new Draw({
            source: source,
            type: typeSelect.value			        
        });		   

        map.addInteraction(draw);
    }
}


typeSelect.onchange = function() {	  
    if (typeSelect.value != 'None'){ 
        source.clear();	  
        vector.setStyle(firstStyle);
    }
    map.removeInteraction(draw);
    addInteraction();
};

color.onchange = function(){
    firstStyle.fill_.color_ = this.value;		
}

addInteraction();