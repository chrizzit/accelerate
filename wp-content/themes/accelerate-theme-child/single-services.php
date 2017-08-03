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

  			<?php while ( have_posts() ) : the_post();
          $size = "full";
          $services = get_field('services');
          $icon = get_field('icon') ?>

          <!--<h1>This is a Case Study page</h1>-->
        <article class="case-study">
          <aside class="case-study-sidebar">
            <h2><?php the_title(); ?></h2>
            <h5><?php echo $services; ?></h5>

            <?php the_content(); ?>

          </aside>

          <div class="case-study-images">
            <?php if ($icon) echo wp_get_attachment_image( $icon, $size ); ?>
          </div>
        </article>
        <?php endwhile; // end of the loop. ?>
      </div>

    </div>

<?php get_footer(); ?>
