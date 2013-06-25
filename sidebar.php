<?php disallow_direct_load('sidebar.php');?>

<?php if(!function_exists('dynamic_sidebar') or !dynamic_sidebar('Sidebar')):?>

	<?php $taxonomy_term = get_post_meta($post->ID, 'page_taxonomy_term', TRUE) ? get_post_meta($post->ID, 'page_taxonomy_term', TRUE) : $post->post_name; ?>
	
	<p class="post-search-header-text">Search This Section</p>
	
	<?=wp_nav_menu(array(
		'theme_location' => '',
	    'menu' => $taxonomy_term,
		'container' => 'false', 
		'menu_class' => 'menu vertical', 
		'menu_id' => 'sidebar-menu', 
		'fallback_cb' => false,
		'depth' => 1,
		'walker' => new Bootstrap_Walker_Nav_Menu()
		'items_wrap' => '<ul><li id="item-id">'.$taxonomy_term.'</li>%3$s</ul>'
		));
	?>

<?php endif;?>