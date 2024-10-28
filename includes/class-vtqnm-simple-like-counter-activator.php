<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/vtqnm
 * @since      1.0.0
 *
 * @package    Vtqnm_Simple_Like_Counter
 * @subpackage Vtqnm_Simple_Like_Counter/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Vtqnm_Simple_Like_Counter
 * @subpackage Vtqnm_Simple_Like_Counter/includes
 * @author     Vitalii Terentev <vtqnm0@gmail.com>
 */
class Vtqnm_Simple_Like_Counter_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        add_post_type_support('page', 'vtqnm-simple-like-counter');
        add_post_type_support('post', 'vtqnm-simple-like-counter');
	}

}
