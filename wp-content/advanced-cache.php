<?php
# WP SUPER CACHE 0.8.9.1
function wpcache_broken_message() {
	if ( false == strpos( $_SERVER[ 'REQUEST_URI' ], 'wp-admin' ) )
		echo "<!-- WP Super Cache is installed but broken. The path to wp-cache-phase1.php in wp-content/advanced-cache.php must be fixed! -->";
}

if ( !include_once( '/Users/Andy/1010-charitable-trust/trunk/wp-content/plugins/wp-super-cache/' . 'wp-cache-phase1.php' ) ) {
	if ( !@is_file( '/Users/Andy/1010-charitable-trust/trunk/wp-content/plugins/wp-super-cache/' . 'wp-cache-phase1.php' ) )
		register_shutdown_function( 'wpcache_broken_message' );
}
?>
