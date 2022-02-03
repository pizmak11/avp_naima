










/*var manu = true, woln = true, fabr = true;
$("#show-manu").mouseover(function() {
    showManu();
    hideWolnosci();
    hideFabryczna();
    setTimeout(function() {
        showManu();
        hideWolnosci();
        hideFabryczna();
    }, 300);
});
$("#show-wolnosci").mouseover(function() {
    showWolnosci();
    hideFabryczna();
    hideManu();
    setTimeout(function() {
        showWolnosci();
        hideFabryczna();
        hideManu();
    }, 300);
});
$("#show-fabryczna").mouseover(function() {
    showFabryczna();
    hideManu();
    hideWolnosci();
    setTimeout(function() {
        showFabryczna();
        hideManu();
        hideWolnosci();
    }, 300);
});

function showManu() {
    if(manu) {
        manu = false;
        $("#mapa-manu").css("opacity", "1");
        $("#draw1").css("left", "28%");
        $("#draw1").css("top", "9%");
        setTimeout(function() {
            $("#draw2").css("top", "19%");
            $("#draw2").css("left", "32%");
        }, 300);
        setTimeout(function() { manu = true; }, 310);
    }
}
function hideManu() {
    if(manu) {
        manu = false;
        $("#mapa-manu").css("opacity", "0");
        $("#draw2").css("top", "-30%");
        $("#draw2").css("left", "29%");
        setTimeout(function() {
            $("#draw1").css("top", "13%");
            $("#draw1").css("left", "18%");
        }, 300);
        setTimeout(function() { manu = true; }, 310);
    }
}

function showWolnosci() {
    if(woln) {
        woln = false;
        $("#mapa-wolnosci").css("opacity", "1");
        $("#draw3").css("top", "0");
        $("#draw3").css("left", "51.3%");
        setTimeout(function() {
            $("#draw4").css("top", "15.1%");
            $("#draw4").css("left", "39%");
        }, 300);
        setTimeout(function() {
            $("#draw5").css("top", "64.7%");
            $("#draw5").css("left", "34%");
        }, 600);
        setTimeout(function() { woln = true; }, 610);
    }
}
function hideWolnosci() {
    if(woln) {
        woln = false;
        $("#mapa-wolnosci").css("opacity", "0");
        $("#draw5").css("top", "61.2%");
        $("#draw5").css("left", "44%");
        setTimeout(function() {
            $("#draw4").css("top", "-17%");
            $("#draw4").css("left", "38%");
        }, 300);
        setTimeout(function() {
            $("#draw3").css("top", "-2%");
            $("#draw3").css("left", "57.3%");
        }, 600);
        setTimeout(function() { woln = true; }, 610);
    }
}

function showFabryczna() {
    if(fabr) {
        fabr = false;
        $("#mapa-fabryczna").css("opacity", "1");
        $("#draw6").css("top", "80%");
        $("#draw6").css("left", "63.2%");
        setTimeout(function() {
            $("#draw7").css("top", "74%");
            $("#draw7").css("left", "62%");
            $("#draw7").css("height", "15%");
        }, 250);
        setTimeout(function() {
            $("#draw8").css("top", "76.3%");
            $("#draw8").css("left", "42.5%");
        }, 500);
        setTimeout(function() {
            $("#draw9").css("top", "64.7%");
            $("#draw9").css("left", "42.8%");
        }, 750);
        setTimeout(function() {
            $("#draw10").css("top", "66%");
            $("#draw10").css("left", "34%");
        }, 900);
        setTimeout(function() { fabr = true; }, 910);
    }
}
function hideFabryczna() {
    if(fabr) {
        fabr = false;
        $("#mapa-fabryczna").css("opacity", "0");
        $("#draw10").css("top", "62.4%");
        $("#draw10").css("left", "44%");
        setTimeout(function() {
            $("#draw9").css("top", "81%");
            $("#draw9").css("left", "43.5%");
        }, 250);
        setTimeout(function() {   
            $("#draw8").css("top", "68%");
            $("#draw8").css("left", "62%");
        }, 500); 
        setTimeout(function() {
            $("#draw7").css("top", "86.6%");
            $("#draw7").css("left", "63.6%");
            $("#draw7").css("height", "10%");
        }, 750);
        setTimeout(function() {
            $("#draw6").css("top", "72%");
            $("#draw6").css("left", "72%");
        }, 900);
        setTimeout(function() { fabr = true; }, 910);
    }
}*/