<?php
/**
 * The Template for displaying all single posts.
 *
 * @package toast_s
 */

get_header(); ?>
<div class="grid">
	<div id="primary" class="content-area unit two-of-three">
		<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="grid">
		<article class="unit span-grid">

			<?php get_template_part( 'content', 'single' ); ?>

			<?php toast_s_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>
		</article>
		</div><!-- .grid -->

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<div class="unit one-of-three">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>