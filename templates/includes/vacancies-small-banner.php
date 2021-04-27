<?php 
  $col = get_field('small_banner_colour', 'option');
  $text = get_field('small_banner_text', 'option');
  $btnText = get_field('small_button_text', 'option');
  $btnLink = get_field('small_button_link', 'option');
?>

<section class="small-banner" style="background-color:<?php echo $col; ?>">
  <div class="container large-container">
    <div class="small-banner-wrapper">
      <h2><?php echo $text; ?></h2>
      <div>
        <a class="main-button" href="<?php echo $btnLink; ?>" title="<?php echo $btnText; ?>"><?php echo $btnText; ?></a>
      </div>
    </div>
  </div>
</section>