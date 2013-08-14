<?php 
function library_academy_menu( $menu, $element ) {

    if ( $menu == 'primary' ) {

        if ( $element == 'label' ) {
            
            if ( has_category('getting-started') ) { $element = 'Getting Started'; } 
            else if ( has_category('research-by-subject') ) { $element = 'Research by Subject'; }            
            else if ( has_category('dissertation-research') ) { $element = 'Disseration Research'; }            
            else if ( has_category('citation-management') ) { $element = 'Citation Management'; }
            
            else { $element = 'Choose a Subject'; }            
            return $element;

        } // if $element == 'label'

        if ( $element == 'menu' ) {

            $args =  array(
                'menu'          => 'primary',
                'container'     => false,
                'menu_class'    => 'sub-menu'
            );

            wp_nav_menu( $args );

        } // if $element is 'menu'
        
    } // if $menu is 'primary'

    if ( $menu == 'secondary' ) {

        if ( $element == 'label' ) {

            if ( has_category('getting-started') ) {
                if ( has_category('articles') ) { $element = 'Articles'; }
                elseif ( has_category('books') ) { $element = 'Books'; }
                elseif ( has_category('login') ) { $element = 'Log In'; }
                elseif ( has_category('sharkprint') ) { $element = 'SharkPrint'; }
                elseif ( has_category('alumni') ) { $element = 'Alumni'; }
                else { $element = 'All'; }
            }

            elseif ( has_category('research-by-subject') ) {
                if ( has_category('business') ) { $element = 'Business'; }
                elseif ( has_category('education') ) { $element = 'Education'; }
                else { $element = 'All'; }
            }

            elseif ( has_category('dissertation-research') ) {
                if ( is_category('literature-review') ) { $element = 'Literature Review'; }
                elseif ( has_category('methodology') ) { $element = 'Methodology'; }
                elseif ( has_category('mining-for-ideas') ) { $element = 'Mining for Ideas'; }
                elseif ( has_category('tests-and-measurements') ) { $element = 'Tests and Measurements'; }
                elseif ( has_category('theoretical-framework') ) { $element = 'Theoretical Framework'; }
                else { $element = 'All'; }
            }

            elseif ( has_category('citation-management') ) {
                if ( has_category('apa') ) { $element = 'APA'; }
                elseif ( has_category('copyright') ) { $element = 'Copyright'; }
                elseif ( has_category('endnote') ) { $element = 'Endnote'; }
                else { $element = 'All'; }
            }

            else { $element = ''; }

            return $element;
        } // if $element is 'label'

        if ( $element == 'menu') {

            if ( !is_home() ) {

                if ( has_category('getting-started') ) { 
                    
                    $args =  array(
                        'menu'          => 'getting started',
                        'container'     => false,
                        'menu_class'    => 'sub-menu'
                    );

                    wp_nav_menu( $args );
                } // gs menu

                elseif ( has_category('research-by-subject') ) {

                    $args = array(
                        'menu' => 'research by subject',
                        'container' => false,
                        'menu_class' => 'sub-menu'
                    );

                    wp_nav_menu( $args ); 
                } // research menu

                elseif ( has_category('dissertation-research') ) {

                    $args = array(
                        'menu' => 'dissertation research',
                        'container' => false,
                        'menu_class' => 'sub-menu'
                    );

                    wp_nav_menu( $args );

                } // diss menu

                elseif ( has_category('citation-management') ) {

                    $args = array(
                        'menu' => 'citation management',
                        'container' => false,
                        'menu_class' => 'sub-menu'
                    );

                    wp_nav_menu( $args );
                } // cm menu

                

            
            } // is_home()

        } // if $element is 'menu'

    } // if $menu is 'secondary'
    
}
 ?>