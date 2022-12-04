<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor oEmbed Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_Contact_Us_Widget extends \Elementor\Widget_Base
{

    /**
     * Get widget name.
     *
     * Retrieve oEmbed widget name.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'Contact Us';
    }

    /**
     * Get widget title.
     *
     * Retrieve oEmbed widget title.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget title.
     */
    public function get_title()
    {
        return esc_html__('Contact Us', 'carbook-core');
    }

    /**
     * Get widget icon.
     *
     * Retrieve oEmbed widget icon.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'eicon-google-maps';
    }

    /**
     * Get custom help URL.
     *
     * Retrieve a URL where the user can get more information about the widget.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget help URL.
     */
    // public function get_custom_help_url() {
    // 	return 'https://developers.elementor.com/docs/widgets/';
    // }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the oEmbed widget belongs to.
     *
     * @since 1.0.0
     * @access public
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return ['general'];
    }

    /**
     * Get widget keywords.
     *
     * Retrieve the list of keywords the oEmbed widget belongs to.
     *
     * @since 1.0.0
     * @access public
     * @return array Widget keywords.
     */
    public function get_keywords()
    {
        return ['contact form', 'contact', 'us'];
    }

    /**
     * Register oEmbed widget controls.
     *
     * Add input fields to allow the user to customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls()
    {

        $this->start_controls_section(
            'section_1',
            [
                'label' => esc_html__('Address Section', 'carbook-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'section_1_title',
			[
				'label' => esc_html__( 'Title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Address:', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->add_control(
			'section_1_text',
			[
				'label' => esc_html__( 'Text', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 4,
				'default' => esc_html__( '198 West 21th Street, Suite 721 New York NY 10016', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your text here', 'carbook-core' ),
			]
		);

        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_2',
            [
                'label' => esc_html__('Phone section', 'carbook-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'section_2_title',
			[
				'label' => esc_html__( 'Title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Phone:', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->add_control(
			'section_2_text',
			[
				'label' => esc_html__( 'Text', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+ 1235 2355 98', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your text here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->add_control(
			'section_2_attr',
			[
				'label' => esc_html__( 'Text attr', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '1234567920', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'section_3',
            [
                'label' => esc_html__('Email section', 'carbook-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'section_3_title',
			[
				'label' => esc_html__( 'Title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Email:', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->add_control(
			'section_3_text',
			[
				'label' => esc_html__( 'Text', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'info@yoursite.com', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your text here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
            'section_4',
            [
                'label' => esc_html__('Taxt area section', 'carbook-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'section_4_name',
			[
				'label' => esc_html__( 'Plaseholder for Name block', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Your Name', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your text here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->add_control(
			'section_4_email',
			[
				'label' => esc_html__( 'Plaseholder for Email block', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Your Email', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your text here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->add_control(
			'section_4_subject',
			[
				'label' => esc_html__( 'Plaseholder for subject block', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Subject', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your text here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->add_control(
			'section_4_message',
			[
				'label' => esc_html__( 'Plaseholder for message block', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Message', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your text here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->add_control(
			'section_4_btn_title',
			[
				'label' => esc_html__( 'Button title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Send Message', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your text here', 'carbook-core' ),
                'label_block' => esc_html__('true', 'carbook-core')
			]
		);
        $this->end_controls_section();
    }

    /**
     * Render oEmbed widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {

        $settings = $this->get_settings_for_display();
?>
        <section class="ftco-section contact-section">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-4">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="border w-100 p-4 rounded mb-2 d-flex">
                                    <div class="icon mr-3">
                                        <span class="icon-map-o"></span>
                                    </div>
                                    <p><span><?php echo esc_html($settings['section_1_title']) ?></span><?php echo esc_html($settings['section_1_text']) ?></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="border w-100 p-4 rounded mb-2 d-flex">
                                    <div class="icon mr-3">
                                        <span class="icon-mobile-phone"></span>
                                    </div>
                                    <p><span><?php echo esc_html($settings['section_2_title'])?></span> <a href="tel://<?php echo esc_attr($settings['section_2_attr'])?>"><?php echo esc_html($settings['section_2_text']) ?></a></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="border w-100 p-4 rounded mb-2 d-flex">
                                    <div class="icon mr-3">
                                        <span class="icon-envelope-o"></span>
                                    </div>
                                    <p><span><?php echo esc_html($settings['section_3_title']) ?></span> <a href="mailto:<?php echo esc_attr($settings['section_3_text'])?>"><?php echo esc_html($settings['section_3_text'])?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 block-9 mb-md-5">
                        <form action="#" class="bg-light p-5 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?php echo esc_attr($settings['section_4_name']) ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?php echo esc_attr($settings['section_4_email']) ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?php echo esc_attr($settings['section_4_subject']) ?>">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="<?php echo esc_attr($settings['section_4_message']) ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="<?php echo esc_attr($settings['section_4_btn_title']) ?>" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div id="map" class="bg-white"></div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}
