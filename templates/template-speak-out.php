<?php /* Template Name: Speak Out */ ?>

<?php get_header(); ?>

<?php
  $img = get_field('image');
  $title = get_field('title');
  $email = get_field('whistleblower_email');
?>

<section class="speak-out">
  <div class="container large-container">
    <div class="speak-out-wrapper">
      <h1><?php echo $title; ?></h1>
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/speak-up.svg" alt="Speak Up Logo" />
      <p>confidentally by using the form below:</p>
      <aside class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="5" title="Speak Up"]'); ?>
      </aside>
      <p>or contact us directly</p>
      
      <?php if( have_rows('contact_people') ): ?>
        <div class="contact-people">
          <?php while( have_rows('contact_people') ): the_row(); 
            $name = get_sub_field('name');
            $job = get_sub_field('job_position');
            $tel = get_sub_field('phone_number');
            $mail = get_sub_field('email_address');
          ?>

            <div class="person">
              <h2><?php echo $name; ?></h2>
              <p><?php echo $job; ?></p>
              <a href="tel:<?php echo $tel; ?>" title="Telephone <?php echo $name; ?>"><?php echo $tel; ?></a>
              <a href="mailto:<?php echo $mail; ?>" title="Email <?php echo $name; ?>"><?php echo $mail; ?></a>
            </div>

          <?php endwhile; ?>
        </div>
      <?php endif; ?>
      
      <a href="mailto:<?php echo $email; ?>" title="Whistleblower"><?php echo $email; ?></a>
      
    </div>
  </div>
  <img class="speak-image" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
</section>

<?php get_footer(); ?>