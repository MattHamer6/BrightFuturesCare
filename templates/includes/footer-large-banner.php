<?php 
  $img = get_field('background_image');
  $text = get_field('text');
  $align = get_field('text_align');
  $btnText = get_field('button_text');
  $btnLink = get_field('button_link');
?>

<section class="footer-large" style="background-image:url('<?php echo $img; ?>');">
  <div class="container large-container">
    <div class="footer-large-wrapper" style="text-align:<?php echo $align; ?>;">
      <?php if( get_field('add_text') == 'yes' ): ?>
        <h2><?php echo $text; ?></h2>
        <?php if( get_field('button_text') ): ?>
          <a class="main-button" href="<?php echo $btnLink; ?>" title="<?php echo $btnText; ?>"><?php echo $btnText; ?></a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="overlay"></div>
  <?php if( get_field('orange_blob') == 'yes' ): ?>
    <img class="orange" src="<?php echo get_template_directory_uri(); ?>/images/footer-orange.svg" alt="orange blob" />
  <?php endif; ?>
</section>