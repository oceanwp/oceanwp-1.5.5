<?php
    /*
     * Template: main banner
     */
    $front_container = get_field('fp_main-container');
    $front_banner = $front_container['fp_select-edit-region']
?>
<!-- main banner -->
<style>
    @media(max-width: 768px){
        #el-main-banner{
            background: url(<?php echo $front_banner['fp_main_banner-select_media_mob']?>) no-repeat top !important;
            background-size: cover !important;
        }
    }
</style>
<div id="el-main-banner" style="background: url('<?=$front_container['fp_select-edit-region']['fp_main_banner-select_media'];?>') no-repeat center;background-size: cover;">
    <div class="el-box">
        <div class="el-banner-content">
            <div class="el-center-content">
                <div class="el-bg-subtitle"><?=$front_banner['fp_main_banner_green_label']?></div>
                <div class="el-main-title"><?=$front_banner['fp_main_banner_title']?></div>
                <div class="el-subtitle"><?=$front_banner['fp_main_banner_subtitle']?></div>
                <div class="el-btn-ccontent">
                    <a class="el-btn-1" href="<?=$front_banner['fp_main_banner_button_link']?>"><span class="lnr lnr-arrow-left"></span><?=$front_banner['fp_main_banner_button_text']?></a>
                </div>
            </div>
            <?php
                $front_banner_bp = $front_banner['fp_main_banne_bottom_blocks'];
            ?>
            <div class="el-bottom-content">
                <div class="el-main-block">
                    <div class="el-title-block">
                        <div class="el-text"><?=$front_banner_bp['fp_main_banne_main_block_title']?></div>
                        <div class="el-row"><div class="arrows"></div></div>
                    </div>
                    <div class="el-description"><?=$front_banner_bp['fp_main_banner_main_block_deskr']?></div>
                </div>
                <?php
                $front_banner_repeater_bp =  $front_banner['fp_main_banne_bottom_blocks']['fp_main_banner_repeater_blocks'];
                ?>
                <div class="el-repeat-bloks">
                    <?php foreach($front_banner_repeater_bp as $block){ ?>
                        <div class="el-block">
                            <a href="<?=$block['fp_main_banner_repeater_lick_block']?>">
                                <div class="el-bg-toggle" style=" background: url('<?=$block["fp_main_banner_repeater_hover_image_block"]?>') no-repeat center; background-size: cover;"></div>
                                <div class="el-subtitle"><?=$block["fp_main_banner_repeater_blocks_label"]?>​</div>
                                <div class="el-title"><?=$block["fp_main_banner_repeater_blocks_title"]?></div>
                                <div class="el-description"><?=$block['fp_main_banner_repeater_deskr_block']?></div>
                                <div class="el-btn-more">
                                    <a href="<?=$block['fp_main_banner_repeater_lick_block']?>"><span class="lnr lnr-chevron-left"></span> הבאה</a>
                                </div>
                            </a>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / main banner -->