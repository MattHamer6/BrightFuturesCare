<section class="page-banner">
  <div class="container large-container">
    <aside class="breadcrumbs">
    <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?>
    </aside>
  </div>
  <div class="page-banner-wrapper" style="background-image:url('<?php the_field('image'); ?>');"></div>
</section>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('span a[href="http://brightfutures.vision/join-the-team/"]').attr('href','https://brightfuturescare.co.uk/join-the-team/');
});
</script>