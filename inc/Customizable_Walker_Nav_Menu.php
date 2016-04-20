<?php
class Customizable_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        $item_wrap_start = !empty( $args->toastmasterspl_item_wrap )
            ? $args->toastmasterspl_item_wrap[0]
            : '';

        $item_icon_start = $this->item_has_icon( $item, $args )
            ? '<i class="fa fa-' . esc_attr( $args->toastmasterspl_link_icons[ $item->menu_order ] ) . '"></i>'
            : '';

        $item_text_class = '';
        ! empty( $args->toastmasterspl_text_class )
            and $item_text_class .= ' class="' . esc_attr( $args->toastmasterspl_text_class ) . '"';

        $this->item_has_icon( $item, $args )
            and $item_icon_start .= "<span$item_text_class>";

        $class_names_link = '';

        ! empty ( $args->toastmasterspl_link_class )
            and $class_names_link .= ' ' . esc_attr( $args->toastmasterspl_link_class );
        ! empty ( $args->toastmasterspl_link_class_current )
            and $item->current
            and $class_names_link .= ' ' . esc_attr( $args->toastmasterspl_link_class_current );
        ! empty ( $args->toastmasterspl_icon_class )
            and $this->item_has_icon( $item, $args )
            and $class_names_link .= ' ' . esc_attr( $args->toastmasterspl_icon_class );

        ! empty ( $class_names_link )
            and $class_names_link = 'class="'. esc_attr( $class_names_link ) . '"';

        $attributes  = $this->build_link_attributes( $item );

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $item_output = $item_wrap_start
            . "<a $class_names_link $attributes>"
            . $item_icon_start
            . $title;

        $output .= apply_filters(
            'walker_nav_menu_start_el',
            $item_output,
            $item,
            $depth,
            $args
        );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $item_icon_end = $this->item_has_icon( $item, $args )
            ? '</span>'
            : '';

        $item_wrap_end = !empty( $args->toastmasterspl_item_wrap )
            ? $args->toastmasterspl_item_wrap[1]
            : '';

        $item_output = $item_icon_end
            . '</a>'
            . $item_wrap_end;

        $output .= apply_filters(
            'walker_nav_menu_end_el',
            $item_output,
            $item,
            $depth,
            $args
        );
    }

    private function item_has_icon( $item, $args ) {
        return !empty( $args->toastmasterspl_link_icons )
            && array_key_exists( $item->menu_order, $args->toastmasterspl_link_icons );
    }

    private function build_link_attributes( $item ) {
        $attributes  = '';

        ! empty( $item->attr_title )
            and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
            and $attributes .= ' target="' . esc_attr( $item->target ) .'"';
        ! empty( $item->xfn )
            and $attributes .= ' rel="' . esc_attr( $item->xfn ) .'"';
        ! empty( $item->url )
            and $attributes .= ' href="' . esc_attr( $item->url ) .'"';

        return $attributes;
    }

}
