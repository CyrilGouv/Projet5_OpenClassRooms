$(document).ready(function() {
    /* Counter Up Initialisation */
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
})

/* AOS Initialisation */
AOS.init();



/* Google Maps */

// Init Map Object
const map = new Map;
// Check if map "exists" to avoid console errors & optimize
if (Object.getOwnPropertyNames(map).length !== 0) {
    map.init();
}
