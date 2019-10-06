var Map = ol.Map,
    View = ol.View,
    Draw = ol.interaction.Draw,
    TileLayer = ol.layer.Tile,
    VectorLayer = ol.layer.Vector,
    OSM = ol.source.OSM,
    VectorSource = ol.source.Vector,
    {Style, Stroke, Fill} = ol.style,
    typeSelect = document.getElementById('type'),
    color = document.getElementById('color'),
    colorC = document.getElementById('colorC'),
    draw;

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

colorC.onchange = function(){
    firstStyle.stroke_.color_ = this.value;
}

addInteraction();