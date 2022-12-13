<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package OceanWP WordPress theme
 */

// Retunr if full width or full screen
if ( in_array( oceanwp_post_layout(), array( 'full-screen', 'full-width' ) ) ) {
	return;
} ?>

<?php do_action( 'ocean_before_sidebar' ); ?>

<aside id="right-sidebar" class="sidebar-container widget-area sidebar-primary"<?php oceanwp_schema_markup( 'sidebar' ); ?>>

    <?php

        global $post;
        $label = false;

        $curr_post = $post->ID;


        $cat_list = get_the_category( $curr_post );


        foreach( $cat_list as $category ){


            if ( $category->slug == 'category1' ){
                $label = true;
            }
        }
    ?>

    <?php if ( $label ) : ?>


    <?php

        $posts = get_posts( array(
            'post_type' => 'post',
            'exclude' => $curr_post,
            'category_name' => 'category1'
        ) );

    ?>

        <?php foreach ( $posts as $pst ) : ?>
            <div class="box">
                <div class="title"><a href="<?php echo get_permalink($pst->ID); ?>"> <?php  echo $pst->post_title; ?> </a></div>
                <div class="post-content">
                    <?php the_excerpt( $pst->ID ) ;?>
                    <?php //echo substr( $pst->post_content , 120) . "..."; ?>
                </div>
            </div>

        <?php endforeach; wp_reset_query(); ?>

        <style>
            #right-sidebar .box { margin-bottom: 15px; padding-bottom: 5px; border-bottom: 1px solid #ccc; }
            #right-sidebar .box .title{ margin-bottom: 5px;}
            #right-sidebar .box .title a{ font-size: 18px; }
            #right-sidebar .box  .post-content p{ font-size: 14px; line-height: 1.3; }
        </style>

    <?php ?>

    <?php else : ?>

        <?php do_action( 'ocean_before_sidebar_inner' ); ?>

        <div id="right-sidebar-inner" class="clr">

            <?php
            if ( $sidebar = oceanwp_get_sidebar() ) {
                dynamic_sidebar( $sidebar );
            } ?>

        </div>
        <?php do_action( 'ocean_after_sidebar_inner' ); ?>

    <?php endif; ?>

</aside><!-- #right-sidebar -->

<?php do_action( 'ocean_after_sidebar' ); ?>