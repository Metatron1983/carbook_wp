<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Carlist_Widget extends \Elementor\Widget_Base {


	public function get_name() {
		return 'carlist';
	}

	public function get_title() {
		return esc_html__( 'Carlist', 'carbook-core' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'carlist', 'parent', 'carbook-core' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		?>
		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
			<?php
				// указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
			$query = new WP_Query( 'post_type=car' );
			if( $query->have_posts() ){
				$i = 1;

				$max_posts_in_page = 12;
				while( $query->have_posts() && $i <= $max_posts_in_page){
					$i += 1;
					$query->the_post();
					$brand_terms = get_the_terms(get_the_ID(), 'brand');
					$brand = $brand_terms['0']->name;
					?>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(<?php esc_url(the_post_thumbnail_url( 'medium' )) ?>);">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="<?php echo esc_url(get_the_permalink()) ?>"><?php esc_html(the_title()) ?></a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat"><?php echo esc_html($brand);?></span>
	    						<p class="price ml-auto"><?php echo esc_html(get_post_meta( get_the_ID(), 'per_day_rate', true )); ?> <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="<?php echo esc_url(get_the_permalink()) ?>" class="btn btn-primary py-2 mr-1">Book now</a> <a href="<?php echo esc_url(get_the_permalink()) ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
			<?php
				}
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			?>
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
				  <li><a href="#">&lt;</a></li>
				  <li class="active"><span>1</span></li>
				<?php 
				function count_pagination_btn() {
					$count_posts = wp_count_posts('car');
					$published_posts = $count_posts->publish;
					$pagination_num = (float) $published_posts / 12;
					$pagination_num_int = (int)$pagination_num;
					if ($pagination_num > $pagination_num_int) {
						$pagination_num = (int)$pagination_num + 1;
					}
					return $pagination_num;
				}
				$pagination_num = count_pagination_btn();
				$max_pugination_btn = 3;
				$pagination_num_is_more_then_five = $pagination_num > $max_pugination_btn;
				if ($pagination_num_is_more_then_five) {
					$pagination_num = $max_pugination_btn;
				}
				for($i = 1; $i < $pagination_num; $i++) {
					$value = $i + 1;
				?>
                <li><a href="#"><?php echo esc_html($value); ?></a></li>            
				<?php 
				if($value == $max_pugination_btn && $pagination_num_is_more_then_five) {
					?>
				<li><a href="#">...</a></li>
					<?php
				};
				}	
				?>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
		<?php
	}

}