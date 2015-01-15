<?php

define( 'EP_CURRENT_VERSION', '0.1.3' ); // This needs to be in sync with plugin version.

/**
 * Plugin Name: ElasticPress
 * Description: Integrate WordPress search with Elasticsearch
 * Version:     1.2
 * Author:      Aaron Holbrook, Taylor Lovett, Matt Gross, 10up
 * Author URI:  http://10up.com
 * License:     MIT
 *
 * This program derives work from Alley Interactive's SearchPress
 * and Automattic's VIP search plugin:
 *
 * Copyright (C) 2012-2013 Automattic
 * Copyright (C) 2013 SearchPress
 */
require_once( 'classes/class-ep-bootstrap.php' );
require_once( 'classes/class-ep-config.php' );
require_once( 'classes/class-ep-api.php' );
require_once( 'classes/class-ep-sync-manager.php' );
require_once( 'classes/class-ep-elasticpress.php' );
require_once( 'classes/class-ep-wp-query-integration.php' );
require_once( 'classes/class-ep-dashboard.php' );

/**
 * WP CLI Commands
 */
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once 'bin/wp-cli.php';
}

register_activation_hook (__FILE__, 'ep_bootstrap' );
