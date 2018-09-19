<?php
/**
 * Plugin Name: AffiliateWP - Disable automatic customer linking to affiliate.
 * Plugin URI: http://affiliatewp.com
 * Description: Disable automatic customer linking to affiliate when a customer is created.
 * Author: Tunbosun Ayinla, tubiz
 * Author URI: https://bosun.me
 * Version: 1.0
 */

function affwp_disable_automatic_customer_linking_to_affiliate( $check, $object_id, $meta_key, $meta_value, $unique ) {

	if ( did_action( 'affwp_post_insert_customer' ) ) {

		if ( 'affiliate_id' == $meta_key ) {

			return true;

		}

		return $check;

	}

}
add_filter( 'add_affwp_customer_metadata', 'affwp_disable_automatic_customer_linking_to_affiliate', 10, 5 );

