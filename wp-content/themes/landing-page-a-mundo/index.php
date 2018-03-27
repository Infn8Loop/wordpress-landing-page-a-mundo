<!DOCTYPE html>
<?php $theme_dir = get_template_directory_uri();
if(MSR_DEBUG == 'true'){
    print_r($_POST);    
}

?>

<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The exact same bootstrap page everyone else makes.">
    <meta name="author" content="Me, you, her, everyone, et al.">

    <title><?= MSR_SITE_TITLE; ?> | <?= MSR_SITE_HEADING; ?> </title>

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
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Four Icons</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Bullshit</a>
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
                <a href="#about" class="btn btn-primary btn-xl page-scroll">This button makes the page scroll</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Want to make an original website yourself?</h2>
                    <hr class="light">
                    <p class="text-faded">Forget that! Who would ever want to put in all of that effort for a website? Just open up your web browser and type "bootstrap template" into your favorite search engine, like Yahoo! or Bing, and you're on your way! There are hundreds of templates to choose from, but go ahead and pick this same exact template from the first result on google, edit a few lines, and you're on your way! No one will notice!</p>
                    <a href="http://lmgtfy.com/?q=bootstrap+template" target="_blank" class="btn btn-default btn-xl">Google That Shit</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">So Fucking Creative</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-globe wow bounceIn text-primary"></i>
                        <h3>This Fucking Template</h3>
                        <p class="text-muted">Guaranteed to use the same fucking template that every other bootstrap website uses, downloaded straight from The Web&#0153;</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>This Set of Four Icons</h3>
                        <p class="text-muted">Look at this cool set of four icons describing different things about us! We use four, because it's the default.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-thumbs-up wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Lots of effort</h3>
                        <p class="text-muted">We even changed some of the icons! We take the extra effort to make our designs truly original.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">Because nothing says hard work and talent like editing a few lines of text.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    One Thing
                                </div>
                                <div class="project-name">
                                    Look
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Two Thing
                                </div>
                                <div class="project-name">
                                    At
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Three Thing
                                </div>
                                <div class="project-name">
                                    This
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Four Thing
                                </div>
                                <div class="project-name">
                                    Bullshit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Seriously, It's This Fucking Template !</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">That's Amazing!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">My Contact Information</h2>
                    <hr class="primary">
                    <p>Here's my phone number and email address, because hey that's part of the template and why would you not include that on your webpage? You'd be a fool not to! I can't wait for all the job offers to come pouring in from all the companies wanting my insane website design skills.</p>
                    <p>Honestly this template does look really nice, though.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>+1-666-420-6969</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:jkarbows@emich.edu">holy@shit.com</a></p>
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

</body>


</html>