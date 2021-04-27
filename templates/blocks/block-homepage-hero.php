<?php $img = get_field('image'); ?>

<section class="homepage-hero">
  <div class="banner" style="background-image:url('<?php echo $img['url']; ?>');"></div>
  <div class="container large-container">

      <?php if( have_rows('slider_content') ): ?>
        <div class="homepage-hero-wrapper">
          <?php while( have_rows('slider_content') ): the_row(); 
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $btnText = get_sub_field('button_text');
            $btnLink = get_sub_field('button_link');
          ?>
            <div class="slider-content">
              <h1><?php echo $title; ?></h1>
              <p><?php echo $text; ?></p>
              <?php if( get_sub_field('add_button') == 'yes' ): ?>
                <a class="main-button" href="<?php echo $btnLink; ?>" title="<?php echo $btnText; ?>"><?php echo $btnText; ?></a>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
  <div class="image" style="background-image:url('<?php echo $img['url']; ?>');"></div>
  <img class="orange" src="<?php echo get_template_directory_uri(); ?>/images/orange-1.svg" alt="orange blob" />
</section>