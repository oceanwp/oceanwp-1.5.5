<?php
    /**
     * Template Name: Front page
     */

    $front_container = get_field('fp_main-container');
    ?>

<!-- get header  -->
    <?php get_header();?>
<!-- /get header  -->

<!-- front content -->
    <div id="el-front-content">
        <?php get_template_part('templates/front/main', 'banner');?>
        <?php get_template_part('templates/front/author', 'information');?>
        <?php get_template_part('templates/front/couch', 'video');?>
        <?php get_template_part('templates/front/section', 'testonomials');?>
        <?php get_template_part('templates/front/products', 'catalog');?>
        <?php get_template_part('templates/front/section', 'contact');?>
    </div>
<!-- /front content -->

<!-- get footer -->
    <?php get_footer(); ?>
<!-- /get footer -->