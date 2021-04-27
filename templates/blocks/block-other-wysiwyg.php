<?php 
  $text = get_field('content');
?>

<section class="page-intro other-wysiwyg">
  <div class="container large-container">
    <div class="page-intro-wrapper">
      <div class="content"><?php echo $text; ?></div>
    </div>
  </div>
    <img class="green" src="<?php echo get_template_directory_uri(); ?>/images/green.svg" alt="Green Blob" />
    <img class="orange" src="<?php echo get_template_directory_uri(); ?>/images/orange-1.svg" alt="Orange Blob" />
    <img class="orange-1" src="<?php echo get_template_directory_uri(); ?>/images/orange-1.svg" alt="Orange Blob" />
</section>