<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


class Elementor_Index_Main_Banner_Widget extends \Elementor\Widget_Base
{

	// public function get_script_depends() {
	// 	if(\Elementor\Plugin::$instance->preview->is_preview_mode()){
	// 	   wp_register_script('cb-index-main-banner', plugins_url('/js/elem-main.js', __FILE__), ['elementor-frontend'], '1.0', true);
	// 	   return ['cb-index-main-banner'];
	// 	}
	// 	return [];		
	// }

	public function get_name()
	{
		return 'index-main-banner';
	}

	public function get_title()
	{
		return esc_html__('Index Main Banner', 'mycarbook');
	}

	
	public function get_icon()
	{
		return ' eicon-form-horizontal';
	}


	public function get_categories()
	{
		return ['general'];
	}

	
	public function get_keywords()
	{
		return ['main', 'banner', 'index'];
	}

	
	protected function register_controls()
	{

		$this->start_controls_section(
			'content_text_section',
			[
				'label' => esc_html__('Секция текстовых полей', 'mycarbook'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		/* Start repeater */

		$this->add_control(
			'main_title',
			[
				'label' => esc_html__('Заголовок 1', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Fast &amp; Easy Way To Rent A Car', 'mycarbook'),
				'placeholder' => esc_html__('Введите заголовок', 'mycarbook'),
			]
		);

		$this->add_control(
			'description',
			[
				'label' => esc_html__('Текст', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__('A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts', 'mycarbook'),
				'placeholder' => esc_html__('Введите текст', 'mycarbook'),
			]
		);

		$this->add_control(
			'button_title',
			[
				'label' => esc_html__('Текст кнопки', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Easy steps for renting a car', 'mycarbook'),
				'placeholder' => esc_html__('Введите текст кнопки', 'mycarbook'),
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'media_section',
			[
				'label' => esc_html__('Секция фото и фидео', 'mycarbook'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'background',
			[
				'label' => esc_html__('Выберите изображение фона', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'video_link',
			[
				'label' => esc_html__('Link', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__('Пример: https://your-link.com', 'mycarbook'),
				'options' => ['url', 'is_external', 'nofollow'],
				'default' => [
					'url' => 'https://vimeo.com/45830194',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
			]
		);
		$this->end_controls_section();
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
?>
	<div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php echo esc_url($settings['background']['url']) ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4"><?php echo esc_html($settings['main_title']); ?></h1>
	            <p style="font-size: 18px;"><?php echo esc_html__($settings['description']); ?></p>
	            <a href="<?php echo esc_url($settings['video_link']['url']); ?>" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span><?php echo esc_html($settings['button_title']); ?></span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
	}
}
