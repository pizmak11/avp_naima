$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    var h = $(window).height();
    if(scroll > 20) {
        $("#logo").css("height", "40px");
        $("#header").css("padding", "10px 0");
    } else {
        $("#logo").css("height", "80px");
        $("#header").css("padding", "20px 0");
    }

    if(scroll > 0.75*h) {
        $("#zobacz-0 div div div").css("margin-left", "0");
        $("#zobacz-0 div div div").css("margin-right", "0");
        $("#zobacz-0 div div div").css("opacity", "1");
    }
    
    if(scroll > h) { $("#go-up").css("opacity", "1"); }
    else { $("#go-up").css("opacity", "0"); }

    if(scroll > 1.5*h) {
        $("#col0 img").css("opacity", "1");
        setTimeout(function() {
            $("#col1 img").css("opacity", "1");
            $("#col0 h4").css("opacity", "1");
        }, 200);
        setTimeout(function() {
            $("#col2 img").css("opacity", "1");
            $("#col1 h4").css("opacity", "1");
            $("#col0 p").css("opacity", "1");
        }, 400);
        setTimeout(function() {
            $("#col2 h4").css("opacity", "1");
            $("#col1 p").css("opacity", "1");
        }, 600);
        setTimeout(function() {
            $("#col2 p").css("opacity", "1");
            $("#flash1").css("left", "100%");
        }, 800);
    }

    if(scroll > 2.75*h) {
        $("#o-nas-text-inside").css("margin-left", "0");
        $("#o-nas-text-inside").css("margin-right", "0");
        $("#o-nas-text-inside").css("opacity", "1");
    }
    if(scroll > 3.75*h) {
        $("#flash2").css("left", "100%");
    }
    if(scroll > 4.75*h) {
        $("#flash3").css("left", "100%");
    }
    if(scroll > 5.75*h) {
        $("#flash4").css("left", "100%");
    }

    if(scroll > 6.5*h) {
        $("#kontakt-1 h2").css("margin-left", "0");
        $("#kontakt-1 h2").css("margin-right", "0");
        $("#kontakt-1 h2").css("opacity", "1");
    }
});