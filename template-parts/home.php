<?php
/*
 * Template Name: HOME
 */
?>

   <?php get_header(); ?>
   
   <style type="text/css">
	   body,td,th {
		font-size: 12px;
		}
   </style>
    
    <section id="home-vid-wrap">
    	<video id="my-video" class="video" poster="/images/bg-header-center.jpg" playsinline autoplay muted loop >
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
			    <br>
			  </div>
			  <div class="col-md-5 col-md-offset-1">
			  		<div class='embed-container'><iframe src='https://player.vimeo.com/video/251531248' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
			  		<div class="center"><a class="row" >SEE BIOPRINTING IN ACTION</a></div>
			   </div>
			   <div class="col-md-5">
			  		<div class='embed-container'><iframe src='https://player.vimeo.com/video/251865465' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
			  		<div class="center"><a class="row" >BUILD A HEART SAVE A LIFE</a></div>
			   </div>
			</div>
        </div>
	</section>
   	<section id="about">
    	<div class="container">
			<div class="row home-bioprint">
				<div class="col-md-5 col-lg-4">
					<div class="pic"><img title="In the BIOLIFE4D process, heart tissue is printed one layer at a time using bio-ink." src="/images/gr-inkcell.jpg" alt="Bioprinter layering bio-ink of human heart cells"/>
					</div>
				</div>
				<div class="col-md-7 col-lg-8">
					<div class="subhead">BIOPRINTING</div>
					<div class="copy">What if we could print a human heart? Science has found a way. This is not science fiction. This is science fact. <span class="blk-txt">This is BIOLIFE4D.</span>
					</div>
					<p><a class="btn btn-blue" href="/science-and-technology/">Learn More</a>
                     <a class="btn btn-blue" href="/see-bioprinting-in-action/">See Bioprinting in Action</a>
					</p>
				</div>
			</div>
			<div class="row home-process">
				<div class="col-md-5 col-lg-4 show-sm">
					<div class="pic"><img title="Hearts created through the BIOLIFE4D bioprinting process start with a patient’s own cells." src="/images/gr-stemcell.jpg" alt="Heart cell for 3D bioprinting"/></div>
				</div>
				<div class="col-md-7 col-lg-8 clear">
					<div class="subhead">BIOLIFE4D PROCESS</div>
					<div class="copy">It starts with a patient’s own cells and ends with a bioprinted heart that’s both a precise fit and perfect genetic match.</div>
					<p><a class="btn btn-blue" href="/process/">Learn More</a>
					</p>
				</div>
				<div class="col-md-5 col-lg-4 hide-sm">
					<div class="pic"><img title="Hearts created through the BIOLIFE4D bioprinting process start with a patient’s own cells." src="/images/gr-stemcell.jpg" alt="Heart cell for 3D bioprinting"/></div>
				</div>
			</div>
			<div class="row home-invest">
				<div class="col-md-5 col-lg-4">
					<div class="pic"><img title="BIOLIFE4D logo" src="/images/gr-logocell.jpg" alt="BIOLIFE4D logo"/>
					</div>
				</div>
				<div class="col-md-7 col-lg-8">
					<div class="subhead">INVEST</div>
					<div class="copy">BIOLIFE4D will soon open itself up for investors to purchase stock and participate in the development of this remarkable new process.</div>
					<p><a class="btn btn-blue" href="https://biolife4d.com/invest/">Learn More</a>				</p>
				</div>
			</div>
        </div>
    </section>
    
    <section id="news">
    	<div class="fade-top"></div>
        <div class="container">
            <div class="row">
               	<div class="col-md-4">
                    <div class="text">
                    	<h1><strong>BIOLIFE4D in the News!</strong></h1>
                    	
              			<?php query_posts('posts_per_page=1&cat=573'); /*1, 2*/
						if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                   	
						<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="blurb"><?php the_excerpt(); ?></div>
						
						<?php endwhile; ?>
  						<?php wp_reset_query(); /*4*/ ?>
						
					</div>
                </div>
                <div class="col-md-4">
                    <div class="text">
                    	<h1><strong>Latest Press Releases</strong></h1>
                    	
              			<?php query_posts('posts_per_page=1&cat=574'); /*1, 2*/
						if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                   	
						<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="blurb"><?php the_excerpt(); ?></div>
						
						<?php endwhile; ?>
  						<?php wp_reset_query(); /*4*/ ?>
  						
					</div>
                </div>
                <div class="col-md-4">
                    <div class="text">
                    	<h1><strong>Recent Blogs</strong></h1>
                    	
              			<?php query_posts('posts_per_page=1&cat=575'); /*1, 2*/
						if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                   	
						<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="blurb"><?php the_excerpt(); ?></div>
						
						<?php endwhile; ?>
  						<?php wp_reset_query(); /*4*/ ?>
  						
					</div>
                </div>
            </div>
        </div>
        <div class="fade-bottom"></div>
    </section>
    
<?php get_footer();