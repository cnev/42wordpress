<?php
/*
Plugin Name: 42moody
Description:
License:
Author
Version:
*/
?>
<?php
add_action( 'init', 'create_post_type' );
function create_post_type()
{
	register_post_type('social_post',
		array('labels' => array('name' => __('Rexisexi'),'singular_name' => __('Rexosoxo')),
			'public' => true)
		);
	register_post_type('dailymotion_post',
		array('labels' => array('name' => __('Dailypotions'),'singular_name' => __('Dailypotion')),
			'public' => true)
		);
	register_post_type('moody_post',
		array('labels' => array('name' => __('Humeurs'),'singular_name' => __('Humeur')),
			'public' => true)
		);
}
?>
