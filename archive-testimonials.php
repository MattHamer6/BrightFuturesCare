<?php get_header(); ?>

<section class="page-banner">
  <div class="container large-container">
    <aside class="breadcrumbs">
    <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?>
    </aside>
  </div>
  <div class="page-banner-wrapper" style="background-image:url('<?php the_field('testimonials_banner', 'option'); ?>');"></div>
</section>

<section class="page-intro">
  <div class="container large-container">
    <div class="page-intro-wrapper">
      <div class="content"><?php the_field('testimonials_introduction', 'option') ?></div>
    </div>
  </div>
</section>

<?php // Posts Loop ?>
<section id="testimonials-archive" class="testimonial-videos">
  <div class="container large-container">
    <div class="testimonial-videos-wrapper">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'loop-templates/content', 'testimonials' ); ?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part( 'loop-templates/content', 'none' ); ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php include get_theme_file_path( '/templates/includes/testimonials-large-banner.php' ); ?>
<?php include get_theme_file_path( '/templates/includes/testimonials-staff.php' ); ?>

<?php get_footer(); ?>