<?php 

// Short Code Field For Nice Accordion
function image_3d_shortcode_field($atts)

{
    
	extract(shortcode_atts(array( 'id' => NULL), $atts));

    global $post;

    $output = '';

    $post_id = (NULL === $id) ? $post -> ID : $id;

         
    $post_meta = get_post_meta($post_id, 'image_3d_cl_repeat_group', true);
    
    $image_3d_heading =get_post_meta($post_id,'image_3d_heading', true);

    $image_3d_image =get_post_meta($post_id,'image_3d_image', true);

    $image_3d_width =get_post_meta($post_id,'image_3d_width', true);

    $image_3d_height =get_post_meta($post_id,'image_3d_height', true);

    $output = "<div class='image-3d-gall'>
      <div class='heading'>
   <h3>".$image_3d_heading."</h3>
   </div>
    <div class='image-3d-carousel'>";

   if(!empty($post_meta)):

    foreach($post_meta as $single_value):

  $output .="<div class='my-image-3d'><img src='".$single_value['image_3d_image']."'></div>";
  
  endforeach;

   endif;
   
$output .="</div> </div>";

?>

<style type="text/css">

.image-3d-gall img { max-width:<?php echo $image_3d_width  ?>; 
  height: <?php echo $image_3d_height;   ?>; }

</style>

  
	<?php	
    return $output;

}

add_shortcode('img_gallery_3d', 'image_3d_shortcode_field');