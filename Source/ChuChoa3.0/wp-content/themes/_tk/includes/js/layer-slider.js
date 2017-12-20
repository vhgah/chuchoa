var LayerSlider = function () {

    return {

        //Layer Slider
        initLayerSlider: function () {
		    $(document).ready(function(){
		        $("#layerslider").layerSlider({
			        skin: 'fullwidth',
			        responsive : true,
			        responsiveUnder : 960,
			        layersContainer : 960,
			        skinsPath: 'assets/plugins/layerslider/skins/'
			    });
		    });     
        }

    };
}();        