<?php
/*
 * Template Name: Contact Page
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
                    <div class="text">
                    	<?php the_content(); ?>
					</div>
                </div>
            </div>
        </div>
    </section>
    
	<section class="subfooter-fade" style="background-image:url(<?php the_field('subfooter_image'); ?>);"></section>
   
    <a name="form"></a>
    <section id="signup">
        <div class="container">
            <div class="gr-wrap">
                <div class="copy">
                    <h1>Contact Us</h1>
                    <?php echo do_shortcode( '[contact-form-7 id="161" title="Contact Page Form"]' ); ?>
                    <div class="legal"><?php the_field('legal'); ?>
                    <FORM style="FLOAT: right" method=post action=http://www.sunbearsoftware.com/biolife4d/app/map.aspx?mRequest=Process.WebSurvey&ProcessId=1700><INPUT type=hidden value="100056">
                    </div>
                </div>
            </div>
        </div>
        <div class="fade"></div>
    </section>
    
<?php get_footer();