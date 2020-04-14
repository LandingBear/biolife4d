<?php
/*
 * Template Name: Theme Page Template
 */
?>

<?php get_header(); ?>
    
    <section id="page-title" class="module parallax parallax-cf" style="background-image:url(<?php the_field('header_image'); ?>);">
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
    			<div class="col-md-10 col-md-offset-1">
                	<div class="intro"><?php the_field('intro_text'); ?></div>
            	</div>
                <div class="col-md-12">
                    <div class="icon-line"><img src="/images/icon-cell.png" /></div>
                </div>
                <div class="col-md-9">
                    <div class="text">
                    	<?php the_content(); ?>
					</div>
                </div>
                <div class="col-md-3">
                	<div id="sidebar"><?php the_field('sidebar'); ?></div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
                    <div class="icon-line"><img src="/images/icon-cell.png" /></div>
                </div>
            	<div class="col-md-6">
					<a href="<?php the_field('bottom_nav_link_1'); ?>"><div class="cta-nav" style="background: url(<?php the_field('bottom_nav_1'); ?>) center 0 no-repeat; background-size: cover; "><?php the_field('bottom_nav_text_1'); ?></div></a>
                </div>
                <div class="col-md-6">
					<a href="<?php the_field('bottom_nav_link_2'); ?>"><div class="cta-nav" style="background: url(<?php the_field('bottom_nav_2'); ?>) center 0 no-repeat; background-size: cover; "><?php the_field('bottom_nav_text_2'); ?></div></a>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer();