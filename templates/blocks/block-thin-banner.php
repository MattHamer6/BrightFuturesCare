<?php 
  $col = get_field('background_colour');
  $text = get_field('banner_text');
  $btnText = get_field('button_text');
  $btnLink = get_field('button_link');
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