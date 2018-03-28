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
    'MSR_SITE_TITLE'            => 'Short and Sweet Title',
    'MSR_SITE_HEADING'          => 'This is where an awesome heading will go',
    'MSR_SITE_TAGLINE'          => "Don't miss out! A Tagline is important!",
    'MSR_ABOUT_HEADING'         => "About My Company/Myself/Subject of this site.",
    'MSR_ABOUT_LINK_TEXT'       => "About",
    'MSR_ABOUT_PARAGRAPH'       => "This is where you write a huge paragraph of interesting stuff. Unlike other wordpress themes with Landing-Page-A-Mundo your front page will actually look exactly like the preview, and doesn't require ANY shortcode!",
    'MSR_TITLE_OGTAG'           => "Super especially SEO friendly title text goes here, SEO it up!",
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
    }
    
    // get all the updated values from the database, define them as constants
    foreach($page_vars as $key=>$val){
        define($key, stripslashes (get_option($key) ));
    }
    
    // that's it. Ready to load the page. 
    
} // ends our theme function 

?>