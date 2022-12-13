<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html class="black_css" <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	
	
    <?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/black-style.css">	
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

    <?php get_template_part('templates/components/mobile', 'menu')?>
<div class="el-wrapper">
    <?php
        $front_menu = (is_front_page()) ? 'el-front' : '';
        $inverse = (!is_front_page()) ? 'el-inverse' : '';
    ?>
    <div id="el-main-menu" class="<?=$front_menu;?> black">
        <div class="el-box">
            <div class="el-toogle-menu">
                <div class="hamburger" id="hamburger-11">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="el-logotype">
                <a href="<?php echo get_home_url('/')?>">
                    <img src="<?php echo get_field('logo_main_header_orange', 'option')['url']?>" alt="<?php echo get_field('logo_main_header_orange', 'option')['alt']?>">
                    <img src="<?php echo get_field('logo_main_header_orange', 'option')['url']?>" alt="<?php echo get_field('logo_main_header_orange', 'option')['alt']?>">
                </a>
            </div>
            <div class="el-navigation">
                <?php wp_nav_menu(array('theme_location' => 'main_menu', 'container' => 'nav', 'depth' => 0)) ?>
            </div>
            <div class="el-contact">
                
                    <div class="el-top-context"><?php the_field('text', 'option');?></div>
                    <div class="el-phone"><?php the_field('phone', 'option');?> <i class="fas fa-phone"></i></div>
                
            </div>
        </div>
    </div>


	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>
			
			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

				<?php do_action( 'ocean_page_header' ); ?>