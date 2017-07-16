<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 06-Mar-17
 * Time: 5:22 PM
 * Template name: videos
 */
get_header(); ?>
<section id="welcome-section-area">
    <div class="container">
        <div class="welcome-section-area-inner">
            <div class="welcome-section-area-inner-heading text-center">
                <h2><?php echo get_the_title(); ?></h2>
            </div>
            <div class="row">
                <div class="vid-popup-gallery">
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
                        <div class="col-md-4 col-sm-6">
                            <div class="hover-modal">
                                <?php
                                echo '<img src="' . $url . '" class="img-responsive"
                                 alt="img"/>';
                                ?>
                                <div class="overlay">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <?php
                                $video = get_post_meta($post->ID, 'youtube', true);
                                echo '<a href="' . $video . '" rel="prettyPhoto" title=""><i class="fa fa-play"></i></a>';
                                ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
