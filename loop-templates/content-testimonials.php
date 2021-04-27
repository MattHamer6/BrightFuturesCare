<?php 
  $type = get_field('testimonial_type');
  $title = get_field('title');
  $img = get_field('still_video_image');
  $video = get_field('video', false, false);
?>

<div class="testimonial <?php echo $type; ?>">
  <div class="image" style="background-image:url('<?php echo $img; ?>');"></div>
  <div class="testimonial-wrapper">
    <?php if( $type == 'parent' ): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/5-star.svg" alt="5 star" />
    <?php endif; ?>
    <h3><b><?php echo $title; ?></b></h3>
    <a class="open-video" data-fancybox href="<?php echo $video; ?>" title="Watch Testimonial Video">Watch video</a>
  </div>
</div>