<?php
/*
 * Template Name: Catalog
 */

    get_header();

?>


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
                'posts_per_page' => 12,
                'post_type' => 'product'
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
</div>

<div class="container_reverse indent">
    <div class="container_for_her_and_him center block_75">
        <button class="page_button_pasive btn btn-outline my-2 my-sm-10"><?php previous_post_link('Perv'); ?></button>
        <button class="page_button_active btn btn-outline my-2 my-sm-10">1</button>
        <button class="page_button_pasive btn btn-outline my-2 my-sm-10">2</button>
        <button class="page_button_pasive btn btn-outline my-2 my-sm-10"><?php next_post_link('Next'); ?></button>
    </div>
</div>

<?php get_footer();?>