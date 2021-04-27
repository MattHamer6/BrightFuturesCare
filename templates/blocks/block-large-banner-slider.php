<?php if( have_rows('large_banner_slider') ): ?>
    <div class="large-banner-slider">
        <?php while( have_rows('large_banner_slider') ): the_row(); 
            $img = get_sub_field('background_image');
            $text = get_sub_field('text');
            $align = get_sub_field('text_align');
            $btnText = get_sub_field('button_text');
            $btnLink = get_sub_field('button_link');
        ?>
        
        <section class="large-banner" style="background-image:url('<?php echo $img; ?>');">
          <div class="container large-container">
            <div class="large-banner-wrapper" style="text-align:<?php echo $align; ?>;">
              <h2><?php echo $text; ?></h2>
              <a class="main-button" href="<?php echo $btnLink; ?>" title="<?php echo $btnText; ?>"><?php echo $btnText; ?></a>
            </div>
          </div>
        
          <div class="overlay"></div>
          <img class="orange" src="<?php echo get_template_directory_uri(); ?>/images/footer-orange.svg" alt="orange blob" />
        </section>
        
        <?php endwhile; ?>
    </div>
<?php endif; ?>


