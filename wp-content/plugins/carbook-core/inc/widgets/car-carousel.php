<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_Car_Carousel_Widget extends \Elementor\Widget_Base {
	private array $car_title_list = [];
	private array $car_brand_list = [];
	private array $car_per_day_rate_list = [];
	private array $car_permalink_list = [];
	private array $car_img_URL_list = [];

	private function carbook_get_post() {
		$this->car_title_list['none'] = 'Выберите автомобиль';
		$query = new WP_Query( 'post_type=car' );
		$title = '';
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) { 
				$query->the_post(); 
				
				$title = get_the_title();
				$this->car_title_list["$title"] = $title;
				
				$brand_terms = get_the_terms(get_the_ID(), 'brand');
				$brand = $brand_terms['0']->name;
				$this->car_brand_list["$title"] = $brand;

				$per_day_rate = get_post_meta(get_the_ID(), 'per_day_rate', true);
				$this->car_per_day_rate_list["$title"] = $per_day_rate;
				
				$link = get_the_permalink();
				$this->car_permalink_list["$title"] = $link;
				
				$img_URL = get_the_post_thumbnail_url(get_the_ID(), 'medium');
				$this->car_img_URL_list["$title"] = $img_URL;


			}
		} 
		wp_reset_postdata();
	}
	
	public function get_name() {
		return 'car-carousel';
	}

	
	public function get_title() {
		return esc_html__( 'Карусель авто', 'mycarbook' );
	}

	
	public function get_icon() {
		return 'eicon-posts-carousel';
	}
	
	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'car', 'carousel' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Заголовки', 'mycarbook' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title_1',
			[
				'label' => esc_html__( 'Заголовок 1', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'What we offer', 'mycarbook' ),
				'placeholder' => esc_html__( 'Введите заголовок', 'mycarbook' ),
			]
		);
		
        $this->add_control(
			'title_2',
			[
				'label' => esc_html__( 'Заголовок 2', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Feeatured Vehicles', 'mycarbook' ),
				'placeholder' => esc_html__( 'Введите заголовок', 'mycarbook' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'carousel_section',
			[
				'label' => esc_html__( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->carbook_get_post();
		
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'select',
			[
				'label' => esc_html__( 'Выбрать авто', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'none',
				'options' => $this->car_title_list,
			]
		);



		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Repeater List', 'mycarbook' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '',
			]
		);

		$this->end_controls_section();
	}


	protected function render() {
		$this->carbook_get_post();

		$settings = $this->get_settings_for_display();
		
	?>
     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading"><?php echo esc_html($settings['title_1']);?></span>
            <h2 class="mb-2"><?php echo esc_html($settings['title_2']);?></h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
				<?php
					if ( $settings['list'] ) {
						foreach (  $settings['list'] as $item ) {
							$item_key = $item['select'];
					?>
						<div class="item">
							<div class="car-wrap rounded ftco-animate">
								<div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo esc_url($this->car_img_URL_list[$item_key]) ?>);">
								</div>
								<div class="text">
									<h2 class="mb-0"><a href="<?php echo esc_attr($this->car_permalink_list[$item_key]); ?>"><?php echo esc_html($this->car_title_list[$item_key]); ?></a></h2>
									<div class="d-flex mb-3">
										<span class="cat"><?php echo esc_html($this->car_brand_list[$item_key]); ?></span>
										<p class="price ml-auto">$<?php echo esc_html($this->car_per_day_rate_list[$item_key]); ?><span>/day</span></p>
									</div>
									<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="<?php echo esc_attr($this->car_permalink_list[$item_key]); ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
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