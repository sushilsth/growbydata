  <?php
  /**
   * Template part for displaying posts.
   *
   * @link https://codex.wordpress.org/Template_Hierarchy
   *
   * @package growbydata_site
   */

  ?>
<style type="text/css">
  .single-post .gbd-blog-article {
    padding-top: 0px !important;
}
  .gbd-single-report-bl-banner {
    background: #0c528a;
    color: #fff;
    padding: 30px;
    margin-bottom: 15px;
}
.gbd-blog-article .post {
    padding: 0px !important;
}
.gbd-single-report-bl-banner > div {
    width: 49%;
    display: inline-block;
    vertical-align: top;
}
.gbd-single-report-lt span {
    background: #57abb9;
    padding: 5px 10px;
    font-size: 23px;
    line-height: 28px;
    font-weight: 600;
    text-align: center;
    width: 482px;
    border-radius: 3px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
}
.gbd-single-report-lt h4 {
    font-size: 56px;
    font-weight: normal;
    line-height: 60px;
    margin: 20px 0 0;
}
.gbd-single-report-lt p {
    margin-top: 50px;
}
.gbd-single-report-rt {
    text-align: right;
}
.gbd-single-report-popular {
    margin-bottom: 50px;
    background: #eee;
}
.gbd-single-report-popular h4 {
    font-size: 23px;
    color: #fff;
    background: #123c5e;
    padding: 15px 20px;
    margin: 0px;
}
.gbd-single-popular-product-block {
    padding: 20px;
}
.gbd-single-popular-product-block li {
    display: inline-block;
    margin-left: 20px;
    vertical-align: middle;
    width: 18.36%;
    text-align: center;
}
.gbd-single-popular-product {
    position: relative;
}
.gbd-single-popular-product-block li:first-child {
    margin-left: 0px;
}
.gbd-single-popular-product-block li > span {
    margin-top: 20px;
    display: block;
}
.gbd-single-popular-product span {
    position: absolute;
    right: 35px;
    top: 40px;
    color: #ac0000;
    font-size: 22px;
}
</style>
  <div class="gbd-blog-article">
    <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--       <h1><?php the_title(); ?></h1>
      <h4>By <?php echo get_the_author(); ?></h4> -->

<!--   <div class="entry-content">
    <?php
    the_content(); 
    ?> 
  </div> -->

<div class="gbd-single-report-wrapper">
<div class="container">

  <div class="gbd-single-report-bl-banner">
  <div class="gbd-single-report-lt">
    <span>Number of Products Based on Price Range</span>
    <h4>Major Price Range</h4>
    <h4>$0-50 %</h4>
    <p>A majority of Halloween costumes and candy typically fall under the $0-50 price range, as shown in the graph below. Out of almost 2 million products data collected during our timeline, over 1.5 million products were priced under $50 and close to 300K were priced between $50-$100.</p>
  </div>
  <div class="gbd-single-report-rt">
    <img src="<?php echo get_template_directory_uri()?>/images/report-graph.png" alt="report-graph">
  </div>
</div>

<div class="gbd-single-report-popular">
  <h4>Most Popular Product By SKU</h4>
  <div class="gbd-single-popular-product-block">
    <ul>
      <li>
        <div class="gbd-single-popular-product">
          <span>#1</span>
          <img src="<?php echo get_template_directory_uri()?>/images/robin.png" alt="single-popular-product">
        </div>
        <span>Robin</span>
      </li>
      <li>
        <div class="gbd-single-popular-product">
          <span>#1</span>
          <img src="<?php echo get_template_directory_uri()?>/images/robin.png" alt="single-popular-product">
        </div>
        <span>Robin</span>
      </li>
      <li>
        <div class="gbd-single-popular-product">
          <span>#1</span>
          <img src="<?php echo get_template_directory_uri()?>/images/robin.png" alt="single-popular-product">
        </div>
        <span>Robin</span>
      </li>
      <li>
        <div class="gbd-single-popular-product">
          <span>#1</span>
          <img src="<?php echo get_template_directory_uri()?>/images/robin.png" alt="single-popular-product">
        </div>
        <span>Robin</span>
      </li>
      <li>
        <div class="gbd-single-popular-product">
          <span>#1</span>
          <img src="<?php echo get_template_directory_uri()?>/images/robin.png" alt="single-popular-product">
        </div>
        <span>Robin</span>
      </li>                        
    </ul>
  </div>
</div>

</div>
</div><!-- gbd-single-report-wrapper -->

</article><!-- #post-## -->

</div>