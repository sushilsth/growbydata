<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/minified/blog-detail.css?q='?>">
<section class="">
  <div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">

    <div class="gbd-blog-wrapper">
     <div class="gbd-blog-category clearfix">
       <div class="container">
         <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >
          Blog Category
          <span class="caret"></span>
        </button>
        <ul id="blog-category" class="clearfix dropdown-menu" >
         <?php
                            $category_detail = get_categories(); //$post->ID
                            $term = get_queried_object();
                            $current_category = $term->name;
                            $array_menu = wp_get_nav_menu_items("Blog Category Menu");
                            $menu = array();
                            foreach ($array_menu as $m) {
                            	if (empty($m->menu_item_parent)) {
                            		?>
                            		<li class="">
                            			<a href="<?php echo $m->url; ?>" class="filter <?php echo ($m->title == $current_category || $m->title == "Blog Home") ? "active" : ""; ?>"><?php echo $m->title; ?> 
                            		</a>
                            	</li>
                            	<?php
                            }
                          }
                          ?>
                        </ul>

                        <div class="search_wrapper"> 
                          <div class="search-toggle" for="searchbox-input">
                            <i class="fa fa-search" aria-hidden="true"  style="display: block;"></i>
                            <i class="fa fa-times" aria-hidden="true"  style="display: none;"></i>        
                          </div>
                          <div class="search-bar" style="display: none;"><?php get_search_form(); ?>
                          <!--we'll fill this later with our dynamic data-->
                          <ul id="header_search_result"></ul>
                        </div>
                      </div>

                    </div>
                  </div> <!-- gbd-blog-category -->

                  <?php 
      //commented after updates on 2021-03-18
      /*<div class="gbd-breadcrumbs">

				<div class="container container-small">
					<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
					}
					?>
				</div>
			</div>
      */
      ?>

      <?php
      if (have_posts()) :
        $growbydata_blog_post_counter = 1;
        if (is_home() && !is_front_page()) :
         ?>
			<!-- 	<header class="entry-header">
					<h2 class="page-title screen-reader-text"><?php//single_post_title(); ?></h2>
				</header>  -->


				<div class="container container-small blog-inner-wrapper">
					<div class="entry-content-page">
						<h1 class="page-title"><?php single_post_title(); ?></h1>
						<h3 class="text-center">The latest news and insights to keep you up to date.</h3>
					</div>

					<?php
				endif;
				?>
        <div class="clearfix"></div>

        <?php get_template_part('components/post/content', 'list-parts'); ?>

        <?php
      else :
        get_template_part('components/post/content', 'none');
      endif;
      ?>
    </div>

  </div><!-- gbd-blog-wrapper -->
  <div class="gbd-subscribe-blog-post clearfix">
   <div class="gbd-blog-container text-center">
    <h4 class="font-weight-bold">Like Our Content?</h4>
    <span class="font-weight-bold mb-3">Receive Latest Insights In Your Inbox</span>
    <div class="clearfix"></div>

    <div id="blog-pg-latest-insights-form"></div>		
    <script type="text/javascript">
      function HubspotFormLoad1(file) {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.charset = "utf-8";
        script.defer = true;
        script.src = file;
        script.onload = function() {

            //for like our post
            if (document.querySelectorAll("#blog-pg-latest-insights-form .hbspt-form").length == 0) {
                // console.log("Like our post form");
                var hbsptobj = JSON.stringify( <?php includeWithVariables('hubspotForms.php', array('formName' => 'Blog Sign up Form')); ?> );
                var script2 = document.createElement("script");
                script2.innerHTML = "hbspt.forms.create(" + hbsptobj + ");";
                document.getElementById("blog-pg-latest-insights-form").appendChild(script2);
              }
            };

            document.body.appendChild(script);
          }
        </script>		
      </div>
    </div><!-- gbd-subscribe-blog-post -->
    <script type = "text/javascript">
      setTimeout(function() {
        HubspotFormLoad1("//js.hsforms.net/forms/v2.js");      
      }, 5000);
    </script>
  </main>
</div>
</section>