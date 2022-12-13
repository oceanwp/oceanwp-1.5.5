<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */ ?>
    <?php get_template_part('templates/components/bottom','contact')?>

<style>
    .el-logotype{ margin-bottom: 20px; }
    .el-logotype a{ display: inline-block; }

</style>



    <div class="el-footer">
        <div class="el-box">
            <div class="el-column el-main-col">
                <div class="el-logotype">
                    <a href="<?php echo get_home_url('/')?>">
                        <img src="<?php echo get_field('select_column', 'option')['footer_ls_upload_logo']['url']?>" alt="<?php echo get_field('select_column', 'option')['footer_ls_upload_logo']['alt']?>">
                    </a>
                </div>
                <div class="el-logotype">
                    <a href="<?php echo get_home_url('/')?>">
                        <img src="<?php echo get_field('logo_main_header_orange', 'option')['url']?>" alt="<?php echo get_field('logo_main_header_orange', 'option')['alt']?>">
                    </a>
                </div>
                <div class="el-logotype">
                    <a href="<?php echo get_home_url('/')?>">
                        <img src="<?php echo get_field('logo_main_header_red', 'option')['url']?>" alt="<?php echo get_field('logo_main_header_red', 'option')['alt']?>">
                    </a>
                </div>
                <?php if(!empty(get_field('select_column' , 'option')['footer_ls_social_network'])){ ?>
                <div class="el-social">
                    <ul>
                        <?php foreach(get_field('select_column' , 'option')['footer_ls_social_network'] as $link ){ ?>
                            <li><a target="_blank" rel="nofollow" href="<?=$link['footer_ls_social_network_link']?>"><?=$link['footer_ls_social_network_icon']?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>
            </div>
            <div class="el-column el-menu">
                <?php dynamic_sidebar('footer-two')?>
            </div>
            <div class="el-column el-menu">
                <?php dynamic_sidebar('footer-three')?>
            </div>
            <div class="el-column el-menu el-post">
                <?php $posts = get_field('select_column', 'option')['select_page_3']?>
                <div class="el-title-list">מאמרים אחרונים</div>
                <?php if(!empty($posts)) { ?>
                    <ul>
                        <?php foreach($posts as $link){ ?>
                            <li>
                                <?php
                                $author_id = get_post_field ('post_author', $link->post_author);
                                $display_name = get_the_author_meta( 'display_name' , $author_id );
                                ?>
                                <a href="<?php the_permalink($link->ID)?>">
                                    <div class="el-title"><?php echo $link->post_title; ?></div>
                                    <div class="el-data-post">
                                        <span class="el-author"><?php  echo $display_name;?></span>
                                        <span class="el-date"><?php echo get_the_date('j.m.Y', $link->ID)?></span>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>

    </div>
    <div class="el-develop-line">
        <?php $dev_data = get_field('select_column', 'option');?>
        <div class="el-box">
            <div class="el-cont-wrap">
                <div class="el-copyright"><?php echo date('Y')?> &copy <?php echo $dev_data['footer_copyright_text']?> </div>
                <div class="el-cente-text">
                    <?php foreach($dev_data['footer_policy_map'] as $links) { ?>
                        <a href="<?php echo $links['link_page']?>"><?php echo $links['name_page']?></a>
                    <?php } ?>
                </div>
                <div class="el-logo">
                    
                        <span><?php echo $dev_data['footer_dev_text']?></span>
                        <img src="<?php echo $dev_data['footer_developer_logo']['url']?>" alt="<?php echo $dev_data['footer_developer_logo']['alt']?>">
                   
                </div>
            </div>
        </div>
    </div>
        </main><!-- #main -->

        <?php //do_action( 'ocean_after_main' ); ?>

        <?php //do_action( 'ocean_before_footer' ); ?>

        <?php //do_action( 'ocean_footer' ); ?>

        <?php //do_action( 'ocean_after_footer' ); ?>
                
    </div><!-- #wrap -->

    <?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
    get_template_part( 'partials/scroll-top' );
} ?>

<?php
// Search overlay style
if ( 'overlay' == oceanwp_menu_search_style() ) {
    get_template_part( 'partials/header/search-overlay' );
} ?>

<?php
// If sidebar mobile menu style
if ( 'sidebar' == oceanwp_mobile_menu_style() ) {
    
    // Mobile panel close button
    if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
        get_template_part( 'partials/mobile/mobile-sidr-close' );
    } ?>

    <?php
    // Mobile Menu (if defined)
    get_template_part( 'partials/mobile/mobile-nav' ); ?>

    <?php
    // Mobile search form
    if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
        get_template_part( 'partials/mobile/mobile-search' );
    }

} ?>

<?php
// If full screen mobile menu style
if ( 'fullscreen' == oceanwp_mobile_menu_style() ) {
    get_template_part( 'partials/mobile/mobile-fullscreen' );
} ?>


<?php get_template_part('templates/components/fixed', 'social')?>
<?php get_template_part('templates/components/fixed', 'form')?>
</div>
<?php wp_footer(); ?>


	<?php $current_id = get_the_ID(); ?>

	<?php 
	if ( $current_id == 4161 ) { ?>
		<script>
		 document.addEventListener( 'wpcf7mailsent', function( event ) {
			 location = '<?php echo site_url() ?>/thank-you-black/';
		 }, false );
		</script>
	<?php  } elseif ($current_id == 4163) {?>
		<script>
		 document.addEventListener( 'wpcf7mailsent', function( event ) {
			 location = '<?php echo site_url() ?>/thank-you-black/';
		 }, false );
		</script>
	<?php } elseif ($current_id == 4165) { ?>							
		<script>
		 document.addEventListener( 'wpcf7mailsent', function( event ) {
			 location = '<?php echo site_url() ?>/thank-you-black/';
		 }, false );
		</script>
	<?php } else { ?>
		<script>
		 document.addEventListener( 'wpcf7mailsent', function( event ) {
			 location = '<?php echo site_url() ?>/thank-you/';
		 }, false );
		</script>
	<?php } ?>





</body>
</html>