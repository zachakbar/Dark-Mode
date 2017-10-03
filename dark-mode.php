<?php

/**

	Plugin Name: Dark Mode
	Plugin URI: https://wordpress.org/plugins/dark-mode/
	Description: Let's your users make the WordPress admin dashboard darker.
	Author: Daniel James
	Author URI: https://www.danieltj.co.uk/
	Text Domain: dark-mode
	Version: 1.0

*/

// No thank you
if ( ! defined( 'ABSPATH' ) ) die();

// Create a new instance
new Dark_Mode;

/**
 * Define the Dark Mode class.
 * 
 * @package Dark_Mode
 * @since 1.0
 */
class Dark_Mode {

	/**
	 * Function which hooks into WordPress Core.
	 * 
	 * @since 1.0
	 */
	public function __construct() {

		// Hook into WordPress
		add_action('plugins_loaded', array( __CLASS__, 'load_text_domain' ), 10);
		add_action('admin_enqueue_scripts', array( __CLASS__, 'load_dark_mode_css' ), 10);
		add_action('personal_options', array( __CLASS__, 'add_profile_fields' ), 10);
		add_action('personal_options_update', array( __CLASS__, 'save_profile_fields' ), 10);
		add_action('edit_user_profile_update', array( __CLASS__, 'save_profile_fields' ), 10);

	}

	/**
	 * Load the plugin text domain.
	 * 
	 * @since 1.0
	 */
	public static function load_text_domain() {

		// Load the plugin text domain for language localisation
		load_plugin_textdomain( 'dark-mode', false, untrailingslashit(dirname(__FILE__)) . '/languages' );

	}

	/**
	 * Checks if the current user has Dark Mode on.
	 * 
	 * @param $user_id string ID of a given user.
	 * 
	 * @since 1.0
	 * @return boolean
	 */
	public static function is_using_dark_mode( $user_id = NULL ) {

		// Check if we have a user id given to us
		if ( empty( $user_id ) ) {

			$user_id = get_current_user_id();

		}

		// Check if the user is using Dark Mode based on the meta value
		if ( 'on' == get_user_meta( $user_id, 'dark_mode', true ) ) {

			// Using Dark Mode
			return true;

		} else {

			// Not using Dark Mode
			return false;

		}

	}

	/**
	 * Add the stylesheet to the dashboard.
	 * 
	 * @since 1.0
	 * @return void
	 */
	public static function load_dark_mode_css() {

		// Is the current user using Dark Mode?
		if ( false !== self::is_using_dark_mode() ) {

			// Register the Dark Mode stylesheet
			wp_register_style('dark_mode_css', plugins_url('dark-mode', 'dark-mode') . '/darkmode.css', array(), '1.0');

			// Enqueue the stylesheet in the dashboard
			wp_enqueue_style('dark_mode_css');

		}

	}

	/**
	 * Create the HTML markup for the profile setting.
	 * 
	 * @param $profileuser
	 * 
	 * @since 1.0
	 * @return boolean
	 */
	public static function add_profile_fields( $profileuser ) {

		?>
			<tr class="dark-mode user-dark-mode-option">
				<th scope="row"><?php _e('Dark Mode', 'dark-mode'); ?></th>
				<td>
					<label for="dark_mode">
						<input type="checkbox" id="dark_mode" name="dark_mode" class="dark_mode"<?php if ( 'on' == get_user_meta( $profileuser->data->ID, 'dark_mode', true ) ) : ?> checked="checked"<?php endif; ?> />
						<?php _e('Enable the Dark Mode on the admin dashboard', 'dark-mode'); ?>
					</label>
				</td>
			</tr>
		<?php

	}

	/**
	 * Save the value of the profile field.
	 * 
	 * @param $user_id
	 * 
	 * @since 1.0
	 * @return mixed
	 */
	public static function save_profile_fields( $user_id ) {

		// Set the value of the users choice
		$dark_mode_choice = isset ( $_POST['dark_mode'] ) ? 'on' : 'off';

		// Update the users meta data with the new value
		update_user_meta( $user_id, 'dark_mode', $dark_mode_choice );
	
	}

}

