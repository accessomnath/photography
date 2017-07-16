<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 27-Feb-17
 * Time: 1:07 PM
 */
get_header(); ?>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-us-text text-center">
                        <h3><?php get_the_title(); ?></h3>
                    </div>
                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-md-8 col-sm-6">
                        <div class="about-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div
                            class="contact-image"><?php the_post_thumbnail('', array('class' => 'img-responsive')); ?></div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>