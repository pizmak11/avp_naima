<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <meta name="description" content="Wykonujemy projekty na najwyższym poziomie dla marek rozpoznawalnych na rynku deweloperskim i architektonicznym. Dokładamy wszelkich starań, aby sprostać oczekiwaniom nawet najbardziej wymagających klientów.">
        <?php wp_head(); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/hide-and-seek.js"></script>
        <script>
            function loading() {
                $("#loading-icon").addClass("hide");
                setTimeout(()=> { $("#loading").addClass("hide"); }, 500);
                headerFun();
            }
            function show() { $("nav").toggleClass("active"); }
        </script>
    </head>

    <body <?php body_class(); ?> onload="loading()">
        <header>
            <div class="logo-mobile"><a onclick="changeSec(1)" href="#home"><img src="wp-content/themes/naima/imgs/logo.png" alt="Naima"></a></div>
            <button id="menu-btn" onclick="show()"><div></div></button>
            <nav>
                <ul class="center">
                    <li><a onclick="changeSec(4)" href="#nasze-prace">Nasze prace</a></li>
                    <li><a onclick="changeSec(6)" href="#otwarte-stanowiska">Pracuj z nami</a></li>
                    <li class="logo"><a onclick="changeSec(1)" href="#home"><img src="wp-content/themes/naima/imgs/logo.png" alt="Naima"></a></li>
                    <li><a onclick="changeSec(7)" href="#nasze-biuro">Nasze biuro</a></li>
                    <li><a onclick="changeSec(8)" href="#kontakt">Kontakt</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div id="loading" class="flex-center"><div id="loading-icon"></div></div>

            <ul id="navigation">
                <li class="center"><a class="sec1" onclick="changeSec(1)" href="#home"></a><span>Strona g&#322;&#243;wna</span></li>
                <li class="center"><a class="sec2" onclick="changeSec(2)" href="#powitanie"></a><span>Cze&#347;&#263;!</span></li>
                <li class="center"><a class="sec3" onclick="changeSec(3)" href="#o-nas"></a><span>O nas</span></li>
                <li class="center"><a class="sec4" onclick="changeSec(4)" href="#nasze-prace"></a><span>Nasze prace</span></li>
                <li class="center"><a class="sec5" onclick="changeSec(5)" href="#kto-u-nas-pracuje"></a><span>Kto u nas pracuje</span></li>
                <li class="center"><a class="sec6" onclick="changeSec(6)" href="#otwarte-stanowiska"></a><span>Otwarte stanowiska</span></li>
                <li class="center"><a class="sec7" onclick="changeSec(7)" href="#nasze-biuro"></a><span>Nasze biuro</span></li>
                <li class="center"><a class="sec8" onclick="changeSec(8)" href="#kontakt"></a><span>Kontakt</span></li>
                <li class="center"><a class="sec9" onclick="changeSec(9)" href="#mapa"></a><span>Mapa</span></li>
            </ul>