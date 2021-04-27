<section class="support-slider">
  <div class="container large-container">
    <div class="support-slider-wrapper">
      <h3><?php the_field('title'); ?></h3>

      <?php if( have_rows('support_slider') ): ?>
        <div class="support-content">
          <?php while( have_rows('support_slider') ): the_row(); 
            $supportId = get_sub_field('support_post');
          ?>

          <?php if( $supportId ): 
            global $post;
            $post = $supportId;
            setup_postdata($post); 
          ?>
            <div class="support-content-wrapper">
              <aside>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="image">
                  <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                </div>
                <div class="content">
                  <h4><?php the_title(); ?></h4>
                  <div><?php the_field('short_excerpt', $supportId); ?></div>
                  <a class="main-button" title="<?php the_title(); ?>" href="<?php echo get_site_url(); ?>/people-we-support#<?php the_field('fake_name', $supportId); ?>">Read <?php the_title(); ?>'s Story</a>
                </div>
              </aside>
            </div>
          <?php endif; ?>

          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
    <div class="dots-container"></div>
  </div>
</section>