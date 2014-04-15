<?php
/*
Plugin Name: moody42
Description:
License:
Author
Version:
*/
class Moody42Widget extends WP_Widget
{
	function	Moody42Widget()
	{
		$widget_ops = array('classname' => 'Moody42Widget', 'description' => 'Social Networks, Dailymotion, Moods');
		$this->WP_Widget('Moody42Widget', 'FB/TW, Dailymotion, Mood', $widget_ops);
	}
	function	form($instance)
	{
		$instance = wp_parse_args((array)$instance, array('title' => ''));
		$title = $instance['title'];
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
		<?php
	}
	function	update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		return ($instance);
	}
	function	widget($args, $instance)
	{
		extract($args, EXTR_SKIP);
		echo $before_widget;
		echo $before_title."Humeurs du peuple".$after_title;
		$result = count_users();
		$nb_user = $result['total_users'];
		for ($i = 1; $i <= $nb_user; $i++)
		{
			$str = get_user_meta($i, '_Facebook', true);
			if ($str)
				echo '<p>User '.$i.'\'s facebook est : '.$str.'</p>';
			$str = get_user_meta($i, '_Twitter', true);
			if ($str)
				echo '<p>User '.$i.'\'s twitter est : '.$str.'</p>';
			$str = get_user_meta($i, '_dailymotion', true);
			if ($str)
				echo '<p>User '.$i.'\'s video est : '.$str.'</p>';
			$str = get_user_meta($i, '_mood', true);
			if ($str)
				echo '<p>User '.$i.' est : '.$str.'</p>';
		}
		echo $after_widget;
		echo $before_widget;
		$title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
		if (!empty($title))
			echo $before_title.$title.$after_title;
		?>
		<form action=<?php echo '"'.'/wp-content/plugins/42moody/update_user_meta.php'.'"'?> method="POST">
			Ajoutez vos réseaux sociaux à votre profil !<br />
			<select name="page_type">
				<option value="Facebook">Facebook</option>
				<option value="Twitter">Twitter</option>
				<option value="Plus tard">Plus tard</option>
			</select><input type="text" name="user_social" /><br />
			... Ou une vidéo Dailymotion !<input type="text" name="user_dailymotion" /><br />
			Etes-vous de bonne humeur ?<br />
			<select name="user_mood">
				<option value="Heureux">Heureux</option>
				<option value="Amoureux">Amoureux</option>
				<option value="Enervé">Enervé</option>
				<option value="Triste">Triste</option>
				<option value="undefined">Pas d'humeur particulière</option>
			</select>
			<input type="submit" name="submit" value="ok" />
		</form>
		<?php
		echo $after_widget;
	}
}
function		auto_dailymotion_field($page_id)
{
	if ( $_GET['post_type'] == 'page' )
	{ //on ajoute les champs par défaut sauf sur les pages J on peut modifier
		add_post_meta($page_id, 'id_dailymotion', '', true); //sans valeur par défaut add_post_meta($post_id, 'custom_field_2', 'ma_valeur_defaut', true); //avec valeur par défaut
	}
}
add_action('widgets_init', create_function('', 'return register_widget("Moody42Widget");'));
add_action('publish_page', 'auto_dailymotion_field');
?>
