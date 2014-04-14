<?php include("head.html"); ?>
<body <?php body_class() ?>>
<div id="top">
	<div class="pads clearfix">
	</div>
</div>
<div id="header">
	<div class="pads clearfix">
		<?php wp_nav_menu( array( 'theme_location' => 'menuH', 'sort_column' => 'menu_order', 'container_class' => 'menuH', 'menu_class' => 'menuH' ) ); ?>
		<a href="<?php echo get_option('home'); ?>">
			<img id="site-logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
		</a>
		<div id="blocsearch"> <?php include('searchform.php'); ?></div>
		<div class="nav-wrap">
			<div id="nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'sort_column' => 'menu_order', 'container_class' => 'nav' ) ); ?>
			</div>
		</div>
		 <?php if (!is_user_logged_in()) set_preregister_form() ?>
		 <?php if (!is_user_logged_in()) echo '<div><a href="/wp-content/themes/42born2code/login.php">Accès candidat</a>' ?>
		 <?php if (is_user_logged_in()) echo  '<div><a href="/wp-content/themes/42born2code/logout.php">Se déconnecter</a>'?>
	</div>
</div><!--  #header -->

<?php include("before_body.html") ?>
