$(function() {
    $('.navbar-toggle').click(function(){
        $('.subheader--homepage').animate({height:'300px'}, 500);
        $('.subheader--homepage h1').hide();
        $('.logo').hide();
        //this method increases the height to 72px
    });
    // Bit of animation
    // This demo uses drag.
    $(".col-md-8 .col-md-6").velocity("transition.slideLeftIn", { stagger: 250 });
});
