<?php
/**
 * Template Name: Page business  
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package OceanWP WordPress theme
 */

get_header('black'); ?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="container clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class="content-area clr">

			<?php do_action( 'ocean_before_content' ); ?>

			<div id="content" class="site-content clr">

				<?php do_action( 'ocean_before_content_inner' ); ?>
		            <div class="el-form-column">
		                <div id="form-pt1-1">
		                    <div class="el-header-panel">
		                        <div class="el-title-form"><?php the_field('title_form_g','option'); ?></div>
		                        <div class="el-subtitle-form"><?php the_field('subtitle_form_g','option'); ?></div>
		                    </div>
		                    <div class="el-contact-line">
		                        <a href="tel:<?php the_field('phone_in_form_g','option'); ?>"> <span><i class="fas fa-phone"></i></span><?php the_field('phone_in_form_g','option'); ?></a>
		                    </div>

                            <?php $current_id = get_the_ID(); ?>

                            <?php 
							if ( $current_id == 4161 ) { ?>
								<div class="el-wrap-form-contact"><?php
								echo do_shortcode( '[contact-form-7 id="6626" title="nlp לעסקים - fixed"]' ); ?></div>
							<?php  } elseif ($current_id == 4163) {?>
								<div class="el-wrap-form-contact"><?php
								echo do_shortcode( '[contact-form-7 id="6626" title="nlp לעסקים - fixed"]' ); ?></div>
							<?php } elseif ($current_id == 4165) { ?>							
								<div class="el-wrap-form-contact"><?php
								echo do_shortcode( '[contact-form-7 id="6626" title="nlp לעסקים - fixed"]' ); ?></div>
                            <?php } else { ?>
                                <div class="el-wrap-form-contact"><?php
                                    $shortcode = get_field('shortcode_form_g','option');
                                    echo do_shortcode( $shortcode ); ?></div>
                            <?php } ?>
		                </div>
		            </div>

		       

				

				<?php
				// Start loop
				while ( have_posts() ) : the_post();

					get_template_part( 'partials/page/layout' );

				endwhile; ?>

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

		<?php do_action( 'ocean_display_sidebar' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>