;
(function($) {
    "use strict";
    //Mobile Menu
    jQuery('.stellarnav').stellarNav({
        theme: 'plain',
        breakpoint: 1023,
        menuLabel: '',
        sticky: false,
        position: 'static',
        openingSpeed: 80,
        closingDelay: 80,
        showArrows: true,
        closeBtn: false,
        closeLabel: 'Close',
        mobileMode: false,
        scrollbarFix: false
    });
}(jQuery))