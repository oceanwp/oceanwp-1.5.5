<?php
/**
 * Template Name: Front Page Template
 *
 *
 */
get_header('new'); ?>

<?php if( get_field('video_banner') ): ?>
	<section class="section1 video_bg">
		<video width="100%" height="auto" muted autoplay="autoplay" loop="loop" preload="auto">
			<source src="<?php the_field('video_banner'); ?>" type="video/mp4"></source>
		</video>
	</section>
	<?php else : ?>
	<section class="section section1" style="background-image: url('<?php the_field('image_banner'); ?>');">
		<div class="container">
			<h3 class="section--before_title"><?php the_field('text_on_green_background'); ?></h3>
			<h2 class="section--title"><?php the_field('title_bunner'); ?></h2>
			<h4 class="banner--subtitle"><?php the_field('subtitle_banner'); ?></h4>
			<a class="banner--button" href="<?php the_field('button_link_banner'); ?>"><?php the_field('button_text_banner'); ?></a>
			<div class="banner--flex">
				<div class="banner--right--block">
					<span></span>
					<h3><?php the_field('first_block_title'); ?></h3>
					<p><?php the_field('first_block_description'); ?></p>
				</div>
				<div class="routes">
					<?php if( have_rows('routes') ):
	                    while ( have_rows('routes') ) : the_row(); ?>
	                        <div class="route--box" style="<?php the_sub_field('background_image'); ?>">
	                            <span><?php the_sub_field('title');?></span>
	                            <h4><?php the_sub_field('subtitle');?></h4>
	                            <p><?php the_sub_field('description');?></p>
	                        </div>
	                <?php endwhile;
	                    else :
	                 endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif?>

	<section class="section section1">
		<div class="container">
			<div class="section2--box">
				<div class="about--miki">
					<h3 class="section--before_title"><?php the_field('beforetitle'); ?></h3>
					<h2 class="section--title"><?php the_field('title_section2'); ?></h2>
					<h4 class="section2--description"><?php the_field('descriptions_section2'); ?></h4>
					<?php if( have_rows('list_section2') ):
	                    while ( have_rows('list_section2') ) : the_row(); ?>
	                        <ul class="section2--list--box">
	                            <li class="section2--list--item"><?php the_sub_field('list_item_section2');?></li>
	                        </ul>
	                <?php endwhile;
	                    else :
	                 endif; ?>
	                <p class="section2--description2"><?php the_field('description_after_list'); ?></p>
	                <a class="section2--button" href="<?php the_field('button_link_section2'); ?>"><?php the_field('button_text_section2'); ?></a>
				</div>
				<div class="block--photo">
					<div class="section2--top--box">
						<img src="<?php the_field('photo_mikki'); ?>">
						<div class="quote--block">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png">
							<h3 class="quote--text"><?php the_field('quote'); ?></h3>
							<h4 class="quote--name">מיקי ברקל </h4>
							<p class="quote--description">מאמן NLP עסקי ואישי בכיר </p>
						</div>
					</div>
					<div class="section2--form--box">
						<h3><?php the_field('form_title_section2'); ?></h3>
						<p><?php the_field('form_description_section2'); ?></p>
						<div class="form--block"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section3">
		<div class="section3--title--box">
			<h3 class="section--before_title"><?php the_field('before_title_section3'); ?></h3>
			<h2 class="section--title"><?php the_field('title_section3'); ?></h2>
		</div>
		<div class="video--slider">
	    	<?php if( have_rows('slider_section3') ):
	            while ( have_rows('slider_section3') ) : the_row(); ?>
	            	<div class="video-slider--item">
	                	<video width="100%" height="auto" loop="loop" preload="auto">
							<source src="<?php the_sub_field('video'); ?>" type="video/mp4"></source>
						</video>
						<h3 class="title--video"><?php the_sub_field('title'); ?></h3>
					</div>
	        <?php endwhile;
	            else :
	        endif; ?>
		</div>
	</section>

	<section class="section section4">
		<div class="review--video">
			<video width="100%" height="auto" loop="loop" preload="auto">
				<source src="<?php the_field('video_section4'); ?>" type="video/mp4"></source>
			</video>
		</div>
		<div class="container">
			<div>
				<h3 class="section--before_title"><?php the_field('before_title_section4'); ?></h3>
				<h2 class="section--title"><?php the_field('title_section4'); ?></h2>
				<div class="review--slider">
					<?php if( have_rows('slider_review') ):
			            while ( have_rows('slider_review') ) : the_row(); ?>
			            	<div class="review--slide">
			                	<?php the_sub_field('story'); ?>
							</div>
			        <?php endwhile;
			            else :
			        endif; ?>
				</div>
			</div>
		</div>
		<div class="slider--nav--box">
			<div class="container">
				<div class="review--slider--nav">
					<?php if( have_rows('slider_review') ):
				        while ( have_rows('slider_review') ) : the_row(); ?>
				           	<div class="review--slide--nav">
				           		<img src="<?php the_sub_field('photo'); ?>">
				           		<h3 class="review--title"><?php the_sub_field('name'); ?></h3>
				           		<p class="review--description"><?php the_sub_field('description'); ?></p>
							</div>
				    <?php endwhile;
				        else :
				    endif; ?>
			    </div>
			</div>
		</div>
	</section>

	<section class="section section5">
		<h3 class="section--before_title"><?php the_field('before_title_store'); ?></h3>
		<h2 class="section--title"><?php the_field('title_store'); ?></h2>
		<div class="shop--slider">
			
		</div>
	</section>

	<section class="section section6">
		<div class="container">
			<div class="block--right">
				<h3 class="section--before_title"><?php the_field('before_title_forma'); ?></h3>
				<h2 class="section--title"><?php the_field('title_forma'); ?></h2>
				<h4 class="section6--description"><?php the_field('description_forma'); ?></h4>
				<div class="block--form">
					
				</div>
			</div>
		</div>
	</section>


	
	<script type="text/javascript">
        $(document).ready(function(){
             $('.video--slider').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: true,
              dots: true,
              rtl: true,
            });
        });
    </script>

<script type="text/javascript">
        $(document).ready(function(){
             $('.review--slider').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: true,
              rtl: true,
              asNavFor: '.slider-nav'
            });
            $('.review--slider--nav').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              asNavFor: '.slider-for',
              rtl: true,
              focusOnSelect: true
            });
        });
    </script>

<?php get_footer('new'); ?>
