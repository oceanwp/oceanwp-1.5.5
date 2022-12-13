<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="container clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class="content-area clr">

			<?php do_action( 'ocean_before_content' ); ?>

			<div id="content" class="site-content clr">

				<?php do_action( 'ocean_before_content_inner' ); ?>

				<?php
				// Check if posts exist
				if ( have_posts() ) : ?>

                    <div data-id="1e274952" style="padding-top: 25px; text-align: center; " class="elementor-element elementor-element-1e274952 elementor-widget elementor-widget-heading" data-element_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-xl"> <?php single_term_title(); ?> </h1>

                        </div>
                    </div>
                    <div style="text-align: center; " data-id="1a1d552" class="elementor-element elementor-element-1a1d552 elementor-widget elementor-widget-heading" data-element_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-medium">
                                <?php echo category_description(); ?>
                            </h4>

                        </div>
                    </div>
						
			<div style="margin: 20px 39%;clear: both;margin-bottom: 30px !important;" data-id="1f7d475" class="elementor-element elementor-element-1f7d475 elementor-search-form--skin-classic elementor-search-form--button-type-icon elementor-search-form--icon-search elementor-widget elementor-widget-search-form" data-settings="{&quot;skin&quot;:&quot;classic&quot;}" data-element_type="search-form.default"><div class="elementor-widget-container"><form class="elementor-search-form" role="search" action="https://forachange.co.il" method="get"><div class="elementor-search-form__container" style="border-radius: 4px;min-height: 40px;"> <input style="padding-right: 15px;" placeholder="חיפוש נושא" class="elementor-search-form__input" type="search" name="s" title="חיפוש" value="" data-fontsize="15"> <button style="min-width: 29px;" class="elementor-search-form__submit" type="submit" data-fontsize="16"> <i class="fa fa-search" aria-hidden="true"></i> </button></div></form></div></div>

					<div id="blog-entries" class="<?php oceanwp_blog_wrap_classes(); ?>">

						<?php
						// Define counter for clearing floats
						$oceanwp_count = 0; ?>

						<?php
						// Loop through posts
						while ( have_posts() ) : the_post(); ?>

							<?php
							// Add to counter
							$oceanwp_count++; ?>

							<?php
							// Get post entry content
							get_template_part( 'partials/entry/layout', get_post_type() ); ?>

							<?php
							// Reset counter to clear floats
							if ( oceanwp_blog_entry_columns() == $oceanwp_count ) {
								$oceanwp_count=0;
							} ?>

						<?php endwhile; ?>

					</div><!-- #blog-entries -->

					<?php
					// Display post pagination
					oceanwp_blog_pagination(); ?>

				<?php
				// No posts found
				else : ?>

					<?php
					// Display no post found notice
					get_template_part( 'partials/none' ); ?>

				<?php endif; ?>

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

		<?php do_action( 'ocean_display_sidebar' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>