<?php
$bottom_contact  = get_field('components_start', 'option')['contact_section_bp_select']
?>
<div class="el-bottom-contact">
    <div class="el-box clr">
        <div class="el-contact-cell">
            <div class=" clr ">
                <div class="el-img"><img src="<?=$bottom_contact['contact_section_bp_image-map']['url']?>" alt="<?=$bottom_contact['contact_section_bp_image-map']['alt']?>"></div>
                <div class="el-content">
                    <div class="el-title-contact"><?=$bottom_contact['contact_section_bp_name-map']?></div>
                    <div class="el-contact-data smaller"><?=$bottom_contact['contact_section_bp_deskr-map']?></div>
                    <div class="el-contact-data smaller"><?=$bottom_contact['contact_section_bp_deskr-map_2']?></div>
                </div>
            </div>
        </div>
        <div class="el-contact-cell">
            <div class=" clr ">
                <div class="el-img"><a href="tel:<?=$bottom_contact['contact_section_bp_numphone']?>"><img src="<?=$bottom_contact['contact_section_bp_image-phone']['url']?>" alt="<?=$bottom_contact['contact_section_bp_image-phone']['alt']?>"></a></div>
                <div class="el-content">
                    <div class="el-title-contact"><?=$bottom_contact['contact_section_bp_name-phone']?></div>
                    <div class="el-contact-data"><a href="tel:<?=$bottom_contact['contact_section_bp_numphone']?>"><?=$bottom_contact['contact_section_bp_numphone']?></a></div>
                </div>
            </div>
        </div>
        <div class="el-contact-cell">
            <div class=" clr ">
                <div class="el-img"><img src="<?=$bottom_contact['contact_section_bp_image-fax']['url']?>" alt="<?=$bottom_contact['contact_section_bp_image-fax']['alt']?>"></div>
                <div class="el-content">
                    <div class="el-title-contact"><?=$bottom_contact['contact_section_bp_name-fax']?></div>
                    <div class="el-contact-data"><a href="tel:<?=$bottom_contact['contact_section_bp_numfax']?>"><?=$bottom_contact['contact_section_bp_numfax']?></a></div>
                </div>
            </div>
        </div>
        <div class="el-contact-cell">
            <div class=" clr ">
                <div class="el-img"><a href="mailto:<?=$bottom_contact['contact_section_bp_post-email']?>"><img src="<?=$bottom_contact['contact_section_bp_image-email']['url']?>" alt="<?=$bottom_contact['contact_section_bp_image-email']['alt']?>"></a></div>
                <div class="el-content">
                    <div class="el-title-contact"><?=$bottom_contact['contact_section_bp_name-email']?></div>
                    <div class="el-contact-data"><a href="mailto:<?=$bottom_contact['contact_section_bp_post-email']?>"><?=$bottom_contact['contact_section_bp_post-email']?></a></div>
                </div>
            </div>
        </div>
    </div>
</div>