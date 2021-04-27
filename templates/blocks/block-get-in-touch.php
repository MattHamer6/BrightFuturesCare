<section class="get-in-touch">
  <div class="container large-container">
    <div class="get-in-touch-wrapper">
      <h2>Get in touch</h2>

      <?php if( have_rows('locations') ): ?>
        <div class="locations">
          <?php while( have_rows('locations') ): the_row(); ?>
            <div class="location">
              <h3><?php the_sub_field('location_name'); ?></h3>
              <a href="tel:<?php the_sub_field('telephone'); ?>" title="<?php the_sub_field('location_name'); ?>"><?php the_sub_field('telephone'); ?></a>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>