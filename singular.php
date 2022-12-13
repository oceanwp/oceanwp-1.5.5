<?if (get_field('black_header')) { ?>
	 <?php get_header('black'); ?>
<?php } else { ?>
	<?php get_header(); ?>
<?php }  ?> 
 
 
	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="container clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class="content-area clr">

			<?php do_action( 'ocean_before_content' ); ?>

			<div id="content" class="site-content clr">

				<?php do_action( 'ocean_before_content_inner' ); ?>

				<?php
				// Start loop
				while ( have_posts() ) : the_post();

					// Single Page
					if ( is_singular( 'page' ) ) {

						get_template_part( 'partials/page/layout' );

					}

					// Library post types
    				elseif ( is_singular( 'oceanwp_library' )
    						|| is_singular( 'elementor_library' ) ) {

    					get_template_part( 'partials/library/layout' );

    				}

					// All other post types.
					else {

    					get_template_part( 'partials/single/layout', get_post_type() );

  					}

				endwhile; ?>

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

            <div data-id="8567ebd" class="elementor-element elementor-element-8567ebd elementor-column elementor-col-50 elementor-top-column" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div data-id="70d4d0b3" class="elementor-element elementor-element-70d4d0b3 elementor-widget elementor-widget-contact-form-7" data-element_type="contact-form-7.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-contact-form-7 jet-elements"><div role="form" class="wpcf7" id="wpcf7-f4730-p4100-o1" lang="he-IL" dir="rtl">
                                        <div class="screen-reader-response"></div>

                                        <div class="el-wrap-form-contact"><?php
                                            echo do_shortcode( '[contact-form-7 id="4730" title="צור קשר כללי"]' ); ?></div>
                                    </div></div>		</div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .wpcf7-form-control-wrap input , .wpcf7-form-control-wrap textarea { background-color: #f1f1f1 !important;
                    color: #ffffff;
                    font-size: 18px;
                    padding: 10px 20px 10px 20px;
                    margin: 0px 0px 15px 0px;
                    border-style: solid;
                    border-width: 0px 0px 0px 0px;}

                .wpcf7 input.wpcf7-submit {
                    background-color: #98c848;
                    text-decoration: none;
                    border-radius: 3px 3px 3px 3px;
                }
            </style>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

		<?php do_action( 'ocean_display_sidebar' ); ?>



	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>
