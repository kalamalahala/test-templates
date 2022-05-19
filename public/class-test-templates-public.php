<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/kalamalahala/
 * @since      1.0.0
 *
 * @package    Test_Templates
 * @subpackage Test_Templates/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Test_Templates
 * @subpackage Test_Templates/public
 * @author     Tyler Karle <tyler.karle@icloud.com>
 */
class Test_Templates_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Test_Templates_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Test_Templates_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// Bootstrap 4 CSS

		wp_enqueue_style( $this->plugin_name . "_bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css", array(), "4.6.1", "all" );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/test-templates-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Test_Templates_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Test_Templates_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name . "_vuejs", "https://unpkg.com/vue@2.6.12", array( 'jquery' ), '2.6.12', false );
		wp_enqueue_script( $this->plugin_name . "_vue_portal", "https://unpkg.com/portal-vue@2.1.0", array( 'jquery' ), '2.1.0', false );
		wp_enqueue_script( $this->plugin_name . "_bootstrap_popper", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js", array( 'jquery' ), '4.6.1', false );

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/test-templates-public.js', array( 'jquery' ), $this->version, false );

	}

	// template_testing_callback - create Page Template
	public function template_testing_callback() {

		global $post;
		if ( $post->post_name = 'template-testing' ) {
			$output = TT_ROOT . 'templates/template-testing.php';
		}
		return $output;
	}

}
