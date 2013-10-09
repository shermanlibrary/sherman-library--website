<?php 
function library_academy_menu( $menu, $element ) {

    if ( $menu == 'primary' ) {

        if ( $element == 'label' ) {
            
            if ( is_post_type_archive( 'spotlight_databases' ) ) { $element = 'Databases'; }
            
            else { $element = 'Feature'; }            
            return $element;

        } // if $element == 'label'

        if ( $element == 'menu' ) {

            $args =  array(
                'menu'          => 'primary',
                'container'     => false,
                'menu_class'    => 'sub-menu',
                'fallback_cb'   => false
            );

            wp_nav_menu( $args );

        } // if $element is 'menu'
        
    } // if $menu is 'primary'

    if ( $menu == 'secondary' ) {

        if ( $element == 'label' ) {

            if ( is_post_type_archive( 'spotlight_databases' ) || 'spotlight_databases' == get_post_type() ) { $element = 'Databases'; }

            else if ( is_post_type_archive( 'spotlight_events' ) || 'spotlight_events' == get_post_type() ) { $element = 'Events'; }

            else if ( is_post_type_archive( 'spotlight_reviews' ) || 'spotlight_reviews' == get_post_type() ) { $element = 'Reviews'; }

            else { $element = 'Everything'; }

            return $element;
        } // if $element is 'label'

        if ( $element == 'menu') {

            $args =  array(
                'menu'          => 'secondary',
                'container'     => false,
                'menu_class'    => 'sub-menu',
                'fallback_cb'   => false
            );

            wp_nav_menu( $args );

        } // if $element is 'menu'

    } // if $menu is 'secondary'
    
}
 ?>