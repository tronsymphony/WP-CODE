



// Register Custom Post Type Press
function create_press_cpt() {

	$labels = array(
		'name' => _x( 'Press Posts', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Press', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Press Posts', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Press', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Press Archives', 'textdomain' ),
		'attributes' => __( 'Press Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Press:', 'textdomain' ),
		'all_items' => __( 'All Press Posts', 'textdomain' ),
		'add_new_item' => __( 'Add New Press', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Press', 'textdomain' ),
		'edit_item' => __( 'Edit Press', 'textdomain' ),
		'update_item' => __( 'Update Press', 'textdomain' ),
		'view_item' => __( 'View Press', 'textdomain' ),
		'view_items' => __( 'View Press Posts', 'textdomain' ),
		'search_items' => __( 'Search Press', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Press', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Press', 'textdomain' ),
		'items_list' => __( 'Press Posts list', 'textdomain' ),
		'items_list_navigation' => __( 'Press Posts list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Press Posts list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Press', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-network',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array( 'post_tag','category'),

		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'press', $args );

}
add_action( 'init', 'create_press_cpt', 0 );



// Register Custom Post Type
function generate_online_post() {

	$labels = array(
		'name'                  => _x( 'Online Press Posts', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Online Press', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Online Press Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Online Press Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Online Press', 'text_domain' ),
		'description'           => __( 'online press posts', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'online_press', $args );

}
add_action( 'init', 'generate_online_post', 0 );
















function add_your_fields_meta_box() {
	add_meta_box(
		'your_fields_meta_box', // $id
		'Special Info', // $title
		'show_your_fields_meta_box', // $callback
		array('online_press','press'), // $screen
		'normal', // $context
		'high' // $priority
	);


}
add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );

function show_your_fields_meta_box() {

	global $post;

    $meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

	  <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
	  
	<p>
		<label for="your_fields[article_link]">Article Link</label>
		<br>
		<input type="text" name="your_fields[article_link]" id="your_fields[article_link]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['article_link'])) {	echo $meta['article_link']; } ?>">
	</p>


  <?php 
}

function save_your_fields_meta( $post_id ) {   

	// verify nonce
	if ( isset($_POST['your_meta_box_nonce']) 
			&& !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'online_press' === $_POST['post_type'] || 'press' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	
	$old = get_post_meta( $post_id, 'your_fields', true );

	if (isset($_POST['your_fields'])) { //Fix 3
		$new = $_POST['your_fields'];
		if ( $new && $new !== $old ) {
			update_post_meta( $post_id, 'your_fields', $new );
		} elseif ( '' === $new && $old ) {
			delete_post_meta( $post_id, 'your_fields', $old );
		}
	}
	
}

add_action( 'save_post', 'save_your_fields_meta' );


