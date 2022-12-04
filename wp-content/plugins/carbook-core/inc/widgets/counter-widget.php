<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Counter_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'counter';
	}

	
	public function get_title() {
		return esc_html__( 'Counter', 'carbook-core' );
	}

	
	public function get_icon() {
		return 'eicon-counter-circle';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	
	public function get_keywords() {
		return [ 'counter', 'parent' ];
	}

	
	protected function register_controls() {

		$this->start_controls_section(
			'block_1',
			[
				'label' => esc_html__( 'Block 1', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title_1_1',
			[
				'label' => esc_html__( 'Title 1', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Year', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		
        $this->add_control(
			'title_2_1',
			[
				'label' => esc_html__( 'Title 2', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Experienced', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        
        $this->add_control(
			'start_num_1',
			[
				'label' => esc_html__( 'Start number', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '0', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        $this->add_control(
			'finish_num_1',
			[
				'label' => esc_html__( 'Finish number', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '60', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'block_2',
			[
				'label' => esc_html__( 'Block 2', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title_1_2',
			[
				'label' => esc_html__( 'Title 1', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Total', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		
        $this->add_control(
			'title_2_2',
			[
				'label' => esc_html__( 'Title 2', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Cars', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        
        $this->add_control(
			'start_num_2',
			[
				'label' => esc_html__( 'Start number', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '0', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        $this->add_control(
			'finish_num_2',
			[
				'label' => esc_html__( 'Finish number', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '1090', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'block_3',
			[
				'label' => esc_html__( 'Block 3', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title_1_3',
			[
				'label' => esc_html__( 'Title 1', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Happy', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		
        $this->add_control(
			'title_2_3',
			[
				'label' => esc_html__( 'Title 2', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Customers', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        
        $this->add_control(
			'start_num_3',
			[
				'label' => esc_html__( 'Start number', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '0', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        $this->add_control(
			'finish_num_3',
			[
				'label' => esc_html__( 'Finish number', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '2590', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'block_4',
			[
				'label' => esc_html__( 'Block 4', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title_1_4',
			[
				'label' => esc_html__( 'Title 1', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Total', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		
        $this->add_control(
			'title_2_4',
			[
				'label' => esc_html__( 'Title 2', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Branches', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        
        $this->add_control(
			'start_num_4',
			[
				'label' => esc_html__( 'Start number', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '0', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
        $this->add_control(
			'finish_num_4',
			[
				'label' => esc_html__( 'Finish number', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '67', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->end_controls_section();

	}

	
	protected function render() {

		$settings = $this->get_settings_for_display();
    ?>
 <section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="<?php echo esc_attr($settings['finish_num_1']) ?>">0</strong>
                <span>Year <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">0</strong>
                <span>Total <br>Cars</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2590">0</strong>
                <span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>	

	<?php 
    }

}