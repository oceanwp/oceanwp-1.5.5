<?php
/*
 * Template: main banner
 */
$front_container = get_field('fp_main-container');
?>
<!-- couch video -->
<section id="el-video">
    <div class="el-top-label"><span><?=$front_container['video_region_green_label']?></span></div>
    <div class="el-title-video">
        <h3><?=$front_container['video_region_title_section']?></h3>
    </div>
    <div class="el-repeat-video">
        <?php foreach($front_container['video_region_videos'] as $video){ ?>
        <div class="el-part open-video-popup" data-url="<?=$video['video_region_frame_link']?>?autoplay=1" style="background: url('<?=$video['video_region_repear_posterr']?>') no-repeat center; background-size: cover;">
            <div class="el-title-v"><p><?=$video['video_region_repear_title']?></p></div>
            <div class="el-play-v"><i class="material-icons">play_circle_outline</i></div>
        </div>
        <?php } ?>
    </div>
</section>
<!-- / couch video -->