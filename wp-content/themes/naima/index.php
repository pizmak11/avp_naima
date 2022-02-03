<?php
session_start();
get_header(); ?>

<?php function avp_page_featured_image() {
    $id = get_queried_object_id ();
    if (has_post_thumbnail($id)) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
        $url = $image[0];
    } else { $url = 'undefined'; }
    return $url;
} ?>

<?php function avp_page_featured_alt() {
    $id = get_queried_object_id ();
    if (has_post_thumbnail($id)) {
        $alt = get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true); 
    } else { $alt = 'undefined'; }
    return $alt;
} ?>

<?php

if($_SESSION['is_sent'] == "yes") { ?>
<div id="sent" class="flex-center"><div><p>Twoja wiadomo&#347;&#263; zosta&#322;a wys&#322;ana pomy&#347;lnie!</p><span id="sent-close">&#215;</span></div></div>
<?php } 
else if($_SESSION['is_sent'] == "no") { ?>
<div id="sent" class="flex-center">
    <div>
        <p><b>Wyst&#261;pi&#322; b&#322;&#261;d wysy&#322;ania wiadomo&#347;ci.</b></p>
        <p>Pow&#243;d: <?php echo $_SESSION['reason']; ?></p>
        <span id='sent-close'>&#215;</span>
    </div>
    <div id="spam-info">
        <ul>
            <li>Imi&#281; i nazwisko nie mog&#261; by&#263; identyczne.</li>
            <li>Tre&#347;&#263; wiadomo&#347;ci zawiera blokowane s&#322;owa.</li>
            <li>Tw&#243;j adres IP mo&#380;e by&#263; blokowany przez formularz strony.</li>
        </ul>
    </div>
</div>
<?php }

session_destroy();
?>

<section class="s1" id="home">
    <div class="white" style="background-image: url(<?php echo get_field('home_image_1'); ?>)">
        <div>
            <div>
                <h1 class="h hidden">Zamieniamy idee w atrakcyjne wizualizacje</h1>
                <!--<p class="h hidden delay2">Tworzymy grafiki, które anga&#380;uj&#261; i dostarczaj&#261; wyniki</p>-->
            </div>
        </div>
    </div>
</section>

<section class="s2" id="powitanie">
    <div class="white" style="background-image: url(<?php echo get_field('zobacz_0_img'); ?>)">
        <div class="green-overflow">
            <div class="h hidden content">
                <h2>Cze&#347;&#263;!</h2>
                <p><?php echo get_field('zobacz_0'); ?></p>
                <a class="button go-to-btn" href="#kontakt">Do&#322;&#261;cz do nas<span></span></a>
            </div>
        </div>
    </div>
</section>

<section class="s3" id="o-nas">
    <div>
        <!--<div class="flash" id="flash1"></div>-->
        <div class="columns h hidden">
            <?php while(have_rows('home_second')):the_row(); ?>
            <div>
                <img src="<?php the_sub_field('home_icon_2'); ?>" alt="Naima - <?php the_sub_field('home_header_2'); ?>">
                <h3><?php the_sub_field('home_header_2'); ?></h3>
                <p><?php the_sub_field('home_desc_2'); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<section class="s4" id="nasze-prace">
    <div class="displace">
        <div class="slider fading">
            <div>
                <?php while(have_rows('o_nas_slider_1', 399)):the_row(); ?>
                <div style="background-image: url(<?php the_sub_field('o_nas_slider_img'); ?>)"></div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="absolute white grey-overflow">
            <div class="h hidden content">
                <h2>Nasze prace</h2>
                <p><?php echo get_field('o_nas', 399); ?></p>
                <button class="button" onclick="zobacz('.s4')">Portfolio<span></span></button>
            </div>
        </div>
        <div class="galeria white">
            <div class="center">
                <?php
                while(have_rows('o_nas_slider_2', 399)):the_row(); ?>
                <div class="item" data-src="<?php the_sub_field('o_nas_slider_img2'); ?>"></div>
                <?php endwhile; ?>
            </div>
            <div class="center controls">
                <div class="pagination s4p">
                    <?php
                    $p = 1;
                    while(have_rows('o_nas_slider_2', 399)):the_row();
                    echo "<button class='flex-center'>$p</button>";
                    $p++;
                    endwhile; ?>
                </div>
                <button class="prev control flex-center"><span></span></button>
                <button class="next control flex-center"><span></span></button>
                <button class="back" onclick="zobacz('.s4')"><span></span>Powr&#243;t</button>
            </div>
        </div>
    </div>
</section>

<section class="s5" id="kto-u-nas-pracuje">
    <div class="displace">
        <div class="half center">
            <!--<div class="flash" id="flash2"></div>-->
            <div class="grey">
                <div class="h hidden">
                    <h2>Kto u nas pracuje</h2>
                    <p><?php echo get_field('zobacz_1'); ?></p>
                    <button class="button" onclick="zobacz('.s5')">Zobacz<span></span></button>
                </div>
            </div>
            <div style="background-image: url(<?php echo get_field('zobacz_1_img'); ?>)"></div>
        </div>
        <div class="center" style="background-image: url(<?php echo get_field('kto_u_nas_pracuje_obraz', 333); ?>)">
            <div class="boxes flex-center">
                <?php
                $s = ["French Project Manager", "Manager 2D", "Manager 3D", "Grafik 2D", "Grafik 3D", "Web Developer"];
                for($x=0; $x < sizeof($s); $x++) {
                    echo "<div class='box box".($x+1).". delay$x'>
                            <h4>$s[$x]</h4>
                            <button>Obowi&#261;zki<span></span></button>
                        </div>";
                }?>
                <div class="btn-wrap white"><button class="back" onclick="zobacz('.s5')"><span></span>Powr&#243;t</button></div>
            </div>
            <div class="stan-wrap">
                <div class="stan stan-left grey">
                    <div>
                        <h4></h4>
                        <h5>Czym si&#281; zajmuje?</h5>
                        <p class="text text1"><?php the_field('stanowisko1', 333); ?></p>
                        <p class="text text2"><?php the_field('stanowisko2', 333); ?></p>
                        <p class="text text3"><?php the_field('stanowisko3', 333); ?></p>
                        <p class="text text4"><?php the_field('stanowisko4', 333); ?></p>
                        <p class="text text5"><?php the_field('stanowisko5', 333); ?></p>
                        <p class="text text6"><?php the_field('stanowisko6', 333); ?></p>
                        <button class="back"><span></span>Powr&#243;t</button>
                    </div>
                </div>
                <div class="stan stan-right" style="background-image: url(wp-content/uploads/2018/05/cam03_B_Night_BIG.jpg)"></div>
            </div>
        </div>
    </div>
</section>

<section class="s6" id="otwarte-stanowiska">
    <div class="displace">
        <div class="half">
            <!--<div class="flash" id="flash2"></div>-->
            <div style="background-image: url(<?php echo get_field('zobacz_2_img'); ?>)"></div>
            <div class="grey">
                <div class="h hidden">
                    <h2>Otwarte stanowiska</h2>
                    <p><?php echo get_field('zobacz_2'); ?></p>
                    <button class="button" onclick="zobacz('.s6')">Zobacz<span></span></button>
                </div>
            </div>
        </div>
        <div class="center" style="background-image: url(<?php echo get_field('kto_u_nas_pracuje_obraz', 333); ?>)">
            <div class="boxes flex-center">
                <?php
                $st = ["French Project Manager", "Manager 2D", "Manager 3D", "Grafik 2D", "Grafik 3D", "Web Developer", "Programista", "Pracownik biura z j. francuskim"];
                $sCheck = [
                    get_field('open_project_manager', 13),
                    get_field('open_manager_2d', 13),
                    get_field('open_manager_3d', 13),
                    get_field('open_grafik_2d', 13),
                    get_field('open_grafik_3d', 13),
                    get_field('open_web_developer', 13),
                    get_field('open_programista', 13),
                    get_field('open_pracownik_biura', 13)
                ];
                for($x=0; $x<sizeOf($sCheck); $x++) {
                    if($sCheck[$x]) {
                        echo "<div class='box box".($x+1)." delay$x'>
                                <h4>".$st[$x]."</h4>
                                <button>Zobacz<span></span></button>
                            </div>";
                    }} ?>
                <div class="btn-wrap white"><button class="back" onclick="zobacz('.s6')"><span></span>Powr&#243;t</button></div>
            </div>
            <div class="stan-wrap">
                <div class="stan stan-left grey">
                    <div>
                        <h4 id="stan-name"></h4>
                        <h6>&#321;&#243;d&#378;, Poland</h6>
                        <div class="stan-text">
                            <h5>Wyzwania</h5>
                            <p class="text text1"><?php the_field('aplikuj1', 13); ?></p>
                            <p class="text text2"><?php the_field('aplikuj2', 13); ?></p>
                            <p class="text text3"><?php the_field('aplikuj3', 13); ?></p>
                            <p class="text text4"><?php the_field('aplikuj4', 13); ?></p>
                            <p class="text text5"><?php the_field('aplikuj5', 13); ?></p>
                            <p class="text text6"><?php the_field('aplikuj6', 13); ?></p>
                            <p class="text text7"><?php the_field('aplikuj7', 13); ?></p>
                            <p class="text text8"><?php the_field('aplikuj8', 13); ?></p>
                            <h5>Wymagania</h5>
                            <p class="text text1"><?php the_field('aplikuj1b', 13); ?></p>
                            <p class="text text2"><?php the_field('aplikuj2b', 13); ?></p>
                            <p class="text text3"><?php the_field('aplikuj3b', 13); ?></p>
                            <p class="text text4"><?php the_field('aplikuj4b', 13); ?></p>
                            <p class="text text5"><?php the_field('aplikuj5b', 13); ?></p>
                            <p class="text text6"><?php the_field('aplikuj6b', 13); ?></p>
                            <p class="text text7"><?php the_field('aplikuj7b', 13); ?></p>
                            <p class="text text8"><?php the_field('aplikuj8b', 13); ?></p>
                            <h5>Nasza oferta</h5>
                            <p class="text text1"><?php the_field('aplikuj1c', 13); ?></p>
                            <p class="text text2"><?php the_field('aplikuj2c', 13); ?></p>
                            <p class="text text3"><?php the_field('aplikuj3c', 13); ?></p>
                            <p class="text text4"><?php the_field('aplikuj4c', 13); ?></p>
                            <p class="text text5"><?php the_field('aplikuj5c', 13); ?></p>
                            <p class="text text6"><?php the_field('aplikuj6c', 13); ?></p>
                            <p class="text text7"><?php the_field('aplikuj7c', 13); ?></p>
                            <p class="text text8"><?php the_field('aplikuj8c', 13); ?></p>
                        </div>
                        <button class="back"><span></span>Powr&#243;t</button>
                        <button class="go-to-btn">Aplikuj</button>
                    </div>
                </div>
                <div class="stan stan-right" style="background-image: url(wp-content/uploads/2018/05/cam03_B_Night_BIG.jpg)"></div>
            </div>
        </div>
    </div>
</section>

<section class="s7" id="nasze-biuro">
    <div class="displace">
        <div class="half">
            <!--<div class="flash" id="flash2"></div>-->
            <div class="grey">
                <div class="h hidden">
                    <h2>Nasze biuro</h2>
                    <p><?php echo get_field('zobacz_3'); ?></p>
                    <button class="button" onclick="zobacz('.s7')">Zobacz<span></span></button>
                </div>
            </div>
            <div style="background-image: url(<?php echo get_field('zobacz_3_img'); ?>)"></div>
        </div>
        <div class="galeria white">
            <div>
                <?php
                while(have_rows('home_gallery')):the_row(); ?>
                <div class="item" data-src="<?php the_sub_field('office_images'); ?>"></div>
                <?php endwhile; ?>
            </div>
            <div class="controls">
                <button class="prev control"><span></span></button>
                <button class="next control"><span></span></button>
                <button class="back" onclick="zobacz('.s7')"><span></span>Powr&#243;t</button>
            </div>
        </div>
        <div class="stan-wrap">
            <div class="stan stan-left grey">
                <div>
                    <h4></h4>
                    <h5>Czym si&#281; zajmuje?</h5>
                    <p class="text text1"><?php the_field('stanowisko1', 333); ?></p>
                    <p class="text text2"><?php the_field('stanowisko2', 333); ?></p>
                    <p class="text text3"><?php the_field('stanowisko3', 333); ?></p>
                    <p class="text text4"><?php the_field('stanowisko4', 333); ?></p>
                    <p class="text text5"><?php the_field('stanowisko5', 333); ?></p>
                    <p class="text text6"><?php the_field('stanowisko6', 333); ?></p>
                    <button class="back" onclick="zobacz('.s7')"><span></span>Powr&#243;t</button>
                </div>
            </div>
            <div class="stan stan-right" style="background-image: url(wp-content/uploads/2018/05/cam03_B_Night_BIG.jpg)"></div>
        </div>
    </div>
</section>

<section class="s8" id="kontakt">
    <div>
        <div class="center">
            <div>
                <h2>Kontakt</h2>
                <form action="wp-content/themes/naima/send.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <!--<p>Stanowisko</p>-->
                        <select name="stanowisko" id="stanowisko">
                            <option value="" selected disabled>Wybierz stanowisko</option>
                            <?php
                            for($x=0; $x<sizeOf($sCheck); $x++) {
                                if($sCheck[$x]) {
                                    echo "<option value='$st[$x]'>$st[$x]</option>";
                                }
                            } ?>
                        </select>
                    </div>
                    <div><p>Imi&#281;</p><input type="text" name="name" placeholder="" required></div>
                    <div><p>Nazwisko*</p><input type="text" name="surname" placeholder="" required></div>
                    <div><p>Numer telefonu*</p><input type="text" name="telephone" placeholder="" required></div>
                    <div><p>Adres e-mail*</p><input type="email" name="email" placeholder="" required></div>
                    <div><p>Tre&#347;&#263; wiadomo&#347;ci</p><textarea id="message" name="message" placeholder="" required></textarea></div>
                    <div style="display: none;">
                        <input type="text" name="subject" id="subject">
                        <input type="text" name="ipcheck" id="ipcheck" value="<?php echo getenv("REMOTE_ADDR") ; ?>">
                    </div>
                    <div id="klauzula" class="center">
                        <input type="checkbox" name="kla" id="kla" required>
                        <label for="kla">&#10004;</label><p>Prosimy o dopisanie klauzuli: "Wyra&#380;am zgod&#281; na przetwarzane moich danych osobowych zawartych w ofercie pracy dla potrzeb niezb&#281;dnych do realizacji procesu rekrutacji (w rozumieniu ustawy z dn. 29 sierpnia 1997 r., o ochronie danych osobowych, Dz. U. Z 1997., nr 133, poz. 883)".</p>
                    </div>
                    <div class="file-wrap">
                        <input type="file" name="file[]" id="file" class="inputfile" data-multiple-caption="Za&#322;&#261;czono plik&#243;w: {count}" multiple="multiple"/>
                        <label for="file"><?php include("imgs/file-icon.svg"); ?>Za&#322;&#261;cz pliki</label>
                    </div>
                    <div><button type="submit" id="submit-form">Wy&#347;lij<span></span></button></div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="s9" id="mapa">
    <div class="map">
        <img src="wp-content/themes/naima/imgs/map_all_v2.png" alt="Jak dotrze&#263; do Naimy?">
        <div class="map-show" id="map-show-1"></div>
        <div class="draw draw1" id="draw1"></div>
        <div class="draw draw1" id="draw2"></div>
        <div class="draw draw1" id="draw1x"></div>
        <div class="map-show" id="map-show-2"></div>
        <div class="draw draw2" id="draw3"></div>
        <div class="draw draw2" id="draw4"></div>
        <div class="draw draw2" id="draw5"></div>
        <div class="draw draw2" id="draw2x"></div>
        <div class="map-show" id="map-show-3"></div>
        <div class="draw draw3" id="draw6"></div>
        <div class="draw draw3" id="draw7"></div>
        <div class="draw draw3" id="draw8"></div>
        <div class="draw draw3" id="draw3x"></div>
    </div>
</section>

<script type="text/javascript">

    // MAP ///////////////////////////////////////////////////////

    $(".map-show").mouseover(function() {
        var id = $(this).prop("id");
        if(id == "map-show-1") { $(".draw1").addClass("active"); }
        if(id == "map-show-2") { $(".draw2").addClass("active"); }
        if(id == "map-show-3") { $(".draw3").addClass("active"); }
    });

    $(".map-show").mouseout(function() {
        var id = $(this).prop("id");
        if(id == "map-show-1") { $(".draw1").removeClass("active"); }
        if(id == "map-show-2") { $(".draw2").removeClass("active"); }
        if(id == "map-show-3") { $(".draw3").removeClass("active"); }
    });

    // SCROLLING /////////////////////////////////////////////////

    var currSec = 1;
    var scrTr = false;
    const secCnt = $("section").length+1;
    const header = $("header");
    const body = $('html, body');

    document.addEventListener("wheel", (e)=> {
        if(scrTr == false) {
            scrTr = true;
            if (e.deltaY < 0) { currSec--; }
            else if (e.deltaY > 0) { currSec++; }
            scrollToEl();
        }
        setInterval(headerFun(), 500);
    }, false);

    function changeSec(x) { currSec = x; }

    function scrollToEl() {
        if(currSec >= secCnt) { currSec = secCnt; }
        if(currSec < 1) { currSec = 1; }
        var el = $(".s" + currSec);
        (currSec > 2 ? $("#navigation span").addClass("green") : $("#navigation span").removeClass("green"));
        body.animate({ scrollTop: el.offset().top }, 500);
        setTimeout(()=> { scrTr = false; }, 500);
        $("#navigation a").removeClass("active");
        $("nav").removeClass("active");
        $("#navigation .sec" + currSec).addClass("active");
    }

    scrollToEl();

    function headerFun() {
        (window.scrollY >= wh ? header.addClass("scrolled") : header.removeClass("scrolled"));
    }
    document.addEventListener("scroll", function(e) { headerFun(); }, false);

    // SECTION: O NAS ////////////////////////////////////////////

    $(".columns > div:eq(0)").addClass("delay2");
    $(".columns > div:eq(1)").addClass("delay4");
    $(".columns > div:eq(2)").addClass("delay6");

    // SLIDER ////////////////////////////////////////////////////

    var sliderSpeed = 1.5, sliderInterval = 5;
    $(".slider > div").each(function() {
        var el = $(this);
        var imgs = el.find("div");
        var length = imgs.length;
        imgs.first().addClass("active");

        setInterval(()=> {
            var current = el.find(".active");
            var next = current.next();
            current.addClass("fade");
            next.addClass("moving");
            setTimeout(()=> {
                current.removeClass("active");
                current.removeClass("fade");
                el.append(current);
                next.removeClass("moving");
                next.addClass("active");
            }, (sliderSpeed*1000));
        }, (sliderInterval*1000));
    });

    $(".slider div").css("transition-duration", sliderSpeed + "s");

    // DISPLACE BUTTONS //////////////////////////////////////////

    function zobacz(x) {
        $(x + " .displace").toggleClass("move");
        $(x + " .item").each(function() {
            var dataSrc = $(this).attr("data-src");
            $(this).css("background-image", "url(" + dataSrc + ")");
        });
    }

    // GALERIES //////////////////////////////////////////////////

    $(".galeria .item:first-child").addClass("active");

    $(".pagination button").click(function() {
        var parent = $(this).parent();
        var section = parent.prop("class").split(" ")[1].slice(0, -1);
        $("." + section + " .item").removeClass("active");
        $("." + section + " .item:eq(" + ($(this).text()-1) + ")").addClass("active");
    });

    $(".control").click(function() {
        var parent = $(this).parent().parent();
        var active = parent.find(".item.active");
        active.removeClass("active");

        if($(this).hasClass("prev")) {
            active.prev().addClass("active");
            if(parent.find(".item.active").length == 0) {
                parent.find(".item").last().addClass("active");
            }
        }
        if($(this).hasClass("next")) {
            active.next().addClass("active");
            if(parent.find(".item.active").length == 0) {
                parent.find(".item").first().addClass("active");
            }
        }
    });

    // KLAUZULA //////////////////////////////////////////////////

    $("#submit-form").click(()=> {
        if($("#kla").prop("checked") != true) {
            $("#klauzula").addClass("checked");
        }
    });

    // BOXES /////////////////////////////////////////////////////

    $(".box button").click(function() {
        var sec = $(this).closest("section");
        var stan = $(this).parent();
        stan.addClass("choosen");
        sec.find(".stan h4").text(stan.find("h4").text());
        var textNr = stan.attr("class").split(/\s+/)[1].slice(3, 4);
        sec.find(".text" + textNr).addClass("visible");
        sec.find(".stan-wrap").addClass("visible");
        sec.find(".box").addClass("hidden");
        sec.find(".btn-wrap").addClass("hidden");
        setTimeout(()=> { sec.find(".choosen").removeClass("choosen"); }, 1000);
        setTimeout(()=> {
            sec.find(".stan-left, .stan-right").addClass("visible");
            sec.find(".boxes").addClass("hidden");
        }, 1500);
        setTimeout(()=> { sec.find(".boxes, .box, .btn-wrap").removeClass("hidden"); }, 2200);
    });

    $(".stan .back").click(function() {
        var sec = $(this).closest("section");
        sec.find(".stan").removeClass("visible");
        setTimeout(()=> {
            sec.find(".stan-wrap").removeClass("visible");
            sec.find(".stan p").removeClass("visible");
        }, 600);
    });

    // APLIKUJ ///////////////////////////////////////////////////

    $(".go-to-btn").click(()=> {
        var stan = $("#stan-name").text();
        $("#stanowisko").find("option[value='" + stan + "']").prop("selected", "selected");
        changeSec(8);
        scrollToEl();
    });

    //////////////////////////////////////////////////////////////

    $(document).on("click", "header a, #navigation a", function() {
        $("html, body").animate({
            scrollTop: $($.attr(this, "href")).offset().top
        }, 1000);
        scrollToEl();
    });

    var inputs = document.querySelectorAll(".inputfile");
    Array.prototype.forEach.call(inputs, function(input) {
        var label = input.nextElementSibling, labelVal = label.innerHTML;
        input.addEventListener("change", function(e) {
            var fileName = "";
            if(this.files && this.files.length > 1) {
                fileName = (this.getAttribute("data-multiple-caption") || "").replace("{count}", this.files.length);
            }
            else { fileName = e.target.value.split("\\").pop(); }
            if(fileName) { label.innerHTML = fileName; }
            else { label.innerHTML = labelVal; }
        });
    });

    $(document).on('click', '#sent-close', function (event) {
        $("#sent").css("opacity", "0");
        setTimeout(()=> { $("#sent").css("display", "none"); }, 510);
    });

    $("#spam-filters").mouseover(()=> { $("#spam-info").addClass("visible"); });
    $("#spam-filters").mouseout(()=> { $("#spam-info").removeClass("visible"); });

    //////////////////////////////////////////////////////////////

    var touchStart;
    document.addEventListener("touchstart", function(e) {
        touchStart = e.touches[0].clientY;
    }, false);

    document.addEventListener("touchend", function(e) {
        var touchEnd = deltaY = e.changedTouches[0].clientY;
        var difference = Math.abs(touchStart - touchEnd);
        if(difference > 50) { //don't mistake touch with slide
            if(touchStart > touchEnd) { currSec++; }
            else { currSec--; }
            scrollToEl();
        }

    }, false);
</script>

<?php get_footer();