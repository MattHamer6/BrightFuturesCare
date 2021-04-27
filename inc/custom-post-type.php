<?php 
// People we support
add_action( 'init', 'PeopleWeSupport' );
function PeopleWeSupport() {
  register_post_type( 'people-we-support',
    array(
      'labels' => array(
        'name' => __( 'People We Support' ),
        'singular_name' => __( 'People We Support' )
      ),
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true, // Do you want to enable Gutenberg?
			'supports' => array( 'title', 'thumbnail', 'editor' ),
			//'taxonomies' => array( 'category' ), // Enable categories with CPT
      'menu_icon' => 'dashicons-groups'
    )
  );
}

// Testimonials
add_action( 'init', 'Testimonials' );
function Testimonials() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonials' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => false, // Do you want to enable Gutenberg?
      'rewrite' => array("slug" => "testimonials", "with_front" => false),
			'supports' => array( 'title', 'thumbnail', 'editor' ),
			'taxonomies' => array( 'category' ), // Enable categories with CPT
      'menu_icon' => 'dashicons-smiley'
    )
  );
}

// Our Team
add_action( 'init', 'OurTeam' );
function OurTeam() {
  register_post_type( 'our-team',
    array(
      'labels' => array(
        'name' => __( 'Team Members' ),
        'singular_name' => __( 'Team Member' )
      ),
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => false, // Do you want to enable Gutenberg?
			'supports' => array( 'title', 'thumbnail' ),
      'menu_icon' => 'dashicons-businessman'
    )
  );
}

// Job Vacancies
add_action( 'init', 'JoinTheTeam' );
function JoinTheTeam() {
  register_post_type( 'join-the-team',
    array(
      'labels' => array(
        'name' => __( 'Job Vacancies' ),
        'singular_name' => __( 'Job Vacancy' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true, // Do you want to enable Gutenberg?
      'supports' => array( 'title', 'thumbnail', 'editor' ),
      'taxonomies' => array( 'category' ), // Enable categories with CPT
      'menu_icon' => 'dashicons-desktop'
    )
  );
}