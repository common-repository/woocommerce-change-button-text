<?php
add_action( 'woocommerce_init', 'start');
function start(){
add_action('woocommerce_product_write_panel_tabs', array('WC_Change_Button_Text','custom_tab_options_tab')); 
add_action('woocommerce_process_product_meta', array('WC_Change_Button_Text','process_product_meta_custom_tab'));
add_action('woocommerce_product_write_panels', array('WC_Change_Button_Text','custom_tab_options'));
add_filter( 'single_add_to_cart_text', array('WC_Change_Button_Text','custom_single_add_to_cart_text' ));
add_filter( 'variable_add_to_cart_text', array('WC_Change_Button_Text','custom_variable_add_to_cart_text'));
add_filter( 'grouped_add_to_cart_text', array('WC_Change_Button_Text','custom_grouped_add_to_cart_text'));
add_filter( 'external_add_to_cart_text', array('WC_Change_Button_Text','custom_external_add_to_cart_text'));
add_filter( 'add_to_cart_text', array('WC_Change_Button_Text','custom_add_to_cart_text' ));
}
class WC_Change_Button_Text {
	function custom_tab_options_tab() {
?>
	<li class="general_options"><a href="#custom_tab_data"><?php _e('Button Text', 'woothemes'); ?></a></li>
<?php
}
function process_product_meta_custom_tab( $post_id ) {
	$req = $_REQUEST['custom_button_text'];
	update_post_meta( $post_id, 'custom_button_text', $req);
}
function custom_tab_options() {
	global $post;
	$custom_button_text = get_post_meta($post->ID, 'custom_button_text', true);
include(ROOT.'/views/tabs.php');
}


function custom_single_add_to_cart_text($text) {
	global $product;
	$custom_button_text = get_post_meta($product->post->ID,'custom_button_text',true);
			if(isset($custom_button_text['custom_single_add_to_cart_text']) && !empty($custom_button_text['custom_single_add_to_cart_text']))
	return $custom_button_text['custom_single_add_to_cart_text']; 


return $text;
}



function custom_variable_add_to_cart_text($text) {
	global $product;
		$custom_button_text = get_post_meta($product->post->ID,'custom_button_text',true);
		if(isset($custom_button_text['custom_variable_add_to_cart_text']) && !empty($custom_button_text['custom_variable_add_to_cart_text']))
	return $custom_button_text['custom_variable_add_to_cart_text']; 


return $text;
}
function custom_grouped_add_to_cart_text($text) {
	global $product;
		$custom_button_text = get_post_meta($product->post->ID,'custom_button_text',true);
		if(isset($custom_button_text['custom_grouped_add_to_cart_text']) && !empty($custom_button_text['custom_grouped_add_to_cart_text']))
	return $custom_button_text['custom_grouped_add_to_cart_text']; 

return $text;
}
function custom_external_add_to_cart_text($text) {
	global $product;
		$custom_button_text = get_post_meta($product->post->ID,'custom_button_text',true);
		if(isset($custom_button_text['custom_external_add_to_cart_text']) && !empty($custom_button_text['custom_external_add_to_cart_text']))
	return $custom_button_text['custom_external_add_to_cart_text']; 

return $text;
}
function custom_add_to_cart_text($text) {
	global $product;
		$custom_button_text = get_post_meta($product->post->ID,'custom_button_text',true);
		if(isset($custom_button_text['custom_add_to_cart_text']) && !empty($custom_button_text['custom_add_to_cart_text']))
     	return $custom_button_text['custom_add_to_cart_text']; 

return $text;
}
}



?>