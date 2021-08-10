<?php

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
                    <label class="no_indent">
                        <input type="checkbox" name="Brends" class="rmargin10">
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
                <button class="btn btn-outline my-2 my-sm-10 filter_button">Filter</button>
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

        <?php
        if ( woocommerce_product_loop() ) {

            /**
             * Hook: woocommerce_before_shop_loop.
             *
             * @hooked woocommerce_output_all_notices - 10
             * @hooked woocommerce_result_count - 20 - ПОКАЗЫВАЕТ ОБЩЕЕ КОЛ-ВО ТОВАРОВ
             * @hooked woocommerce_catalog_ordering - 30 - ПЛАШКА СОРТИРОВКИ
             */
            do_action( 'woocommerce_before_shop_loop' );?>

            <div class="block_75">
                <div class="container_catalog">
                    <?php

                    $paged = absint( max(1, get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )));

                    $params = array(
                        'posts_per_page' => 9,
                        'post_type' => 'product',
                        'paged' => $paged
                    );
                    $wc_query = new WP_Query($params);

                    if($wc_query->have_posts()){
                        while ($wc_query->have_posts()){?>
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

                        <?php }
                        wp_reset_postdata();
                    }
                    else{
                        _e('No Products');
                    }
                    ?>
                </div>
            </div>

            <?php
            /**
             * Hook: woocommerce_after_shop_loop.
             *
             * @hooked woocommerce_pagination - 10
             */
            do_action( 'woocommerce_after_shop_loop' );
        } else {
            /**
             * Hook: woocommerce_no_products_found.
             *
             * @hooked wc_no_products_found - 10
             */
            do_action( 'woocommerce_no_products_found' );
        }?>
    </div>
    <div class="container_reverse indent">
        <div class="container_for_her_and_him center block_75">
            <button class="page_button_pasive btn btn-outline my-2 my-sm-10">
                <?php  echo paginate_links(
                    [
                        'total'   => $wc_query->max_num_pages,
                        'format'  => '?page=%#%',
                        'current' => $paged,
                        'prev_text' => 'Prev',
                        'next_text' => 'Next',
                    ]
                );

                ?>
            </button>
        </div>
    </div>

<?php get_footer();

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

