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
  <div class="page-banner-wrapper" style="background-image:url('<?php the_field('vacancies_banner', 'option'); ?>');"></div>
</section>

<?php // WYSIWYG & Current Vacancies ?>
<section class="page-intro">
  <div class="container large-container">
    <div class="page-intro-wrapper">
      <div class="content"><?php the_field('vancancies_introduction', 'option') ?></div>
		
      
      <div id="vacancies-archive" class="vacancies">
      <h2>Current Vacancies</h2>
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'loop-templates/content', 'vacancies' ); ?>
          <?php endwhile; ?>
          <?php else : ?>
          <?php get_template_part( 'loop-templates/content', 'vacancies-none' ); ?>
        <?php endif; ?>
        <p>If you feel you would be an excellent fit to our team, and would like to apply for a job with us that is not advertised here, please follow the link below.</p>
      </div>
      
      <a class="main-button" href="<?php echo get_site_url(); ?>/application-for-employment" title="Apply for a job">Apply here</a>
    </div>
  </div>
  <img class="butterfly" src="<?php echo get_template_directory_uri(); ?>/images/butterfly.svg" alt="Bright Futures Butterfly" />
</section>


<?php // Small Banner ?>
<?php include get_theme_file_path( '/templates/includes/vacancies-short-text.php' ); ?>

<?php // Small Banner ?>
<?php include get_theme_file_path( '/templates/includes/vacancies-small-banner.php' ); ?>

<?php // Large Banner ?>
<?php include get_theme_file_path( '/templates/includes/vacancies-large-banner.php' ); ?>


<?php get_footer(); ?>