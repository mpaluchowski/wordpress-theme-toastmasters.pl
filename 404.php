<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head() ?>
</html>

<body <?php body_class( 'page-404-body' ) ?>>

<main class="page-404-content">
    <h1><?php _e( 'Oops! No page here', 'toastmasterspl' ); ?></h1>
    <p><?php _e( "We couldn't find anything at this location. Maybe it went missing, or maybe it was never here in the first place. Try <a href=\"" . home_url() . "\">starting from home</a>.", 'toastmasterspl' ); ?></p>
</main>

<?php wp_footer() ?>

</body>

</html>
