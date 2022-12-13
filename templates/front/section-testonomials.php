<?php
/*
 * Template: main banner
 */
$front_container = get_field('fp_main-container');
$testonomials = $front_container['fp_testemonials_posts'];

?>

<!-- section testonomials -->
<section id="el-testonomials">
    <div class="el-box">
        <div class="el-inner-content">
            <div class="el-main-content">
                <?php $i = 0; foreach ($testonomials as $testonomial){ $i++ ?>
                    <?php
                    //var_dump($testonomial->ID);
                    $video_link = get_field('select_region', $testonomial->ID)['author_context_region_fp']['video_linkt'] ;
                    $video_poster = get_field('select_region', $testonomial->ID)['author_context_region_fp']['poster_video_photo']['url'] ;
                    $green_label = get_field('select_region', $testonomial->ID)['author_context_region_fp']['label_green_content'];
                    $title_post = get_field('select_region', $testonomial->ID)['author_context_region_fp']['title_content'];
                    $textarea = get_field('select_region', $testonomial->ID)['author_context_region_fp']['context_for_content'];
                    ?>
                    <?php if($i == 1) { ?>
                        <div class="el-variant active">
                           
                            <div class="el-column el-context">
                                <div class="el-label-text"><?=$green_label?></div>
                                <div class="el-text"><?=$title_post?></div>
                                <div class="el-row-img"><img src="<?php echo get_template_directory_uri()?>/assets/img/quote.png" alt="icon quote"></div>
                                <div class="el-textarea">
                                    <?=$textarea?>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="el-variant">
                           
                            <div class="el-column el-context">
                                <div class="el-label-text"><?=$green_label?></div>
                                <div class="el-text"><?=$title_post?></div>
                                <div class="el-row-img"><img src="<?php echo get_template_directory_uri()?>/assets/img/quote.png" alt="icon quote"></div>
                                <div class="el-textarea">
                                    <?=$textarea?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="el-bottom-tab">
                <?php $i = 0; foreach ($testonomials as $testonomial){ $i++ ?>
                    <?php if($i == 1) { ?>
                        <div class="el-tab active" data-index="<?=$i?>">
                            <div class="el-media"><img src="<?php echo get_field('select_region', $testonomial->ID)['author_data_region_fp']['icon_author_region_fp']['url']?>" alt="<?php echo get_field('select_region', $testonomial->ID)['author_data_region_fp']['icon_author_region_fp']['alt']?>"></div>
                            <div class="el-content">
                                <div class="el-title"><?php echo get_field('select_region', $testonomial->ID)['author_data_region_fp']['title_author_region_fp']?></div>
                                <div class="el-cat"><?php echo get_field('select_region', $testonomial->ID)['author_data_region_fp']['descr_author_region_fp']?> </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="el-tab" data-index="<?=$i?>">
                            <div class="el-media"><img src="<?php echo get_field('select_region', $testonomial->ID)['author_data_region_fp']['icon_author_region_fp']['url']?>" alt="<?php echo get_field('select_region', $testonomial->ID)['author_data_region_fp']['icon_author_region_fp']['alt']?>"></div>
                            <div class="el-content">
                                <div class="el-title"><?php echo get_field('select_region', $testonomial->ID)['author_data_region_fp']['title_author_region_fp']?></div>
                                <div class="el-cat"><?php echo get_field('select_region', $testonomial->ID)['author_data_region_fp']['descr_author_region_fp']?> </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="el-arrow-slide">
                <div class="el-prev" title="prev"><span class="lnr lnr-chevron-right"></span></div>
                <div class="el-next" title="next"><span class="lnr lnr-chevron-left"></span></div>
            </div>
        </div>
    </div>
</section>
<!-- /section testonomials -->
