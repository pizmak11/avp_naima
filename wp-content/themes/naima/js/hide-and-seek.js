var wh = $(this).height();
$(window).resize(function() { wh = $(this).height(); });

var prevScrollpos = window.pageYOffset;

$(window).on("mousewheel scroll", function(event) {
    var currentScrollPos = window.pageYOffset;

    setTimeout(()=> {
        $(".h").each(function() {
            var scr = $(window).scrollTop() + (wh * 0.8);
            var top = $(this).offset().top;
            if(scr > top) { $(this).removeClass("hidden"); }
            else { $(this).addClass("hidden"); }
        });
    }, 100);
});

setTimeout(()=> {
    $(".h").each(function() {
        var scr = $(window).scrollTop() + (wh * 0.7);
        var top = $(this).offset().top;
        if(scr > top) { $(this).removeClass("hidden"); }
        else { $(this).addClass("hidden"); }
    });
}, 500);