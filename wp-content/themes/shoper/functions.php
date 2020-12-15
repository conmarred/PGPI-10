<?php
/**
 * Shoper functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shoper
 */
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/theme-core.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/class/class-header.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/class/class-body.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/class/class-footer.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/class/class-template-tags.php';
require get_template_directory() . '/inc/class/class-post-related.php';

/**
* Functions which enhance the theme by hooking into WordPress.
*/
require get_template_directory() . '/inc/template-functions.php';

/**
* Load Jetpack compatibility file.
*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* TGM Plugins
*/
require get_template_directory() . '/inc/tgm/recommended-plugins.php';

require get_template_directory() . '/inc/customizer/customizer.php';


/**
* Implement pro features.
*/
require get_template_directory() . '/inc/admin/admin-page.php';

if ( class_exists( 'WooCommerce' ) ) {
require get_template_directory() . '/inc/woocommerce.php';
}

/* Cambiar imagen que aparece en wp-login */
function jc_change_image_logo() { 
	?>
	  <style type="text/css">
		#login h1 a, .login h1 a {
		/*background-image: url(http://shoetsii.epizy.com/wp-content/uploads/2020/12/ddd.png);*/
		background-image: url(https://localhost/wordpress/wp-content/uploads/2020/12/ddd.png);
		  background-repeat: no-repeat;
		  background-size: cover;
		  height: 300px;
		  width: 227px;
	
		}
	  </style>
	<?php 
}
	
	add_action( 'login_enqueue_scripts', 'jc_change_image_logo' );
							  
	add_filter ( 'woocommerce_account_menu_items', 'dl_cmabiar_orden_mi_cuenta' );
	function dl_cmabiar_orden_mi_cuenta() {
		 $menuOrder = array(
			'orders'             => __( 'Orders', 'woocommerce' ),
			'edit-address'       => __( 'Addresses', 'woocommerce' ),
			'edit-account'    	 => __( 'Account Details', 'woocommerce' ),
			'customer-logout'    => __( 'Logout', 'woocommerce' ),
			'downloads'          => __( 'Download', 'woocommerce' ),
			'dashboard'          => __( 'Dashboard', 'woocommerce' ),
			'login'				 => __( 'Login', 'woocommerce' ),
			'register'			 => __( 'Register', 'woocommerce' )
		 );
	 }

							  
	add_filter ( 'woocommerce_account_menu_items', 'shoetsii_rename_downloads' );
	 
	function shoetsii_rename_downloads( $menu_links ){
	 
		// $menu_links['TAB ID HERE'] = 'NEW TAB NAME HERE';
		if ( !is_user_logged_in() ) {
			$menu_links['login'] = 'Iniciar sesión';
			$menu_links['register'] = 'Registrarme';
		} else {
			$menu_links['orders'] = 'Mis pedidos';
			$menu_links['edit-address'] = 'Editar dirección';
			$menu_links['edit-account'] = 'Detalles de mi cuenta';
			$menu_links['customer-logout'] = 'Salir';
		}
		return $menu_links;
	}