<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Pricelist_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'pricelist';
	}

	public function get_title() {
		return esc_html__( 'pricelist', 'carbook-core' );
	}

	public function get_icon() {
		return 'eicon-price-list';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'pricelist', 'carbook-core', 'parent' ];
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
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="car-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th class="bg-primary heading">Per Hour Rate</th>
						        <th class="bg-dark heading">Per Day Rate</th>
						        <th class="bg-black heading">Leasing</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php 
							$query = new WP_Query( 'post_type=car' );
							if( $query->have_posts() ){
								while( $query->have_posts() ){
									$query->the_post();
							?>
							<tr class="">
								<td class="car-image"><div class="img" style="background-image:url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>);"></div></td>
								<td class="product-name">
									<h3><?php echo esc_html(get_the_title()); ?></h3>
									<p class="mb-0 rated">
										<span>rated:</span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
									</p>
								</td>
						        <td class="price">
						        	<p class="btn-custom"><a href="<?php echo esc_url(get_permalink()); ?>">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> <?php echo esc_html(get_post_meta( get_the_ID(), 'per_hour_rate', true )); ?></span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$<?php echo esc_html(get_post_meta( get_the_ID(), 'fuel_surcharges', true )); ?>/hour fuel surcharges</span>
						        	</div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="<?php echo esc_url(get_permalink()); ?>">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> <?php echo esc_html(get_post_meta( get_the_ID(), 'per_day_rate', true )); ?></span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$<?php echo esc_html(get_post_meta( get_the_ID(), 'fuel_surcharges', true )); ?>/hour fuel surcharges</span>
						        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="<?php echo esc_url(get_permalink()); ?>">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> <?php echo esc_html(get_post_meta( get_the_ID(), 'per_month_rate', true )); ?></span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$<?php echo esc_html(get_post_meta( get_the_ID(), 'fuel_surcharges', true )); ?>/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->
							<?php 
								}
								wp_reset_postdata(); // сбрасываем переменную $post
							}
							
							?>
						    </tbody>
						  </table>
					  </div>
					</div>
				</div>
				</div>
			</section>
		<?php
	}

}