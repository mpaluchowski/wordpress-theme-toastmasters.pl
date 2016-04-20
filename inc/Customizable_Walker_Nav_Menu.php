<?php
class Customizable_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        $item_wrap_start = $this->build_wrap_start( $args );

        $item_icon_start = $this->build_icon_start( $item, $args );

        $class_link = $this->build_link_class( $item, $args );

        $attributes  = $this->build_link_attributes( $item );

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $item_output = $item_wrap_start
            . "<a $class_link $attributes>"
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

    private function build_wrap_start( $args ) {
        return !empty( $args->customizable_before_item )
            ? $args->customizable_before_item
            : '';
    }

    private function build_icon_start( $item, $args ) {
        $item_icon_start = $this->item_has_icon( $item, $args )
            ? '<i class="fa fa-' . esc_attr( $args->customizable_link_icons[ $item->menu_order ] ) . '"></i>'
            : '';

        $item_text_class = '';
        ! empty( $args->customizable_text_class )
            and $item_text_class .= ' class="' . esc_attr( $args->customizable_text_class ) . '"';

        $this->item_has_icon( $item, $args )
            and $item_icon_start .= "<span$item_text_class>";

        return $item_icon_start;
    }

    private function item_has_icon( $item, $args ) {
        return !empty( $args->customizable_link_icons )
            && array_key_exists( $item->menu_order, $args->customizable_link_icons );
    }

    private function build_link_class( $item, $args ) {
        $class_names_link = '';

        ! empty ( $args->customizable_link_class )
            and $class_names_link .= ' ' . esc_attr( $args->customizable_link_class );
        ! empty ( $args->customizable_link_class_current )
            and $item->current
            and $class_names_link .= ' ' . esc_attr( $args->customizable_link_class_current );
        ! empty ( $args->customizable_icon_class )
            and $this->item_has_icon( $item, $args )
            and $class_names_link .= ' ' . esc_attr( $args->customizable_icon_class );

        return empty( $class_names_link )
            ? ''
            : 'class="'. esc_attr( $class_names_link ) . '"';
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

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $item_icon_end = $this->build_icon_end( $item, $args );

        $item_wrap_end = $this->build_wrap_end( $args );

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

    private function build_icon_end( $item, $args ) {
        return $this->item_has_icon( $item, $args )
            ? '</span>'
            : '';
    }

    private function build_wrap_end( $args ) {
        return !empty( $args->customizable_after_item )
            ? $args->customizable_after_item
            : '';
    }

}
