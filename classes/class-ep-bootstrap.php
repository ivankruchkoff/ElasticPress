<?php

class EP_Bootstrap {

	public static function factory() {
		static $instance = false;

		if ( ! $instance ) {
			$instance = new self();
		}

		return $instance;
	}

	public function bootstrap() {
		$installed_version = get_site_option( 'EP_INSTALLED_VERSION' );
		$this->upgrade_to_version( $installed_version );
	}

	/*
	 * List of changes to be performed, chronologically as we upgrade our plugin.
	 */
	function upgrade_to_version( $version_number ) {
		if ( ! $version_number ) {
			$version_number = '0.0.1';
		}

		if ( version_compare( $version_number, '0.1.3' ) === -1 ) {
			$success = ep_create_analytics_indices();
			// TODO: add error handling.
			update_site_option( 'EP_INSTALLED_VERSION', '0.1.3' );
		}

	}
}

function ep_bootstrap() {
	return EP_Bootstrap::factory()->bootstrap();
}
