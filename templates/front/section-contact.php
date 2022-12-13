<?php
/*
 * Template: section contact
 */
$front_container = get_field('fp_main-container');
$bottom_contact = $front_container['contact_section_bp']
?>
<style>
    @media(max-width: 768px){

        #el-contact .el-bg-square{
            width: 100%;
            height: 400px;
            background: url(<?php echo $front_container['contact_section_background_mob']?>) no-repeat center !important;
            background-size: cover !important;
        }
    }
</style>
<section id="el-contact">
    <div class="el-form-cont" style="background: url('<?=$front_container['contact_section_background']?>') no-repeat center; background-size: cover;">
        <div class="el-box">
            <div class="el-column-form">
                <div class="el-label"><span><?=$front_container['contact_section_green_label']?></span></div>
                <div class="el-title"><?=$front_container['contact_section_title']?></div>
                <div class="el-subtitle"><?=$front_container['contact_section_subtitle']?></div>
                <div class="el-wrap-form-contact"><?php echo do_shortcode($front_container['contact_section_form_shortcode'])?></div>
            </div>
        </div>
    </div>
    <div class="el-bg-square"></div>
</section>


