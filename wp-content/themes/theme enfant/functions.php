<?php add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
   
}


add_filter( 'wp_nav_menu_items', 'ajout_admin_menu', 10, 2 );

function ajout_admin_menu ( $menu_items, $args ) {
   
   
      if (is_user_logged_in()) {
         $menu_items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item " href="http://localhost/PLANTY/admin/"> Admin  </a></li>';
      }
   

   return $menu_items;
}













