<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GBD-Brandtheme
 */

?>
<style>
  .gbd-dsk-footer-menu, .gbd-mbl-footer-menu{
    display:none;
  }
  @media screen and (max-width: 767px) {
    .gbd-mbl-footer-menu {
      display: block;
    }
  }
  @media screen and (min-width: 768px) {
    .gbd-dsk-footer-menu {
      display: block;
    }
  }

</style>
<footer>
<div class="container gbd-dsk-footer-menu">
  <div class="row">
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('Solutions', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'Solution' ) ); ?>


    </div>
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('Resources', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'resoures' ) ); ?>
    </div>

    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('company', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'company' ) ); ?>
    </div>

    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('connect', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'connect' ) ); ?>
    </div>
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('contact us', 'growbydata-site'); ?></strong>
      <ul>
        <!-- <li><span style="color:#929293; font-size:14px;">1.800.000.0000</span></li> -->
        <li><a href="mailto:info@growbydata.com" style="color:#ffa41f;font-size:14px;">info@growbydata.com</a>
        </li>
      </ul>
    </div>

    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('services', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'services' ) ); ?>
    </div>
    <div class="menu-col col-md-9 col-sm-12 topics">
      <strong><?php esc_html_e('topics', 'growbydata-site'); ?></strong>
      <div class="topics_menu">
        <?php wp_nav_menu( array( 'theme_location' => 'solution-topics' ) ); ?>
      </div>
    </div>

  </div>
</div>
<div class="container gbd-mbl-footer-menu">
  <div class="row">
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('Solutions', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'Solution' ) ); ?>
    </div>
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('Resources', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'resoures' ) ); ?>
    </div>

    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('company', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'company' ) ); ?>
    </div>

    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('services', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'services' ) ); ?>
    </div>
    <div class="menu-col col-md-9 col-sm-12 topics">
      <strong><?php esc_html_e('topics', 'growbydata-site'); ?></strong>
      <div class="topics_menu">
        <?php wp_nav_menu( array( 'theme_location' => 'solution-topics' ) ); ?>
      </div>
    </div>
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('connect', 'growbydata-site'); ?></strong>
      <?php wp_nav_menu( array( 'theme_location' => 'connect' ) ); ?>
    </div>
    <div class="menu-col col-md-3 col-sm-12">
      <strong><?php esc_html_e('contact us', 'growbydata-site'); ?></strong>
      <ul>
        <!-- <li><span style="color:#929293; font-size:14px;">1.800.000.0000</span></li> -->
        <li><a href="mailto:info@growbydata.com" style="color:#ffa41f;font-size:14px;">info@growbydata.com</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="gbd-copyright-footer">
    <div class="container">
          <div class="col-md-4 col-sm-4 col-xs-12  px-0">
                <p class="pull-left" style="font-size:14px">&copy; <?php echo date('Y'); ?> GROWBYDATA</p>
            </div>

    </div>
</div><!-- gbd-copyright-contact -->
</footer> 
<!-- GBD: FAQ Schema -->
<script type="application/ld+json" id="gbd-faq"></script>
<!-- GBD: FAQ Schema -->

  <script data-main="<?=get_template_directory_uri()?>/assets/js/compiled/main" src="<?=get_template_directory_uri()?>/assets/js/require.js"></script>

<script>
var ww;

function startWorkerGlobal() {
  if (typeof(Worker) !== "undefined") {
    if (typeof(ww) == "undefined") {
      ww = new Worker("<?php echo get_template_directory_uri() . '/assets/js/workers.js'; ?>");
    }
    ww.postMessage(admin_ajax);
    ww.onmessage = function(event) {
      if(event.data.toLowerCase().trim() !== "nepal" && window.location.href.indexOf("https://growbydata.com/") != -1){
          var hubspotLiveChatsetTimeout = setTimeout(function(){
              clearTimeout(hubspotLiveChatsetTimeout);
              var script = document.createElement("script");
              script.type = "text/javascript";
              script.id = "hs-script-loader";
              script.async = true;
              script.src = '//js.hs-scripts.com/5372895.js';
              document.body.appendChild(script);
          },3000);
      }
    };
  } else {
    document.getElementById("entry-content").innerHTML = "Sorry! No Web Worker support.";
  }
}
startWorkerGlobal();
</script>

<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ83ZM4');</script>
<!-- End Google Tag Manager -->

</body>
</html>
