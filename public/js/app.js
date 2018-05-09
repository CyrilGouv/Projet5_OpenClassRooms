$(document).ready(function() {
    /* Counter Up Initialisation */
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
})

/* AOS Initialisation */
AOS.init();

// Init Map Object
const map = new Map;
map.init();
