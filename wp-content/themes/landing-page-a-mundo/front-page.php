<?php
/*
Template Name: Landing-Page-A-Mundo
*/
?>
<?php get_header(); ?>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1><?= MSR_SITE_HEADING; ?> </h1>
                <hr>
                <p><?= MSR_SITE_TAGLINE; ?></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">
                    <?= MSR_SCROLL_DOWN_BUTTON; ?>
                </a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?= MSR_ABOUT_HEADING; ?></h2>
                    <hr class="light">
                    <p class="text-faded"><?= MSR_ABOUT_PARAGRAPH; ?></p>
                    <a href="<?= MSR_CTA_LINK; ?>" 
                    <?php if(MSR_CTA_NEW_WINDOW == "true"){?>
                    target="_blank" <?php } ?>
                    class="btn btn-default btn-xl">
                        <?= MSR_CTA_BUTTON; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?= MSR_FEATURES_HEADING; ?></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-<?= MSR_FIRST_ICON; ?> wow bounceIn text-primary"></i>
                        <h3><?= MSR_FIRST_ICON_LABEL; ?></h3>
                        <p class="text-muted"><?= MSR_FIRST_ICON_PARAGRAPH; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-<?= MSR_SECOND_ICON; ?> wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3><?= MSR_SECOND_ICON_LABEL; ?></h3>
                        <p class="text-muted"><?= MSR_SECOND_ICON_PARAGRAPH; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-<?= MSR_THIRD_ICON; ?> wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3><?= MSR_THIRD_ICON_LABEL; ?></h3>
                        <p class="text-muted"><?= MSR_THIRD_ICON_PARAGRAPH; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-<?= MSR_FOURTH_ICON; ?> wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3><?= MSR_FOURTH_ICON_LABEL; ?></h3>
                        <p class="text-muted"><?= MSR_FOURTH_ICON_PARAGRAPH?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <?php  include( get_home_template() );
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
 
            // End of the loop.
        endwhile;
        ?>

    <aside class="bg-dark" id="cta">
        <div class="container text-center">
            <div class="call-to-action">
                <h2><?= MSR_CTA_HEADING; ?></h2>
                <a href="<?= MSR_CTA_BUTTON_LINK; ?>" class="btn btn-default btn-xl wow tada"><?= MSR_CTA_BUTTON_TEXT; ?></a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?= MSR_CONTACT_HEADING; ?></h2>
                    <hr class="primary">
                    <p><?= MSR_CONTACT_PARAGRAPH; ?> </p>
                    <p><?= MSR_CLOSING_LINE; ?></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p><a href="tel:<?= MSR_PHONE_NUMBER; ?>"><?= MSR_PHONE_NUMBER; ?></a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:<?= MSR_EMAIL_ADDRESS; ?>"><?= MSR_EMAIL_ADDRESS; ?></a></p>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
