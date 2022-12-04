<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Elementor_Footer_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'footer-widget';
	}

	public function get_title() {
		return esc_html__( 'Footer', 'carbook-core' );
	}

	public function get_icon() {
		return 'eicon-footer';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'footer', 'carbook-core', 'parent' ];
	}

	
	protected function register_controls() {

		$this->start_controls_section(
			'logo_section',
			[
				'label' => esc_html__( 'Секция лого', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'logo_description',
			[
				'label' => esc_html__( 'Description', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your description here', 'carbook-core' ),
                'label_block' => true,
			]
		);


		$this->end_controls_section();
		
        $this->start_controls_section(
			'title_section',
			[
				'label' => esc_html__( 'Названия секций', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'section_1_title',
			[
				'label' => esc_html__( 'Section 1 title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Information', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->add_control(
			'section_2_title',
			[
				'label' => esc_html__( 'Section 2 title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Customer Support', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->add_control(
			'section_3_title',
			[
				'label' => esc_html__( 'Section 3 title', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Have a Questions?', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->end_controls_section();
		
        $this->start_controls_section(
			'social_section',
			[
				'label' => esc_html__( 'Секция социальных сетей', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'twitter_link',
			[
				'label' => esc_html__( 'Twitter Link', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'carbook-core' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://twitter.com',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);
		
        $this->add_control(
			'facebook_link',
			[
				'label' => esc_html__( 'Facebook Link', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'carbook-core' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://facebook.com',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);
       
        $this->add_control(
			'instagram_link',
			[
				'label' => esc_html__( 'Instagram Link', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'carbook-core' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => 'https://instagram.com',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);


		$this->end_controls_section();
        
        $this->start_controls_section(
			'contacts_section',
			[
				'label' => esc_html__( 'Секция контактной информации', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'address',
			[
				'label' => esc_html__( 'Адрес', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '203 Fake St. Mountain View, San Francisco, California, USA', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->add_control(
			'phone',
			[
				'label' => esc_html__( 'Телефон', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+2 392 3929 210', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->add_control(
			'phone_link',
			[
				'label' => esc_html__( 'Телефон для ссылки(без пробелов)', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+23923929210', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);
		$this->add_control(
			'mail',
			[
				'label' => esc_html__( 'Почта', 'carbook-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'info@yourdomain.com', 'carbook-core' ),
				'placeholder' => esc_html__( 'Type your title here', 'carbook-core' ),
                'label_block' => true,
			]
		);


		$this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container"> 
                <div class="row mb-5"> 
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><a href="<?php echo home_url(); ?>" class="logo">Car<span>book</span></a></h2>
                            <p><?php echo esc_html($settings['logo_description']); ?></p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                <li class="ftco-animate"><a href="<?php echo esc_url($settings['twitter_link']['url']) ?>"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="<?php echo esc_url($settings['facebook_link']['url']) ?>"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="<?php echo esc_url($settings['instagram_link']['url']) ?>"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md"> 
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2"><?php echo esc_html($settings['section_1_title']); ?></h2>
                           <?php 
                        wp_nav_menu([
                            'theme_location'  => 'footer_info_nav',
                            'menu'            => '5',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'list-unstyled',
                            'menu_id'         => '',
                            'echo'            => true,
                            // 'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => '',
                            'add_a_class' => 'py-2 d-block',
                        ]);
                           ?>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php echo esc_html($settings['section_2_title']); ?></h2>
                            <?php 
                        wp_nav_menu([
                            'theme_location'  => 'footer_customer_support_nav',
                            'menu'            => '6',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'list-unstyled',
                            'menu_id'         => '',
                            'echo'            => true,
                            // 'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => '',
                            'add_a_class' => 'py-2 d-block',
                        ]);
                           ?>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2"><?php echo esc_html($settings['section_3_title']); ?></h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text"><?php echo esc_html($settings['address']); ?></span></li>
                                    <li><a href="tel:<?php echo esc_url($settings['phone_link']); ?>"><span class="icon icon-phone"></span><span class="text"><?php echo esc_html($settings['phone']); ?></span></a></li>
                                    <li><a href="mailto:<?php echo esc_url($settings['mail']); ?>&subject=вопрос"><span class="icon icon-envelope"></span><span class="text"><?php echo esc_html($settings['mail']); ?></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><!--Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
                            Copyright &copy; All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> 
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.--></p> 
                    </div>
                </div>
            </div>
        </footer> 
  

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



	<?php 
    }

}