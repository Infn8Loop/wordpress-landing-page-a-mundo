<?php $theme_dir = get_template_directory_uri();?>
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
    
    <?php wp_footer(); ?>
</body>

</html>
