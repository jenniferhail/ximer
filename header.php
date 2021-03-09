<!doctype html>
<?php $site_url = site_url(); ?>
<?php $template_directory = get_template_directory_uri() . '/favicon.ico'; ?>


<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager by Mightily -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N5JH6D4');</script>
	<!-- End Google Tag Manager by Mightily  -->

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php } ?>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) by Mightily -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5JH6D4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) by Mightily -->
	
	<?php do_action('wp_body_open'); ?>	
	
	<nav class="skip-nav">
		<ul class="skip-menu">
			<a href="#nav-toggle" class="menu-item">Skip to main menu</a>
			<a href="#main" class="menu-item">Skip to main content</a>
		</ul>
	</nav>
	<header class="header">		
        <div class="wrapper">
            <a class="logo" href="/" target="_self">
                <span class="text">Ximer</span>
            </a>
            <button id="nav-toggle" class="nav-toggle">
                <span class="toggle-wrapper">
                    <span class="toggle-bar toggle-bar-1"></span>
                    <span class="toggle-bar toggle-bar-2"></span>
                    <span class="toggle-bar toggle-bar-3"></span>
                    <span class="toggle-bar toggle-bar-4"></span>
                </span>
                <span class="visually-hide-text">Show Main Menu</span>
            </button>
            <nav class="header-nav">
                <ul class="main-menu">
					<?php
						$args = array(
							'theme_location' => 'main-menu',
							'menu' => 'main-menu',
							'container' => 'false',
							'items_wrap' => '%3$s'
						);
					?>
					<?php wp_nav_menu($args); ?>
                </ul>
            </nav>
        </div>
    </header>

	<main>
