<?php
/*
Plugin Name: WooCommerce Change Button Text
Plugin URI: http://bejda.com
Description: This WooCommerce extension gives the ability to the store owner to change the add to cart button text on all products. Awesome extension to promote catalog products, promote sales or even accomondate Woocommerce to fit the needs of the store.
Author: Milos Bejda
Version: 1.0
Author URI: http://Bejda.com
*/

define('ROOT', plugin_dir_path( __FILE__ ));

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
  if ( ! class_exists( 'WC_Change_Button_Text' ) ) {
include(ROOT.'/main.php');
	
  }
}



?>