<div id="el-mobile-menu">
    <div class="el-top-logo"><img src="<?php echo get_field('logo_main_header_inverse', 'option')['url']?>" alt="<?php echo get_field('logo_main_header_inverse', 'option')['alt']?>"></div>
    <div class="el-list-menu">
        <?php wp_nav_menu(array('theme_location' => 'main_menu', 'container' => 'nav', 'depth' => 0)) ?>
    </div>
</div>