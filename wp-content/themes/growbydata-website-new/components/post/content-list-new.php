<style type="text/css">
  .gbd-featured-block {
    margin-top: 45px;
}
.blog .gbd-featured-block .gbd-most-recent-posts .container-small {
    padding: 0 !important;
}
.gbd-featured-block .gbd-most-recent-posts h4 {
    text-align: left;
    margin-top: 0;
    margin-bottom: 25px;
    font-size: 24px;
    font-weight: normal;
    color: #af0000;
    line-height: 28px;
}
.gbd-featured-block .gbd-search-blog {
    width: 100%;
    float: none;
}
.gbd-featured-block .gbd-navigate-topics {
    float: none !important;
    width: 100%;
    position: relative;
    margin-left: 0;
    margin-top: 30px;
}
.gbd-featured-block .gbd-search-blog .search-form label {
    width: 78%;
}
</style>
<div class="container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="gbd-blog">
        <?php
        if (have_posts()) :
          $growbydata_blog_post_counter = 1;
          if (is_home() && !is_front_page()) : ?>
            <header class="entry-header">
              <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
              

            </header>   
            <div class="entry-content-page">
             <h1 class="page-title"><?php single_post_title(); ?></h1>
             <h2 class="sub-title">Our latest insights, industry news and <br>our thoughts to give retailers and brands an edge.</div>  </div>


               <?php
             endif;
             ?>
             <div class="gbd-featured-blog-block clearfix">

              <?php
              $i = 0;
              while (have_posts()) : the_post(); 

                ?>

                <?php
                /*
                 * todo check this logic
                 *
                 * */

                if(!empty(get_post_meta(get_the_ID(), 'featured_post')) && get_post_meta(get_the_ID(), 'featured_post')[0] == "1" && $i < 3){
                 $i++;
                 ?>

                 <div class="gbd-featured-blog fadeIn">
                  <div class="gbd-featured-blog-img">
                    <span>Featured</span>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                  </div>

                  <div class="gbd-featured-category-like clearfix">
                    <div class="gbd-featured-category-detail">
                      <?php
                                        $category_detail = get_the_category(get_the_ID());//$post->ID
                                        echo $category_detail[0]->cat_name;
                                        ?>
                                      </div>

                                      <div class="fb-like" data-href="<?= get_permalink(); ?>" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false">
                                      </div>
                                      
                                    </div><!-- gbd-featured-category-like -->

                                    <div class="gbd-featured-blog-contents">
                                      <?php
                                      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >', '</a></h2>' );
                                      ?>
                                      <div class="gbd-posted-on"><?php growbydata_blog_posted_on(); ?> 
                                    </div>
                                    <div class="gbd-reading-time">
                                      <span class="separator">|</span>
                                      <?php echo do_shortcode('[rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
                                    </div>
                                    <div class="gbd-featured-blog-text">
                                      <?php

                                      echo excerpt(13);
                                      ?>
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="readmore"><?php _e('READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    ','growbydata-site');  ?></a> 
                                  </div>

                                </div><!-- gbd-featured-blog -->

                                <?php

                              }
                              ?>

                              <?php
                            endwhile;
                            ?>
                            <!-- reset the main query loop -->
                            <?php wp_reset_postdata(); ?>
                          </div><!-- gbd-featured-blog-block -->


                          <div class="gbd-featured-block">
                            <div class="row">
                              <div class="col-md-9">

                                <div class="gbd-blog-posts">
                                  <?php
                          // the_posts_navigation();
                                else :
                                  get_template_part('components/post/content', 'none');
                                  ?>
                                </div><!-- gbd-blog-posts -->
                              </div>


                              <div class="col-md-3">
                                <div class="gbd-most-recent-posts clearfix">
                                    <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">

                                        <h4>Most Recent Posts</h4>

                                        <div class="gbd-search-blog">
                                          <form role="search" method="get" class="search-form" action="#">
                                            <label>
                                              <input type="search" class="search-field" placeholder="Search the blog.." value="" name="s">
                                            </label>
                                            <input type="submit" class="search-submit" value="Search">
                                          </form>
                                        </div><!-- gbd-search-blog -->

                                        <div class="gbd-navigate-topics pull-right">
                                          <?php 
                                        $category_detail = get_categories();//$post->ID
                                        
                                        ?>
                                        <select name="post_category" id="post_category">
                                          <option value="" selected>Navigate By Topics</option>
                                          <?php
                                          
                                          foreach ($category_detail as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value->cat_ID; ?>"><?php echo $value->cat_name; ?></option>
                                            <?php
                                          }
                                          ?>
                                        </select> 
                                      </div><!-- gbd-navigate-topics -->

                                    </div>
                                  </div>
                              </div><!-- gbd-most-recent-posts -->
                            </div>


                          </div>
                          
                        </div><!-- gbd-featured-block -->


                        <?php

                      endif; ?>
                    </div><!-- gbd-blog -->

                  </main>
                </div>
              </div>
            </div>
            <style type="text/css">
              .gbd-blog-posts article {
                display: none;
              }
            </style>



            <?php
//schema implementation
            $i = 0;
            $context = new StdClass();
            $context->{"@context"} = "https://schema.org";
            $context->{"@type"} = "ItemList";
            $schemaList = [];
            while (have_posts()) : the_post(); 
              if(!empty(get_post_meta(get_the_ID(), 'featured_post')) && get_post_meta(get_the_ID(), 'featured_post')[0] == "1" && $i < 3){
                $category_detail = get_the_category(get_the_ID());

                $i++;
                $itemList = new StdClass();
                $itemList->{"@type"} = "ListItem";
                $itemList->position = $i;
                $itemList->url = esc_url( get_the_permalink() );
    // $item = $itemList->item = new StdClass();
    // $item->{"@type"} = "Article";
    // $item->headline = get_the_title();
    // $item->image = get_the_post_thumbnail_url(get_the_ID());
    // $item->author = "GrowByData";
    // $item->genre = $category_detail[0]->cat_name;;
    // $item->wordcount = str_word_count(get_the_content());
    // $item->url = esc_url( get_permalink() ).'/blog';
    // $item->datePublished = get_the_date();
    // // $item->dateCreated = "";
    // $item->dateModified = get_the_date();
    // // $item->description = get_the_content();
    // $item->articleBody = excerpt(13);
    // $item_publisher = $item->publisher = new StdClass();
    // $item_publisher->{"@type"} = "Organization";
    // $item_publisher->name = "GrowByData";
    // $item_publisher_logo = $item_publisher->logo = new StdClass();
    // $item_publisher_logo->{"@type"} = "ImageObject";
    // $item_publisher_logo->url = "https://growbydata.com/wp-content/uploads/2018/11/gbd-logo.png";

    // $item_url = $item->mainEntityOfPage = new StdClass();
    // $item_url->{"@type"} = "WebPage";
    // $item_url->{"@id"} = esc_url( get_permalink() ).'/blog';

                array_push($schemaList, $itemList);
              }
            endwhile;
            ?>
            <script type="application/ld+json">
              <?php 
              $context->itemListElement = $schemaList;
              echo json_encode($context); 
              ?>
            </script>


<!-- <script>
jQuery (document).ready(function(){
jQuery(".sgpb-popup-builder-content-html").removeAttr("style");
});
</script> -->