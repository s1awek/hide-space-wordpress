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

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer"  data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <div class="row row-contact">
                <div class="col-auto col-footer-email row-contact__item">
                    <i class="fas fa-envelope"></i><span class="email-address">Email: hello@hide-space.com</span>
                </div>
                <div class="col-auto col-footer-phone row-contact__item">
                    <i class="fas fa-mobile-alt"></i><span class="phone-number">Zadzwoń: +48 555 555 555</span>
                </div>
                <div class="col-auto col-footer-phone row-contact__item">
                    <i class="fas fa-map-marker-alt"></i><span class="phone-number">Hide Space, Orzesze 500-50, ul.
                        Błotna 48/50</span>
                </div>
            </div>
            <div class="row row-footer-main">
                <div class="col-md-5 col-footer-text">
                    <p class="footer-text">Sit sint cillum sit dolor Lorem irure pariatur in enim deserunt laborum.
                        Culpa magna est laborum laboris sunt id excepteur et minim eiusmod ullamco excepteur. Veniam
                        est ad minim velit ea.</p>
                    <p class="footer-text">Nostrud Lorem fugiat nisi pariatur labore laboris nostrud. Duis consequat
                        laborum consectetur laboris. Ut sit dolore deserunt esse culpa excepteur cupidatat sunt velit
                        elit exercitation do eu ullamco. Occaecat sint esse id ipsum incididunt sunt in proident ea
                        consectetur officia amet excepteur. Pariatur nisi irure consequat voluptate dolore sint ad
                        excepteur est. Ut id reprehenderit ad magna quis cupidatat reprehenderit culpa qui elit dolore
                        nostrud dolor.</p>
                </div>
                <ul class="footer-menu col-md-3">
                    <li class="footer-menu__item">
                        <a href="#" class="footer-menu__link">Polityka Prywatności</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="#" class="footer-menu__link">Współpracuj z nami</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="#" class="footer-menu__link">Pracuj dla nas</a>
                    </li>
                    <li class="footer-menu__item">
                        <a href="#" class="footer-menu__link">O nas</a>
                    </li>
                </ul>
                <div class="col-md-4 col-newsletter">
                    <h4 class="header-newsletter">Newsletter</h4>
                    <p class="newsletter-text">Jeśli chcesz być na bieżąco z nowościami i co jakiś czas otrzymywać
                        informację o tym co sie u nas dzieje, zapisz się do naszego newslettera. Dbamy o Twoją
                        prywatność i nigdy nie wysyłamy spamu. Możesz się w każdej chwili wypisać jednym kliknięciem.</p>
                    <form class="form-newsletter">
                        <input type="email" aria-label="Email" placeholder="Email" class="form-newsletter__email" required>
                        <input type="submit" class="form-newsletter__submit btn btn-secondary" value="Zapisz się">
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
                        © Hide Space 2019. Wszelkie Prawa zastrzeżone.
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

