<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<section id="page-title" class="module parallax parallax-cf" style="background-image:url(https://biolife4d.com/wp-content/uploads/2017/07/bg-title-printcells-parallax.jpg);">
    	<div class="container">
        	<div class="row">
    			<div class="col-md-12">
					<?php the_title(); ?>
            	</div>
            </div>
        </div>
    </section>
    
    <section id="main">
    	<div class="top-fade"></div>
    	<div class="container">
        	<div class="row">
                <div class="col-md-10 col-md-offset-1" id="post">
                    <div class="text">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<div class="feat"><?php the_post_thumbnail(); ?></div>
						<?php the_content(); ?>

						<?php endwhile; endif ?>
					</div>
                </div>
                <hr>
            </div>
        </div>
    </section>

<?php get_footer();
