<nav class="navbar navbar-expand-md navbar-light" role="navigation">
  <div class="container large-container">
    <?php
			wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
  </div>
</nav>