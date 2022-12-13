<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<?php wp_head(); ?>
	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '321546785301637');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=321546785301637&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>

	<div id="outer-wrap" class="site clr">

		<div id="wrap" class="clr">
			
			<header class="header">
				<div class="container">
					<div class="flex--box">
						<div class="logo">
							<h1 class="site-title-heading">
		                        <a href="<?php echo esc_url(home_url('/')); ?>">
		                            <?php if( get_field('logo','option') ): ?>
		                                <img src="<?php the_field('logo','option'); ?>">
		                            <?php endif; ?>
		                           </a>
		                    </h1>
						</div>
						<div class="menu--top">
							<nav class="navbar navbar-expand-lg navbar-light">
		                        <button class="navbar-toggler" type="button">
		                            <span class="navbar-toggler-icon"></span>
		                        </button>

		                        <div id="bootstrap-basic4-topnavbar" class="collapse navbar-collapse">
		                            <?php
		                            wp_nav_menu(
		                                array(
		                                    'menu' => 'Main nemu',
		                                    'menu_class' => 'navbar-nav mr-auto',
											'container_id' => 'cssmenu', 
		                                    'walker' => new CSS_Menu_Walker()
		                                )
		                            );
		                            ?>
		                        </div><!--.navbar-collapse-->
		                        <div class="clearfix"></div>
		                    </nav>
						</div>
						<div class="phone--block">
							<div>
								<p><?php the_field('text','option'); ?></p>
								<a href="<?php the_field('phone','option'); ?>"><i class="fa fa-phone"></i><?php the_field('phone','option'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</header>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>
