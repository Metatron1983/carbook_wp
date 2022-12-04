<?php

class Elementor_Make_Your_Trip_Widget extends \Elementor\Widget_Base
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
		return 'make-your-trip-section';
	}

	public function get_title()
	{
		return esc_html__('Make Your Trip Section', 'mycarbook');
	}

	public function get_icon()
	{
		return 'eicon-google-maps';
	}

	public function get_categories()
	{
		return ['general'];
	}

	public function get_keywords()
	{
		return ['Make', 'Your', 'Trip', 'Section'];
	}

	protected function register_controls()
	{

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Секция детали заказа', 'mycarbook'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'order_section_title',
			[
				'label' => esc_html__('Заголовок', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Make your trip', 'mycarbook'),
				'placeholder' => esc_html__('Введите заголовок', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_1_label',
			[
				'label' => esc_html__('Заголовок поля 1', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Pick-up location', 'mycarbook'),
				'placeholder' => esc_html__('Введите заголовок', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_1_placeholder',
			[
				'label' => esc_html__('Заполнитель поля 1', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('City, Airport, Station, etc', 'mycarbook'),
				'placeholder' => esc_html__('Введите текст-заполнитель', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_2_label',
			[
				'label' => esc_html__('Заголовок поля 2', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Drop-off location', 'mycarbook'),
				'placeholder' => esc_html__('Введите заголовок', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_2_placeholder',
			[
				'label' => esc_html__('Заполнитель поля 2', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('City, Airport, Station, etc', 'mycarbook'),
				'placeholder' => esc_html__('Введите текст-заполнитель', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_3_label',
			[
				'label' => esc_html__('Заголовок поля 3', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Pick-up date', 'mycarbook'),
				'placeholder' => esc_html__('Введите заголовок', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_3_placeholder',
			[
				'label' => esc_html__('Заполнитель поля 3', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Date', 'mycarbook'),
				'placeholder' => esc_html__('Введите текст-заполнитель', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_4_label',
			[
				'label' => esc_html__('Заголовок поля 4', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Drop-off date', 'mycarbook'),
				'placeholder' => esc_html__('Введите заголовок', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_4_placeholder',
			[
				'label' => esc_html__('Заполнитель поля 4', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Date', 'mycarbook'),
				'placeholder' => esc_html__('Введите текст-заполнитель', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_5_label',
			[
				'label' => esc_html__('Заголовок поля 5', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Pick-up time', 'mycarbook'),
				'placeholder' => esc_html__('Введите заголовок', 'mycarbook'),
			]
		);

		$this->add_control(
			'text_field_5_placeholder',
			[
				'label' => esc_html__('Заполнитель поля 5', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Time', 'mycarbook'),
				'placeholder' => esc_html__('Введите текст-заполнитель', 'mycarbook'),
			]
		);

		$this->add_control(
			'btn_1_value',
			[
				'label' => esc_html__('Текст кнопки 1', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Rent A Car Now', 'mycarbook'),
				'placeholder' => esc_html__('Введите текст кнопки', 'mycarbook'),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'plan_section',
			[
				'label' => esc_html__('Секция порядок заказа', 'mycarbook'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'plan_section_title',
			[
				'label' => esc_html__('Заголовок', 'mycarbook'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Better Way to Rent Your Perfect Cars', 'mycarbook'),
				'placeholder' => esc_html__('Введите заголовок', 'mycarbook'),
			]
		);

		$this->add_control(
			'step_1',
			[
				'label' => esc_html__( 'Шаг 1', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Choose Your Pickup Location', 'mycarbook' ),
				'placeholder' => esc_html__( 'Введите текст', 'mycarbook' ),
			]
		);

		$this->add_control(
			'step_2',
			[
				'label' => esc_html__( 'Шаг 2', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Select the Best Deal', 'mycarbook' ),
				'placeholder' => esc_html__( 'Введите текст', 'mycarbook' ),
			]
		);

		$this->add_control(
			'step_3',
			[
				'label' => esc_html__( 'Шаг 3', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Reserve Your Rental Car', 'mycarbook' ),
				'placeholder' => esc_html__( 'Введите текст', 'mycarbook' ),
			]
		);

		$this->add_control(
			'btn_2_value',
			[
				'label' => esc_html__( 'Текст кнопки', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Reserve Your Perfect Car', 'mycarbook' ),
				'placeholder' => esc_html__( 'Введите текст кнопки', 'mycarbook' ),
			]
		);


		$this->end_controls_section();
	}

	protected function render()
	{

		$settings = $this->get_settings_for_display();
?>
		<section class="ftco-section ftco-no-pt bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-12	featured-top">
						<div class="row no-gutters">
							<div class="col-md-4 d-flex align-items-center">
								<form action="" class="request-form bg-primary ftco-animate">
									<h2><?php echo esc_html($settings['order_section_title']); ?></h2>
									<div class="form-group">
										<label for="" class="label"><?php echo esc_html($settings['text_field_1_label']); ?></label>
										<input type="text" class="form-control" placeholder="<?php echo esc_attr($settings['text_field_1_placeholder']); ?>">
									</div>
									<div class="form-group">
										<label for="" class="label"><?php echo esc_html($settings['text_field_2_label']); ?></label>
										<input type="text" class="form-control" placeholder="<?php echo esc_attr($settings['text_field_2_placeholder']); ?>">
									</div>
									<div class="d-flex">
										<div class="form-group mr-2">
											<label for="" class="label"><?php echo esc_html($settings['text_field_3_label']); ?></label>
											<input type="text" class="form-control" id="book_pick_date" placeholder="<?php echo esc_attr($settings['text_field_3_placeholder']); ?>">
										</div>
										<div class="form-group ml-2">
											<label for="" class="label"><?php echo esc_html($settings['text_field_4_label']); ?></label>
											<input type="text" class="form-control" id="book_off_date" placeholder="<?php echo esc_attr($settings['text_field_4_placeholder']); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="label"><?php echo esc_html($settings['text_field_5_label']); ?></label>
										<input type="text" class="form-control" id="time_pick" placeholder="<?php echo esc_attr($settings['text_field_5_placeholder']); ?>">
									</div>
									<div class="form-group">
										<input type="submit" value="<?php echo esc_attr($settings['btn_1_value']); ?>" class="btn btn-secondary py-3 px-4">
									</div>
								</form>
							</div>
							<div class="col-md-8 d-flex align-items-center">
								<div class="services-wrap rounded-right w-100">
									<h3 class="heading-section mb-4"><?php echo esc_html($settings['plan_section_title']); ?></h3>
									<div class="row d-flex mb-4">
										<div class="col-md-4 d-flex align-self-stretch ftco-animate">
											<div class="services w-100 text-center">
												<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
												<div class="text w-100">
													<h3 class="heading mb-2"><?php echo esc_html($settings['step_1']); ?></h3>
												</div>
											</div>
										</div>
										<div class="col-md-4 d-flex align-self-stretch ftco-animate">
											<div class="services w-100 text-center">
												<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
												<div class="text w-100">
													<h3 class="heading mb-2"><?php echo esc_html($settings['step_2']); ?></h3>
												</div>
											</div>
										</div>
										<div class="col-md-4 d-flex align-self-stretch ftco-animate">
											<div class="services w-100 text-center">
												<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
												<div class="text w-100">
													<h3 class="heading mb-2"><?php echo esc_html($settings['step_3']); ?></h3>
												</div>
											</div>
										</div>
									</div>
									<p><a href="#" class="btn btn-primary py-3 px-4"><?php echo esc_html($settings['btn_2_value']); ?></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>

<?php }
}
