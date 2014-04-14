<div id="sidebar">
	<ul class="xoxo">
		<?php $pageselect = is_page(10) ? 2 : 1; if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) : // begin first sidebar widgets ?>
		<?php if ( function_exists('wp_tag_cloud') ) : ?>
		<li id="tag-cloud"><!-- Par defaut on affiche les "mots-cles populaires" s'il n'y a pas de widgets associés à la sidebar -->
			<h3 class="widget-title"><?php _e('Popular Tags'); ?></h3>
			<div>
				<?php wp_tag_cloud('smallest=8&largest=18&number=15'); ?>
			</div>
		</li><!-- end Popular Tags section -->
		<?php endif; ?>
		<?php wp_list_bookmarks('title_before=<h3 class="widget-title">&title_after=</h3>&show_images=0') // Ici les widgets s'ajoutent ?>
		<?php endif; // end first sidebar widgets ?>
		<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'sort_column' => 'menu_order', 'container_class' => 'nav' ) ); ?>
	</ul>
</div><!-- #sidebar -->
