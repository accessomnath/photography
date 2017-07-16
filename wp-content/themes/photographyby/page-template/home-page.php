<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 23-Feb-17
 * Time: 2:56 PM
 * Template Name: Home
 */
get_header(); ?>
    <!-- Slider -->
    <div id="slider-area">
        <div class="slider-desktop-view-area">
            <div id="bannerscollection_zoominout_opportune">
                <div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="bannerscollection_zoominout_list">
                    <?php
                    /**
                     * Custom Slug Name slider
                     */
                    global $post;
                    $args = array(
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'slider',
                        'post_status' => 'publish'
                    );
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        ?>
                        <li data-initialZoom="0.77" data-finalZoom="1" data-horizontalPosition="center"
                            data-verticalPosition="center"
                            data-bottom-thumb="<?php echo get_field('slider', $post->ID) ?>"
                            data-text-id="#bannerscollection_zoominout_photoText1" data-autoPlay="10"><img
                                src="<?php echo $url; ?>" alt=""
                                width="2500"
                                height="1570"/></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <!-- Slider Form and Text -->


    </div>


    <!-- End Slider-->

    <!-----mobile-slider---->
    <div class="slider-mobile-view-area">
        <div id="bannerscollection_zoominout_opportune-mobile">
            <div class="myloader"></div>
            <!-- CONTENT -->
            <ul class="bannerscollection_zoominout_list">
                <?php
                /**
                 * Custom Slug Name slider
                 */
                global $post;
                $args = array(
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'slider',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?>
                    <li data-initialZoom="0.77" data-finalZoom="1" data-horizontalPosition="center"
                        data-verticalPosition="center"
                        data-bottom-thumb="<?php echo get_field('slider') ?>"
                        data-text-id="#bannerscollection_zoominout_photoText1" data-autoPlay="10"><img
                            src="<?php echo $url; ?>" alt="" width="2500"
                            height="1570"/></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <!-----mobile-slider----->
    <!--  welcome-section area starts  -->
<!--    <section id="welcome-section-area">-->
<!--        <div class="container">-->
<!--            <div class="welcome-section-area-inner">-->
<!--                <div class="welcome-section-area-inner-heading text-center">-->
<!--                    --><?php //$the_query = new WP_Query(array('pagename' => 'home')) ?>
<!--                    --><?php //while ($the_query->have_posts()) :
//                        $the_query->the_post(); ?>
<!--                        --><?php //the_content(); ?>
<!--                    --><?php //endwhile; ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!--  welcome-section area ends  -->
    <!--  introduction-section area starts  -->
    <section id="introduction-area">
        <div class="container">
            <div class="introduction-area-inner">
                <div class="introduction-area-inner-heading text-center">
                    <h2>introduction</h2>
                </div>
                <div class="introduction-area-inner-details">
                    <div class="col-sm-6">
                        <div class="introduction-area-inner-details-content-left">
                            <?php $the_query = new WP_Query(array('pagename' => 'about-us')) ?>
                            <?php while ($the_query->have_posts()) :
                            $the_query->the_post(); ?>
                            <?php the_content(); ?>
                            <a href="<?php echo site_url() ?>/about-us">Read more</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="introduction-area-inner-details-content-right">
                            <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  introduction-section area ends  -->
    <!--------video-area---->
    <section id="video-gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-gallery-area-heading text-center">
                        <h2>Video-Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="video-gallery-slider">
                        <?php
                        /**
                         * Custom Slug Name video
                         */
                        global $post;
                        $args = array(
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_type' => 'video',
                            'post_status' => 'publish'
                        );
                        $the_query = new WP_Query($args);
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            ?>
                            <div class="item">
                                <a href="#">
                                    <?php
                                    $video = get_post_meta($post->ID, 'youtube', true);
                                    echo $embed_code = wp_oembed_get($video, array('width' => 208, 'height' => 138)); ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------video-area------------->
    <!---our-team----->
    <section id="photo-gallery">
        <div class="container">
            <div class="col-md-12">
                <div class="photo-area-heading text-center">
                    <h2>photo gallery</h2>
                </div>
            </div>
            <div class="row">
                <div class="filters">
                    <div class="ui-group">
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'categories',
                            'hide_empty' => false,
                        ));
                        //from the above code you will get the term id;
                        $args = array(
                            'post_type' => 'photo',
                            'post_status' => 'publish',
                            'posts_per_page' => 16,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categories',
                                    'field' => 'id',
                                    'terms' => '22'
                                )
                            )
                        );
                        ?>
                        <div class="button-group js-radio-button-group" data-filter-group="size">
                            <button class="button is-checked" data-filter="">All</button>
                            <?php foreach ($terms as $term) { ?>
                                <button class="button"
                                        data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <?php
                    /**
                     * Custom Slug Name photo
                     */
                    global $post;
                    $args = array(
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'photo',
                        'post_status' => 'publish'
                    );
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        $term_list = wp_get_post_terms($post->ID, 'categories');
                        ?>
                        <div class="col-md-3 color-shape <?php echo $term_list[0]->slug;; ?>">

                            <?php
                            echo '<img src="'.$url.'" width="362" height="242" class="img-responsive"
                                 alt="img" style="height: 239px; />';
                            ?>

<!--                            <img src="--><?php //echo $url; ?><!--" class="img-responsive" alt="">-->
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial  area starts -->
    <section id="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-area-heading text-center">
                        <h2>testimonial area</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-slider">
                        <?php
                        /**
                         * Custom Slug Name testimonial
                         */
                        global $post;
                        $args = array(
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_type' => 'testimonial',
                            'post_status' => 'publish'
                        );
                        $the_query = new WP_Query($args);
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            ?>
                            <div class="item">

                                <blockquote><q><?php the_content(); ?></q></blockquote>
                                <div class="testimonial-writer">
                                    <div class="testimonial-writer-img"><img
                                            src="<?php echo $url; ?>"
                                            class="img-responsive img-circle"
                                            alt="image-description"></div>
                                    <div class="writer-description">
                                        <p><?php the_title(); ?></p>
                                        <p><?php echo get_post_meta($post->ID, 'designation', true); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- testimonial area ends -->
<?php get_footer(); ?>