<?php
/*
Template Name: Data Fields Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<div class="gbd-default-template gbd-dynamic-fields">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
             <div class="gbd-inner-page-wrapper">
                <header class="entry-header">
                    <?php the_title('<h1 class="page-title">', '</h1>'); ?>
                </header>

                <?php
                while (have_posts()) : the_post(); ?>
                    <div class="entry-content-page">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
                <div class="gbd-default-circle-block fadeIn clearfix">

                    <div class="gbd-default-circle gbd-default-circle1">
                        <div class="gbd-default-circle-orange">
                            <span>
                                <picture>
                                    <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-custom-labels.webp">
                                      <img src="<?php echo get_template_directory_uri()?>/images/gbd-custom-labels.png" alt="gbd-custom-labels"> 
                                  </picture>
                              </span>
                          </div>
                          <div class="gbd-default-circle-text">
                            Add custom labels based <br>on price competitiveness
                        </div>
                    </div>
                    <div class="gbd-default-circle gbd-default-circle2 fadeIn">
                        <div class="gbd-default-circle-red">
                            <span>
                                <picture>
                                    <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-price-impacts.webp">
                                      <img src="<?php echo get_template_directory_uri()?>/images/gbd-price-impacts.png" alt="gbd-price-impacts"> 
                                  </picture>
                              </span>
                          </div>
                          <div class="gbd-default-circle-text">
                            Learn how price <br>impacts your RoAS
                        </div>
                    </div>
                    <div class="gbd-default-circle gbd-default-circle3 fadeIn">
                        <div class="gbd-default-circle-blue">
                            <span>
                                <picture>
                                    <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-boost-google.webp">
                                      <img src="<?php echo get_template_directory_uri()?>/images/gbd-boost-google.png" alt="gbd-boost-google"> 
                                  </picture> 
                              </span>
                          </div>
                          <div class="gbd-default-circle-text">
                            Boost ROI using Google<br> Bid Multipliers
                        </div>
                    </div>

                </div><!-- .gbd-default-circle-block -->

                <div class="gbd-how-it-works">
                    <div class="gbd-default-title">
                        How It Works
                    </div>
                    <p>GrowByData tracks your prices compared to relevant competitors</p>
                    <picture>
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-competitors-graph.webp">
                          <img src="<?php echo get_template_directory_uri()?>/images/gbd-competitors-graph.jpg" alt="gbd-competitors-graph">
                      </picture> 
                  </div><!-- gbd-how-it-works -->

                  <div class="gbd-google-merchant-block">
                    <h4>Custom labels are submitted to Google Merchant Center</h4>
                    <p>(automatically supplementing your current feed)</p>
                    <div class="gbd-sku-label-table">
                        <table>
                            <tr>
                                <th>SKU</th>
                                <th>Custom Label</th>
                            </tr>
                            <tr>
                                <td>Acme-1241b-XXL</td>
                                <td>Cheapest</td>
                            </tr>
                            <tr>
                                <td>Acme-1241b-XL</td>
                                <td>Not Cheapest</td>
                            </tr>
                        </table> 
                    </div>
                </div><!-- gbd-google-merchant-block -->

                <div class="gbd-ppc-manger">
                    <h4>Your PPC Manager configures “Bid Multipliers” in Google Ads</h4>
                    <div class="gbd-custom-labels-cheapest">
                        <h5>If custom label = Not Cheapest:</h5>
                        <picture>
                            <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/gbd-custom-label-ads.webp">
                              <img src="<?php echo get_template_directory_uri()?>/images/gbd-custom-label-ads.jpg" alt="gbd-custom-label-ads">
                          </picture>
                      </div>
                  </div><!-- gbd-ppc-manger -->


                  <div class="gbd-you-get fadeIn">
                    <div class="gbd-default-title">You get...</div>
                    <ul>
                        <li>
                            <span>
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </span>
                            <h6>Better Results</h6>
                            <p>Return on ad spend sky-rockets when your price is best.</p>
                        </li>
                        <li>
                            <span>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </span>
                            <h6>More Insight</h6>
                            <p>See how price competitiveness impacts all performance metrics</p>
                        </li>
                        <li>
                            <span>
                                <i class= "fa fas fa-chart-line" aria-hidden="true"></i>
                            </span>
                            <h6>Immediate ROI</h6>
                            <p>Finally, a campaign automation that delivers results quickly.</p>
                        </li>
                    </ul>
                </div><!-- gbd-you-get -->
            </div>
        </div>
    </div>

</div>
</div><!-- gbd-default-template -->

<?php
get_footer();