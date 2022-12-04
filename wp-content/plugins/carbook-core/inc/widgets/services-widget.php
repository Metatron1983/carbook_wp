<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_Services_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'services';
    }

    public function get_title()
    {
        return esc_html__('Services', 'carbook-core');
    }

    public function get_icon()
    {
        return 'eicon-bullet-list';
    }

    public function get_categories()
    {
        return ['general'];
    }

    public function get_keywords()
    {
        return ['services'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'carbook-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'title_1',
			[
				'label' => esc_html__( 'Title 1', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Services', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'title_2',
			[
				'label' => esc_html__( 'Title 2', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Latest Services', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'service_1_title',
			[
				'label' => esc_html__( 'Service 1 title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Wedding Ceremony', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'service_1_description',
			[
				'label' => esc_html__( 'Service 1 description', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your description here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'service_2_title',
			[
				'label' => esc_html__( 'Service 2 title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'City Transfer', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'service_2_description',
			[
				'label' => esc_html__( 'Service 2 description', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your description here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'service_3_title',
			[
				'label' => esc_html__( 'Service 3 title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Airport Transfer', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'service_3_description',
			[
				'label' => esc_html__( 'Service 3 description', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your description here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'service_4_title',
			[
				'label' => esc_html__( 'Service 4 title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Whole City Tour', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
			]
		);
        $this->add_control(
			'service_4_description',
			[
				'label' => esc_html__( 'Service 4 description', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your description here', 'carbook-core' ),
			]
		);

        $this->end_controls_section();
    }


    protected function render()
    {

        $settings = $this->get_settings_for_display();
?>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading"><?php echo esc_html($settings['title_1']) ?></span>
                        <h2 class="mb-3"><?php echo esc_html($settings['title_2']) ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="services services-2 w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
                            <div class="text w-100">
                                <h3 class="heading mb-2"><?php echo esc_html($settings['service_1_title']) ?></h3>
                                <p><?php echo esc_html($settings['service_1_description']) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services services-2 w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                            <div class="text w-100">
                                <h3 class="heading mb-2"><?php echo esc_html($settings['service_2_title']) ?></h3>
                                <p><?php echo esc_html($settings['service_2_description']) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services services-2 w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
                            <div class="text w-100">
                                <h3 class="heading mb-2"><?php echo esc_html($settings['service_3_title']) ?></h3>
                                <p><?php echo esc_html($settings['service_3_description']) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services services-2 w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                            <div class="text w-100">
                                <h3 class="heading mb-2"><?php echo esc_html($settings['service_4_title']) ?></h3>
                                <p><?php echo esc_html($settings['service_4_description']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}
