<?php
class Organization_Breadcrumb_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        $classes_item = empty ( $item->classes ) ? array() : (array) $item->classes;

        $class_names_item = join(
            ' ',
            apply_filters(
                'nav_menu_css_class',
                array_filter( $classes_item ),
                $item
            )
        );

        ! empty ( $args->toastmasterspl_item_class )
            and $class_names_item .= ' ' . esc_attr( $args->toastmasterspl_item_class );

        ! empty ( $class_names_item )
            and $class_names_item = 'class="'. esc_attr( $class_names_item ) . '"';

        $class_names_link = '';

        ! empty ( $args->toastmasterspl_link_class )
            and $class_names_link .= ' ' . esc_attr( $args->toastmasterspl_link_class );

        ! empty ( $class_names_link )
            and $class_names_link = 'class="'. esc_attr( $class_names_link ) . '"';

        $attributes  = '';

        ! empty( $item->attr_title )
            and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
            and $attributes .= ' target="' . esc_attr( $item->target ) .'"';
        ! empty( $item->xfn )
            and $attributes .= ' rel="' . esc_attr( $item->xfn ) .'"';
        ! empty( $item->url )
            and $attributes .= ' href="' . esc_attr( $item->url ) .'"';

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $item_output = "<span $class_names_item><a $class_names_link $attributes>"
            . $title;

        $output .= apply_filters(
            'walker_nav_menu_start_el',
            $item_output,
            $item,
            $depth,
            $args
        );
    }

    function end_el( &$output, $object, $depth = 0, $args = array() ) {
        $item_output = '</a></span>';

        $output .= apply_filters(
            'walker_nav_menu_end_el',
            $item_output,
            $item,
            $depth,
            $args
        );
    }

}
