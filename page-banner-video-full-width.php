<?php
/*
 * Template Name: Banner Video Full Width (No Padding)
 */
?>

<?php get_header(); ?>
    
    <section id="video-wrap" class="lb-banner-video">	
        <video id="my-video" class="video <?php the_field('header_video_class'); ?>" playsinline autoplay muted loop>
          <source src="/video/<?php the_field('header_video'); ?>.mp4" type="video/mp4">
          <source src="/video/<?php the_field('header_video'); ?>.ogg" type="video/ogg">
          <source src="/video/<?php the_field('header_video'); ?>.webm" type="video/webm">
        </video><!-- /video -->
        <div id="video-wrapper">
            <div class="video-caption">

            </div><!-- /content -->
    	</div>
    </section>
    
    <section id="main" class="lb-no-padding">
    	<div class="container lb-width-override">
        	<div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer();