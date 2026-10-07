<?php
/**
 * Widget areas
 *
 * @package Signify
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function signify_widgets_init()
{
	$args = array(
		'before_widget' => '<section id="%1$s" class="widget %2$s"> <div class="widget-wrap">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);

	register_sidebar(
		array(
			'name'        => esc_html__('Sidebar', 'signify'),
			'id'          => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'signify'),
		) + $args
	);

	register_sidebar(
		array(
			'name'        => esc_html__('Footer 1', 'signify'),
			'id'          => 'sidebar-2',
			'description' => esc_html__('Add widgets here to appear in your footer.', 'signify'),
		) + $args
	);

	register_sidebar(
		array(
			'name'        => esc_html__('Footer 2', 'signify'),
			'id'          => 'sidebar-3',
			'description' => esc_html__('Add widgets here to appear in your footer.', 'signify'),
		) + $args
	);

	register_sidebar(
		array(
			'name'        => esc_html__('Footer 3', 'signify'),
			'id'          => 'sidebar-4',
			'description' => esc_html__('Add widgets here to appear in your footer.', 'signify'),
		) + $args
	);
}
add_action('widgets_init', 'signify_widgets_init');
