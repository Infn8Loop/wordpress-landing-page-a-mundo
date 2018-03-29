<?php 
// creating a theme options page - https://paulund.co.uk/theme-options-page

add_action('admin_menu', 'add_appearance_menu');
add_action('init', 'msr_theme_init', 11);

function add_appearance_menu(){
     add_submenu_page( 'themes.php', 'Landing-Page-A-Mundo', 'Landing-Page-A-Mundo', 'administrator', 'custom-theme-options', 'msr_theme_options'); 
}

function msr_theme_options(){
    include('msr_theme_options.php');
}

function msr_theme_init(){// runs on every page load
    
    define('MSR_THEME_DIR', get_template_directory_uri());
    
    // shows the post array if true
    define('MSR_DEBUG', 'false');
    
    // Define the initial values for the fields
    $page_vars = array(
    'MSR_THEME'                 => 'true',
    'MSR_SITE_TITLE'            => 'Landing-page-a-mundo',
    'MSR_COLOR_THEME'			=> 'creative',
    'MSR_HERO_IMAGE'            => '',
    'MSR_BLOG_ENABLE'           => 'false',
    'MSR_SITE_HEADING'          => 'This is where an awesome heading will go',
    'MSR_SITE_TAGLINE'          => "Don't miss out on this amazing WordPress template!",
    'MSR_ABOUT_HEADING'         => "About this template",
    'MSR_ABOUT_LINK_TEXT'       => "About",
    'MSR_ABOUT_PARAGRAPH'       => "This is where you write a huge paragraph of interesting stuff. Unlike other wordpress themes with Landing-Page-A-Mundo your front page will actually look exactly like the preview, and doesn't require ANY shortcode!",
    'MSR_TITLE_OGTAG'           => "Super especially SEO friendly title text goes here, SEO it up!",
    'MSR_DESCRIPTION_OGTAG'		=> "Describe your website for search engine visitors.",
    'MSR_SITE_PREVIEW_IMAGE_URL'=> "put a link to an image here for your site preview",
    'MSR_SCROLL_DOWN_BUTTON'    => "Clik Diz to Scroll Downz",
    'MSR_CTA_BUTTON'            => "I bet you won't click this. Oh, wait... yes you will.",
    'MSR_CTA_LINK'              => "http://msrinteractive.com",
    'MSR_CTA_NEW_WINDOW'        => "true",
    'MSR_FEATURES_HEADING'      => "Features",
    'MSR_FEATURES_LINK_TEXT'    => "Features",
    'MSR_FIRST_ICON_LABEL'      => "Fast",
    'MSR_FIRST_ICON_PARAGRAPH'  => "Unlike other wordpress themes this landing page can be fully customized in about 15 minutes! You'll be up and running in no time, at all. ",
    'MSR_FIRST_ICON'            => "rocket",
    'MSR_SECOND_ICON_LABEL'     => "Professional",
    'MSR_SECOND_ICON_PARAGRAPH' => "Your site will look clean and polished with minimal effort, and the process is totally dummy-proof.",
    'MSR_SECOND_ICON'           => "pencil",
    'MSR_THIRD_ICON_LABEL'		=> "Totally Responsive",
    'MSR_THIRD_ICON_PARAGRAPH'	=> "This template scales the site elements to match any screen size like MAGIC!",
    'MSR_THIRD_ICON'			=> "magic",
    'MSR_FOURTH_ICON_LABEL'		=> "Made with Love",
    'MSR_FOURTH_ICON_PARAGRAPH'	=> "All the hard work has been done, all you've gotta do is edit a few lines of text, and pick an image.",
    'MSR_FOURTH_ICON'			=> "heart",
    'MSR_CTA_LINK_TEXT'			=> "Download",
    'MSR_CTA_HEADING'			=> "Seriously, it's that easy!",
	'MSR_CTA_BUTTON_TEXT'		=> "Get it now!",
	'MSR_CTA_BUTTON_LINK'		=> "http://msrinteractive.com",
	'MSR_CONTACT_HEADING'		=> "Let's do this.",
	'MSR_CONTACT_PARAGRAPH'		=> "You know this is the one. It's a perfectly direct, simple landing page to convey your message clearly and effectively. Includes several color and font themes and a blog page template.",
	'MSR_CLOSING_LINE'			=> "Setup in less than 10 minutes, and start converting right away.",
	'MSR_PHONE_NUMBER'			=> "555-555-1234",
	'MSR_EMAIL_ADDRESS'			=> "wordpressthemes@msrinteractive.com",
    );
    
    // if a field doesn't exist, add it. 
    foreach($page_vars as $key=>$val){
        $var_exists = get_option($key);
        if(!$var_exists){
            add_option($key, $val);
        }
    }
    
    // run an update if we receive data from our form
    if($_POST['MSR_THEME'] == 'true'){
        // update all the values the post array 
        foreach($_POST as $key=>$val){
            update_option($key, htmlspecialchars($val));
        }
        //define everything and redirect
        foreach($page_vars as $key=>$val){
            define($key, stripslashes (get_option($key) ));
        }
        // send you back to the dashboard
        header("location: " . get_site_url() . "/wp-admin/");
        exit();
    }
    
    // get all the updated values from the database, define them as constants
    foreach($page_vars as $key=>$val){
        define($key, stripslashes (get_option($key) ));
    }
    
    // that's it. Ready to load the page. 
    
} // ends our theme function 

function media_selector_settings_page_callback() {

	wp_enqueue_media();
  
	?><div class='image-preview-wrapper'>
		<img id='image-preview' src='' width='100' height='100' style='max-height: 100px; width: 100px;'>
	</div>
	<input id="upload_image_button" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
	<input type='hidden' name='image_attachment_id' id='image_attachment_id' value=''><?php
}

function media_selector(){
    $my_saved_attachment_post_id = get_option( 'MSR_HERO_IMAGE');

	?><script type='text/javascript'>

		jQuery( document ).ready( function( $ ) {

			// Uploading files
			var file_frame;
			var wp_media_post_id = wp.media.model.settings.post.id; // Store the old id
			var set_to_post_id = <?php echo 999999999; ?>; // Set this

			jQuery('#upload_image_button').on('click', function( event ){

				event.preventDefault();

				// If the media frame already exists, reopen it.
				if ( file_frame ) {
					// Set the post ID to what we want
					file_frame.uploader.uploader.param( 'post_id', 999999999 );
					// Open frame
					file_frame.open();
					return;
				} else {
					// Set the wp.media post id so the uploader grabs the ID we want when initialised
					wp.media.model.settings.post.id = 999999999;
				}

				// Create the media frame.
				file_frame = wp.media.frames.file_frame = wp.media({
					title: 'Select a image to upload',
					button: {
						text: 'Use this image',
					},
					multiple: false	// Set to true to allow multiple files to be selected
				});

				// When an image is selected, run a callback.
				file_frame.on( 'select', function() {
					// We set multiple to false so only get one image from the uploader
					attachment = file_frame.state().get('selection').first().toJSON();

					// Do something with attachment.id and/or attachment.url here
					$( '#image-preview' ).attr( 'src', attachment.url ).css( 'width', 'auto' );
					$( '#image_attachment_id' ).val( attachment.id );

					// Restore the main post ID
					wp.media.model.settings.post.id = wp_media_post_id;
				});

					// Finally, open the modal
					file_frame.open();
			});

			// Restore the main ID when the add media button is pressed
			jQuery( 'a.add_media' ).on( 'click', function() {
				wp.media.model.settings.post.id = wp_media_post_id;
			});
		});

	</script><?php 
}

function get_hero_image(){
    return wp_get_attachment_image_src( MSR_HERO_IMAGE, 'thumbnail')[0] . '?' . (String) rand(0, 10);
}

?>