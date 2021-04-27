<section class="testimonial-videos view-all-testimonials">
  <div class="container large-container">
    <h2 style="color:<?php the_field('title_colour'); ?>"><?php the_field('section_title'); ?></h2>

    <?php if( have_rows('testimonials') ): 
      $count = 1;
    ?>
      <div class="testimonial-videos-wrapper">
        <?php while( have_rows('testimonials') ): the_row(); 
          $testimonialId = get_sub_field('testimonial');
        ?>

          <?php if( $testimonialId ): 
            global $post;
            $post = $testimonialId;
            setup_postdata($post); 
          ?>

            <?php 
              $type = get_field('testimonial_type', $testimonialId);
              $title = get_field('title', $testimonialId);
              $img = get_field('still_video_image', $testimonialId);
              $video = get_field('video', $testimonialId, false, false);
            ?>

            <div class="testimonial <?php echo $type; ?> testimonial-<?php echo $count; ?>">
              <div class="image" style="background-image:url('<?php echo $img; ?>');"></div>
              <div class="testimonial-wrapper">
                <?php if( $type == 'parent' ): ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/5-star.svg" alt="5 star" />
                <?php endif; ?>
                <h3><b><?php echo $title; ?></b></h3>
                <a class="open-video" data-fancybox href="<?php echo $video; ?>" title="Watch Testimonial Video">Watch video</a>
              </div>
            </div>

          <?php endif; ?>

          <?php $count++; ?>
        <?php endwhile; ?>

        <div class="view-more">
          <a class="main-button" href="javascript:;" title="View More">View more testimonials</a>
        </div>
        <div class="view-all">
          <a class="main-button" href="<?php echo get_site_url(); ?>/testimonials" title="Testimonials Page">Visit our testimonials page</a>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section>