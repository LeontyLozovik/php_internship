<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php get_template('content-product_list'); ?>

            <?php

            $categories = get_the_category();

            $rp_query = new WP_Query([
                'posts_per_page' => 9,
                'post__not_in' => [ $post->ID ],
                'cat' => !empty($categories) ? $categories[0]->term_id : null
            ]);

            ?>

            <h1>sbrbbeberberb</h1>

            <?php var_dump($rp_query);
                    die();?>

            <?php

            if($rp_query->have_posts()){
                while ($rp_query->have_posts()){
                    $rp_query->the_post();

                    if(has_post_thumbnail()){
                        the_post_thumbnail('thumbnail');


                        ?>

                        <img src="<?php bloginfo('template_directory') ?>/images/1.jpg" width="100%">
                        <h6 class="boldtext center indent_top">BOLD ROUND ANALOG GUNMETAL DIAL</h6>
                        <h6 class="boldtext center indent_bottom">500$</h6>

                        <?php
                    }
                }
            }

            ?>

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
