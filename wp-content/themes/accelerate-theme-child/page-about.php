<?php
/**
 * The template for displaying the about page
 *
 *Template Name:About Page
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section class="about-page">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="about-hero">
        <div class="site-content">
          <?php the_content(); ?>
          <h2>
            Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by msking our clients visible and making their customers smile.
          </h2>
        </div><!-- .site-content -->
      </div>
    <?php endwhile; // end of the loop. ?>
</section><!-- .home-page -->

<div id="primary" class="about-page-content site-content">
  <div id="content" role="main">

    <section class="about-description">
      <h4>Our Services</h4>
      <p>
        We take pride in our clients and the content we create for them. <br />
        Here's a brief overview of our offered services.
      </p>
    </section>

    <section class="services-list site-content">
        <?php query_posts('post_type=services&&order=ASC'); ?>
        <?php while ( have_posts() ) : the_post();

         $icon = get_field("icon");
         $size = "full" ?>

        <div class="alternating-content">
          <div class="item">
            <div class="icon">
              <?php echo wp_get_attachment_image($icon, $size); ?>
            </div>

            <div class="caption">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
            </div>
          </div>
        </div>


         <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </section>

    <section class="about-contact">
      <aside class="about-contact-text">
        <h3>Interested in working with us?</h3>
      </aside>
      <div class="about-btn">
        <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
      </div>
    </section>

  </div><!-- End #content -->
</div><!-- End #primary -->

<?php get_footer(); ?>
