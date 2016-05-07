<?php
class Social_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $item_output = '<a class="social-links__link"'
            . $this->build_link_attributes( $item )
            . '><i class="fa fa-fw fa-'
            . $this->build_social_icon_name( $item )
            . '"></i><span class="social-links__text">'
            . apply_filters( 'the_title', $item->title, $item->ID );

        $output .= apply_filters(
            'walker_nav_menu_start_el',
            $item_output,
            $item,
            $depth,
            $args
        );
    }

    private function build_link_attributes( $item ) {
        $attributes  = '';

        ! empty( $item->url )
            and $attributes .= ' href="' . esc_attr( $item->url ) .'"';

        return $attributes;
    }

    private function build_social_icon_name( $item ) {
        $matches = [];

        preg_match(
            '#\/\/[\w\d\.]*?([\w\d]+)\.[\w\d]+\/#',
            $item->url,
            $matches
            );

        return strtolower( $matches[1] );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= apply_filters(
            'walker_nav_menu_end_el',
            '</span></a>',
            $item,
            $depth,
            $args
        );
    }

}
