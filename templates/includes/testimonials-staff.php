<section class="testimonial-videos">
  <div class="container large-container">
    <h2 style="color:<?php the_field('staff_members_colour', 'option'); ?>"><?php the_field('staff_members_title', 'option'); ?></h2>

    <?php if( have_rows('team_members', 'option') ): ?>
      <div class="testimonial-videos-wrapper">
        <?php while( have_rows('team_members', 'option') ): the_row(); 
          $testimonialId = get_sub_field('team_member');
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

          <?php endif; ?>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>
</section>