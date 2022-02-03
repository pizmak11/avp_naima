<?php
session_start();

$is = $_SESSION['is_sent'];

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

<?php if(avp_page_featured_image() !== 'undefined' && avp_page_featured_alt() !== 'undefined') : ?>
<div class="pageBannerImage">
    <img src="<?php echo esc_url(avp_page_featured_image()); ?>" alt="<?php echo esc_attr(avp_page_featured_alt()); ?>" class="pageBannerImage__image">
</div>
<?php endif; ?>

<div id="wyslano">
    <h1>&#10004;</h1>

    <?php
    if($_SESSION['is_sent'] == "yes") {
        echo "<h5>Twoja wiadomość została wysłana!</h5>
                <p>Odpowiemy na Twojego maila tak szybko jak to możliwe.<br>Aby powrócić do strony głównej kliknij <a href='http://naima.pl/'>tutaj</a>.</p>";
    }
    else if($_SESSION['is_sent'] == "no") {
        echo "<h5>Nie moglismy wysłać Twojej wiadomości.</h5>
                <p>Spróbuj ponownie później lub <a href='mailto: job@naima.pl'>napisz do nas</a>.</p>";
    ?>
</div>

<style>

    #wyslano {
        margin: 100px auto;
        padding: 60px 30px;
    }

    #wyslano * {
        text-align: center;
    }

    #menu ul li {
        display: none;
    }

    h1 {
        color: #505050;
        border: solid 10px #505050;
        display: block;
        width: 110px;
        margin: 0 auto 30px auto;
    }

    h1::after {
        content: none;
    }

    @media only screen and (max-width: 800px) {
        h1 {
            border: solid 5px #505050;
            width: 60px;

        }
    }

</style>

<?php get_footer();
