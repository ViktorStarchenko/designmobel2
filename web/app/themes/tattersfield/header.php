<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tattersfield
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tattersfield' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$tattersfield_description = get_bloginfo( 'description', 'display' );
			if ( $tattersfield_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $tattersfield_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tattersfield' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">


        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
            <meta name="format-detection" content="telephone=no">
            <title>Home</title>
            <link rel="icon" type="image/png" href="favicon.png">
            <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
            <link rel="stylesheet" href="css/app.min.css">
        </head>
        <body>
        <div class="g-wrap">
            <main class="g-main">
                <div class="section-hero">
                    <div class="s-bg">
                        <div style="background-image: url(&quot;images/content/hero-image-desk.jpg&quot;);" class="s-bg__image hidden-xs-max"></div>
                        <div style="background-image: url(&quot;images/content/hero-image-mob.jpg&quot;);" class="s-bg__image hidden-sm-min"></div>
                    </div>
                    <div class="s-wrap">
                        <div class="s-content container">
                            <div class="s-logo"><img src="images/logo-dark.png"></div>
                            <div class="s-title">TRUSTED BY KIWIS SINCE 1912</div>
                            <div class="s-buttons"><a href="#" class="btn">Contact Us</a><a href="#" class="btn btn-index">Register Your Product</a></div>
                        </div>
                    </div>
                </div>