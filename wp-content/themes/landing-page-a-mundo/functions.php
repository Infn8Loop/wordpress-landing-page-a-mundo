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
    
    // shows the post array if true
    define('MSR_DEBUG', 'true');
    
    // Define the initial values for the fields
    $page_vars = array(
    'MSR_THEME'         => 'true',
    'MSR_SITE_TITLE'    => 'Short and Sweet Title',
    'MSR_SITE_HEADING'  => 'This is where an awesome heading will go',
    'MSR_SITE_TAGLINE'  => "Don't miss out! A Tagline is important!"
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