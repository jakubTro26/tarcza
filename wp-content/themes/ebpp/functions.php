<?php 

function zwp_add_menu() {
    register_nav_menus(
    array(
        'main-menu'   => 'Menu główne',
        'blog' => 'blog'
    )
);
}

add_action('init','zwp_add_menu');

?>


<?php
if (function_exists("register_sidebar")) {
    register_sidebar(array(
        'before_widget' => '<div class="side-box">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
?>

<?php
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
          esc_url( get_permalink( get_the_ID() ) ),
          sprintf( __( ' Czytaj więcej %s', 'wpdocs' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>
