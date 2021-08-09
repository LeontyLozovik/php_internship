<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

    defined( 'ABSPATH' ) || exit;

    get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>


</header>


<div class="container_media indent indent_both_sides">
    <a href="#" class="img_social rpadding5">HOME</a>
    <p class="rpadding5">/</p>
    <a href="#" class="img_social rpadding5">SHOP</a>
    <p class="rpadding5">/</p>
    <p class="boldtext">FOR HIM</p>
</div>

<div class="indent">
    <h1 class="headers boldtext">MAN'S WATCHES</h1>
</div>

<div class="container_media">
    <div class="container_footer block_25">
        <div class="container_footer fontcolor catalog_block">
            <p class="boldtext fsize_up">BRENDS</p>
            <div class="container_footer">
                <label class="no_indent container_media">
                    <div class="chbspan "></div>
                    <div class="fsize_up">Cartier</div>
                </label>

                <label class="no_indent">
                    <input type="checkbox" name="Brends" class="check_box rmargin10">
                    <span class="check_box_style"></span>
                    <span class="fsize_up">Cartier</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Brends" class="rmargin10">
                    <span class="fsize_up">Casio</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Brends" class="rmargin10">
                    <span class="fsize_up">Gucci</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Brends" class="rmargin10">
                    <span class="fsize_up">Sonata</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Brends" class="rmargin10">
                    <span class="fsize_up">Tissot</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Brends" class="rmargin10">
                    <span class="fsize_up">Tom Ford</span>
                </label>
            </div>
        </div>
        <div class="container_footer fontcolor catalog_block">
            <p class="boldtext fsize_up">PRICE</p>
            <input type="range" max="454" min="75">
            <button class="filter_button btn btn-outline my-2 my-sm-10">Filter</button>
        </div>
        <div class="container_footer fontcolor catalog_block">
            <p class="boldtext fsize_up">COLOR</p>
            <div class="container_footer">
                <label class="no_indent">
                    <input type="checkbox" name="Color" class="rmargin10">
                    <span class="fsize_up">black</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Color" class="rmargin10">
                    <span class="fsize_up">blue</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Color" class="rmargin10">
                    <span class="fsize_up">brown</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Color" class="rmargin10">
                    <span class="fsize_up">gold</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Color" class="rmargin10">
                    <span class="fsize_up">silver</span>
                </label>
            </div>
        </div>
        <div class="container_footer fontcolor catalog_block">
            <div class="container_footer">
                <p class="boldtext fsize_up">STRAP</p>
                <label class="no_indent">
                    <input type="checkbox" name="Strap" class="rmargin10">
                    <span class="fsize_up">Aluminum</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Strap" class="rmargin10">
                    <span class="fsize_up">Black Crocodile</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Strap" class="rmargin10">
                    <span class="fsize_up">Brown Crocodile</span>
                </label>
                <label class="no_indent">
                    <input type="checkbox" name="Strap" class="rmargin10">
                    <span class="fsize_up">Calf Leather</span>
                </label>
            </div>
        </div>
    </div>

    <div class="block_75">
        <div class="container_catalog">
            <?php
            $params = array(
                'posts_per_page' => 9,
                'post_type' => 'product',
                'paged' => get_query_var('paged')
            );
            $wc_query = new WP_Query($params);

            if($wc_query->have_posts()){
                while ($wc_query->have_posts()){ ?>
                    <div class="block_30 allborders">
                        <?php $wc_query->the_post();?>

                        <a href="<?php the_permalink();?>" class="menu1 dark container_footer">
                            <?php
                            $size = array(280, 370);
                            the_post_thumbnail($size);

                            $product_id = get_the_ID();
                            $product = wc_get_product( $product_id );?>

                            <p class="center boldtext fsize_up"><?php the_title()?></p>
                            <p class="center boldtext fsize_up"><?=$product->get_price_html(); ?></p>
                        </a>
                    </div>

                <?php } ?>

                <div class="container_reverse indent">
                    <div class="container_for_her_and_him center block_75">
                        <?  ?>
                    </div>
                </div>

                <?php wp_reset_postdata();
            }
            else{
                _e('No Products');
            } ?>
        </div>
    </div>
</div>



    <?php get_footer(); ?>
