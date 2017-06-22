var DropDownNavigation = (function() {
    function init(){
        $(".chuchoa-navigation__dropdown-link").on('click', function(){            
            $(this).addClass('selected');
        });
    }

    init();

    return {
        init : init,
    }
})();