<section clas="pdf-download">
  <div class="container large-container">
    
    <?php if( have_rows('pdf_downloads') ): ?>
      <div class="pdf-download-wrapper">

        <?php while( have_rows('pdf_downloads') ): the_row();
          $file = get_sub_field('download');
          $name = get_sub_field('file_name');
        ?>
          
          <a target="_blank" title="<?php echo $name; ?>" href="<?php echo $file; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pdf.svg" alt="PDf File" />
            <p><?php echo $name; ?></p>
          </a>

        <?php endwhile; ?>

      </div>
    <?php endif; ?>

  </div>
</section>