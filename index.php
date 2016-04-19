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

<div class="page-footer-container">
<footer class="page-element page-footer">
	<div class="page-footer__social-links social-links">
		<a href="https://www.facebook.com/ToastmastersPolskaPL/" class="social-links__link"><i class="fa fa-fw fa-facebook"></i><span class="social-links__text">Facebook</span></a>
		<a href="#" class="social-links__link"><i class="fa fa-fw fa-twitter"></i><span class="social-links__text">Twitter</span></a>
		<a href="#" class="social-links__link"><i class="fa fa-fw fa-youtube"></i><span class="social-links__text">YouTube</span></a>
	</div>

	<p class="page-footer__copyright">Toastmasters International, the Toastmasters International logo and all other Toastmasters International trademarks and copyrights are the sole property of <a href="http://www.toastmasters.org/" rel="external">Toastmasters International</a>. This <a href="http://www.wordpress.org">WordPress</a> template is freely <a href="https://github.com/mpaluchowski/wordpress-theme-toastmasters.pl">available on <i class="fa fa-github"></i> GitHub</a> under the Apache License, Version 2.0. Make something cool.</p>
</footer>
</div>

<div class="page-navigation-container" id="page-navigation">
<nav class="page-element page-navigation">
	<a href="#" class="page-navigation__link page-navigation__link--current page-navigation__link--icon"><i class="fa fa-home"></i><span class="page-navigation__link-text">Home</span></a>
	<a href="#" class="page-navigation__link">What is Toastmasters?</a>
	<a href="#" class="page-navigation__link">Educational Program</a>
	<a href="#" class="page-navigation__link">The Club Experience</a>
	<a href="#" class="page-navigation__link">How to Join</a>
	<a href="#" class="page-navigation__link">Find a Club</a>
	<a href="#" class="page-navigation__link">FAQ</a>
</nav>
</div>

<div class="page-navigation-link-container">
<div class="page-element page-navigation-link">
	<a href="#page-navigation" class="page-navigation-link__link"><i class="fa fa-bars"></i></a>
</div>
</div>

<?php wp_footer() ?>

</body>

</html>
