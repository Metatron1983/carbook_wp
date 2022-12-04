<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_Testimonial_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'testimonial';
	}

	public function get_title() {
		return esc_html__( 'Testimonial', 'carbook-core' );
	}

	public function get_icon() {
		return 'eicon-instagram-likes';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'testimonial', 'parent', 'carbook-core' ];
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
			'title_1',
			[
				'label' => esc_html__( 'Title 1', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Testimonial', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        $this->add_control(
			'title_2',
			[
				'label' => esc_html__( 'Title 2', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Happy Clients', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'name',
			[
				'label' => esc_html__( 'Name', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => esc_html__( 'Type name here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$repeater->add_control(
			'position',
			[
				'label' => esc_html__( 'Position', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => esc_html__( 'Type position here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$repeater->add_control(
			'feedback',
			[
				'label' => esc_html__( 'Feedback', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'placeholder' => esc_html__( 'Type feedback here', 'carbook-core' ),
			]
		);
        $repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Clients List', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		?>
        <section class="ftco-section testimony-section bg-light">
              <div class="container">
                <div class="row justify-content-center mb-5">
                  <div class="col-md-7 text-center heading-section ftco-animate">
                      <span class="subheading"><?php echo esc_html($settings['title_1']) ?></span>
                    <h2 class="mb-3"><?php echo esc_html($settings['title_2']) ?></h2>
                  </div>
                </div>
                <div class="row ftco-animate">
                  <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                      <?php 
                        if ( $settings['list'] ) {
                            foreach (  $settings['list'] as $item ) {
                            ?>
                                <div class="item">
                                    <div class="testimony-wrap rounded text-center py-4 pb-5">
                                        <div class="user-img mb-2" style="background-image: url(<?php echo esc_url($item['image']['url']) ?>)"></div>
                                        <div class="text pt-4">
                                            <p class="mb-4"><?php echo esc_html($item['feedback']) ?></p>
                                            <p class="name"><?php echo esc_html($item['name']) ?></p>
                                            <span class="position"><?php echo esc_html($item['position'])?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }    
                        }   
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        <?php
	}
}
?>