<?php 

add_filter( 'block_categories', 'visions_block_categories', 10, 2 );
add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	if( function_exists('acf_register_block') ) {

    // Repeat this code below and use it to add/register a new ACF block
		  acf_register_block(array(
        'name'				=> 'homepage_hero',
        'title'				=> __('Homepage Hero'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'hero', 'slider', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'three_nav_blocks',
        'title'				=> __('Three Nav Blocks'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'image', 'page', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'page_intro_wysiwyg',
        'title'				=> __('Page Intro WYSIWYG'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'text', 'wysiwyg', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'support_post_slider',
        'title'				=> __('Support Post Slider'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'posts', 'slider', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'testimonial_videos',
        'title'				=> __('Testimonial Videos'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'testimonials', 'video', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'large_banner',
        'title'				=> __('Large Banner'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'banner', 'image', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'page_intro_banner',
        'title'				=> __('Page Intro Banner'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'page', 'banner', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'read_more_page',
        'title'				=> __('Read More Page'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'block', 'more', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'team_members',
        'title'				=> __('Team Members'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'post', 'team', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'people_who_we_support',
        'title'				=> __('People Who We Support'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'post', 'support', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'thin_banner',
        'title'				=> __('Thin Banner'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'banner', 'text', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'multi_read_more_page',
        'title'				=> __('Multi Read More Page'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'block', 'more', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'view_all_testimonials',
        'title'				=> __('View All Testimonials'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'testimonials', 'view', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'pdf_download_list',
        'title'				=> __('PDF Download List'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'file', 'download', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'other_wysiwyg',
        'title'				=> __('Other WYSIWYG (old)'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'wysiwyg', 'content', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'simple_wysiwyg',
        'title'				=> __('Simple WYSIWYG'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'wysiwyg', 'content', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'simple_image',
        'title'				=> __('Simple Image'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'image', 'uploads', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'values_list',
        'title'				=> __('List of Values'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'values', 'list', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'get_in_touch',
        'title'				=> __('Get in Touch'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'locations', 'contact', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'cta_banner',
        'title'				=> __('CTA Banner'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'cta', 'banner', 'visions' ),
      ));
      acf_register_block(array(
        'name'				=> 'large_banner_slider',
        'title'				=> __('Large Banner Slider'),
        'description'		=> __('A brief description'),
        'render_callback'	=> 'visions_block_render_callback',
        'category'			=> 'visions-blocks',
        'icon'				=> 'admin-comments',
        'keywords'			=> array( 'slider', 'banner', 'visions' ),
      ));
	}
} // End block registration



function visions_block_categories( $categories, $post ) {
  return array_merge(
      $categories,
      array(
          array(
              'slug' => 'visions-blocks',
              'title' => __( 'Visions', 'visions' ),
              'icon'  => 'wordpress',
          ),
      )
  );
}


function visions_block_render_callback( $block ) {

  $slug = str_replace('acf/', '', $block['name']);

  if( file_exists( get_theme_file_path("/templates/blocks/block-{$slug}.php") ) )
      include( get_theme_file_path("/templates/blocks/block-{$slug}.php") );
}