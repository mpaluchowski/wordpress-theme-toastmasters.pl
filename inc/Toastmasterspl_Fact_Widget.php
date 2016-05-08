<?php
class Toastmasterspl_Fact_Widget extends WP_Widget {

    function __construct() {
        $widget_ops = [
            'description' => __( 'Highlight organization facts', 'toastmasterspl' ),
        ];

        parent::__construct(
            'toastmasterspl_fact',
            __( 'Fact', 'toastmasterspl' ),
            $widget_ops
        );
    }

    function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <div class="fact-widget">
            <div class="fact-widget__fact fact-widget__fact-major"><?php echo $instance['fact_major'] ?></div>
            <?php if ( !empty( $instance['fact_minor'] ) ): ?><div class="fact-widget__fact fact-widget__fact-minor"><?php echo $instance['fact_minor'] ?></div><?php endif; // !empty fact_minor ?>
        </div>
        <?php
        echo $args['after_widget'];
    }

    function form( $instance ) {
        $fact_major = empty( $instance['fact_major'] ) ? '' : esc_attr( $instance['fact_major'] );
        $fact_minor = empty( $instance['fact_minor'] ) ? '' : esc_attr( $instance['fact_minor'] );

        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'fact_major' ) ); ?>"><?php _e( 'Major fact:', 'toastmasterspl' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'fact_major' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'fact_major' ) ); ?>" type="text" value="<?php echo esc_attr( $fact_major ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'fact_minor' ) ); ?>"><?php _e( 'Minor fact:', 'toastmasterspl' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'fact_minor' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'fact_minor' ) ); ?>" type="text" value="<?php echo esc_attr( $fact_minor ); ?>">
        </p>
        <?php
    }

    function update( $new_instance, $old_instance ) {
        $old_instance['fact_major'] = strip_tags( $new_instance['fact_major'] );
        $old_instance['fact_minor'] = strip_tags( $new_instance['fact_minor'] );

        return $old_instance;
    }

}
