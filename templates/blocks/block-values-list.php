<section class="values-list">
  <div class="container large-container">
  
    <?php if( have_rows('list_of_values') ): ?>
      <div class="values-list-wrapper">
        <?php while( have_rows('list_of_values') ): the_row(); 
          $img = get_sub_field('image');
          $title = get_sub_field('title');
          $col = get_sub_field('title_colour');
        ?>
          <div class="value">
            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
            <h2 style="color:<?php echo $col; ?>"><?php echo $title; ?></h2>

            <?php if( have_rows('values') ): ?>
              <ul>
                <?php while( have_rows('values') ): the_row(); ?>
                  <li><?php the_sub_field('value'); ?></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  
  </div>
</section>