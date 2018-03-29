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
    <meta property="og:title" content="<?= MSR_TITLE_OGTAG; ?>"/>
    <meta property="og:description" content="<?= MSR_DESCRIPTION_OGTAG; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?= get_site_url(); ?>"/>
    <meta property="og:site_name" content="<?= MSR_SITE_TITLE; ?>"/>
    <meta property="og:image" content="<?= MSR_SITE_PREVIEW_IMAGE_URL; ?>"/>
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?= $theme_dir; ?>/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= $theme_dir; ?>/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?= $theme_dir; ?>/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= $theme_dir; ?>/css/<?= MSR_COLOR_THEME; ?>.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head();?>
</head>
<style>#mainNav{background-color: #AAA; opacity: 0.6;}</style>
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
                    <?php 
                    $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                    if ( MSR_BLOG_ENABLE == 'true' ){ ?>
                    <li>
                        <a class="page-scroll" href="<?= get_site_url(); ?>/blog/">Blog</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a class="page-scroll" href="#contact">Call Me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>