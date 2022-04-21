<?php 

add_action( "admin_menu", "novemberAdminPage");

function novemberAdminPage(){
    //generate admin main page & menu
    add_menu_page( "Noverber Theme Options", "November", "manage_options", "novemberNight", "novemberAdminPageGen","dashicons-admin-customizer", 110);

    // generate admin sub page
    add_submenu_page( "novemberNight", "Noverber Theme Options", "Settings", "manage_options", "novemberNight", "novemberAdminPageGen");
    add_submenu_page( "novemberNight", "Noverber Custom Css", "Custom CSS", "manage_options", "novemberNightCss", "noverberCustomCss");
}

function novemberAdminPageGen(){
    require_once(get_template_directory()."/inc/templates/admin.php");
}

function noverberCustomCss(){
    echo "<h1>Hello Custom Css Page</h1>";
}