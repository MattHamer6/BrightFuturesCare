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
  <div class="page-banner-wrapper" style="background-image:url('<?php the_field('blog_banner', 'option'); ?>');"></div>
</section>


<?php // Posts Loop ?>
<section id="news-archive" class="news-archive">
  <div class="container large-container">
    <h1>Blog</h1>
    <div class="news-archive-wrapper">

      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'loop-templates/content', 'news' ); ?>
      <?php endwhile; ?>
      <?php else : ?>
      <?php get_template_part( 'loop-templates/content', 'none' ); ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>