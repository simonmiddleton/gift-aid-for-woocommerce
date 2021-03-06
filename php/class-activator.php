<?php
/**
 * Activator Class.
 *
 * @since	1.3.0
 *
 * @package dtg\gift_aid_for_woocommerce
 */

namespace dtg\gift_aid_for_woocommerce;

/**
 * Class Activator
 *
 * Carry out actions when the plugin is activated.
 *
 * @since	1.3.0
 *
 * @package dtg\gift_aid_for_woocommerce
 */
class Activator {

	/**
	 * Path to the root plugin file.
	 *
	 * @var 	string
	 * @access	private
	 * @since	1.3.0
	 */
	private $plugin_root;

	/**
	 * Plugin name.
	 *
	 * @var 	string
	 * @access	private
	 * @since	1.3.0
	 */
	private $plugin_name;

	/**
	 * Plugin prefix.
	 *
	 * @var 	string
	 * @access	private
	 * @since	1.3.0
	 */
	private $plugin_prefix;

	/**
	 * Constructor.
	 *
	 * @since	1.3.0
	 */
	public function __construct() {
		$this->plugin_root 		 = DTG_GIFT_AID_ROOT;
		$this->plugin_name		 = DTG_GIFT_AID_NAME;
		$this->plugin_prefix     = DTG_GIFT_AID_PREFIX;
	}

	/**
	 * Unleash Hell.
	 *
	 * @since	1.3.0
	 */
	public function run() {
		// Register the activation callback.
		register_activation_hook( $this->plugin_root, array( $this, 'activate' ) );
	}

	/**
	 * Activate the plugin.
	 *
	 * @since	1.3.0
	 */
	public function activate() {
		// Set a transient to confirm activation.
		set_transient( $this->plugin_prefix . '_activated', true, 10 );
	}
}
