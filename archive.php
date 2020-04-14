<?php get_header(); ?>
    
    <section id="video-wrap">	
        <video id="my-video" class="video" autoplay muted loop>
          <source src="/video/clip-intro.mp4" type="video/mp4">
          <source src="/video/clip-intro.ogg" type="video/ogg">
          <source src="/video/clip-intro.webm" type="video/webm">
        </video><!-- /video -->
        <div id="video-wrapper">
            <div class="video-caption">
            	NEWS ARCHIVE
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
                    <div class="text">
						<div class="row">
							<h1><?php the_archive_title(); ?></h1>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<div class="col-md-4">
									<div class="pic"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
									<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
									<div class="category"><?php the_category( ', ' ); ?></div>
									<div class="blurb"><?php the_excerpt(); ?></div>
								</div>

							<?php endwhile; endif ?>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="subfooter-fade" style="background-image:url(https://biolife4d.com/wp-content/uploads/2017/07/bg-fade-intro.jpg);"></section>
    
<?php get_footer();