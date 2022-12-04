<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Bloglist_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Bloglist';
	}

	public function get_title() {
		return esc_html__( 'Bloglist', 'carbook-core' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'bloglist', 'blog', 'list' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Bloglist', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->end_controls_section();

	}


	protected function render() {

		$settings = $this->get_settings_for_display();
    ?>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
        <?php 
        $query = new WP_Query('post_type=post');
        $i = 1;
        $max_post_in_page = 5;
        $pagination_page = 1;
        if($query->have_posts()){
            while($query->have_posts() && $i <= $max_post_in_page) {
                $i += 1;
                $query->the_post();
        ?>
                <div class="col-md-12 text-center d-flex ftco-animate">
                    <div class="blog-entry justify-content-end mb-md-5">
                        <a href="<?php esc_url(the_permalink()) ?>" class="block-20 img blog-list" style="background-image: url(<?php esc_url(the_post_thumbnail_url("large")); ?>);"></a>
                        <div class="text px-md-5 pt-4">
                            <div class="meta mb-3">
                                <div><a href="#"><?php esc_html(the_date('M. d, Y')) ?></a></div>
                                <div><a href="#"><?php esc_html(the_author()) ?></a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> <?php echo esc_html(get_comments_number())?></a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="<?php esc_url(the_permalink()) ?>"><?php esc_html(the_title())?></a></h3>
                            <p><?php esc_html(the_excerpt()) ?></p>
                            <p><a href="<?php esc_url(the_permalink()) ?>" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>      
        <?php
            }
            wp_reset_postdata();
        }
        ?>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
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