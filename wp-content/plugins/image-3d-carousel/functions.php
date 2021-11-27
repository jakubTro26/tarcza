<?php 
// Order Column Value
function image_3d_custom_column($columns)

{
	unset( $columns['date'] );
   $columns['id'] = __('Image 3D Shortcode','image_3d');
   	$columns['date'] = __('Date','image_3d');;


   return $columns;
}

add_filter('manage_image_3d_cl_posts_columns', 'image_3d_custom_column');



// Add Shortcode in posts Column
function image_3d_custom_column_data($column, $post_id)

{

global $post;

$post_id = $post -> ID;	

?>
<input type="text" name="shortc_value" style="width:180px;" value='[img_gallery_3d id="<?php echo $post_id ?>"]'>

<?php

}

add_action('manage_image_3d_cl_posts_custom_column', 'image_3d_custom_column_data', 10, 2);


// Function Register
function register_image_3d_post_type() {

	$labels = array(
		'name'               => 'Image 3D Carousel',
		'singular_name'      => 'Image 3D Carousel',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Image 3D Carousel  ',
		'edit_item'          => 'Edit Image Carousel',
		'new_item'           => 'New Image 3D Carousel',
		'all_items'          => 'All Carousel Images',
		'view_item'          => 'View Image Carousel',
		'search_items'       => 'Search Image Carousel',
		'not_found'          =>  'No Image Carousel found',
		'not_found_in_trash' => 'No Image Carousel found in Trash',
		'menu_name'          => 'Image 3D Carousel',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'image_3d_cl' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-admin-page',
		'supports'           => array( 'title')
	);

	register_post_type( 'image_3d_cl', $args );

}
add_action( 'init', 'register_image_3d_post_type' );


// Remove Row
function image_3d_remove_row_actions( $actions )
{
    if( get_post_type() === 'image_3d_cl' )
        unset( $actions['view'] );
    return $actions;
}
add_filter( 'post_row_actions', 'image_3d_remove_row_actions', 10, 1 );