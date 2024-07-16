<?php

// Add new tab to My Account menu

function rh_custom_endpoint( $menu_links ){
	$menu_links = array_slice( $menu_links, 0, 5, true ) 
	+ array( 'event-alerts' => 'Event Alerts' ) 
	+ array_slice( $menu_links, 5, NULL, true );
 
	return $menu_links;
 
}

// Register this new endpoint permalink
function rh_new_endpoint() {
	add_rewrite_endpoint( 'event-alerts', EP_PAGES );
}

// Add some content inside endpoint
function rh_endpoint_content() {
	echo do_shortcode('[event_alerts]');
}

// NB! In order to make it work you need to go to Settings > Permalinks and just push "Save Changes" button.

// If you need to change endpoint order then add your own order here
function rh_custom_endpoint_order() {
 $myorder = array(
        'dashboard'          => __( 'Dashboard', 'woocommerce' ),
        'orders'             => __( 'Purchases', 'woocommerce' ), 
        'edit-account'       => __( 'Edit Account', 'woocommerce' ),
	 	'edit-address'       => __( 'Edit Address', 'woocommerce' ),
	 	'event-alerts'    => __( 'Event Alerts', 'woocommerce' ),
        'customer-logout'    => __( 'Log out', 'woocommerce' ),
    );
    return $myorder;
}