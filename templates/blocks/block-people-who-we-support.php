<section class="support-people">
  <?php if( have_rows('support_people') ): ?>
    <div class="support-people-wrapper">
      <?php while( have_rows('support_people') ): the_row(); 
        $supportId = get_sub_field('support_post');
      ?>

        <?php if( $supportId ): 
          global $post;
          $post = $supportId;
          setup_postdata($post); 
        ?>

          <div class="support-case" id="<?php the_field('fake_name', $supportId); ?>">
            <div class="container large-container">
              <div class="support-case-wrapper">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="image">
                  <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                </div>
                <div class="content">
                  <h1><?php the_title(); ?></h1>
                  <div><?php the_content(); ?></div>
                </div>
              </div>
            </div>
          </div>

        <?php endif; ?>


      <?php endwhile; ?>
    </div>
  <?php endif;?>
</section>