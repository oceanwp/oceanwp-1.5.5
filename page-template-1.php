<?php

    /*
     * Template Name: Page template 1
     */

    $template_data = get_field('pt1_select_section');


    $form_logic = $template_data['pt1_toggle_form'];
    $label_logic = $template_data['pt1_content_for_section']['pf1_if_image_labels'];
    $content_header = $template_data['pt1_content_for_section'];



    //var_dump($template_data)
?>
<?php get_header();?>

<!-- header banner -->
<!--<style>
    section.el-header-banner{
        background: url(<?php /*echo $template_data['pt1_upload_background_image']*/?>) no-repeat 100%;
        background-size: cover;
    }
    @media(max-width: 1600px){
        section.el-header-banner{
            background: url(<?php /*echo $template_data['pt1_upload_background_image']*/?>) no-repeat center;
            background-size: cover;
        }
    }
    @media(max-width: 1000px){
        header.el-header-banner{
            position: relative;
        }
        .el-overlay-hb{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7);
            z-index: 0;
        }
    }
</style>-->
<?php the_content(); ?>
<section class="el-header-banner">
    <div class="el-overlay-hb"></div>
    <div class="el-box">
        <?php if($form_logic === true or $form_logic === 1){ ?>
            <?php
            // $form = $template_data['pt1_feedback_form']
            ?>
            <div class="el-form-column">
                <div id="form-pt1-1">
                    <div class="el-header-panel">
                        <div class="el-title-form"><?php the_field('title_form_g','option'); ?></div>
                        <div class="el-subtitle-form"><?php the_field('subtitle_form_g','option'); ?></div>
                    </div>
                    <div class="el-contact-line">
                        <a href="tel:<?php the_field('phone_in_form_g','option'); ?>"> <span><i class="fas fa-phone"></i></span><?php the_field('phone_in_form_g','option'); ?></a>
                    </div>
                    <div class="el-wrap-form-contact"><?php
						if(get_field('form_page')) {
							 $shortcode = get_field('form_page');
						}else {
							 $shortcode = get_field('shortcode_form_g','option');
						}
                       
                        echo do_shortcode( $shortcode ); ?></div>
                </div>
            </div>

        <?php } ?>

       <!-- <div class="el-content-header">
            <div class="el-breadcrumps"><?php /*the_breadcrumb(); */?></div>
            <div class="el-main-title"><h1><?/*=$content_header['pt1_content_main_title_page']*/?></h1></div>
            <div class="el-subtitle"><?/*=$content_header['pt1_content_main_subtitle_page']*/?></div>
            <?php /*if(!empty($content_header['pt1_content_list_items_check'])){*/?>
                <div class="el-check-list">
                    <ul>
                        <?php /*foreach($content_header['pt1_content_list_items_check'] as $list) { */?>
                            <?php /*$variant = ($list['pt1_content_checkes_item_check'] === true or $list['pt1_content_checkes_item_check'] === 1) ? 'el-yes' : 'el-no'*/?>
                            <li class="<?/*=$variant*/?>"><?/*=$list['pt1_content_title_item_check']*/?></li>
                        <?php /*} */?>
                    </ul>
                </div>
            <?php /*} */?>
            <div class="el-description">
                <div class="el-text"><?/*=$content_header['pt1_context_header_banner']*/?></div>
                <div class="el-icon"><img src="<?php /*echo get_template_directory_uri()*/?>/assets/img/quote_2.png" alt=""></div>
                <div class="el-btn-text"><a href="<?/*=$content_header['pt1_bottom_link_header_banner']*/?>">מיקי ברקל</a></div>
            </div>
            <?php /*if($label_logic === true or $label_logic === 1){ */?>
                <?php /*if(!empty($content_header['pt1_image_labels_repeater'])){*/?>
                    <div class="el-photo-label">
                        <?php /*foreach($content_header['pt1_image_labels_repeater'] as $label) { */?>
                            <img src="<?/*=$label['pt_1upload_image']['url']*/?>" alt=""/>
                        <?php /*} */?>
                    </div>
                <?php /*} */?>
            <?php /*} */?>
        </div>-->

   </div>
</section>
<!-- /header banner -->




<?php get_footer();?>
