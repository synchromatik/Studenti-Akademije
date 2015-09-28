$(function() {
    $('.navbar-toggle').click(function(){
        $('.subheader--homepage').animate({height:'300px'}, 500);
        $('.subheader--homepage h1').hide();
        $('.logo').hide();
        //this method increases the height to 72px
    });
});
