<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Become_Driver_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'become-driver';
	}

	public function get_title() {
		return esc_html__( 'Become a driver', 'carbook-core' );
	}

	public function get_icon() {
		return 'eicon-click';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'become', 'driver', 'parent' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'banner_title',
			[
				'label' => esc_html__( 'Banner title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Do You Want To Earn With Us? So Don\'t Be Late.', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
			]
		);
		$this->add_control(
			'btn_title',
			[
				'label' => esc_html__( 'Button title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Become A Driver', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
			]
		);

        $this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		?>
        
        <section class="ftco-section ftco-intro" style="background-image: url(<?php echo esc_url($settings['image']['url']) ?>);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
                        <h2 class="mb-3"><?php echo esc_html($settings['banner_title']) ?></h2>
                        <a href="#" class="btn btn-primary btn-lg"><?php echo esc_html($settings['btn_title']) ?></a>
                    </div>
				</div>
			</div>
		</section>
        <?php
	}

}