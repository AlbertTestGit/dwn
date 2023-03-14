;
(function($) {
    "use strict";
    //Mobile Menu
    jQuery('.stellarnav').stellarNav({
        theme: 'plain',
        breakpoint: 1023,
        menuLabel: '',
        sticky: false,
        openingSpeed: 200,
        closingDelay: 200,
        position: 'right',
        closeLabel: '',
    });
}(jQuery))