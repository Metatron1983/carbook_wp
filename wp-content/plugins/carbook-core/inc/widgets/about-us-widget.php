<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_About_Us_Widget extends \Elementor\Widget_Base {

		public function get_name() {
		return 'about-us';
	}

	public function get_title() {
		return esc_html__( 'About Us', 'mycarbook' );
	}

	public function get_icon() {
		return 'eicon-preview-medium';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'about', 'us', 'parent' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'mycarbook' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title_1',
			[
				'label' => esc_html__( 'Title 1', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'ABOUT US', 'mycarbook' ),
				'placeholder' => esc_html__( 'Type your title here', 'mycarbook' ),
			]
		);
		
        $this->add_control(
			'title_2',
			[
				'label' => esc_html__( 'Title 2', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Welcome to Carbook', 'mycarbook' ),
				'placeholder' => esc_html__( 'Type your title here', 'mycarbook' ),
			]
		);

        $this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'btn_title',
			[
				'label' => esc_html__( 'Button title', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Search Vehicle', 'mycarbook' ),
				'placeholder' => esc_html__( 'Type your title here', 'mycarbook' ),
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'text_section',
			[
				'label' => esc_html__( 'Text', 'mycarbook' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        
        $repeater_about_us = new \Elementor\Repeater();

        $repeater_about_us->add_control(
			'item_description',
			[
				'label' => esc_html__( 'Text', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => '',
				'placeholder' => esc_html__( 'Type your description here', 'mycarbook' ),
			]
		);

        $this->add_control(
			'list',
			[
				'label' => esc_html__( 'Description List', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater_about_us->get_controls(),
				'title_field' => '',
			]
		);

        $this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		
	?>
     <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo esc_url($settings['image']['url']); ?>);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading"><?php echo esc_html($settings['title_1']) ?></span>
	            <h2 class="mb-4"><?php echo esc_html($settings['title_2']) ?></h2>
                <?php
                if ( $settings['list'] ) {
                    foreach (  $settings['list'] as $item ) {
                ?>
                    <p> <?php echo esc_html($item['item_description']); ?> </p>
                <?php
                    }
                }   
                ?>
	            <p><a href="#" class="btn btn-primary py-3 px-4"><?php echo esc_html($settings['btn_title'])  ?></a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>
    <?php
	}
}