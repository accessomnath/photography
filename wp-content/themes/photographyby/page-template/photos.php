<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 04-Mar-17
 * Time: 5:22 PM
 * Template Name: Photos
 */

get_header();
$id = $_GET['term'];
$term = get_term_by('term', $_REQUEST['term'], 'categories');
?>

<section id="welcome-section-area">
    <div class="container">
        <div class="welcome-section-area-inner">
            <div class="welcome-section-area-inner-heading text-center">
                <h2><?php echo get_the_title();?></h2>
            </div>
            <div class="row">
                <div class="popup-gallery">
                    <?php
                    global $post;
                    $pages = array(
                        'post_type' => 'photo',
                        'categories' => $term->slug
                    );
                    $postslist = get_posts($pages);

                    foreach ($postslist as $page) {
                        $url = wp_get_attachment_url(get_post_thumbnail_id($page->ID));
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="hover-modal">

                                <?php
                                echo '<img src="'.$url.'" width="362" height="242" class="img-responsive"
                                 alt="img" style="height: 239px; />';
                                ?>

<!--                                <img src="--><?php //echo $url; ?><!--" class="img-responsive" style="min-height: 220px; width: 100%">-->
                                <div class="overlay">
                                    <h2><?php echo $page->post_title; ?></h2>
                                    <a href="<?php echo $url; ?>" rel="prettyPhoto[gallery1]"><i
                                            class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>


        </div>
    </div>

</section>
<?php get_footer(); ?>
