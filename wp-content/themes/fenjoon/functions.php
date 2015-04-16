<?php
//******************************************
// Basic Setup
//******************************************
function fenjoon_setup(){
	// Make fenjoon available for translation.
	load_theme_textdomain('fenjoon', get_template_directory().'/lang');
	// Add support for thumbnails
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'fenjoon_setup' );

//******************************************
// Add Custom JS & CSS to Admin Post Edit Panel
//******************************************
function add_fenjoon_admin_js() {
	wp_enqueue_script( 'fenjoon_admin_js', admin_url() . 'js/fenjoon_admin.js', array(), '1.0', true );
}
add_filter('admin_head', 'add_fenjoon_admin_js');

function add_fenjoon_admin_css() {
	wp_register_style( 'fenjoon_admin_css', admin_url() . 'css/fenjoon_admin.css', false, '1.0' );
	wp_enqueue_style( 'fenjoon_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'add_fenjoon_admin_css' );

//******************************************
// CPT - Site Type
//******************************************
function cpt_sitetype(){
	$labels = array(
		'name'                => _x( 'Sitetypes', 'fenjoon' ),
		'singular_name'       => _x( 'Sitetype', 'fenjoon' ),
		'menu_name'           => __( 'Sitetypes', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Sitetype', 'fenjoon' ),
		'all_items'           => __( 'All Sitetypes', 'fenjoon' ),
		'view_item'           => __( 'View Sitetypes', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Sitetype', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Sitetype', 'fenjoon' ),
		'update_item'         => __( 'Update Sitetype', 'fenjoon' ),
		'search_items'        => __( 'Search Sitetype', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'sitetypes', 'fenjoon' ),
		'description'         => __( 'Different site types, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-welcome-view-site',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'sitetypes', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_sitetype', 0 );

//******************************************
// CPT - Attributes
//******************************************
function cpt_attributes(){
	$labels = array(
		'name'                => _x( 'Attributes', 'fenjoon' ),
		'singular_name'       => _x( 'Attributes', 'fenjoon' ),
		'menu_name'           => __( 'Attributes', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Attribute', 'fenjoon' ),
		'all_items'           => __( 'All Attributes', 'fenjoon' ),
		'view_item'           => __( 'View Attributes', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Attribute', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Attribute', 'fenjoon' ),
		'update_item'         => __( 'Update Attributes', 'fenjoon' ),
		'search_items'        => __( 'Search Attributes', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Attributes', 'fenjoon' ),
		'description'         => __( 'Different Attributes, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail','page-attributes' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-plus-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'attributes', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_attributes', 0 );

//******************************************
// CPT - Features
//******************************************
function cpt_features(){
	$labels = array(
		'name'                => _x( 'Features', 'fenjoon' ),
		'singular_name'       => _x( 'Features', 'fenjoon' ),
		'menu_name'           => __( 'Features', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Feature', 'fenjoon' ),
		'all_items'           => __( 'All Features', 'fenjoon' ),
		'view_item'           => __( 'View Features', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Feature', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Feature', 'fenjoon' ),
		'update_item'         => __( 'Update Feature', 'fenjoon' ),
		'search_items'        => __( 'Search Feature', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Features', 'fenjoon' ),
		'description'         => __( 'Different Features, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ,'page-attributes'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-admin-generic',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'features', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_features', 0 );

//******************************************
// CPT - Modules
//******************************************
function cpt_modules(){
	$labels = array(
		'name'                => _x( 'Modules', 'fenjoon' ),
		'singular_name'       => _x( 'Module', 'fenjoon' ),
		'menu_name'           => __( 'Modules', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Module', 'fenjoon' ),
		'all_items'           => __( 'All Modules', 'fenjoon' ),
		'view_item'           => __( 'View Modules', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Module', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Module', 'fenjoon' ),
		'update_item'         => __( 'Update Module', 'fenjoon' ),
		'search_items'        => __( 'Search Module', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Modules', 'fenjoon' ),
		'description'         => __( 'Different Modules, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor', 'thumbnail' ,'page-attributes'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-images-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'modules', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_modules', 0 );

//******************************************
// Add Children co-selection metabox to Modules - Modules page
//******************************************
function add_children_metabox(){
	if( is_admin() ){
		global $pagenow;
		if( 'post.php' == $pagenow ){
			global $post;
			if(empty($post->post_parent)){
				$post_type = get_post_type_object( get_post_type( $post ) );
				//if($post_type->label!='Orders')
				add_meta_box( 
						'coselected_children', //id
						 __('Select child '.$post_type->label.' to be auto-selected by selecting this '.$post_type->labels->singular_name ), //title
						'children_list', //callback
						'modules', //CPT
						'advanced', //position in admin panel
						'core' //priority
				);	
			}
		}
	}
}

function children_list( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'coselected_children' );
	$coselected_children_string = get_post_meta( $post->ID, 'coselected_children', 1 );
	$coselected_children_string = !empty( $coselected_children_string ) ? $coselected_children_string : '';
	$coselected_children_array = explode( '+', $coselected_children_string );
	$children = get_children( array( 'post_type' => $post->post_type, 'post_parent' => $post->ID ) );
	foreach( $children as $child){ ?>
		<input class="checkbox" type="checkbox" name="child-<?php echo $child->ID;?>" value="<?php echo $child->ID;?>" <?php echo (in_array( $child->ID, $coselected_children_array ) ? 'checked' : ''); ?> /><?php echo $child->post_title;?><br/>
<?php	} ?>
	<input type="hidden" name="string" value="<?php echo $coselected_children_string;?>"/>
<?php
}
add_action( 'add_meta_boxes','add_children_metabox',0 );

function save_coselected_children() {
	global $post;
	$post_id = $post->ID;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( !wp_verify_nonce( $_POST['coselected_children'], basename( __FILE__ ) ) ) return;
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) return;
	}else{
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	}
	$coselected_children_string = $_POST['string'];
	if( $coselected_children_string ) update_post_meta( $post_id, 'coselected_children', $coselected_children_string );
}
add_action( 'save_post', 'save_coselected_children' );

//******************************************
// CPT - Orders
//******************************************	
function orders_cpt(){
	$labels = array(
		'name'                => _x( 'Orders', 'fenjoon' ),
		'singular_name'       => _x( 'Order', 'fenjoon' ),
		'menu_name'           => __( 'Orders', 'fenjoon' ),
		'all_items'           => __( 'All Orders', 'fenjoon' ),
		'view_item'           => __( 'View Orders', 'fenjoon' ),
		'add_new_item'        => __( 'Add a New Order', 'fenjoon' ),
		'add_new'             => __( 'Add a New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Order', 'fenjoon' ),
		'update_item'         => __( 'Update Order', 'fenjoon' ),
		'search_items'        => __( 'Search Order', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Orders', 'fenjoon' ),
		'description'         => __( 'The requests which are submitted known as ORDERS!', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor','comment' ),
		'exclude_from_search' => true,
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
	  'menu_icon'					  => 'dashicons-cart',
		'has_archive'         => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'orders', $args );
}
add_action('init','orders_cpt');

//******************************************
// CPT - Projects
//******************************************	
function projects_cpt(){
	$labels = array(
		'name'                => _x( 'Projects', 'fenjoon' ),
		'singular_name'       => _x( 'Project', 'fenjoon' ),
		'menu_name'           => __( 'Projects', 'fenjoon' ),
		'all_items'           => __( 'All Projects', 'fenjoon' ),
		'view_item'           => __( 'View Project', 'fenjoon' ),
		'add_new_item'        => __( 'Add a New Project', 'fenjoon' ),
		'add_new'             => __( 'Add a New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Project', 'fenjoon' ),
		'update_item'         => __( 'Update Project', 'fenjoon' ),
		'search_items'        => __( 'Search Project', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Projects', 'fenjoon' ),
		'description'         => __( 'The Projects which are submitted known as Projects!', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'editor','comment' ),
		'exclude_from_search' => true,
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
	  'menu_icon'					  => 'dashicons-welcome-widgets-menus',
		'has_archive'         => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'projects', $args );
}
add_action('init','projects_cpt');

//******************************************
// Add order list metabox to Orders - Orders page
//******************************************
function add_order_list_metabox(){
	if( is_admin() ){
		global $pagenow;
		if( 'post.php' == $pagenow ){
			add_meta_box( 
				'order_list', //id
				__('Submitted Choices selected by Costumer' ), //title
				'order_list', //callback
				'orders', //CPT
				'advanced', //position in admin panel
				'core' //priority
			); 
		}
	}
}

function order_list( $post ){
	$args = array( 'post_type' => array( 'sitetypes', 'attributes', 'features', 'modules' ), 'orderby' => 'menu_order' );
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		wp_nonce_field(basename( __FILE__ ), 'save_order');
		$order_str = get_post_meta( $post->ID, 'order_str', 1 );
		$order_str = !empty( $order_str ) ? $order_str : '';
		$order_arr = explode( '+', $order_str );
		while ( $the_query->have_posts() ) {
			$the_query->the_post();?>
			<input class="checkbox" type="checkbox" name="post-<?php the_ID();?>" value="<?php echo the_ID();?>" <?php echo (in_array( get_the_ID(), $order_arr ) ? 'checked' : ''); ?> /><?php the_title();?><br/>
<?php
		}
	}
	wp_reset_postdata();?>
	<input type="hidden" name="string" value="<?php echo $order_str;?>"/>
<?php
}
add_action( 'add_meta_boxes', 'add_order_list_metabox', 0 );

function save_order_list() {
	global $post;
	$post_id = $post->ID;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( !wp_verify_nonce( $_POST['save_order'], basename( __FILE__ ) ) ) return;
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) return;
	}else{
		if ( !current_user_can( 'edit_post', $post_id ) ) return;
	}
// Order list metabox
	$order_str = $_POST['string'];
	if( $order_str ) update_post_meta( $post_id, 'order_str', $order_str );

// Order last changes metabox
	$changes_str = get_post_meta( $post_id, 'changes_str', 1 );
	$changes_str = !empty( $changes_str ) ? $changes_str : '';
	$changes_arr = array();
	if ( !empty( $changes_str ) ) $changes_arr = explode( "+", $changes_str );
	if( count( $changes_arr ) == 5 ) {array_shift( $changes_arr );};
	global $current_user;
	$change_str = $current_user->ID;
	$date_info = jdate( 'h:i - j F Y', strtotime( get_the_modified_date() ) );
	$change_str = $change_str.'*'.$date_info;
	array_push( $changes_arr, $change_str );
	$changes_str = implode( "+", $changes_arr );
	update_post_meta( $post_id, 'changes_str', $changes_str );
	
// Order to Project metabox
	$project_id = get_post_meta( $post_id, 'project_id', 1 );
	if ( '' != $project_id ) return;
	if ( !current_user_can( 'publish_post' ) ) return;
	if ( !isset( $_POST['chkswchipt'] ) ) return;
	$user_ID = get_current_user_id();
	$new_project = array(
		'post_title'    => 'Project '.$post->post_title,
		'post_content'  => $post->post_content,
		'post_type'   	=> 'projects',
		'post_status'		=> 'publish',
		'post_author'		=> $user_ID
	);
	remove_action( 'post_updated', 'save_order_list' );
	$project_id = wp_insert_post( $new_project );
	if ( 0 != $project_id ) update_post_meta( $post->ID, 'project_id', $project_id );
}
add_action( 'post_updated', 'save_order_list' );

//******************************************
// Add Order to Project switch - Orders page
// Add last changes by list - Orders page
//******************************************
function add_order_to_project_metabox(){
	if( is_admin() ){
		global $pagenow;
		if( 'post.php' == $pagenow ){
			add_meta_box( 
				'order_to_project', //id
				__('Start its Project now!' ), //title
				'order_to_project', //callback
				'orders', //CPT
				'side', //position in admin panel
				'core' //priority
			);
			global $post;
			$changes_str = get_post_meta( $post->ID, 'changes_str', 1 );
			if( empty( $changes_str ) ) return;
			add_meta_box( 
				'last_change_by', //id
				__('Last changes of this order' ), //title
				'last_change_by', //callback
				'orders', //CPT
				'side', //position in admin panel
				'core' //priority
			); 
		}
	}
}

function order_to_project( $post ){
	$project_id = get_post_meta( $post->ID, 'project_id', 1 );?>
	<p><?php _e('Please note that this is a ONE TIME start and your changes are irreversible!','fenjoon');?></p>
	<div id="order-to-project-switch">
		<div class="checkbox-switch">
			<input type="checkbox" name="chkswchipt" class="chkswchipt" <?php if ( '' != $project_id ) echo 'checked disabled';?>>
			<div class="checkbox-animate">
				<span class="checkbox-on"><?php _e('Project Started', 'fenjoon');?></span>
				<span class="checkbox-off"><?php _e('Change to Project', 'fenjoon');?></span>
			</div>
		</div>
	</div>
<?php
}

function last_change_by( $post ){
	$changes_str = get_post_meta( $post->ID, 'changes_str', 1 );
	if( empty( $changes_str ) ) return;
	$changes_arr = explode( '+', $changes_str );
	$changes_time = array();
	$changes_user = array();
	foreach( $changes_arr as $change ){
		$change_arr = explode( '*', $change ); 
		array_push( $changes_user, $change_arr[0] );
		array_push( $changes_time, $change_arr[1] );
	}
	$users = get_users( array( 'include' => $changes_user ) ); ?>
	<ul class="listofrows"">
<?php
	for( $i=0; $i<count( $changes_arr ); $i++ ){
		?>
		<li class="row">
			<div class="right"><?php echo $users[$i]->display_name;?></div>
			<div class="left"><?php echo $changes_time[$i];?></div>
		</li>
<?php
	}
?>
	</ul>
<?php
}
add_action( 'add_meta_boxes', 'add_order_to_project_metabox', 0 );

?>