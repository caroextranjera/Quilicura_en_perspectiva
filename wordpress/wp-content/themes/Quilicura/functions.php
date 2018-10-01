<?php  

function register_enqueue_style(){
	$theme_data = wp_get_theme();

wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab|Slabo+27px');

wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');

wp_register_style('bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

wp_register_style ('style-css', get_theme_file_uri('css/style.css'), null,  null, 'screen');

wp_enqueue_style('fonts');

wp_enqueue_style('fontawesome');

wp_enqueue_style('bootstrapcdn');

wp_enqueue_style('style-css');


}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );



function register_enqueue_scripts(){
	$theme_data = wp_get_theme();

	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');

	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');

	wp_register_script('bootstrap-min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');


	wp_enqueue_script('jquery');

	wp_enqueue_script('popper');

	wp_enqueue_script('bootstrap-min');
	

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


remove_action ('shutdown', 'wp_ob_end_flush_all', 1);


function menus_setup() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
		)
	);
}
add_action( 'after_setup_theme', 'menus_setup' );

?>