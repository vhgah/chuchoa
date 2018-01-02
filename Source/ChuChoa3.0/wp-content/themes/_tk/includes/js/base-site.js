jQuery(document).ready(function() {
    // handle animation display
    var main = document.getElementsByClassName('mdl-layout__content');
    main[0].onscroll = function() {
        var animationItems = document.getElementsByClassName('chuchoa-animation');

        for (var index = 0; index < animationItems.length; index++) {
            var animationItem = animationItems[index];
            
            var itemOffset = animationItem.getBoundingClientRect();
            var parentOffset = this.getBoundingClientRect();

            if (itemOffset.top < parentOffset.height ) {
                var animationName = animationItem.dataset.osAnimation;
                var animationDelay = animationItem.dataset.osAnimationDelay;
                if (animationItem.className.indexOf('animated') == -1){
                    animationItem.className += ' animated ' + animationName;
                    animationItem.style["animation-delay"] = animationDelay;
                }
            } 
        }
    };

    function isWindow( obj ) {
        return obj != null && obj === obj.window;
    };
    function getWindow( elem ) {
        return isWindow( elem ) ? elem : elem.nodeType === 9 && elem.defaultView;
    };
    function offset( elem ) {

        var docElem, win,
            box = { top: 0, left: 0 },
            doc = elem && elem.ownerDocument;

        docElem = doc.documentElement;

        if ( typeof elem.getBoundingClientRect !== typeof undefined ) {
            box = elem.getBoundingClientRect();
        }
        win = getWindow( doc );
        return {
            top: box.top + win.pageYOffset - docElem.clientTop,
            left: box.left + win.pageXOffset - docElem.clientLeft,
            width: box.width,
            height: box.height,
        };
    };
    // end handle animation display
  });
