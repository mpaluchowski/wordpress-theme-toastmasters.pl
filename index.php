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
	<div class="page-content__main">
        <?php
            while ( have_posts() ) : the_post();
        ?>
		<header class="page-content__article-header article-header<?php if ( has_post_thumbnail() ): ?> article-header--featured-image<?php endif ?>">
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'post-thumbnail', [ 'class' => 'article-header__image' ] );
                }
            ?>
            <?php the_title( '<h1 class="article-header__title">', '</h1>' ) ?>
		</header>
		<article class="page-content__article-text article-text">
            <?php the_content() ?>
		</article>
        <?php endwhile; // have_posts() ?>
	</div>

	<div class="page-content__aside">
		<aside class="page-content__widget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id lectus dolor. Fusce ut sagittis lectus. Proin sagittis lectus sed neque hendrerit, vitae commodo magna fermentum.</aside>
		<aside class="page-content__widget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id lectus dolor. Fusce ut sagittis lectus. Proin sagittis lectus sed neque hendrerit, vitae commodo magna fermentum.</aside>
	</div>
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
	<?php
		wp_nav_menu( array(
			'theme_location' => 'page-navigation',
			'container' => false,
			'depth' => 1,
			'items_wrap' => '%3$s',
		 ) );
	?>
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
