<?php
/*
 * Template: main banner
 */
$front_container = get_field('fp_main-container');
$products = $front_container['fp_gallaryprod_products'];

?>
<style>
    @media(max-width: 768px){
        #el-products-catalog{
            background: url(<?php echo $front_container['fp_gallaryprod_bg_mobile']?>) no-repeat center !important;
            background-size: cover !important;
        }
    }
</style>

<section id="el-products-catalog" style=" background: url('<?=$front_container['fp_gallaryprod_bg']?>') ;background-size: cover;">
    <div class="el-top-label"><span><?php echo $front_container['fp_gallaryprod_green_label']?></span></div>
    <div class="el-title-section"><?php echo $front_container['fp_gallaryprod_green_label']?></div>
    <div class="el-repeater-product">
        <?php foreach ($products as $product){ ?>
            <?php //var_dump($product)?>
        <div class="el-product">
            <div class="el-thumbail">
                <a href="<?php the_permalink($product->ID)?>"><img src="<?php echo get_the_post_thumbnail_url($product->ID)?>" alt=""></a>
            </div>
            <div class="el-category"><a href="/">מוצרים פיזיים</a></div>

            <div class="el-title"><a href="<?php the_permalink($product->ID)?>"><?=$product->post_title?></a></div>
            <div class="el-btn">
                <?php echo do_shortcode('[add_to_cart id="99"]')?>
                <a class="el-btn-2 add_to_cart_button ajax_add_to_cart" data-product_sku data-product_id="<?php echo $product->ID?>" href="<?php the_permalink($product->ID)?>?add-to-cart=<?php echo $product->ID?>"><span class="lnr lnr-arrow-left"></span>הוסף לסל</a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
