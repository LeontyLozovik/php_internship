<?php
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- Stylesheets
      ============================================= -->
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
      ============================================= -->
    <title>Index Template</title>

</head>

<body class="stretched no-transition">

    <?php get_header(); ?>

    <div class="fontcolor container_media">
        <div class="mainpart">
            <h5 class="maincolor boldtext">CONSECTETUER ADIPISCING ELIT</h5>
            <h1 class="text_in_cards boldtext">GREAT WATCH </h1>
            <h1 class="text_in_cards boldtext">FROM THE WATRIX</h1>
            <h5 class="gray indent">Highlight your status and style</h5>
            <button class="form_shop_button btn btn-outline my-2 my-sm-10">Shop now!</button>
        </div>
        <div class="indent">
            <img src="<?php bloginfo('template_directory') ?>/images/clock1.jpg" width="100%">
        </div>

    </div>

    <div>
        <img src="<?php bloginfo('template_directory') ?>/images/label.jpg" width="100%">
    </div>

    <div class="indent">
        <h1 class="headers boldtext">TREND WATCHES</h1>
    </div>

    <div class="container_media borders">
        <?php
            $params = array(
                'posts_per_page' => 4,
                'post_type' => 'product'
            );
            $wc_query = new WP_Query($params);

            if($wc_query->have_posts()){
                while ($wc_query->have_posts()){?>
                    <div class="block_25 rborder container_center">
                        <?php $wc_query->the_post();?>

                        <a href="<?php the_permalink();?>" class="menu1 dark container_footer">
                            <?php
                            $size = array(300, 400);
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

    <div class="fontcolor container_for_body center borders">
        <div class="mainpart">
            <h5 class="maincolor">Special offer</h5>
            <h1 class="text_in_cards boldtext">WATCHES</h1>
            <div class="container_media">
                <h1 class="text_in_cards boldtext indent_side">WITH </h1>
                <h1 class="text_in_cards boldtext maincolor"> 12% OFF</h1>
            </div>
            <h6 class="gray indent">Find your perfectiy suited watch and get it with a discount</h6>
            <a class="dark link" href="#">GET A DISCONT -></a>
        </div>
        <div class="block_50">
            <img src="<?php bloginfo('template_directory') ?>/images/men_with_clock.jpg" height="100%" width="100%">
        </div>
    </div>

    <div class="indent">
        <h1 class="headers boldtext">CHOOSE YOUR WATCH</h1>
    </div>

    <div class="fontcolor container_media borders">
        <div class="rborder block_50 container_for_body">
            <div class="block_80">
                <img src="<?php bloginfo('template_directory') ?>/images/for_her.jpg" height="100%" width="100%">
            </div>
            <div class="container_footer for_them_align her block_20">

                <div class="container_media">
                    <h2 class="for">for</h2>
                    <h1 class="boldtext">HER</h1>
                </div>

                <a class="dark link2" href="#"><- Shop now</a>
            </div>
        </div>
        <div class="block_50 container_for_body">
            <div class="container_footer him block_20">
                <div class="container_media">
                    <h2 class="for">for</h2>
                    <h1 class="boldtext">HIM</h1>
                </div>

                <a class="dark link2 him_shop" href="#">Shop now -></a>
            </div>

            <div class="block_80">
                <img src="<?php bloginfo('template_directory') ?>/images/for_him.jpg" width="100%">
            </div>
        </div>
    </div>

    <div class="container_for_body dark_fontcolor border_bottom">
        <div class="rborder block_25 container_for_her_and_him">
            <div class="edd_info">
                <p class="marone boldtext no_indent">FREE SHIPPING</p>
                <p class="white no_indent">Don't pay for delivery</p>
            </div>
        </div>
        <div class="rborder block_25 container_for_her_and_him">
            <div class="edd_info">
                <p class="marone boldtext no_indent">MONEY GUARANTEE</p>
                <p class="white no_indent">Money back option</p>
            </div>
        </div>
        <div class="rborder block_25 container_for_her_and_him">
            <div class="edd_info">
                <p class="marone boldtext no_indent">SAFE SHOPPING</p>
                <p class="white no_indent">Privacy policy quarantee</p>
            </div>
        </div>
        <div class="rborder block_25 container_for_her_and_him">
            <div class="edd_info">
                <p class="marone boldtext no_indent">ONLINE SUPPORT</p>
                <p class="white no_indent">Consult with our supporters</p>
            </div>
        </div>
    </div>

    <div class="indent">
        <h1 class="headers boldtext">POPULAR WATCHES</h1>
    </div>

    <div class="container_media borders">
        <?php

        if($wc_query->have_posts()){
            while ($wc_query->have_posts()){?>
                <div class="block_25 rborder container_center">
                    <?php $wc_query->the_post();?>

                    <a href="<?php the_permalink();?>" class="menu1 dark container_footer">
                        <?php
                        $size = array(300, 400);
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

    <?php get_footer(); ?>

    <!-- Go To Top
============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->

</body>

</html>