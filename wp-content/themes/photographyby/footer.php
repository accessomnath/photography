<!--  Footer area starts  -->
<section id="footer-area">
    <footer class="footerWrapper">
        <section id="mainFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div
                            class="footer-logo-area"><?php echo do_shortcode('[cms-block id="7" title="footercontent"]'); ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footerWidget">
                            <h3>Contact Detail</h3>
                            <address>
                                <?php echo do_shortcode('[cms-block id="6" title="email"]'); ?>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footerWidget">
                            <h3>social Link</h3>
                            <ul class="social-network">
                                <li><a href="<?php echo do_shortcode('[cms-block id="8" title="facebook"]') ?>"
                                       data-toggle="tooltip" data-placement="bottom" title=""
                                       data-original-title="Facebook"><i class="fa fa-facebook rounded-icon"></i></a>
                                </li>
                                <li><a href="<?php echo do_shortcode('[cms-block id="9" title="twitter"]'); ?>"
                                       data-toggle="tooltip" data-placement="bottom" title=""
                                       data-original-title="Twitter"><i class="fa fa-twitter rounded-icon"></i></a></li>
                                <li><a href="<?php echo do_shortcode('[cms-block id="10" title="google"]') ?>"
                                       data-toggle="tooltip" data-placement="bottom" title=""
                                       data-original-title="Google+"><i class="fa fa-google-plus rounded-icon"></i></a>
                                </li>
                                <li><a href="<?php echo do_shortcode('[cms-block id="11" title="linkedin"]') ?>"
                                       data-toggle="tooltip" data-placement="bottom" title=""
                                       data-original-title="Linkedin"><i class="fa fa-linkedin rounded-icon"></i></a>
                                </li>
                                <li><a href="<?php echo do_shortcode('[cms-block id="12" title="dribble"]') ?>"
                                       data-toggle="tooltip" data-placement="bottom" title=""
                                       data-original-title="Dribble"><i class="fa fa-dribbble rounded-icon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright © 2017 <a href="http://gowebbi.com" target="blank">gowebbi.com</a> / All rights
                            reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</section>


<!--  Footer area ends  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootsnav.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/parallax-scrolling.js"></script>
<script src="<?php bloginfo('template_url'); ?>/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/isotope.pkgd.min.js"></script>
<script>
    $(".testimonial-slider").owlCarousel({
        navigation: false,
        slideSpeed: 100,
        paginationSpeed: 800,
        singleItem: true,
        autoPlay: true

    });
</script>
<script>
    $(".video-gallery-slider").owlCarousel({
        autoPlay: true,
        items: 5,
        touchDrag: true,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        paginationSpeed: 1000,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });
</script>
<script>
    // external js: isotope.pkgd.js

    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.color-shape'
    });

    // store filter for each group
    var filters = {};

    $('.filters').on('click', '.button', function () {
        var $this = $(this);
        // get group key
        var $buttonGroup = $this.parents('.button-group');
        var filterGroup = $buttonGroup.attr('data-filter-group');
        // set filter for group
        filters[filterGroup] = $this.attr('data-filter');
        // combine filters
        var filterValue = concatValues(filters);
        // set filter for Isotope
        $grid.isotope({filter: filterValue});
    });

    // change is-checked class on buttons
    $('.button-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function () {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });

    // flatten object by concatting values
    function concatValues(obj) {
        var value = '';
        for (var prop in obj) {
            value += obj[prop];
        }
        return value;
    }
</script>
<!--Slider-->
<script src="<?php bloginfo('template_url'); ?>/slider/js/jquery-ui.min.js"></script>
<script type="text/javascript"
        src="<?php bloginfo('template_url'); ?>/slider/js/jquery.themepunch.tools.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slider/js/plugins.js"></script>
<!--Slider-->
<link href="<?php bloginfo('template_url'); ?>/slider/css/bannerscollection_zoominout.css" rel="stylesheet"
      type="text/css">
<!--<script src="slider/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>-->
<script src="<?php bloginfo('template_url'); ?>/slider/js/bannerscollection_zoominout.js"
        type="text/javascript"></script>
<script>
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("msie") != -1 || ua.indexOf("opera") != -1) {
        jQuery('body').css('overflow', 'hidden');
        jQuery('html').css('overflow', 'hidden');
    }

    jQuery(function () {
        jQuery('#bannerscollection_zoominout_opportune').bannerscollection_zoominout({
            skin: 'opportune',
            responsive: true,
            width: 1920,
            height: 500,
            width100Proc: true,
            height100Proc: true,
            fadeSlides: 1,
            showNavArrows: true,
            showBottomNav: true,
            autoHideBottomNav: true,
            thumbsWrapperMarginTop: -55,
            pauseOnMouseOver: false
        });

    });


</script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto();

    });
</script>

<!--<script>-->
<!--var ua = navigator.userAgent.toLowerCase();-->
<!--if (ua.indexOf("msie") != -1 || ua.indexOf("opera") != -1) {-->
<!--jQuery('body').css('overflow','hidden');-->
<!--jQuery('html').css('overflow','hidden');-->
<!--}-->

<!--jQuery(function() {-->
<!--jQuery('#bannerscollection_zoominout_opportune-mobile').bannerscollection_zoominout({-->
<!--skin: 'opportune',-->
<!--responsive:true,-->
<!--width: 1920,-->
<!--height: 1200,-->
<!--width100Proc:true,-->
<!--height100Proc:true,-->
<!--fadeSlides:true,-->
<!--showNavArrows:true,-->
<!--showBottomNav:true,-->
<!--autoHideBottomNav:true,-->
<!--thumbsWrapperMarginTop: -55,-->

<!--pauseOnMouseOver:false,-->

<!--});-->

<!--});-->


<!--</script>-->

<?php wp_footer(); ?>
</body>

</html>