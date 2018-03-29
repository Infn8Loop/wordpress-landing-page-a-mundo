<!DOCTYPE html>
<?php $theme_dir = get_template_directory_uri();
if(MSR_DEBUG == 'true'){
    print_r($_POST);    
}

?>

<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- TODOS: 
    Finish the landing page constants
    Style selector (use only 4 good pallete choices/ 4 font styles)
    Imperial: blue/gray (serifs)
    Excitement: red/white (sans)
    Youth: yellow/purple (cursive)
    Success: green/white/grey (roboto sans)
    Classic: black/orange (try a more red/orange) (whatever the default is)
    (use same names for font schemes)
    Print php style values out into <script></script> or <style></style>
    SEO stuff here & OG tags
    add the blog page for posts w/ regular wordpress sidebar hooks (optional)
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The exact same bootstrap page everyone else makes.">
    <meta name="author" content="Me, you, her, everyone, et al.">

    <title><?= MSR_SITE_TITLE; ?> | <?= MSR_SITE_HEADING; ?> </title>
    <meta property="og:title" content="<?= MSR_TITLE_OGTAG; ?>"/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:image" content=""/>
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?= $theme_dir; ?>/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= $theme_dir; ?>/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?= $theme_dir; ?>/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= $theme_dir; ?>/css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?= MSR_SITE_TITLE; ?> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about"><?= MSR_ABOUT_LINK_TEXT; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"><?= MSR_FEATURES_LINK_TEXT; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#cta"><?= MSR_CTA_LINK_TEXT; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Call Me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

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

    <!-- jQuery -->
    <script src="<?= $theme_dir; ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $theme_dir; ?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= $theme_dir; ?>/js/jquery.easing.min.js"></script>
    <script src="<?= $theme_dir; ?>/js/jquery.fittext.js"></script>
    <script src="<?= $theme_dir; ?>/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= $theme_dir; ?>/js/creative.js"></script>
    <?php if(MSR_HERO_IMAGE !== ''){?>
    <script type='text/javascript'>
       $('header').css('background-image', 'url("<?php echo get_hero_image(); ?>")');
    </script>
    <?php } ?>
</body>

</html>
