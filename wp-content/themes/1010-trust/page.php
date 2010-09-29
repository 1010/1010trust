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
?>

<?php get_header(); ?>

      <div id="blob_main">
        <div id="no-text"></div>
  			<div id="content" role="main">
  
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
  				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  					<div class="entry-content">
  						<?php the_content(); ?>
  						<?php edit_post_link( 'Edit this page', '<span class="edit-link">', '</span>' ); ?>
  					</div><!-- .entry-content -->
  				</div><!-- #post-## -->
  
  <?php endwhile; ?>
  
  			</div><!-- #content -->
      </div><!-- #blob_main -->  	

<?php get_footer(); ?>
