<?php
/*
Template Name: Infographics Template
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style-new.css?q='. $eci_date->getTimestamp() ; ?>">

<div class="gbd-default-template gbd-infographics-template">
    <div class="gbd-infographics-wrapper light-background">
        <div class="gbd-infographics">
          <?php the_title('<h1 class="page-title text-center">', '</h1>'); ?>
            <?php if (have_rows('gbd_infographics_block')): ?>  
                <div class="container">    
                    <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
                        <?php $i = 0; ?>
                        <?php while (have_rows('gbd_infographics_block')): the_row();
                            $image = get_sub_field('image');
                            $name = get_sub_field('name');
                            ?>
                            <div class="col-md-4 col-xs-12">
                                <div class="gbd-infographics-block">
                                    <div class="gbd-infographics-img">
                                        <a href="javascript:void(0);">         
                                            <img class="w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" data-target="#carouselExample" data-slide-to="<?php echo $i; ?>"/>
                                        </a>
                                    </div>
                                    <div class="gbd-infographics-info">
                                        <a href="javascript:void(0);">
                                            <?php echo $name; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>                            
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-body">
                                <!-- <img src="<?php //echo $image['url']; ?>" alt="<?php //echo $image['alt'] ?>"/> -->
                                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <?php $j = 0; ?>
                                    <?php while (have_rows('gbd_infographics_block')): the_row();
                                        $image = get_sub_field('image');
                                        $name = get_sub_field('name');
                                        ?>
                                        <?php if($j == 0): ?>
                                            <div class="carousel-item active">
                                        <?php else: ?>
                                            <div class="carousel-item">                       
                                        <?php endif ?>
                                            <div class="modal-header">                                
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $name; ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                            </div>
                                    <?php $j++; ?>
                                    <?php endwhile; ?>                                        
                                  </div></div>
                                  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                              </div>                              
                            </div>
                          </div>
                        </div>
                </div>
            <?php endif; ?>            
        </div><!-- gbd-infographics -->
    </div><!-- gbd-infographics-wrapper --> 

</div><!-- gbd-default-template -->

<?php
get_footer();