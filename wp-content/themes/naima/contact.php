<?php
get_header(); ?>

<?php function avp_page_featured_image() {
    $id = get_queried_object_id ();
    // Check if the post/page has featured image
    if ( has_post_thumbnail( $id ) ) {
        // Change thumbnail size, but I guess full is what you'll need
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
        $url = $image[0];
    } else {
        $url = 'undefined';
    }
    return $url;
} ?>

<?php function avp_page_featured_alt() {
    $id = get_queried_object_id ();
    if ( has_post_thumbnail( $id ) ) {
        $alt = get_post_meta(get_post_thumbnail_id( $id ), '_wp_attachment_image_alt', true); 
    } else {
        $alt = 'undefined';
    }
    return $alt;
} ?>

<?php if( avp_page_featured_image() !== 'undefined' && avp_page_featured_alt() !== 'undefined' ) : ?>
<div class="pageBannerImage">
    <img src="<?php echo esc_url ( avp_page_featured_image() ); ?>" alt="<?php echo esc_attr( avp_page_featured_alt() ); ?>" class="pageBannerImage__image">
</div>
<?php endif; ?>

<?php
//GET CONTACT IMAGE
if (get_field('contact_image')) {
    $contact_img = get_field('contact_image'); }
?>

<div class="row">
    <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="66" title="Contact form"]'); ?>
    </div>
    <div class="contact-data" style="background-image: url('<?php echo $contact_img; ?>');">
        <div id="contact-text">
            <?php echo apply_filters('the_content', get_post_field('post_content', 17)); ?>
        </div>
    </div>
</div>

<?php
get_footer();