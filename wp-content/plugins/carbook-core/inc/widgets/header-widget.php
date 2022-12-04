<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_Header_Widget extends \Elementor\Widget_Base {
    private string $home_page_url = '';
    private string $home_page_name = '';
    private string $current_page_title = '';
    private string $current_page_name = '';

	public function get_name() {
		return 'header';
	}

	public function get_title() {
		return esc_html__( 'Header', 'carbook-core' );
	}

	public function get_icon() {
		return 'eicon-header';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'header', 'parent', 'carbook-core' ];
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
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

	}

    private function breadcrumbs() {
        $this->home_page_url = esc_url(get_home_url(19));
        $this->home_page_name = esc_html(get_the_title(19));
        $this->current_page_title = esc_html(get_the_title());
        $this->current_page_name = esc_html(get_the_title());
        if($this->current_page_name === 'Our Services'){
            $this->current_page_name = 'Services';
        };
        if($this->current_page_name === 'Cars'){
            $this->current_page_title = 'Choose Your Car';
        };
        if($this->current_page_name === 'Blog'){
            $this->current_page_title = 'Our Blog';
        };
		if($this->current_page_name === 'Contact'){
            $this->current_page_title = 'Contact Us';
        };
		if($this->current_page_name === 'CAR DETAILS'){
            $this->current_page_title = 'Car Details';
        };
    }
	protected function render() {

		$settings = $this->get_settings_for_display();
        $this->breadcrumbs();


		?>
         <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?php echo esc_url($settings['image']['url']) ?>);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                    <div class="col-md-9 ftco-animate pb-5">
                        <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo $this->home_page_url ?>"><?php echo $this->home_page_name; ?> <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $this->current_page_name; ?> <i class="ion-ios-arrow-forward"></i></span></p>
                        <h1 class="mb-3 bread"><?php echo $this->current_page_title; ?></h1>
                    </div>
                </div>
            </div>
        </section>


        <?php
	}

}