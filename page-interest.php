<?php
/*
 * Template Name: Interest Page
 */
?>

<?php get_header(); ?>
    
    <section id="video-wrap">	
        <video id="my-video" class="video <?php the_field('header_video_class'); ?>" playsinline autoplay muted loop>
          <source src="/video/<?php the_field('header_video'); ?>.mp4" type="video/mp4">
          <source src="/video/<?php the_field('header_video'); ?>.ogg" type="video/ogg">
          <source src="/video/<?php the_field('header_video'); ?>.webm" type="video/webm">
        </video><!-- /video -->
        <div id="video-wrapper">
            <div class="video-caption">
            	<?php the_title(); ?>
            </div><!-- /content -->
    	</div>
    </section>
    
    <section id="main">
		<div class="top-fade"></div>
    	<div class="container">
        	<div class="row">
    			<div class="col-md-10 col-md-offset-1">
                	<div class="intro"><?php the_field('intro_text'); ?></div>
            	</div>
                <div class="col-md-12">
                    <div class="icon-line"><img src="/images/icon-cell.png" /></div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="text">
                    	<?php the_content(); ?>
					</div>
                </div>
                <div class="col-md-12">
                    <div class="icon-line"><img src="/images/icon-cell.png" /></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="subfooter-fade" style="background-image:url(<?php the_field('subfooter_image'); ?>);"></section>
    
<?php get_footer();