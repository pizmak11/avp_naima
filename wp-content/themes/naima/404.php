<?php get_header(); ?>

<div id="error404">
    <h1>404</h1>
    <h5>PODANA PRZEZ CIEBIE STRONA NIE ISTNIEJE W NASZYM SERWISIE.</h5>
    <p>Aby powrócić do strony głównej kliknij <a href="http://naima.pl/">tutaj</a>.</p>
</div>

<style>

    #error404 {
        margin: 100px auto;
        padding: 60px 30px;
    }

    #error404 * {
        text-align: center;
    }

    #menu ul li {
        display: none;
    }

    h1 {
        color: #505050;
        border: solid 10px #505050;
        display: block;
        width: 200px;
        margin: 0 auto 30px auto;
    }

    h1::after {
        content: none;
    }

    @media only screen and (max-width: 800px) {
        h1 {
            border: solid 5px #505050;
            width: 90px;

        }
    }

</style>

<?php get_footer();
