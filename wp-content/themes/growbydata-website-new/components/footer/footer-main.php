<div class="gbd-footer-top">

    <?php
    // donot display this block in free-price-report
    global $post;
    if (isset($post->post_name)):
        $post_slug = $post->post_name;
        $current_url = $_SERVER['REQUEST_URI'];
        if (!is_numeric(strpos($current_url, "free-price-report")) && !is_numeric(strpos($current_url, "price-insights")) && !is_numeric(strpos($current_url, "/"))) {
            ?>
            <div class="gbd-free-price-footer">
                <strong><?php esc_html_e('Ready to Start with Free Report?', 'growbydata-site'); ?></strong>
                <a href="<?php echo site_url(); ?>/free-price-report/" class="btn btn-primary btn-lg m-btn slideLeft">
                    <?php esc_html_e('GET In Touch', 'growbydata-site'); ?></a>

                </div>

            <?php } endif; ?>
            <?php
    // donot display this block in free-price-report
            global $post;
            if (isset($post->post_name)):
                $post_slug = $post->post_name;
                $current_url = $_SERVER['REQUEST_URI'];
                global $template;
                if (is_front_page() || basename($template) == "template-pricing-data.php") {
                    /**/
                    ?>
                    <div id="GBDSuccessStories"></div>
                <?php /**/} ?>

                            <?php
                            if (is_numeric(strpos($current_url, "price-insights"))) {
                                ?>
                                <div class="gbd-price-insights-footer">
                                    <div class="container">    <div class="row">

                                        <strong><?php esc_html_e('Your Price Insight is Waiting...', 'growbydata-site'); ?>
                                        <span><?php esc_html_e('Get Subscribed', 'growbydata-site'); ?></span>

                                    </strong>
                                    <div class="clearfix"></div>

                                    <a href="<?php echo site_url(); ?>/price-insights/#landing-wrapper" class="btn btn-default btn-success btn-green">
                                        <?php esc_html_e('SIGN ME UP!', 'growbydata-site'); ?></a>

                                    </div>
                                </div>
                            </div>
                        <?php } endif; ?>
                        <?php global $template; ?>
                        <?php if (is_front_page()) { ?>
                            <!--LEADER LIST STARTS FROM HERE-->
                            <div id="GBDleaderBlock"></div>
                            <!--LEADER LIST ENDS HERE-->
                        <?php } ?>
                    </div> <!-- gbd-footer-top --> 

                    <div class="footer" role="contentinfo">

                        <div class="gbd-footer-btm">
                            <div class="container">
                                <div class="row">
                                    <div class="hidden visible-xs mobile-footer-logo col-xs-12">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" class="gbd-btm-logo"><img src="<?php echo get_template_directory_uri() ?>/images/gbd-logo-white.png" alt="Grow faster with GrowByData" class="lazy">
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 pull-right gbd-social">
                                        <?php //growbydata_blog_social_menu();  ?>

                                        <div class="gbd-footer-btn">
                                        
            </div>

         <ul class="social-icon">
            <span>Follow Us</span>
                        <li>
                           <a href="https://www.facebook.com/GrowByDataCommunity" target="_blank" class="gbd-footer-icon fb-icon" rel=noopener>
                               <i class="fab fa-facebook-f"></i></a>
                           </li>
                           <li><a href="https://twitter.com/GrowByData" target="_blank" class="gbd-footer-icon twitter-icon" rel=noopener>
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li><a href="https://www.linkedin.com/company/growbydata" target="_blank" class="gbd-footer-icon linkedin-icon" rel=noopener>
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                 <li><a href="https://www.instagram.com/growbydata/" target="_blank" class="gbd-footer-icon instagram-icon" rel=noopener>
                        <i class="fab  fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="gbd-btm-logo hidden-xs"><img src="<?php echo get_template_directory_uri() ?>/images/gbd-logo-white.png" alt="Grow faster with GrowByData" class="lazy">
            </a>
            <div class="clearfix"></div>
            <div class="pull-left gbd-footer-menu">
                <strong><?php esc_html_e('About us', 'growbydata-site'); ?></strong>
                <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
            </div>
            <div class="pull-left gbd-footer-menu">
                <strong><?php esc_html_e('Solutions', 'growbydata-site'); ?></strong>
                <?php wp_nav_menu(array('container_id' => 'menu-footer', 'theme_location' => 'footermenu')); ?>
            </div>
        </div>
    </div>
</div>
</div>

<div class="gbd-copyright-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <p class="pull-left" style="font-size:14px">&copy; <?php echo date('Y'); ?> GrowByData, LLC</p>
            </div>
            <div class="col-md-8 col-sm-8go col-xs-12">
                <p class="pull-right gbd-inquiry"><!-- US Address: Arington, MA, US  |  Nepal Address: 44600, Maitrimarg, Lalitpur, Nepal -->  <span>Email:</span> 
                    <a style=" color:#f3f5f9" href="mailto:info@GrowByData.com">info@growbydata.com</a>
                </p>
            </div>
        </div>
    </div>
</div><!-- gbd-copyright-contact -->

</div>