<?php 
function library_academy_menu( $menu, $element ) {

    if ( $menu == 'primary' ) {

        if ( $element == 'label' ) {
            
            if ( has_category('getting-started') ) { $element = 'Getting Started'; } 
            
            else { $element = 'Public Library'; }            
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

            if ( !is_front_page() ) {

            }

            else { $element = 'Home'; }

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