<?php 
  $img = get_field('testimonials_banner_image', 'option');
  $text = get_field('testimonials_banner_text', 'option');
  $align = get_field('testimonials_banner_align', 'option');
  $btnText = get_field('testimonials_banner_button_text', 'option');
  $btnLink = get_field('testimonials_banner_button_link', 'option');
?>

<section class="footer-large" style="background-image:url('<?php echo $img; ?>');">
  <div class="container large-container">
    <div class="footer-large-wrapper" style="text-align:<?php echo $align; ?>;">
        <h2><?php echo $text; ?></h2>
        <a class="main-button" href="<?php echo $btnLink; ?>" title="<?php echo $btnText; ?>"><?php echo $btnText; ?></a>
    </div>
  </div>

  <div class="overlay"></div>
  <img class="orange" src="<?php echo get_template_directory_uri(); ?>/images/footer-orange.svg" alt="orange blob" />
</section>