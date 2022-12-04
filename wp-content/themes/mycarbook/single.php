<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MyCarbook
 */
if( is_singular( 'car' ) ){
	$params = ['car_single' => 'CAR DETAILS'];
}
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			if( is_singular( 'car' ) ){
				get_template_part('template-parts/carbook','cardetails-header', $params);
				get_template_part('template-parts/carbook','cardetails-maincontent', $params);
				
				get_template_part('template-parts/carbook','cardetails-footer');
				
			}

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mycarbook' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mycarbook' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php


// if( is_post_type_archive( 'car' ) ){
// 	echo "lalalalalalalalalalalalaaaaaaaaaaaaaaaaaaaaaa";
// }
// if( is_archive() ){
// 	echo "lalalalalalalalalalalalaaaaaaaaaaaaaaaaaaaaaa";
// }
get_sidebar();
get_footer();
