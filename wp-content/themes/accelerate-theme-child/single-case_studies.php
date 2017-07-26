<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage accelerate-theme
 * @since Accelerate Theme 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
        <!--<h1>This is a Case Study page</h1>-->
        <article class="case-study">
				<?php the_content(); ?>
      </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
