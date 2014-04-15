<?php
/*
Plugin Name: desc_image
Description: Mets ta box dans mon 42
License:
Author
Version:
*/

function descimg_custom_meta()
{
	add_meta_box( 'descimg_postmeta', 'desc_img', 'descimg_callback', 'page');
}
function descimg_callback($type)
{
	echo "THIS IS MYYYYY BOXXXXXXX";
}
add_action( 'add_meta_boxes', 'descimg_custom_meta' );
?>
