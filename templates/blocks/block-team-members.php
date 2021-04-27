<section class="team-members">
  <div class="container large-container">
    
    <?php if( have_rows('team_members') ): ?>
      <div class="team-members-wrapper">
        
        <?php while( have_rows('team_members') ): the_row(); 
          $memberId = get_sub_field('team_member');

          if( $memberId ): 
            global $post;
            $post = $memberId;
            setup_postdata($post); 

            $name = get_field('name', $memberId);
            $job = get_field('job_position', $memberId);
            $tel = get_field('telephone_number', $memberId);
            $email = get_field('email_address', $memberId);
          ?>

            <div class="team-member">
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <div style="background-image:url('<?php echo $image[0]; ?>');"></div>
              <b><?php echo $name; ?></b>
              <p><?php echo $job; ?></p>
              <a href="tel:<?php echo $tel; ?>" title="phone"><?php echo $tel; ?></a>
              <a href="mailto:<?php echo $email; ?>" title="email"><?php echo $email; ?></a>
            </div>

          <?php endif; ?>

        <?php endwhile; ?>
        <div class="team-member join-us">
          <div>
            <h2>Join Us!</h2>
            <a class="main-button" href="<?php echo get_site_url(); ?>/join-the-team" title="Join the Team">Apply today</a>
          </div>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section>