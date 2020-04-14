<?php
/*
 * Template Name: Home Main TEST
 */
?>

<?php get_header(); ?>
    
    <section id="home-vid-wrap">
    	<video id="my-video" class="video" poster="/images/bg-header-center.jpg" autoplay muted loop >
          <source src="/video/clip-beating.mp4" type="video/mp4">
          <source src="/video/clip-beating.ogg" type="video/ogg">
          <source src="/video/clip-beating.webm" type="video/webm">
          Your browser does not support the video tag.
        </video><!-- /video -->
    </section> 
    
	<a id="begin"></a>
   
    <section id="intro">
    	<div class="container">
        	<div class="row">
    			<div class="col-md-3 col-sm-2">
                	<div class="ekg first"></div>
                </div>
                <div class="col-md-6 col-sm-8">
                	<div class="tagline">Build a Heart. <span class="red-txt">Save a life.</span></div>
                </div>
                <div class="col-md-3 col-sm-2">
                	<div class="ekgB"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
					<div class="statement">BIOLIFE4D is committed to perfecting the technology to make viable organ replacement a safe, accessible and affordable reality. With BIOLIFE4D, a patient-specific, fully functioning heart will be created through 3D bioprinting and the patient’s own cells, eliminating the challenges of organ rejection and long donor waiting lists that plague existing organ transplant methods.</div>
				</div>
			</div>
        </div>
    </section>
    
    <section id="about">
    	<div class="container">
           	<?php the_field('intro_area'); ?>
        </div>
    </section>
    
    <section id="news">
    	<div class="fade-top"></div>
        <div class="container">
            <div class="row">
               	<div class="col-md-12">
                    <div class="text">
						<h1>BIOLIFE4D in the news!</h1>
						<?php query_posts( 'posts_per_page=3' ); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<div class="col-md-4">
								<div class="pic"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
								<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<div class="blurb"><?php the_excerpt(); ?></div>
					  </div>

						<?php endwhile ?>
						
						<?php wp_reset_query(); ?>

						<?php endif ?>
				  </div>
                </div>
            </div>
        </div>
        <div class="fade-bottom"></div>
    </section>
    
<?php get_footer();