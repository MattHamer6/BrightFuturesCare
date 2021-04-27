<?php 
  $text = get_field('content');
  $btnText = get_field('button_text');
  $btnLink = get_field('button_link');
?>

<section class="page-intro">
  <div class="container large-container">
    <div class="page-intro-wrapper">
      <div class="content"><?php echo $text; ?></div>
      <?php if( get_field('add_button') == 'yes' ): ?>
        <div class="button-wrapper">
          <a class="main-button" href="<?php echo $btnLink; ?>" title="<?php echo $btnText; ?>"><?php echo $btnText; ?></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <?php if( get_field('butterfly') == 'yes' && get_field('blobs') == 'no' ): ?>
    <img class="butterfly" src="<?php echo get_template_directory_uri(); ?>/images/butterfly.svg" alt="Bright Futures Butterfly" />
  <?php endif; ?>
  <?php if( get_field('blobs') == 'yes' && get_field('butterfly') == 'no' ): ?>
    <img class="green" src="<?php echo get_template_directory_uri(); ?>/images/green.svg" alt="Green Blob" />
    <img class="orange" src="<?php echo get_template_directory_uri(); ?>/images/orange-1.svg" alt="Orange Blob" />
  <?php endif; ?>
</section>