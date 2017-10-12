<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">
	<div class="container">
		<div class="row">
			<div class="col logo">
				<img src="<?php echo site_url(); ?>/images/cows-and-sheep-logo.png" alt="" />
			</div>
			<div class="col login">
				<div class="content">
					<a href="#">+ login</a> | <a href="#">+ sign up</a>
				</div>
			</div>
			<div class="col social">
				<div class="content">
					<div class="nav-menu">
						<div class="menu">
							<a href="#">+ Help</a> | <a href="#">+ My Account</a>
						</div>
					</div>
					<div class="nav-social">
						<ul>
							<li><a href="#"><img src="<?php echo site_url(); ?>/images/cows-and-sheep-facebook.png" /></a></li>
							<li><a href="#"><img src="<?php echo site_url(); ?>/images/cows-and-sheep-twitter.png" /></a></li>
							<li><a href="#"><img src="<?php echo site_url(); ?>/images/cows-and-sheep-linkedin.png" /></a></li>
							<li><a href="#"><img src="<?php echo site_url(); ?>/images/cows-and-sheep-google-plus.png" /></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
