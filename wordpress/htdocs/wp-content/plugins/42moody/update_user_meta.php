<?php
require_once("../../../wp-load.php");
print_r($_POST);
$user_id = get_current_user_id();
echo "THIS USER IS ".$user_id." !!!!    ";/*
function update_social()
{
	$meta_field = '_'.$_POST['page_type'];
	echo "SOCIAL FIELD: ".$meta_field;
	$meta_value = $_POST['user_social'];
	if (!update_user_meta($user_id, '_facebook', 'bob'))
	{
		if (!add_user_meta($user_id, '_facebook', 'bob'))
			die("FAIL SOCIAL");
	}
}
function update_dailymotion()
{
	$meta_field = '_dailymotion';
	$meta_value = $_POST['user_dailymotion'];
	if (!update_user_meta($user_id, $meta_field, $meta_value))
		die("FAIL DAILY");
}
function update_mood()
{
	$meta_field = '_mood';
	$meta_value = $_POST['user_mood'];
	if (!update_user_meta($user_id, $meta_field, $meta_value))
		die("FAIL MOOD");
}
if ($_POST['page_type'] != 'Plus Tard' && !empty($_POST['user_social']))
	update_social();
if (!empty($_POST['user_dailymotion']))
	update_dailymotion();
update_mood();*/
if ($_POST['page_type'] != 'Plus Tard' && !empty($_POST['user_social']))
{
	$meta_field = '_'.$_POST['page_type'];
	echo "SOCIAL FIELD: ".$meta_field;
	$meta_value = $_POST['user_social'];
	update_user_meta($user_id, $meta_field, $meta_value);
}
if (!empty($_POST['user_dailymotion']))
{
	$meta_field = '_dailymotion';
	$meta_value = $_POST['user_dailymotion'];
	update_user_meta($user_id, $meta_field, $meta_value);
}
$meta_field = '_mood';
$meta_value = $_POST['user_mood'];
update_user_meta($user_id, $meta_field, $meta_value);
header("Location: ".site_url());
?>
