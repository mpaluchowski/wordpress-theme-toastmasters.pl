<?php
class Toastmasterspl_Fact_Widget extends WP_Widget {

    private $formats = null;
    const FORMAT_DEFAULT = 'grey';

    function __construct() {
        $this->formats = [
            'blue' => __( 'Blue', 'toastmasterspl' ),
            'yellow' => __( 'Yellow', 'toastmasterspl' ),
            'grey' => __( 'Grey', 'toastmasterspl' ),
            'red' => __( 'Red', 'toastmasterspl' ),
            'burgundy' => __( 'Burgundy', 'toastmasterspl' ),
        ];

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
        $format = isset( $instance['format'] ) && array_key_exists( $instance['format'], $this->formats )
            ? $instance['format']
            : self::FORMAT_DEFAULT;

        echo $args['before_widget'];
        ?>
        <div class="fact-widget fact-widget--<?php echo $format ?>">
            <div class="fact-widget__fact fact-widget__fact-major"><?php echo $instance['title'] ?></div>
            <?php if ( !empty( $instance['fact_minor'] ) ): ?><div class="fact-widget__fact fact-widget__fact-minor"><?php echo $instance['fact_minor'] ?></div><?php endif; // !empty fact_minor ?>
        </div>
        <?php
        echo $args['after_widget'];
    }

    function form( $instance ) {
        $fact_major = empty( $instance['title'] ) ? '' : esc_attr( $instance['title'] );
        $fact_minor = empty( $instance['fact_minor'] ) ? '' : esc_attr( $instance['fact_minor'] );
        $format = isset( $instance['format'] ) && array_key_exists( $instance['format'], $this->formats )
            ? $instance['format']
            : self::FORMAT_DEFAULT;
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Major fact:', 'toastmasterspl' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo $fact_major; ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'fact_minor' ) ); ?>"><?php _e( 'Minor fact:', 'toastmasterspl' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'fact_minor' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'fact_minor' ) ); ?>" type="text" value="<?php echo $fact_minor; ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'format' ) ); ?>"><?php _e( 'Background color:', 'toastmasterspl' ); ?></label>
            <select id="<?php echo esc_attr( $this->get_field_id( 'format' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'format' ) ); ?>">
                <?php foreach ( $this->formats as $format_slug => $format_description ) : ?>
                <option value="<?php echo esc_attr( $format_slug ); ?>"<?php selected( $format, $format_slug ); ?>><?php echo $format_description; ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <?php
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['fact_minor'] = strip_tags( $new_instance['fact_minor'] );
        if ( array_key_exists( $new_instance['format'], $this->formats ) ) {
            $instance['format'] = $new_instance['format'];
        }
        return $instance;
    }

}
