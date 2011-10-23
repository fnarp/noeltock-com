jQuery(document).ready(function(){ 
   jQuery(".social-icon-bg").hover(
    function() {
    jQuery(this).stop().animate({"opacity": "0"}, "slow");
    },
    function() {
    jQuery(this).stop().animate({"opacity": "1"}, "slow");
    });
});