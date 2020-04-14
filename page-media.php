<?php
/*
 * Template Name: Media Page
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
                <div class="col-md-12" id="media">
                    <div class="row">
                    	<div class="col-md-4">
							<div class="text">
								<h1><strong>Latest Press Releases</strong></h1>

								<?php query_posts('posts_per_page=3&cat=7');
								if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
								
								<hr>
								<div class="pic"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
								<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<div class="blurb"><?php the_excerpt(); ?></div>

								<?php endwhile; ?>
								<?php wp_reset_query(); /*4*/ ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="text">
								<h1><strong>Recent Blogs</strong></h1>

								<?php query_posts('posts_per_page=3&cat=6');
								if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

								<hr>
								<div class="pic"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
								<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<div class="blurb"><?php the_excerpt(); ?></div>

								<?php endwhile; ?>
								<?php wp_reset_query(); /*4*/ ?>  						
							</div>
						</div>
						<div class="col-md-4">
							<div class="text">
								<h1><strong>BIOLIFE4D in the News!</strong></h1>

								<?php query_posts('posts_per_page=3&cat=16');
								if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

								<hr>
								<div class="pic"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
								<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<div class="blurb"><?php the_excerpt(); ?></div>

								<?php endwhile; ?>
								<?php wp_reset_query(); /*4*/ ?>
							</div>
						</div>
					</div>
					<div class="row" id="archive">
						<div class="col-md-12">
							<h1><a href="/news-archive/">Click Here for Our Full Media Archive</a></h1>
						</div>
					</div>
                </div>
            </div>
        </div>
	</section>
  	<section id="media-box">
   		<div class="container">
   			<div class="row">
                <div class="col-md-12" id="media">
                    <div class="text">
						<h1 style="font-size: 42px">MEDIA  ASSETS</h1>
						<div class="row">
							<div class="col-md-4">
								<a href="https://biolife4d.com/wp-content/uploads/2017/09/BL4D_OnePager_12_FINAL_Email_InHousePrint.pdf"><img src="https://biolife4d.com/wp-content/uploads/2017/10/media-1pager.jpg" /></a>
								<h3>1-Pager</h3>
							</div>
							<div class="col-md-4">
								<a href="https://biolife4d.com/wp-content/uploads/2017/09/BLF4D_pitch_deck_6_FINAL.pdf"><img src="https://biolife4d.com/wp-content/uploads/2017/10/media-pitchdeck.jpg" /></a>
								<h3>Pitch Deck</h3>
							</div>
							<div class="col-md-4">
								<a href="https://biolife4d.com/wp-content/uploads/2017/09/BLF4D_4Pager_6_FINAL_web_spreads.pdf"><img src="https://biolife4d.com/wp-content/uploads/2017/10/media-4pager.jpg" /></a>
								<h3>4-Pager</h3>
							</div>
						</div>
					</div>
                </div>
			</div>
		</div>
	</section>
 	<section id="main">
  		<div class="container">
   			<div class="row">
                <div class="col-md-12">
                    <div class="icon-line"><img src="/images/icon-cell.png" /></div>
                </div>
                <div class="col-md-10 col-md-offset-1" id="media">
                    <div class="text">
						<h1>PRESS KIT</h1>
						<?php the_field('press_intro'); ?>
						<br><br>
						<?php echo do_shortcode( '[contact-form-7 id="503" title="Press Kit Form"]' ); ?>
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