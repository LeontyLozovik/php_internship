<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="main_page.css" , rel="stylesheet" , type="text/css">
</head>
<body>

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
                <div class="block_30 allborders">
                    <a href="#" class="menu1 dark container_footer">

                        <?php

                            $categories = get_the_category();

                            $rp_query = new WP_Query([
                                'posts_per_page' => 9,
                                'post__not_in' => [ $post->ID ],
                                'cat' => !empty($categories) ? $categories[0]->term_id : null
                            ]);


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







                        <img src="<?php bloginfo('template_directory') ?>/images/1.jpg" width="100%">
                        <h6 class="boldtext center indent_top">BOLD ROUND ANALOG GUNMETAL DIAL</h6>
                        <h6 class="boldtext center indent_bottom">500$</h6>
                    </a>
                </div>
                <div class="block_30 borders">
                    <a href="#" class="menu1 dark container_footer">
                        <img src="<?php bloginfo('template_directory') ?>/images/2.jpg" width="100%">
                        <h6 class="boldtext center indent_top">DAPPER ROUND ANALOG</h6>
                        <h6 class="boldtext center indent_bottom">87$</h6>
                    </a>
                </div>
                <div class="block_30 allborders">
                    <a href="#" class="menu1 dark container_footer">
                        <img src="<?php bloginfo('template_directory') ?>/images/3.jpg" width="100%">
                        <h6 class="boldtext center indent_top">ROUND ANALOG WHITE & BEE DIAL LADIES</h6>
                        <h6 class="boldtext center indent_bottom">75$</h6>
                    </a>
                </div>
                <div class="block_30 all_without_top">
                    <a href="#" class="menu1 dark container_footer">
                        <img src="<?php bloginfo('template_directory') ?>/images/4.jpg" width="100%">
                        <h6 class="boldtext center indent_top">ROUND ANALOG WHITE DIAL LADIES</h6>
                        <h6 class="boldtext center indent_bottom">80$</h6>
                    </a>
                </div>
                <div class="block_30 border_bottom">
                    <a href="#" class="menu1 dark container_footer">
                        <img src="<?php bloginfo('template_directory') ?>/images/5.jpg" width="100%">
                        <h6 class="boldtext center indent_top">TATUM ROUND ANALOG BLUE DIAL LADIES</h6>
                        <h6 class="boldtext center indent_bottom">87$</h6>
                    </a>
                </div>
                <div class="block_30 all_without_top">
                    <a href="#" class="menu1 dark container_footer">
                        <img src="<?php bloginfo('template_directory') ?>/images/6.jpg" width="100%">
                        <h6 class="boldtext center indent_top">THE BEDROCK CHRONO</h6>
                        <h6 class="boldtext center indent_bottom">122$</h6>
                    </a>
                </div>
                <div class="block_30 all_without_top">
                    <a href="#" class="menu1 dark container_footer">
                        <img src="<?php bloginfo('template_directory') ?>/images/7.jpg" width="100%">
                        <h6 class="boldtext center indent_top">THE CANFIELD SPORT</h6>
                        <h6 class="boldtext center indent_bottom">454$</h6>
                    </a>
                </div>
                <div class="block_30 border_bottom">
                    <a href="#" class="menu1 dark container_footer">
                        <img src="<?php bloginfo('template_directory') ?>/images/8.jpg" width="100%">
                        <h6 class="boldtext center indent_top">THE LAKE MICHIGAN MONSTER</h6>
                        <h6 class="boldtext center indent_bottom">188$</h6>
                    </a>
                </div>
                <div class="block_30 all_without_top">
                    <a href="#" class="menu1 dark container_footer">
                        <img src="<?php bloginfo('template_directory') ?>/images/9.jpg" width="100%">
                        <h6 class="boldtext center indent_top">THE LAKE MICHIGAN MONSTER</h6>
                        <h6 class="boldtext center indent_bottom">170$</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container_reverse indent">
        <div class="container_for_her_and_him center block_75">
            <?php
                next_post_link('Next');
                previous_post_link('Perv');
            ?>
            <button class="page_button_pasive btn btn-outline my-2 my-sm-10">Prev</button>
            <button class="page_button_active btn btn-outline my-2 my-sm-10">1</button>
            <button class="page_button_pasive btn btn-outline my-2 my-sm-10">2</button>
            <button class="page_button_pasive btn btn-outline my-2 my-sm-10">Next</button>
        </div>
    </div>
</body>
</html>
