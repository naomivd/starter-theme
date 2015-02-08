jQuery(document).ready(function($) {

/* Scroll to Top
--------------------------------------------- */
$.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '300', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="fa fa-chevron-up"></i>', // Text for element
    scrollTitle: 'To The Top',
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});

});