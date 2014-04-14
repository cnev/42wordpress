<?php
require_once("../../../wp-load.php");
$website = "http://wp.local.42.fr:8080";
$userdata = array(
    'user_login'    =>  $_GET['login'],
    'user_email'	=>  $_GET['email'],
    'role'  		=>  'author',
    'user_url'  	=>  $website
);
wp_insert_user($userdata);
header("location: ".$website);
?>
