$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 60) {
        $('.site-nav').addClass('nav-scrolled');
    }else {
        $('.site-nav').removeClass('nav-scrolled');
    }
});
