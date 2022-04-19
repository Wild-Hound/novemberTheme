<?php 

add_action( "admin_menu", "novemberAdminPage");

function novemberAdminPage(){
    add_menu_page( "Noverber Theme Options", "November", "manage_options", "novemberNight", "novemberAdminPageGen","dashicons-admin-customizer", 110);
}

function novemberAdminPageGen(){
    echo "<h1>Hello Admin Page</h1>";
}