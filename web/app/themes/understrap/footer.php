<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer"  <?php echo(is_front_page()) ? 'data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="top-bottom"' : ''?>>
        <div class="container">
            <div class="row row-contact">
                <div class="col-auto col-footer-email row-contact__item">
                    <i class="fas fa-envelope"></i><span class="email-address">Email: <?php the_field('footer_email', 'option'); ?></span>
                </div>
                <div class="col-auto col-footer-phone row-contact__item">
                    <i class="fas fa-mobile-alt"></i><span class="phone-number"><?php esc_html_e('Call us', 'hs'); ?>: <?php the_field('footer_phone', 'option'); ?></span>
                </div>
                <div class="col-auto col-footer-phone row-contact__item">
                    <i class="fas fa-map-marker-alt"></i><span class="phone-address"><?php the_field('footer_address', 'option'); ?></span>
                </div>
            </div>
            <div class="row row-footer-main">
                <div class="col-md-5 col-footer-text">
                <?php
                if( have_rows('footer_text', 'option') ):
                    while ( have_rows('footer_text', 'option') ) : the_row();
                        ?><p class="footer-text"><?php the_sub_field('footer_text_paragraph'); ?></p><?php
                    endwhile;
                endif;
                ?>
                </div>
                <?php
                    wp_nav_menu(
                        array(
                        'theme_location'  => 'footer_menu',
                        'container'       => false,
                        'menu_class'      => 'footer-menu col-md-3',
                        'fallback_cb'     => '',
                        'menu_id'         => 'footer_menu',
                        'depth'           => 1,
                        'walker'          => '',
                        )
                    );
                ?>
                <div class="col-md-4 col-newsletter">
                    <h4 class="header-newsletter"><?php the_field('newsletter_title', 'option'); ?></h4>
                    <p class="newsletter-text"><?php the_field('footer_newsletter_text', 'option'); ?></p>
                    <form class="form-newsletter">
                        <input type="email" aria-label="Email" placeholder="Email" class="form-newsletter__email" required>
                        <input type="submit" class="form-newsletter__submit btn btn-secondary" value="<?php esc_html_e('Sign Up!', 'hs'); ?>">
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <footer class="copyright">
        <div class="container">
            <div class="row row-copyright">
                <div class="col-12 col-copyright">
                    <p class="copyright-text">
                        © Hide Space <?php echo date("Y"); ?>. Wszelkie Prawa zastrzeżone.
                    </p>
                    <p class="creator-text">
                        Strona stworzona przez <a href="https://wellmade.online" class="creator-link"><strong>wellmade.online</strong></a>
                    </p>
                </div>

            </div>
        </div>
    </footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

