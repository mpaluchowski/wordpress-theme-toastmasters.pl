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
	<span class="page-header__organization-breadcrumb">
		<a class="page-header__organization-link" href="http://www.toastmasters.org/">Toastmasters</a>,
		<a class="page-header__organization-link" href="http://toastmastersd95.org/">District 95</a>
	</span>

	<h1 class="page-header__site-name"><?php bloginfo( 'name' ) ?></h1>

	<img src="<?php bloginfo( 'template_directory' ) ?>/images/toastmasters-logo.png" alt="Toastmasters International Logo" class="page-header__site-logo">
</header>
</div>

</body>

</html>
