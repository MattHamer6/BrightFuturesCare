<?php
  
  $servicesLink = get_sub_field('page_link', 'option');
  $servicesText = get_sub_field('page_name', 'option');
?>

<?php // Navigation ?>
<aside class="navigation">
  <b>Navigation</b>
  <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false)); ?>
</aside>
<?php // General ?>
<aside class="policies">
  <b>Policies and Procedures</b>
  <?php if( have_rows('general_navigation', 'option') ): ?>
    <ul>
      <?php while( have_rows('general_navigation', 'option') ): the_row(); 
        $generalLink = get_sub_field('page_link');
        $generalText = get_sub_field('page_name');
      ?>
        <li><a target="_blank" href="<?php echo $generalLink; ?>"><?php echo $generalText; ?></a></li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</aside>
<?php // Children's Services ?>
<aside class="statements">
  <b>Statements of Purpose</b>
  <?php if( have_rows('statements_of_purpose', 'option') ): ?>
    <ul>
      <?php while( have_rows('statements_of_purpose', 'option') ): the_row(); 
        $servicesLink = get_sub_field('page_link');
        $servicesText = get_sub_field('page_name');
      ?>
        <li><a href="<?php echo $servicesLink; ?>" title="<?php echo $servicesText; ?>"><?php echo $servicesText; ?></a></li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</aside>