<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
  get_header(); ?>

      <div id="blob_main">
  			<div id="content" role="main">
  
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
  				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  					<div class="entry-content">
  						<?php the_content(); ?>
  						<div id="links">
  						  <a href="/about">About<br /><span class="grey">10:10 Trust</span></a>
  						  <a href="/donate"><span class="grey">Make a</span><br />donation</a>
  						  <a href="/contact">Contact<br /><span class="grey">us</span></a>
  						</div>
  						<?php edit_post_link( 'Edit this page', '<span class="edit-link">', '</span>' ); ?>
  					</div><!-- .entry-content -->
  				</div><!-- #post-## -->
  
  <?php endwhile; ?>
  
  			</div><!-- #content -->
      </div><!-- #blob_main -->  	

<?php get_footer(); ?>
