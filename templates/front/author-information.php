<?php
/*
     * Template: main banner
     */

    $front_container = get_field('fp_main-container');
    $front_author_inf = $front_container['fp_author_about_select_content']
?>
<!-- author information  -->
    <section id="el-author-inf">
        <div class="el-box">
            <div class="el-wrap-column">
                <div class="el-column el-context">
                    <div class="el-top-label"><?=$front_author_inf['fp_author_about_green_label']?></div>
                    <div class="el-title-context"><?=$front_author_inf['fp_author_about_ttitle_context']?></div>
                    <div class="el-subtitle"><?=$front_author_inf['fp_author_about_subtitle_context']?></div>
                    <div class="el-list">
                        <ul>
                            <?php foreach($front_author_inf['fp_author_about_list_context'] as $list){ ?>
                                <li><?=$list['text_list']?> </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="el-sometext"><?=$front_author_inf['fp_author_abou_bottom_content']?></div>
                    <div class="el-btn-row">
                        <a class="el-btn-2" href="<?=$front_author_inf['fp_author_abou_button_link']?>"><span class="lnr lnr-arrow-left"></span>הכירו את מיקי</a>
                    </div>
                </div>
                <div class="el-column el-author">
                    <div class="el-row el-data">
                        <div class="el-photo">
                            <img src="<?=$front_author_inf['fp_author_about_author_poster']['url']?>" alt="author poster">
                            <div class="row-data-1"><?=$front_author_inf['fp_author_about_mintitle']?></div>
                            <div class="row-data-2"><?=$front_author_inf['fp_author_about_minsubtitle']?></div>
                        </div>
                        <div class="el-context">
                            <div class="el-quote"><img src="<?php echo get_template_directory_uri()?>/assets/img/quote.png" alt="quote img"></div>
                            <div class="el-say"><?=$front_author_inf['fp_author_about_author_deskr']?></div>
                            <div class="row-data-1"><?=$front_author_inf['fp_author_about_mintitle']?></div>
                            <div class="row-data-2"><?=$front_author_inf['fp_author_about_minsubtitle']?></div>
                        </div>
                    </div>
                    <div class="el-row el-form">
                        <div class="el-wrap-form el-form-sh" >
                            <div class="el-title-form"><?=$front_author_inf['fp_author_about_form_title']?></div>
                            <div class="el-description-form"><?=$front_author_inf['fp_author_about_form_description']?></div>
                            <div class="el-form"><?php echo do_shortcode($front_author_inf['fp_author_about_form_sc'])?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- / author information  -->
