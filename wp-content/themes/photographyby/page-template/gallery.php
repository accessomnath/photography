<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 27-Feb-17
 * Time: 10:57 AM
 * Template Name: Gallery
 */

get_header();
?>

<section id="welcome-section-area">
    <div class="container">
        <div class="welcome-section-area-inner">
            <div class="welcome-section-area-inner-heading text-center">
                <h2><?php echo get_the_title(); ?></h2>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="row">
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'categories',
                    'hide_empty' => false,
                ));
                //from the above code you will get the term id;
                $args = array(
                    'post_type' => 'photo',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categories',
                            'field' => 'id',
                            'terms' => '22'
                        )
                    )
                );
                ?>
                <?php foreach ($terms as $term) {
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <figure class="snip-sec">
                            <?php
                            echo '<img src="'.get_field('catgory_image', $term, $term->term_id).'" width="362" height="242" class="img-responsive"
                                 alt="img" style="height: 239px; />';
                            ?>
<!--                            <img src="--><?php //echo get_field('catgory_image', $term, $term->term_id), "width=362 height=242"; ?><!--"-->
<!--                                 class="img-responsive"-->
<!--                                 alt="img">-->
                            <figcaption>
                                <h3><?php echo $term->name; ?></h3>
                                <blockquote>
                                    <?php
                                    echo wp_trim_words(get_the_content(), 15, '...');
                                    ?>
                                </blockquote>
                            </figcaption>
                        </figure>
                        <a href="<?php echo site_url(); ?>/photos/?term=<?php echo $term->term_id; ?>" class="snip-btn">view
                            more</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</section>
<?php get_footer(); ?>
