<?php

register_nav_menus(array(
'top_menu' => 'Main Menu',

)); 



function your_submenu_class($menu) {

    $menu = preg_replace('/ class="sub-menu"/',' class="dropdown"',$menu);  
    
    return $menu;  
    
    }
    
    add_filter('wp_nav_menu','your_submenu_class'); 


?>