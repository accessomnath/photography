<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 27-Feb-17
 * Time: 11:01 AM
 * Template Name: Contact Us
 */

get_header();

?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="form-area">
                <br style="clear:both">
                <div class="col-md-12">
                    <div class="contact-us-text text-center">
                        <h3><?php echo get_the_title() ?></h3>
                    </div>
                </div>

                <?php echo do_shortcode('[contact-form-7 id="76" title="Contact"]');?>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section id="contact-text">
    <div class="container">
        <div class="row mt-20 mb-30">
            <div class="col-md-4 col-sm-6">
                <div class="contact-add-text">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <?php echo do_shortcode('[cms-block id="74" title="Contact_map"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
