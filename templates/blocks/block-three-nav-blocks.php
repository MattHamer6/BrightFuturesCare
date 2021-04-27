<section class="nav-blocks">

  <?php if( have_rows('nav_blocks') ): ?>
    <div class="nav-blocks-wrapper">
      <?php while( have_rowS('nav_blocks') ): the_row(); 
        $img = get_sub_field('image');
        $title = get_sub_field('title');
        $link = get_sub_field('page_link');
        $col = get_sub_field('background_colour');
      ?>
        <div class="nav-block" style="background-image:url('<?php echo $img; ?>');">
          <aside style="background-color:<?php echo $col; ?>">
            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
              <b><?php echo $title; ?></b>
              <i class="fas fa-chevron-right"></i>
            </a>
          </aside>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

</section>