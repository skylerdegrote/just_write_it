

$(function() {
    if($(window).width() < 768){
        $('.logo').find("img").attr("src","../images/logo/logo-web.png");
    }
    else{
        $('.logo').find("img").attr("src","../../images/logo/logo-web-icon.png");
    }

});
