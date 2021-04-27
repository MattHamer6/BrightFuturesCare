<?php 
  $img = get_field('image');
?>

<section class="simple-image">
  <div class="container large-container">
    <div class="simple-image-wrapper text-center">
      <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
    </div>
  </div>
</section>