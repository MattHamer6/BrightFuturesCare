<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php wp_footer(); ?>

<?php if( get_field('large_banner') == 'yes' ): ?>
  <?php include get_theme_file_path( '/templates/includes/footer-large-banner.php' ); ?>
<?php endif; ?>

<?php if( get_field('small_banner') == 'yes' ): ?>
  <?php include get_theme_file_path( '/templates/includes/footer-small-banner.php' ); ?>
<?php endif; ?>

<?php // All footer content goes below this line ?>
<footer id="footer" class="footer">
  <div class="container large-container">
    <div class="footer-wrapper">
      <?php include get_theme_file_path( '/templates/includes/footer-links.php' ); ?>

      <aside class="company-info">
        <b><?php echo get_bloginfo(); ?></b>
        <div><?php the_field('company_address', 'option'); ?></div>
        <a href="tel:<?php the_field('phone_number', 'option'); ?>" title="telephone"><?php the_field('phone_number', 'option'); ?></a>
        <a href="mailto:<?php the_field('email_address', 'option'); ?>" title="email"><?php the_field('email_address', 'option'); ?></a>
        <img src="<?php echo the_field('small_logo', 'option'); ?>" alt="Bright Futures Logo" />
      </aside>
    </div>
  </div>

  <?php // Coloured Blobs ?>
  <?php if( get_field('orange_blob') == 'yes' && get_field('large_banner') == 'no' ): ?>
    <img class="orange" src="<?php echo get_template_directory_uri(); ?>/images/footer-orange.svg" alt="orange blob" />
  <?php endif; ?>

  <?php if( get_field('red_blob') == 'yes' && get_field('small_banner') == 'no' ): ?>
    <img class="red" src="<?php echo get_template_directory_uri(); ?>/images/footer-red.svg" alt="red blob" />
  <?php endif; ?>
</footer>

<?php // Copyright ?>
  <div class="copyright">
    <div class="container large-container">
      <div class="copyright-wrapper">
        <p>&copy; Bright Futures <?php echo date("Y"); ?>. <a href="https://www.visionsdesign.co.uk" rel="nofollow">Website Designed &amp; Developed</a> by Visions Design. </p>
        <?php if( have_rows('certifications', 'option') ): ?>
          <div>
            <?php while( have_rows('certifications', 'option') ): the_row(); ?>
              <img src="<?php the_sub_field('certification'); ?>" alt="Certification" />
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php // End of footer ?>
</main>
</body>

</html>