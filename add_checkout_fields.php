<?php
/**
 * Plugin Name:     Add_checkout_fields
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Add checkout fields to WooCommerce.
 * Author:          Naoki Ohashi
 * Author URI:      https://naoki-is.me
 * Text Domain:     add_checkout_fields
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Add_checkout_fields
 */

function naoki_add_checkout_fields( $fields ) {
	$fields['naoki_nickname'] = array(
		'label'    => __( '支援者ネーム' ),
		'type'     => 'text',
		'class'    => array( 'form-row-wide' ),
		'priority' => 35,
		'required' => true,
	);

	return $fields;
}

add_filter( 'woocommerce_billing_fields', 'naoki_add_checkout_fields' );
