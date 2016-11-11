<?php
/**
 * @package   Contact_Information_Inhabitent_Widget
 * @author    JLY <bob@bob.com>
 * @license   GPL-2.0+
 * @link      http://redacademy.com
 * @copyright 2015 Red Academy
 *
 * @wordpress-plugin
 * Plugin Name:       Contact Information Inhabitent Widget
 * Plugin URI:        http://redacademy.com
 * Description:       Custom contact information for Inhabitent plugin
 * Version:           1.0.0
 * Author:            JLY
 * Author URI:        http://redacademy.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class Contact_Information_Inhabitent_Widget extends WP_Widget {

    /**
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'contact-information-inhabitent-widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Contact Information Inhabitent Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'A widget to hold the contact information for Inhabitent.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$telephone_number = empty( $instance['telephone_number'] ) ? '' : apply_filters( 'widget_telephone_number', $instance['telephone_number'] );
		$email_address = empty( $instance['email_address'] ) ? '' : apply_filters( 'widget_email_address', $instance['email_address'] );
		$address = empty( $instance['address'] ) ? '' : apply_filters( 'widget_address', $instance['address'] );

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['telephone_number'] = strip_tags( $new_instance['telephone_number'] );
		$instance['email_address'] = strip_tags( $new_instance['email_address'] );
		$instance['address'] = strip_tags( $new_instance['address'] );

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Contact Info',
				'telephone_number' => '',
				'email_address' => '',
				'address' => '',
			)
		);

		$title = strip_tags( $instance['title'] );
		$telephone_number = strip_tags( $instance['telephone_number'] );
		$email_address = strip_tags( $instance['email_address'] );
		$address = strip_tags( $instance['address'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'Contact_Information_Inhabitent_Widget' );
});
