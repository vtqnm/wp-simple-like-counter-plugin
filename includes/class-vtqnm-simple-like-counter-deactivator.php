<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/vtqnm
 * @since      1.0.0
 *
 * @package    Vtqnm_Simple_Like_Counter
 * @subpackage Vtqnm_Simple_Like_Counter/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Vtqnm_Simple_Like_Counter
 * @subpackage Vtqnm_Simple_Like_Counter/includes
 * @author     Vitalii Terentev <vtqnm0@gmail.com>
 */
class Vtqnm_Simple_Like_Counter_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        remove_post_type_support('page', 'vtqnm-simple-like-counter');
        remove_post_type_support('post', 'vtqnm-simple-like-counter');
	}

}
