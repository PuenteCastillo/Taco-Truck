<?php
/*$accent_color=get_field('theme_accent_color','option');

if( get_field('pg_nav_navigation_style') == "default" )
    $theme_nav_bgcolor=get_field('navbar_background_color','option');
else
    $theme_nav_bgcolor=get_field('pg_nav_background_color');*/
    
$accent_color    = 'red';
$primary_color   = 'blue';
$secondary_color = 'green';



?>

.accent_color { color:<?php echo $accent_color;?>; }
.primary_color { color:<?php echo $primary_color;?>; }
.secondary_color { color:<?php echo $secondary_color;?>; }