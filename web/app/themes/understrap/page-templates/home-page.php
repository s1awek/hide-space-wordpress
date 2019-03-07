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
        <div class="player" id="P1" data-property="{videoURL:'<?php the_field('video_url'); ?>',containment:'#bgndVideo', showControls:false, autoPlay:true, loop:true, mute:true, stopMovieOnBlur: true, addRaster:false, useOnMobile:false, mobileFallbackImage: '<?php the_field('video_mobile_bg'); ?>', optimizeDisplay:true, addFilters: {grayscale: <?php the_field('video_gray_scale'); ?>,opacity: <?php the_field('video_opacity'); ?>}}"></div>
        <div class="container">
            <div data-aos="fade-in" data-aos-duration="2000" data-aos-once="true" class="hero__inner">
                <h2 class="hero__header">
				<?php the_field('hero_text'); ?>
                </h2>
            </div>
        </div>
    </section>
    <section class="examples">
        <div class="container">
            <div class="row examples__row">
                <div class="col-md-4 col-example col-example--first" data-aos="slide-right" data-aos-duration="1000" data-aos-once="true">
                    <div class="col-example__inner-wrap" style="background: url(<?php the_field('examples_img_1'); ?>) center center no-repeat;background-size: cover;">
                        <a href="<?php the_field('examples_url_1'); ?>" class="col-example__link"><?php the_field('examples_text_1'); ?></a>
                    </div>
                </div>
                <div class="col-md-4 col-example col-example--second" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                    <div class="col-example__inner-wrap" style="background: url(<?php the_field('examples_img_2'); ?>) center center no-repeat;background-size: cover;">
                        <a href="<?php the_field('examples_url_2'); ?>" class="col-example__link"><?php the_field('examples_text_2'); ?></a>
                    </div>
                </div>
                <div class="col-md-4 col-example col-example--third" data-aos="slide-left" data-aos-duration="1000" data-aos-once="true">
                    <div class="col-example__inner-wrap" style="background: url(<?php the_field('examples_img_3'); ?>) center center no-repeat;background-size: cover;">
                        <a href="<?php the_field('examples_url_3'); ?>" class="col-example__link"><?php the_field('examples_text_3'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if( have_rows('strong_points') ): ?>
    <section class="strong-points" id="content">
        <div class="container">
            <div class="row strong-points__row-title">
                <div class="col-12 strong-points__col-header">
                    <h2 class="header-basic"><?php the_field('strong_points_header'); ?></h2>
                </div>
            </div>
            <div class="row strong-points__row">
                <?php while ( have_rows('strong_points') ) : the_row(); 
                $strong_points_header  = get_sub_field('strong_points_item_header');
                $strong_points_content = get_sub_field('strong_points_item_description');
                $strong_points_icon    = get_sub_field('strong_points_item_icon');
                ?>
                <div class="col-lg-4 strong-points__col-item">
                    <div class="strong-points-item">
                        <div class="strong-points-item__ico-wrap" data-aos="fade-in" data-aos-duration="1000" data-aos-once="true">
                            <i class="<?php echo $strong_points_icon; ?>"></i>
                        </div>
                        <div class="strong-points-item__content-wrap">
                            <h4 class="strong-points-item__header"><?php echo $strong_points_header; ?></h4>
                            <p class="strong-points-item__paragraph"><?php echo $strong_points_content; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php if( have_rows('projects') ): ?>
    <section class="projects">
        <div class="container">
            <div class="row projects__row-title">
                <div class="col-12 projects__col-header">
                    <h2 class="header-basic"><?php the_field('projects_header'); ?></h2>
                </div>
            </div>
            <div class="row projects__row">
                <div class="col-12 projects__slider">
                    <?php while ( have_rows('projects') ) : the_row(); 
                    $projects_header  = get_sub_field('projects_item_header');
                    $projects_description = get_sub_field('projects_item_description');
                    $projects_image   = get_sub_field('projects_item_image');
                    $projects_url   = get_sub_field('projects_item_url');
                    ?>
                    <div class="project-item" style="background: url(<?php echo $projects_image; ?>) center center no-repeat; background-size: cover;">
                        <div class="project-item__inner">
                            <a href="<?php echo $projects_url; ?>" class="project-item__link">
                                <h4 class="project-item__title"><?php echo $projects_header; ?></h4>
                                <p class="project-item__description"><?php echo $projects_description; ?></p>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="in-touch">
        <div class="container">
            <div class="row in-touch__row">
                <div class="col-md-6 col-cta" data-aos="slide-right" data-aos-duration="1000" data-aos-once="true">
                    <div class="cta">
                        <h3 class="cta__header">
                        <?php the_field('cta_header'); ?>
                        </h3>
                        <p class="cta__text"><?php the_field('cta_text'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-form" data-aos="slide-left" data-aos-duration="1000" data-aos-once="true">
                    <form class="cta-form">
                        <input type="text" aria-label="Name" class="cta-form__name cta-form__item" placeholder="<?php esc_html_e('Your name', 'hs'); ?>" required>
                        <input type="email" aria-label="Email" class="cta-form__email cta-form__item" placeholder="Email" required>
                        <textarea placeholder="<?php esc_html_e('Your message', 'hs'); ?>" required name="cta_message" aria-label="Message" id="ctaMessage" class="cta-form__message cta-form__item"></textarea>
                        <input type="submit" class="cta-form__submit btn btn-primary" value="<?php esc_html_e('Send', 'hs'); ?>">
                    </form>
                </div>
            </div>
        </div>
	</section>
	<?php if( have_rows('logo_slider') ): ?>
    <section class="logos">
        <div class="container">
            <div class="row logos__row">
			<?php while( have_rows('logo_slider') ): the_row(); 
				// vars
				$image = get_sub_field('logo_slider_img');
				$link = get_sub_field('logo_slider_link');
				?>
                <div class="logos-item">
                    <a href="<?php echo $link; ?>" class="logos-item__link">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="logos-item__img">
                    </a>
				</div>
			<?php endwhile; ?>
            </div>
        </div>
	</section>
	<?php endif; ?>

<?php

get_footer();
