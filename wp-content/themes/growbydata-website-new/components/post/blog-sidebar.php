<div class="gbd-blog-sidebar">

  <div class="gbd-search-blog  gbd-sidebar-section clearfix">
   <!--  <h4 class="gbd-sidebar-title">Search The Blog</h4> -->
   <form role="search" method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
      <input type="search" class="search-field" placeholder="Search the blog.." value="<?php echo get_search_query(); ?>" name="s">
    </label>
    <input type="submit" class="search-submit" value="Search">
  </form>
</div><!-- gbd-search-blog -->

<div class="gbd-navigate-topics pull-right gbd-sidebar-section">
  <h4 class="gbd-sidebar-title">Categories</h4>
  <?php
$category_detail = get_categories();//$post->ID

?>
<ul id="blog-category">
  <?php
  foreach ($category_detail as $key => $value) {
    $category = get_category($value->term_id);
    $count = $category->category_count;
    ?>
    <li class="">
      <a href="<?php echo home_url().'/category/'. $value->slug; ?>" class="filter" data-topic="<?php echo $value->cat_ID; ?>"><?php echo $value->cat_name; ?> 
      <span class="counter">(<?php echo $count ?>)</span> 
    </a>
  </li>
  <?php
}
?>

</ul>
</div><!-- gbd-navigate-topics -->

<div class="gbd-sidebar-popular gbd-sidebar-section">
  <h4 class="gbd-sidebar-title">Popular Post</h4>
  <div class="gbd-sidebar-popular-block">
   <?php 
   $popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );

   while ( $popularpost->have_posts() ) : $popularpost->the_post();
    echo '<li><a href=' . get_permalink() . '>' . get_the_title() . '</a></li>';
  endwhile;
  ?>
</div>
</div>

<div class="gbd-sidebar-tags gbd-sidebar-section">
  <h4 class="gbd-sidebar-title">Tags</h4>
  <div class="gbd-tags-block">

<ul class="clearfix">
  <!-- most popular tags -->
<?php //$wpdb->show_errors(); ?> 
<?php
global $wpdb;
$term_ids = $wpdb->get_col("
    SELECT term_id FROM $wpdb->term_taxonomy
    INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
    INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
    WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= $wpdb->posts.post_date");

if(count($term_ids) > 0){

  $tags = get_tags(array(
    'orderby' => 'count',
    'order'   => 'DESC',
    'number'  => 28,
    'include' => $term_ids,
  ));
foreach ( (array) $tags as $tag ) {
echo '<li><a href="' . get_tag_link ($tag->term_id) . '" rel="' . $tag->name . '">' . $tag->name . '</a></li>';
}
}
?>
</ul>
  </div>
</div>

 <div onclick="topFunction()" id="scroll-up" title="Go to top">
  <i class="fa fa-chevron-up"></i>
 </div> 
 <script type="text/javascript">
   //Get the button:
mybutton = document.getElementById("scroll-up");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
 </script>
</div><!-- gbd-blog-sidebar -->