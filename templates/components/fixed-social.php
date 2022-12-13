<?php
    /*
     * Component social links
     * */
    $components = get_field('components_start', 'option')

?>

<!-- Components social -->
<?php if(!empty($components['components_insert_you_social_platform'])){ ?>
<div id="fixed-social-networks">
    <ul>
        <?php foreach($components['components_insert_you_social_platform'] as $link ){ ?>
            <li><a target="_blank" rel="nofollow" href="<?=$link['components_insert_you_social_platform_link']?>">
                    <span class="el-title"><?php echo $link['components_insert_you_social_platform_name_network']?></span>
                    <span class="el-icon"><?=$link['components_insert_you_social_platform_icon']?></span>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>
<style>
    #fixed-social-networks{
        position: fixed;
        z-index: 400;
        left: 7px;
        top: calc(50% - 190px);
    }
    #fixed-social-networks ul{
        list-style: none;
    }
    #fixed-social-networks ul li{
        margin-top: 7px;
        width: 50px;
        height: 50px;
    }
    #fixed-social-networks ul li a{
        display: block;
        background: #14519e;
        color: #fff;
        text-decoration: none;
        text-align: center;
        font-size: 16px;
        width: 100%;
        height: 100%;
        line-height: 50px;
        transition: 0.3s;
        position: relative;
    }
    #fixed-social-networks ul li span.el-icon{
        display: inline-block;
    }
    #fixed-social-networks ul li:hover a{
        background: #0a3d7c;
    }
    #fixed-social-networks ul li span.el-title{
        width: 0;
        white-space: nowrap;
        position: absolute;
        left: 100%;
        top: 0;
        transition: 0.3s;
        padding-right: 10px;
        overflow: hidden;
        color: #fff;
        display: inline-block;
        background: #0a3d7c;
        opacity: 0;
        height: 50px;
        line-height: 50px;
        font-family: 'almoni-dl', sans-serif;
    }
    #fixed-social-networks ul li:hover span.el-title{
        width: auto;
        opacity: 1;
    }
</style>
<!-- / Components social -->
