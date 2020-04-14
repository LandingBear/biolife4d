<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<section id="page-title" style="background:url(http://biolife4d.com/wp-content/uploads/2017/07/bg-title-mixcells.jpg) center center no-repeat; background-size:cover;">
    	<div class="container">
        	<div class="row">
    			<div class="col-md-12">
					<?php _e( 'Oops! That page can&rsquo;t be found', 'twentyseventeen' ); ?>
            	</div>
            </div>
        </div>
    </section>
    
    <section id="main">
    	<div class="container">
        	<div class="row">
    			<div class="col-md-8 col-md-offset-2">
                	<div class="intro"><?php _e( 'It looks like nothing was found at this location or you are not authorized to view this page.', 'twentyseventeen' ); ?></div>
                    <div class="icon-line"><img src="/images/icon-cell.png" /></div>
            	</div>
            </div>
        </div>
    </section>
    
<?php get_footer();
