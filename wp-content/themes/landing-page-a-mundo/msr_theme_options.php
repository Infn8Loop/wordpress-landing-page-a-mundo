<?php $theme_dir = get_template_directory_uri(); ?>
<div class="title">
    <h1>Customize your 'Landing Page A Mundo' Site </h1>
    <p>Fill out this form to create your langing page in just a few minutes!</p>
</div>

<form method="POST" action="<?php echo $theme_dir + "/wp-admin/themes.php"; ?>">
    <input type="hidden" name="MSR_THEME" value="true" />
    <h3>Title for your awesome site: </h3>
    <input type="text" size="30" name="MSR_SITE_TITLE"  value="<?= MSR_SITE_TITLE; ?>" style="display: width: 100% !important;"/>
    <br/>
    <h3>Heading for your awesome site: </h3>
    <input type="text" size="120" name="MSR_SITE_HEADING"  value="<?= MSR_SITE_HEADING; ?>" style="display: width: 100% !important;"/>
    <br/>
    <h3>Tagline for your awesome site: </h3>
    <input type="text" size="120" name="MSR_SITE_TAGLINE"  value="<?= MSR_SITE_TAGLINE; ?>" style="display: width: 100% !important;"/>
    <br/>
    
    <button type="submit">Save Changes</button>
</form>