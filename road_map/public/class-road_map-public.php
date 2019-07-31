<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       namloc254@gmail.com
 * @since      1.0.0
 *
 * @package    Road_map
 * @subpackage Road_map/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Road_map
 * @subpackage Road_map/public
 * @author     Nam Loc Vo <namloc254@gmail.com>
 */
class Road_map_Public {

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

		add_shortcode( 'road_map', [$this, 'shortcode_render'] );

		add_action( 'wp_ajax_' . ROAD_MAP_PREFIX . '_save', [$this, 'save'] );
		add_action( 'wp_ajax_nopriv_' . ROAD_MAP_PREFIX . '_save', [$this, 'save'] );

		add_action( 'wp_ajax_' . ROAD_MAP_PREFIX . '_load', [$this, 'load'] );
		add_action( 'wp_ajax_nopriv_' . ROAD_MAP_PREFIX . '_load', [$this, 'load'] );
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
		 * defined in Road_map_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Road_map_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		global $post;
		if( has_shortcode( $post->post_content, 'road_map') ) {
			wp_enqueue_style( $this->plugin_name . '_fontawesome5', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array() );
		}
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/road_map-public.css', array(), $this->version, 'all' );

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
		 * defined in Road_map_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Road_map_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		global $post;

		if( has_shortcode( $post->post_content, 'road_map') ) {
			$questions_template = new WP_CPB_Template( ROAD_MAP_PUBLIC_PATH . 'partials/js-template/road_map-public-questions-display.php' );
			$complete_template = new WP_CPB_Template( ROAD_MAP_PUBLIC_PATH . 'partials/js-template/road_map-public-complete-display.php' );

			// ES6
			wp_enqueue_script( $this->plugin_name . '_es6', plugin_dir_url( __FILE__ ) . 'js/polyfill.min.js' );

			// Vue app
			wp_enqueue_script( $this->plugin_name . '_vuejs', 'https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js' );
			wp_enqueue_script( $this->plugin_name . '_v-sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@8' );
			wp_enqueue_script( $this->plugin_name . '_v-radial-progress', plugin_dir_url( __FILE__ ) . 'js/vue-radial-progress.min.js' );

			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/road_map-public.min.js', array( 'jquery' ), $this->version, false );
			wp_localize_script( $this->plugin_name, 'road_map_global', [
				'prefix' 			=> ROAD_MAP_PREFIX,
				'ajax_url' 			=> admin_url( 'admin-ajax.php' ),
				'template' 			=> [
					'questions' 	=> $questions_template->render(),
					'complete'		=> $complete_template->render()
				]
			] );
		}

	}

	public function shortcode_render() {
		ob_start();
		include_once( ROAD_MAP_PUBLIC_PATH . 'partials/road_map-public-display.php' );
		return ob_get_clean();
	}

	public function save() {
		$results = [
			'status' => false,
			'msg' => ''
		];

		if( is_user_logged_in() ) {
			$user_id = get_current_user_id();

			$selectedSteps = isset( $_POST['selectedSteps'] ) ? $_POST['selectedSteps'] : [];
			if( update_user_meta( $user_id, ROAD_MAP_PREFIX . '_selected_steps', $selectedSteps ) ) {
				$results = [
					'status' => true,
					'msg' => __( 'Saved !' )
				];
			}
		}

		wp_send_json($results);
	}

	public function load() {
		$results = [
			'status' => false,
			'msg' => '',
			'data' => [],
		];

		if( is_user_logged_in() ) {
			$user_id = get_current_user_id();

			if( $data = get_user_meta( $user_id, ROAD_MAP_PREFIX . '_selected_steps', true ) ) {
				$results = [
					'status' => true,
					'msg' => __( 'Loaded !' ), 
					'data' => $data,
				];
			}

		}

		wp_send_json($results);
	}

}
