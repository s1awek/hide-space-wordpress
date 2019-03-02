<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

	<section id="bgndVideo" class="hero">
        <div class="player" id="P1" data-property="{videoURL:'7NV3fpOooZw',containment:'#bgndVideo', showControls:false, autoPlay:true, loop:true, mute:true, stopMovieOnBlur: true, addRaster:false, useOnMobile:false, mobileFallbackImage: 'https://res.cloudinary.com/s1aw3k/image/upload/v1551104668/bg_mobile_d8jjr0.jpg', optimizeDisplay:true, addFilters: {grayscale: 50,opacity: 30}}"></div>
        <div class="container">
            <div data-aos="fade-in" data-aos-duration="2000" data-aos-once="true" class="hero__inner">
                <h2 class="hero__header">
                    Ukryj przestrzeń.<br>Dla Siebie.
                </h2>
            </div>
        </div>
    </section>
    <section class="examples">
        <div class="container">
            <div class="row examples__row">
                <div class="col-md-4 col-example col-example--first" data-aos="slide-right" data-aos-duration="1000" data-aos-once="true">
                    <div class="col-example__inner-wrap">
                        <a href="#" class="col-example__link">Pomieszczenia Podziemne</a>
                    </div>
                </div>
                <div class="col-md-4 col-example col-example--second" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                    <div class="col-example__inner-wrap">
                        <a href="#" class="col-example__link">Konstrukcje Pływające</a>
                    </div>
                </div>
                <div class="col-md-4 col-example col-example--third" data-aos="slide-left" data-aos-duration="1000" data-aos-once="true">
                    <div class="col-example__inner-wrap">
                        <a href="#" class="col-example__link">Garaże Podziemne</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="strong-points">
        <div class="container">
            <div class="row strong-points__row-title">
                <div class="col-12 strong-points__col-header">
                    <h2 class="header-basic">Zapewniamy</h2>
                </div>
            </div>
            <div class="row strong-points__row">
                <div class="col-lg-4 strong-points__col-item">
                    <div class="strong-points-item">
                        <div class="strong-points-item__ico-wrap" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                            <i class="fas fa-shuttle-van"></i>
                        </div>
                        <div class="strong-points-item__content-wrap">
                            <h4 class="strong-points-item__header">Transport</h4>
                            <p class="strong-points-item__paragraph">Ut deserunt deserunt consequat aliqua nostrud
                                velit duis enim duis eu mollit esse mollit ad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 strong-points__col-item">
                    <div class="strong-points-item">
                        <div class="strong-points-item__ico-wrap" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="strong-points-item__content-wrap">
                            <h4 class="strong-points-item__header">Planowanie</h4>
                            <p class="strong-points-item__paragraph">Ut deserunt deserunt consequat aliqua nostrud
                                velit duis enim duis eu mollit esse mollit ad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 strong-points__col-item">
                    <div class="strong-points-item">
                        <div class="strong-points-item__ico-wrap" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="strong-points-item__content-wrap">
                            <h4 class="strong-points-item__header">Opatentowana technologia</h4>
                            <p class="strong-points-item__paragraph">Ut deserunt deserunt consequat aliqua nostrud
                                velit duis enim duis eu mollit esse mollit ad.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row strong-points__row">
                <div class="col-lg-4 strong-points__col-item">
                    <div class="strong-points-item">
                        <div class="strong-points-item__ico-wrap" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                            <i class="fas fa-scroll"></i>
                        </div>
                        <div class="strong-points-item__content-wrap">
                            <h4 class="strong-points-item__header">Pozwolenia i formalności</h4>
                            <p class="strong-points-item__paragraph">Ut deserunt deserunt consequat aliqua nostrud
                                velit duis enim duis eu mollit esse mollit ad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 strong-points__col-item">
                    <div class="strong-points-item">
                        <div class="strong-points-item__ico-wrap" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                            <i class="fas fa-stopwatch"></i>
                        </div>
                        <div class="strong-points-item__content-wrap">
                            <h4 class="strong-points-item__header">Szybka realizacja</h4>
                            <p class="strong-points-item__paragraph">Ut deserunt deserunt consequat aliqua nostrud
                                velit duis enim duis eu mollit esse mollit ad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 strong-points__col-item">
                    <div class="strong-points-item">
                        <div class="strong-points-item__ico-wrap" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                            <i class="fas fa-fist-raised"></i>
                        </div>
                        <div class="strong-points-item__content-wrap">
                            <h4 class="strong-points-item__header">Solidność i trwałość</h4>
                            <p class="strong-points-item__paragraph">Ut deserunt deserunt consequat aliqua nostrud
                                velit duis enim duis eu mollit esse mollit ad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects">
        <div class="container">
            <div class="row projects__row-title">
                <div class="col-12 projects__col-header">
                    <h2 class="header-basic">Zrealizowane projekty</h2>
                </div>
            </div>
            <div class="row projects__row">
                <div class="col-12 projects__slider">
                    <div class="project-item project-item--p1">
                        <div class="project-item__inner">
                            <a href="#" class="project-item__link">
                                <h4 class="project-item__title">Projekt 1</h4>
                                <p class="project-item__description">Dolor irure minim ut laboris.</p>
                            </a>
                        </div>
                    </div>
                    <div class="project-item project-item--p2">
                        <div class="project-item__inner">
                            <a href="#" class="project-item__link">
                                <h4 class="project-item__title">Projekt 2</h4>
                                <p class="project-item__description">Dolor irure minim ut laboris.</p>
                            </a>
                        </div>
                    </div>
                    <div class="project-item project-item--p3">
                        <div class="project-item__inner">
                            <a href="#" class="project-item__link">
                                <h4 class="project-item__title">Projekt 3</h4>
                                <p class="project-item__description">Dolor irure minim ut laboris.</p>
                            </a>
                        </div>
                    </div>
                    <div class="project-item project-item--p4">
                        <div class="project-item__inner">
                            <a href="#" class="project-item__link">
                                <h4 class="project-item__title">Projekt 4</h4>
                                <p class="project-item__description">Dolor irure minim ut laboris.</p>
                            </a>
                        </div>
                    </div>
                    <div class="project-item project-item--p5">
                        <div class="project-item__inner">
                            <a href="#" class="project-item__link">
                                <h4 class="project-item__title">Projekt 5</h4>
                                <p class="project-item__description">Dolor irure minim ut laboris.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="in-touch">
        <div class="container">
            <div class="row in-touch__row">
                <div class="col-md-6 col-cta" data-aos="slide-right" data-aos-duration="1000" data-aos-once="true">
                    <div class="cta">
                        <h3 class="cta__header">
                            Brzmi interesująco?
                        </h3>
                        <p class="cta__text">Skontaktuj się z nami już teraz korzystając z formularza. Odpowiemy na
                            każdą wiadomość, nawet jeśli chesz tylko powiedzieć cześć ;)</p>
                    </div>
                </div>
                <div class="col-md-6 col-form" data-aos="slide-left" data-aos-duration="1000" data-aos-once="true">
                    <form class="cta-form">
                        <input type="text" aria-label="Name" class="cta-form__name cta-form__item" placeholder="Imię i Nazwisko" required>
                        <input type="email" aria-label="Email" class="cta-form__email cta-form__item" placeholder="Email" required>
                        <textarea name="cta_message" aria-label="Message" id="ctaMessage" class="cta-form__message cta-form__item"></textarea>
                        <input type="submit" class="cta-form__submit btn btn-primary" value="Wyślij">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="logos">
        <div class="container">
            <div class="row logos__row">
                <div class="logos-item">
                    <a href="#" class="logos-item__link">
                        <img src="img/logo_envanto.png" alt="Logo" class="logos-item__img">
                    </a>
                </div>
                <div class="logos-item">
                    <a href="#" class="logos-item__link">
                        <img src="img/logo_joomla.png" alt="Logo" class="logos-item__img">
                    </a>
                </div>
                <div class="logos-item">
                    <a href="#" class="logos-item__link">
                        <img src="img/logo_shopify.png" alt="Logo" class="logos-item__img">
                    </a>
                </div>
                <div class="logos-item">
                    <a href="#" class="logos-item__link">
                        <img src="img/logo_woocommerce.png" alt="Logo" class="logos-item__img">
                    </a>
                </div>
                <div class="logos-item">
                    <a href="#" class="logos-item__link">
                        <img src="img/logo_wp.png" alt="Logo" class="logos-item__img">
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();
