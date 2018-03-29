<?php 
$theme_dir = get_template_directory_uri(); 
$icons = array(
    'rocket', 'globe', 'area-chart', 'thumbs-up', 'heart', 'paper-plane', 'bomb', 'pencil', 'magic',   
);
?>
<style>hr{
height: 2px;
border-top: 2px solid #555;
}</style>
<div class="title">
    <h1>Customize your 'Landing Page A Mundo' Site </h1>
    <p>Fill out this form to create your langing page in just a few minutes!</p>
</div>

<form method="POST" action="<?php echo $theme_dir + "/wp-admin/themes.php"; ?>">
    <input type="hidden" name="MSR_THEME" value="true" />
    <h1>Intro Section</h2>
    <h3>Title for your awesome site: </h3>
    <input type="text" size="30" name="MSR_SITE_TITLE"  value="<?= MSR_SITE_TITLE; ?>"  />
    <br/>
    <h3>Heading for your awesome site: </h3>
    <input type="text" size="120" name="MSR_SITE_HEADING"  value="<?= MSR_SITE_HEADING; ?>"  />
    <br/>
    <h1>Hero Image Selector</h1>
    <!-- images examples shows preview based on ID-->
    <?php 
    wp_enqueue_media();
    // gives the media/upload/picker
	?><div class='image-preview-wrapper'>
		<img id='image-preview' src='<?php echo (MSR_HERO_IMAGE !== '') ? wp_get_attachment_image_src( MSR_HERO_IMAGE, 'thumbnail')[0] . '?' . (String) rand(0, 10): 'http://via.placeholder.com/100x100' ?>' width='100' height='100' style='max-height: 100px; width: 100px;'>
	</div>
	<input id="upload_image_button" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
	<input type='hidden' name='MSR_HERO_IMAGE' id='image_attachment_id' value=''><?php
    ?>
    <br/>
    <h3>Tagline for your awesome site: </h3>
    <input type="text" size="120" name="MSR_SITE_TAGLINE"  value="<?= MSR_SITE_TAGLINE; ?>"  />
    <br/>
    <h3>Scroll Down Button Text </h3>
    <input type="text" size="120" name="MSR_SCROLL_DOWN_BUTTON"  value="<?= MSR_SCROLL_DOWN_BUTTON; ?>"  />
    <br/>
    <hr/>
    <h1>SEO Stuff</h1>
    <h3>Title OG tag (shows up in link previews)</h3>
    <input type="text" size="120" name="MSR_TITLE_OGTAG"  value="<?= MSR_TITLE_OGTAG; ?>"  />
    <hr/>
    <h1>About Section</h1>
    <h3>About section heading: </h3>
    <input type="text" size="120" name="MSR_ABOUT_HEADING"  value="<?= MSR_ABOUT_HEADING; ?>"  />
    <br/>
    <h3>Navigation link text (keep this short)</h3>
    <input type="text" size="120" name="MSR_ABOUT_LINK_TEXT"  value="<?= MSR_ABOUT_LINK_TEXT; ?>"  />
    <br/>
    <h3>About: Whole Paragraph</h3>
    <textarea name="MSR_ABOUT_PARAGRAPH" rows="4" cols="120"><?= MSR_ABOUT_PARAGRAPH; ?></textarea>
    <h3>Call to action button text</h3>
    <input type="text" size="120" name="MSR_CTA_BUTTON"  value="<?= MSR_CTA_BUTTON; ?>"  />
    <h3>Call to action button link URL</h3>
    <input type="text" size="120" name="MSR_CTA_LINK"  value="<?= MSR_CTA_LINK; ?>"  />
    <br/>
    <h3>Open CTA link in a new window?</h3>
    <select name="MSR_CTA_NEW_WINDOW" value="<?= MSR_CTA_NEW_WINDOW; ?>">
        <option value="true" <?= (MSR_CTA_NEW_WINDOW == 'true') ? 'selected' : '' ?>>
            Yes
        </option>
        <option value="false" <?= (MSR_CTA_NEW_WINDOW == 'false') ? 'selected' : '' ?>>
            No
        </option>
    </select>
    <hr/>
    <h1>Features / Services (4 icons section)</h1>
    <h3>Section Heading</h3>
    <input type="text" size="120" name="MSR_FEATURES_HEADING"  value="<?= MSR_FEATURES_HEADING; ?>"  />
    <br/>
    <h3>Navigation Link Text (keep this short)</h3>
    <input type="text" size="120" name="MSR_FEATURES_HEADING"  value="<?= MSR_FEATURES_LINK_TEXT; ?>"  />
    <br/>
    <h2>FIRST Icon</h2>
        <h4>Select the first icon</h4>
        <select name="MSR_FIRST_ICON" value="<?= MSR_FIRST_ICON;?>">
        <?php foreach($icons as $icon){?>
        <option value="<?= $icon; ?>" <?= (MSR_FIRST_ICON == $icon)? 'selected' : ''; ?> >
            <?= $icon; ?>
        </option>
        <?php } // end foreach ?>
    </select>
    <h4>Label</h4>
    <input type="text" size="80" name="MSR_FIRST_ICON_LABEL"  value="<?= MSR_FIRST_ICON_LABEL; ?>"  />
    <h4>Paragraph</h4>
    <textarea name="MSR_FIRST_ICON_PARAGRAPH" rows="4" cols="120"><?= MSR_FIRST_ICON_PARAGRAPH; ?></textarea>
    <hr/>
    <h2> SECOND Icon</h2>
    <h4>Select the  SECOND icon</h4>
    <select name="MSR_SECOND_ICON" value="<?= MSR_SECOND_ICON;?>">
         <?php foreach($icons as $icon){?>
        <option value="<?= $icon; ?>" <?php if (MSR_SECOND_ICON == $icon){ echo 'selected'; } ?> >
            <?= $icon; ?>
        </option>
        <?php } // end foreach ?>
    </select>
    <h4>Label</h4>
    <input type="text" size="80" name="MSR_SECOND_ICON_LABEL"  value="<?= MSR_SECOND_ICON_LABEL; ?>"  />
    <h4>Paragraph</h4>
    <textarea name="MSR_SECOND_ICON_PARAGRAPH" rows="4" cols="120"><?= MSR_SECOND_ICON_PARAGRAPH; ?></textarea>
    <hr/>
    <h2> THIRD Icon</h2>
    <h4>Select the  THIRD icon</h4>
    <select name="MSR_THIRD_ICON" value="<?= MSR_THIRD_ICON;?>">
         <?php foreach($icons as $icon){?>
        <option value="<?= $icon; ?>" <?php if (MSR_THIRD_ICON == $icon){ echo 'selected'; } ?> >
            <?= $icon; ?>
        </option>
        <?php } // end foreach ?>
    </select>
    <h4>Label</h4>
    <input type="text" size="80" name="MSR_THIRD_ICON_LABEL"  value="<?= MSR_THIRD_ICON_LABEL; ?>"  />
    <h4>Paragraph</h4>
    <textarea name="MSR_THIRD_ICON_PARAGRAPH" rows="4" cols="120"><?= MSR_THIRD_ICON_PARAGRAPH; ?></textarea>
    <hr/>
    <h2> FOURTH Icon</h2>
    <h4>Select the  FOURTH icon</h4>
    <select name="MSR_FOURTH_ICON" value="<?= MSR_FOURTH_ICON;?>">
         <?php foreach($icons as $icon){?>
        <option value="<?= $icon; ?>" <?php if (MSR_FOURTH_ICON == $icon){ echo 'selected'; } ?> >
            <?= $icon; ?>
        </option>
        <?php } // end foreach ?>
    </select>
    <h4>Label</h4>
    <input type="text" size="80" name="MSR_FOURTH_ICON_LABEL"  value="<?= MSR_FOURTH_ICON_LABEL; ?>"  />
    <h4>Paragraph</h4>
    <textarea name="MSR_FOURTH_ICON_PARAGRAPH" rows="4" cols="120"><?= MSR_FOURTH_ICON_PARAGRAPH; ?></textarea>
    <hr/>
    <h1>Call to Action</h1>
    <h3>Call to Action heading: </h3>
    <input type="text" size="120" name="MSR_CTA_HEADING"  value="<?= MSR_CTA_HEADING; ?>"  />
    <br/>
    <h3>Navigation link text (keep this short)</h3>
    <input type="text" size="120" name="MSR_CTA_LINK_TEXT"  value="<?= MSR_CTA_LINK_TEXT; ?>"  />
    <br/>
    <h3>Call to Action Button Text </h3>
    <input type="text" size="120" name="MSR_CTA_BUTTON_TEXT"  value="<?= MSR_CTA_BUTTON_TEXT; ?>"  />
    <br/>
    <h3>Call to Action Button Link URL</h3>
    <input type="text" size="120" name="MSR_CTA_BUTTON_LINK"  value="<?= MSR_CTA_BUTTON_LINK; ?>"  />
    <br/>
    <hr/>
    <h1>Contact Section</h1>
    <h3>Contact Heading</h3>
    <input type="text" size="120" name="MSR_CONTACT_HEADING"  value="<?= MSR_CONTACT_HEADING; ?>"  />
    <br/>
    <h3>Contact Paragraph</h3>
    <textarea name="MSR_CONTACT_PARAGRAPH" rows="4" cols="120"><?= MSR_CONTACT_PARAGRAPH; ?></textarea>
    <br/>
    <h3>Closing Line</h3>
    <input type="text" size="120" name="MSR_CLOSING_LINE"  value="<?= MSR_CLOSING_LINE; ?>"  />
    <br/>
    <h3>Phone Number</h3>
    <input type="text" size="120" name="MSR_PHONE_NUMBER"  value="<?= MSR_PHONE_NUMBER; ?>"  />
    <br/>
    <h3>Email Address</h3>
    <input type="text" size="120" name="MSR_EMAIL_ADDRESS"  value="<?= MSR_EMAIL_ADDRESS; ?>"  />
    <br/>
    <!-- Cancel/Save -->
    <hr/><br/>
    <a href="<?= get_site_url(); ?>/wp-admin/">
        <button type="button" class="button">Cancel All Changes</button></a>
        &nbsp;&nbsp;
        <button type="submit" class="button">Save All Changes</button>
    
</form>
<?php // inserts the javascript required for the media selector
media_selector();