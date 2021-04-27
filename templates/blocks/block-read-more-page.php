<section class="read-more-page">
  <div class="container large-container">
    
    <?php if( have_rows('read_more_blocks') ): 
      $count = 1;  
    ?>

      <div class="read-more-page-wrapper">
        <?php while( have_rows('read_more_blocks') ): the_row(); 
          $img = get_sub_field('image');
          $title = get_sub_field('title');
          $btnText = get_sub_field('button_text');
          $btnLink = get_sub_field('button_link');
        ?>

          <div class="read-more-block block-<?php echo $count; ?>">
            <div class="image" style="background-image:url('<?php echo $img; ?>');"></div>
            <div class="read-more-block-wrapper">
              <h2><?php echo $title; ?></h2>
              <a class="main-button" href="<?php echo $btnLink; ?>" title="<?php echo $title; ?>"><?php echo $btnText; ?></a>
            </div>
          </div>

          <?php $count++; ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>
</section>