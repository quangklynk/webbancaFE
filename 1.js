 $(function(){
    // header
    $(window).scroll(function () {
        const position = $(window).scrollTop();
        if (position > 200) {
            $("header").addClass("fixed");
        } else {
            $("header").removeClass("fixed");
        }
    });
})  
 