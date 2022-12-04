<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_Recent_Blog_Widget extends \Elementor\Widget_Base {
    private array $post_title_list = [];
    private array $post_author_list = [];
    private array $post_date_list = [];
    private array $post_date_url_list = [];
    private array $post_comments_count_list = [];
    private array $post_thumbnail_URL_list = [];
    private array $post_url_list = [];
    private array $author_url_list = [];

	
    private function get_carbook_post_data() {
        $query = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'DESC', 
        ));
        $title = '';
        if( $query->have_posts() ){
            while( $query->have_posts() ){
                $query->the_post();
                $title = get_the_title();
                $this->post_title_list["$title"] = $title;
                
                $author_id = $query->post->post_author;
                $author_nic_name = get_the_author_meta( 'nickname', $author_id );
                $this->post_author_list["$title"] = $author_nic_name;
                
                $author_url = get_author_posts_url($author_id);
                $this->author_url_list["$title"] = $author_url;
                
                $post_date = get_the_date('M. j, Y');
                $this->post_date_list["$title"] = $post_date;
                
                $post_date_url = get_the_date('/Y/m/d');
                $this->post_date_url_list["$title"] = $post_date_url;
               
                $comments_count = get_comments_number(get_the_ID());
                $this->post_comments_count_list["$title"] = $comments_count;

                $image_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                $this->post_thumbnail_URL_list["$title"] = $image_url;
                
                $post_url = get_post_permalink();
                $this->post_url_list["$title"] = $post_url;


	        }
	    wp_reset_postdata(); // сбрасываем переменную $post
        }

    }

	public function get_name() {
		return 'recent-blog';
	}

	
	public function get_title() {
		return esc_html__( 'Recent Blog', 'carbook-core' );
	}

	
	public function get_icon() {
		return 'eicon-post-content';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	
	public function get_keywords() {
		return [ 'Recent', 'Blog', 'parent' ];
	}

	
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'No Content', 'carbook-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->end_controls_section();

	}

	
	protected function render() {
        $this->get_carbook_post_data();
		?>
            <section class="ftco-section">
                <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="subheading">Blog</span>
                        <h2>Recent Blog</h2>
                    </div>
                </div>
                <div class="row d-flex">
        <?php foreach (  $this->post_title_list as $item ) { ?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="<?php echo esc_url($this->post_url_list[$item]) ?>" class="block-20" style="background-image: url(<?php echo esc_url($this->post_thumbnail_URL_list[$item]) ?>);">
                            </a>
                            <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="<?php echo esc_url($this->post_date_url_list["$item"]) ?>"><?php echo esc_html($this->post_date_list[$item]) ?></a></div>
                                <div><a href="<?php echo esc_url($this->author_url_list[$item]) ?>"><?php echo esc_html($this->post_author_list[$item]) ?></a></div>
                                <div><a href="<?php echo esc_url($this->post_url_list[$item]) ?>" class="meta-chat"><span class="icon-chat"></span> <?php echo esc_html($this->post_comments_count_list[$item]) ?></a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="<?php echo esc_url($this->post_url_list[$item]) ?>"><?php echo esc_html($this->post_title_list[$item]) ?></a></h3>
                            <p><a href="<?php echo esc_url($this->post_url_list[$item]) ?>" class="btn btn-primary">Read more</a></p>
                            </div>
                        </div>
                    </div>
         <?php  } ?>
                </div>
                </div>
            </section>	

        <?php
	}

}