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
  <div class="page-banner-wrapper" style="background-image:url('<?php the_field('banner_image'); ?>');"></div>
</section>

<section id="main-blog-content">
  <div class="container">
    <header>
      <h1><?php the_title(); ?></h1>
      <b><?php echo get_the_date(); ?></b>
    </header>
    <main>
      <?php the_content(); ?>
    </main>
  </div>
</section>

<?php get_footer(); ?>