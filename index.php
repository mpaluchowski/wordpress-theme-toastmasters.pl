<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head() ?>
</head>

<body <?php body_class( 'page-body' ) ?>>

<div class="page-header-container">
<header class="page-element page-header">
	<?php
		wp_nav_menu( array(
			'theme_location' => 'organization-breadcrumb',
			'menu_class' => 'page-header__organization-breadcrumb organization-breadcrumb',
			'container' => false,
			'depth' => 1,
			'walker' => new Organization_Breadcrumb_Walker(),
			'items_wrap' => '<span class="%2$s">%3$s</span>',
			'toastmasterspl_item_class' => 'organization-breadcrumb__item',
			'toastmasterspl_link_class' => 'organization-breadcrumb__link',
		 ) );
	?>

	<h1 class="page-header__site-name"><?php bloginfo( 'name' ) ?></h1>

	<img src="<?php bloginfo( 'template_directory' ) ?>/images/toastmasters-logo.png" alt="Toastmasters International Logo" class="page-header__site-logo">
</header>
</div>

<main class="page-element page-content">
</main>

<?php wp_footer() ?>

</body>

</html>
