<?php
/*
Template Name: Support
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>

<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>

<div class="gbd-ad-intel-template gbd-support-template">
  <header class="entry-header">
    <?php //the_title('<h1 class="page-title">', '</h1>'); ?>
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
  <section>
    <!-- GBD Static Banner -->
    <div class="bg_cover-banner support-banner text-white">
      <?php the_field('support slider'); ?>
    </div>
  </section>
  <!-- GBD Static Banner -->

  <section>
    <div class="gbd-support-mid-block bgwhite">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 float-left">
            <div class="gbd-support-mid gbd-support-mid-orange">
              <span><i class="fas fa-trophy"></i></span>
              <strong>Premium Support</strong>
              <p>Premium support provides complete, proactive support to meet the demanding needs of clients who work with real-time data. </p>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 float-left">
            <div class="gbd-support-mid gbd-support-mid-green">
              <span>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
              <strong>Starter and Basic Support</strong>
              <p>Starter and Basic support are included with the purchase of each subscription. Basic support includes everything in Starter Support plus weekly custom insights.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="gbd-support-bot-block bgwhite">
      <div class="container">
        <strong class="pb-3 d-block">Support Service Levels</strong>
        <div class="gbd-support-bot gbd-support-bot-dsk clearfix">

          <div class="list-group service-lvl float-left">
           <div class="title">
            <h3 class="text-white">SERVICE <br>LEVEL</h3>
          </div>
          <div class="content">
            <ul class="list-unstyled">
              <li>Implementation</li>
              <li class="dark-grey">Technical Support</li>
              <li>Account Management</li>
              <li class="dark-grey">Strategy Calls</li>
              <li>Custom Insights</li>
              <li class="dark-grey">Presentation-ready QBR content</li>
            </ul>
          </div>
        </div>
        <div class="list-group starter text-center float-left">
         <div class="title">
          <h3 class="text-white">STARTER</h3>
        </div>
        <div class="content">
          <ul class="list-unstyled">
            <li>Managed</li>
            <li class="light-grey">Email</li>
            <li><i class="fas fa-times-circle"></i></li>
            <li class="light-grey"><i class="fas fa-times-circle"></i></li>
            <li><i class="fas fa-times-circle"></i></li>
            <li class="light-grey"><i class="fas fa-times-circle"></i></li>
          </ul>
        </div>
      </div>
      <div class="list-group basic text-center float-left">
       <div class="title">
        <h3 class="text-white">BASIC</h3>
      </div>
      <div class="content">
        <ul class="list-unstyled">
          <li>Managed</li>
          <li class="dark-grey">Email</li>
          <li><i class="fas fa-times-circle"></i></li>
          <li class="dark-grey"><i class="fas fa-times-circle"></i></li>
          <li>Weekly</li>
          <li class="dark-grey"><i class="fas fa-times-circle"></i></li>
        </ul>
      </div>
    </div>
    <div class="list-group premium text-center float-left">
     <div class="title">
      <h3 class="text-white">PREMIUM</h3>
    </div>
    <div class="content">
      <ul class="list-unstyled">
        <li>Managed</li>
        <li class="light-grey">Named Account Manager</li>
        <li>Email</li>
        <li class="light-grey">Monthly</li>
        <li>Weekly</li>
        <li class="light-grey"><i class="fas fa-check-circle"></i></li>
      </ul>
    </div>
  </div>
</div>

<div class="gbd-support-bot gbd-support-bot-mob">

  <div class="list-group starter text-center">
   <div class="title">
    <h3 class="text-white">STARTER</h3>
  </div>
  <div>
    <div class="content float-left">
      <ul class="list-unstyled">
        <li>Implementation</li>
        <li class="dark-grey">Technical Support</li>
        <li>Account Management</li>
        <li class="dark-grey">Strategy Calls</li>
        <li>Custom Insights</li>
        <li class="dark-grey">Presentation-ready QBR content</li>
      </ul>
    </div>
    <div class="content float-left">
      <ul class="list-unstyled">
        <li>Managed</li>
        <li class="light-grey">Email</li>
        <li><i class="fas fa-times-circle"></i></li>
        <li class="light-grey"><i class="fas fa-times-circle"></i></li>
        <li><i class="fas fa-times-circle"></i></li>
        <li class="light-grey"><i class="fas fa-times-circle"></i></li>
      </ul>
    </div>
  </div>
</div>

  <div class="list-group basic text-center">
   <div class="title">
    <h3 class="text-white">BASIC</h3>
  </div>
  <div>
    <div class="content float-left">
      <ul class="list-unstyled">
        <li>Implementation</li>
        <li class="dark-grey">Technical Support</li>
        <li>Account Management</li>
        <li class="dark-grey">Strategy Calls</li>
        <li>Custom Insights</li>
        <li class="dark-grey">Presentation-ready QBR content</li>
      </ul>
    </div>
    <div class="content float-left">
      <ul class="list-unstyled">
          <li>Managed</li>
          <li class="dark-grey">Email</li>
          <li><i class="fas fa-times-circle"></i></li>
          <li class="dark-grey"><i class="fas fa-times-circle"></i></li>
          <li>Weekly</li>
          <li class="dark-grey"><i class="fas fa-times-circle"></i></li>
      </ul>
    </div>
  </div>
</div>

  <div class="list-group premium text-center">
   <div class="title">
    <h3 class="text-white">PREMIUM</h3>
  </div>
  <div>
    <div class="content float-left">
      <ul class="list-unstyled">
        <li>Implementation</li>
        <li class="dark-grey">Technical Support</li>
        <li>Account Management</li>
        <li class="dark-grey">Strategy Calls</li>
        <li>Custom Insights</li>
        <li class="dark-grey">Presentation-ready QBR content</li>
      </ul>
    </div>
    <div class="content float-left">
      <ul class="list-unstyled">
        <li>Managed</li>
        <li class="light-grey">Named Account Manager</li>
        <li>Email</li>
        <li class="light-grey">Monthly</li>
        <li>Weekly</li>
        <li class="light-grey"><i class="fas fa-check-circle"></i></li>
      </ul>
    </div>
  </div>
</div>

</div>

<a class="btn px-5 py-3 orange_btn custominsights-btn" href="<?php echo site_url('/talk-to-expert'); ?>">Talk to an Expert</a>

</div>
</div>
</section>

</div>
<?php
get_footer();

