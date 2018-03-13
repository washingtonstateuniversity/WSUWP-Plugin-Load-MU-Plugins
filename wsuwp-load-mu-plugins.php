<?php
/*
Plugin Name: WSUWP Load MU Plugins
Version: 0.0.5
Description: Loads a list of mu-plugins.
Author: washingtonstateuniversity, jeremyfelt
Author URI: https://web.wsu.edu/
Plugin URI: https://github.com/washingtonstateuniversity/WSUWP-Plugin-Load-MU-Plugins
*/

add_filter( 'wsuwp_load_mu_plugins', 'wsuwp_add_mu_plugins' );
/**
 * Filters the list of MU plugins loaded with the WSUWP Platform.
 *
 * @since 0.0.1
 *
 * @return array
 */
function wsuwp_add_mu_plugins() {
	return array(
		'cavalcade/plugin.php',
		'wsuwp-mu-cmb2/wsuwp-mu-cmb2.php',
		'wsuwp-mu-extended-batcache/wsuwp-mu-extended-batcache.php',
		'wsuwp-mu-simple-filters/wsuwp-mu-simple-filters.php',
		'wsuwp-mu-new-site-defaults/plugin.php',
		'wsuwp-multiple-networks/wsuwp-multiple-networks.php',
		'wsuwp-wordpress-dashboard/wsuwp-wordpress-dashboard.php',
		'bp-multi-network/bp-multi-network.php',
		'rest-filter/rest-filter.php',
	);
}
