<?php

function image_3d_tabs_metaboxes($post_id) {
	$box_options = array(
		'id'           => 'image_3d_metabox_field',
		'title'        => __( 'Image 3D Carousel Sections', 'cmb2' ),
		'object_types' => array( 'image_3d_cl' ),
		'show_names'   => true,
		'show_in_rest' => 'read_and_write',

	);

    $post_id =0;

	if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
    $post_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
  }


	// Setup meta box
	$cmb = new_cmb2_box( $box_options );

	// setting tabs
	$tabs_setting           = array(
		'config' => $box_options,
		'tabs'   => array()
	);


	$tabs_setting['tabs'][] = array(
		'id'     => 'image_3d_tab1',
		'title'  => __( 'Image Carousel Shortcodes', 'cmb2' ),
		'fields' => array(


			array(
                  'name' => 'Shortcode For Post And Page',
                  'id' => 'image_3d_shortcode1',
                  'type' => 'title',
                  'default' => '[img_gallery_3d id="'.$post_id.'"]',
             'desc' => '<input type=\'text\' value=\'[img_gallery_3d id="'.$post_id.'"]\'>'
			),

			array(
                  'name' => 'Shortcode For Using Theme File',
                  'id' => 'img_3d_shortcode2',
                  'type' => 'title',
                  'default' => '<?php echo do_shortcode("[img_gallery_3d id="'.$post_id.'"]");',
                  'desc' => '<input type=\'text\' value=\'<?php echo do_shortcode("[img_gallery_3d id="'.$post_id.'"]"); ?>\'>'
			),
			
		
		)
	);




$tabs_setting['tabs'][] = array(
		'id'     => 'image_3d_tab2',
		'title'  => __( 'Image Carousel Contents', 'cmb2' ),
		'fields' => array(
					
			array(
				'id'      => 'image_3d_cl_repeat_group',
				'desc'   => 'Image Gallery Carousel Repeatable Field, You Should Use Odd Number Of Image',
				'type'    => 'group',
				'options' => array(
					'group_title'   => __( '{#} Image Carousel Group Title', 'cmb2' ),
					'add_button'    => __( 'Add Image Carousel Item', 'cmb2' ),
					'remove_button' => __( 'Remove Image Carousel Item', 'cmb2' ),
					'sortable'      => true,
					'closed'   => true,
					'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ),
				),
				'after_group' => 'image3d_add_js_for_repeatable_titles',
				
				'fields'  => array(
					array(
						
						'name' => 'Image Carousel Title',
                        'id' => 'image_3d_title',
                        'type' => 'text'
					),
					
					array(
						'name' => __( 'Upload Your Image', 'cmb2' ),
						'id'   => 'image_3d_image',
						'type' => 'file',
					)
				)
			)
		)
	);





	$tabs_setting['tabs'][] = array(
		'id'     => 'image_3d_tab3',
		'title'  => __( 'Settings', 'cmb2' ),
		'fields' => array(

               	array(
				'name'    => 'Carousel Heading',
	            'id'      => 'image_3d_heading',
	            'type'    => 'text',
	            'default' => 'Responsive Smooth image-3d Carousel',
			),

				array(
				'name'    => 'Image Width',
	            'id'      => 'image_3d_width',
	            'desc'    => 'Image width measure by px',
	            'type'    => 'text',
	            'default' => '375px',
			),


			array(
				'name'    => 'Image Height',
	            'id'      => 'image_3d_height',
	            'desc'    => 'Image Height measure by px',
	            'type'    => 'text',
	            'default' => '395px',
			),

			

			
		)
	);
	

	// set tabs
	$cmb->add_field( array(
		'id'   => '__image_3d_tabs',
		'type' => 'tabs',
		'tabs' => $tabs_setting
	) );
}

add_filter( 'cmb2_init', 'image_3d_tabs_metaboxes');



// Scripts For Repeatable Title

function image3d_add_js_for_repeatable_titles() {
	add_action( is_admin() ? 'admin_footer' : 'wp_footer', 'image3d_add_js_for_repeatable_titles_to_footer' );
}

function image3d_add_js_for_repeatable_titles_to_footer() {
	?>
	<script type="text/javascript">
	jQuery( function( $ ) {
		var $box = $( document.getElementById( 'image_3d_metabox_field' ) );

		var replaceTitles = function() {
			$box.find( '.cmb-group-title' ).each( function() {
				var $this = $( this );
				var txt = $this.next().find( '[id$="image_3d_title"]' ).val();
				var rowindex;

				if ( ! txt ) {
					txt = $box.find( '[data-grouptitle]' ).data( 'grouptitle' );
					if ( txt ) {
						rowindex = $this.parents( '[data-iterator]' ).data( 'iterator' );
						txt = txt.replace( '{#}', ( rowindex + 1 ) );
					}
				}

				if ( txt ) {
					$this.text( txt );
				}
			});
		};

		var replaceOnKeyUp = function( evt ) {
			var $this = $( evt.target );
			var id = 'title';

			if ( evt.target.id.indexOf(id, evt.target.id.length - id.length) !== -1 ) {
				$this.parents( '.cmb-row.cmb-repeatable-grouping' ).find( '.cmb-group-title' ).text( $this.val() );
			}
		};

		$box
			.on( 'cmb2_add_row cmb2_shift_rows_complete', replaceTitles )
			.on( 'keyup', replaceOnKeyUp );

		replaceTitles();
	});
	</script>
	<?php
}