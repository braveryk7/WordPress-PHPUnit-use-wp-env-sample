<?php

use Yoast\WPTestUtils\WPIntegration;

require_once dirname( __DIR__ ) . '/vendor/yoast/wp-test-utils/src/WPIntegration/bootstrap-functions.php';

$_tests_dir = WPIntegration\get_path_to_wp_test_dir();

if ( ! $_tests_dir ) {
	exit( PHP_EOL . "\033[41mWP_TESTS_DIR environment variable is not defined.\033[0m" . PHP_EOL . PHP_EOL );
}

require_once $_tests_dir . 'includes/functions.php';

/**
 * Manually load the Example Plugin.
 */
function _manually_load_plugin() {
	// example-plugin.phpは自分のプロジェクトのルートファイル、プラグインなら通常プラグイン名のファイルを指定
	require dirname( dirname( __FILE__ ) ) . '/example-plugin.php';
}
tests_add_filter( 'plugins_loaded', '_manually_load_plugin' );

WPIntegration\bootstrap_it();