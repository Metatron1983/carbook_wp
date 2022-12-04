<?php

namespace Elementor_Test_Addon;

final class Plugin {

	
	const VERSION = '1.0.0';
	const MINIMUM_ELEMENTOR_VERSION = '3.5.0';
	const MINIMUM_PHP_VERSION = '7.4';



	private static $_instance = null;

	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}


	public function __construct() {

		if ( $this->is_compatible() ) {
			add_action( 'elementor/init', [ $this, 'init' ] );
		}

	}

	public function is_compatible() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return false;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return false;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return false;
		}

		return true;

	}

		public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'elementor-test-addon' ),
			'<strong>' . esc_html__( 'Elementor Test Addon', 'elementor-test-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-addon' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-addon' ),
			'<strong>' . esc_html__( 'Elementor Test Addon', 'elementor-test-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-addon' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-addon' ),
			'<strong>' . esc_html__( 'Elementor Test Addon', 'elementor-test-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'elementor-test-addon' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	public function init() {

		add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );
	

	}

	
	public function register_widgets( $widgets_manager ) {

		require_once( __DIR__ . '/widgets/about-widget.php' );
		require_once( __DIR__ . '/widgets/index_main_banner.php' );
		require_once( __DIR__ . '/widgets/make_your_trip_widget.php' );
		require_once( __DIR__ . '/widgets/car-carousel.php' );
		require_once( __DIR__ . '/widgets/about-us-widget.php' );
		require_once( __DIR__ . '/widgets/services-widget.php' );
		require_once( __DIR__ . '/widgets/become-driver-widget.php' );
		require_once( __DIR__ . '/widgets/testimonial-widget.php' );
		require_once( __DIR__ . '/widgets/recent-blog.php' );
		require_once( __DIR__ . '/widgets/counter-widget.php' );
		require_once( __DIR__ . '/widgets/footer-widget.php' );
		require_once( __DIR__ . '/widgets/header-widget.php' );
		require_once( __DIR__ . '/widgets/pricelist-widget.php' );
		require_once( __DIR__ . '/widgets/carlist-widget.php' );
		require_once( __DIR__ . '/widgets/bloglist-widget.php' );
		require_once( __DIR__ . '/widgets/contact-us-widget.php' );


		$widgets_manager->register( new \Elementor_About_Widget() );
		$widgets_manager->register( new \Elementor_Index_Main_Banner_Widget() );
		$widgets_manager->register( new \Elementor_Make_Your_Trip_Widget() );
		$widgets_manager->register( new \Elementor_Car_Carousel_Widget() );
		$widgets_manager->register( new \Elementor_About_Us_Widget() );
		$widgets_manager->register( new \Elementor_Services_Widget() );
		$widgets_manager->register( new \Elementor_Become_Driver_Widget() );
		$widgets_manager->register( new \Elementor_Testimonial_Widget() );
		$widgets_manager->register( new \Elementor_Recent_Blog_Widget() );
		$widgets_manager->register( new \Elementor_Counter_Widget() );
		$widgets_manager->register( new \Elementor_Footer_Widget() );
		$widgets_manager->register( new \Elementor_Header_Widget() );
		$widgets_manager->register( new \Elementor_Pricelist_Widget() );
		$widgets_manager->register( new \Elementor_Carlist_Widget() );
		$widgets_manager->register( new \Elementor_Bloglist_Widget() );
		$widgets_manager->register( new \Elementor_Contact_Us_Widget() );

	}

}

