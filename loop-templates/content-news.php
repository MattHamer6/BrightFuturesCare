<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div style="background-image:url('<?php echo $image[0]; ?>');"></div>
  <header>
    <h2><?php the_title(); ?></h2>
    <aside><?php the_field('post_excerpt'); ?></aside>
    <a class="main-button" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
  </header>
</article>