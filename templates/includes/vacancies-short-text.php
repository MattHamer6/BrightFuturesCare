<?php 
  $text = get_field('vacancies_short_text', 'option');
  $btnText = get_field('short_button_text', 'option');
  $btnLink = get_field('short_button_link', 'option');
?>

<section class="page-intro short-wysiwyg">
  <div class="container large-container">
    <div class="page-intro-wrapper">
      <div class="content"><?php echo $text; ?></div>
      <a class="main-button" href="<?php echo $btnLink; ?>" title="<?php echo $btnText; ?>"><?php echo $btnText; ?></a>
    </div>
  </div>
</section>