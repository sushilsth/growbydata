<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growbydata_site
 */

?>
</div>
<style>
.grecaptcha-badge,.hs_recaptcha{display:none}.contact-form .my_select{position:relative}.page-template-template-Free-Price-report .gbd-footer-bot-subscribe .hs_email.hs-email.hs-fieldtype-text.field.hs-form-field{width:100%;padding-left:0}.gbd-footer-btn .free-trial{font-size:14px;letter-spacing:0;font-weight:700;margin-top:10px;width:100%}.footer .gbd-footer-btn{margin-right:0!important;width:auto}.gbd-footer-bot-subscribe>span{font-size:18px;color:#f3f5f9;margin-bottom:10px;display:block}.gbd-footer-bot-subscribe .hbspt-form{position:relative}.gbd-footer-bot-subscribe .hs_email label{display:none}.gbd-footer-bot-subscribe .hbspt-form input{height:52px;width:100%;color:#272727!important}.gbd-footer-bot-subscribe .hs-submit{position:absolute;right:0;top:0;width:46px;cursor:pointer}.gbd-footer-bot-subscribe .hs-submit input.hs-button.primary.large{background:#ac0000;text-indent:-9999px;padding:0;width:46px;height:52px;display:block;-webkit-transition:all .7s ease-in-out;-moz-transition:all .7s ease-in-out;-o-transition:all .7s ease-in-out;transition:all .7s ease-in-out}.gbd-footer-bot-subscribe .hs-submit input.hs-button.primary.large:hover{background:#960000!important;-webkit-transition:all .7s ease-in-out;-moz-transition:all .7s ease-in-out;-o-transition:all .7s ease-in-out;transition:all .7s ease-in-out}.gbd-footer-bot-subscribe .hs-submit .actions{position:relative}.gbd-footer-bot-subscribe .hs-submit .actions:before{color:#fff;font-family:"Font Awesome 5 Free";font-weight:900;position:absolute;content:'\f04b';right:15px;top:15px;display:inline-block;cursor:pointer}.gbd-footer-bot-subscribe .hs-error-msg{display:none!important}.gbd-footer-btn .join-mail{display:none}.gbd-copyright-contact p{font-size:14px;font-weight:700}.gbd-inquiry span{margin-left:10px}.gbd-social .social-icon{text-align:left}.gbd-social .social-icon span{color:#fff;font-size:18px;display:block;margin-bottom:15px}.gbd-social .gbd-footer-icon.twitter-icon{margin-left:0;margin-right:5px}.gbd-footer-icon.linkedin-icon:hover{background:#0e76a8}.gbd-footer-icon.instagram-icon:hover{background:#C13584}@media (max-width:991px) and (min-width:768px){.gbd-footer-btn .free-trial{font-size:11px}}@media (max-width:767px) and (min-width:320px){.gbd-footer-bot-subscribe .hs-submit input.hs-button.primary.large{background:#ac0000;text-indent:-9999px;padding:0;width:46px;height:52px;display:block;-webkit-transition:all .7s ease-in-out;-moz-transition:all .7s ease-in-out;-o-transition:all .7s ease-in-out;transition:all .7s ease-in-out}.social-icon{margin-top:20px}}.simplePullQuote{width:200px;float:right;border-top:3px #868686 solid;border-bottom:3px #868686 solid;background:top left no-repeat url("<?php echo get_template_directory_uri(); ?>/images/quote.png");text-indent:10px;padding:6px;margin:10px 0 10px 10px;-webkit-box-shadow:7px 7px 8px 0 #818181;-moz-box-shadow:7px 7px 8px 0 #818181;box-shadow:7px 7px 8px 0 #818181}.simplePullQuote.left{float:left;margin:10px 10px 10px 0;-webkit-box-shadow:-7px 7px 8px 0 #818181;-moz-box-shadow:-7px 7px 8px 0 #818181;box-shadow:-7px 7px 8px 0 #818181; }.gbd-footer-icon.fb-icon{ display: block;}.gbd-social .gbd-footer-icon{margin-right:5px;}
}
</style>

<footer id="colophon" class="site-footer" role="contentinfo">
    <?php get_template_part('components/footer/footer', 'main'); ?>
    <?php get_template_part('components/footer/trial', 'main'); ?>
    <?php get_template_part('components/footer/trusted', 'main'); ?>
</footer>

</div>
<?php wp_footer(); ?>

<script 
data-main="<?php echo get_template_directory_uri() . '/assets/compiled/main.js'; ?>" 
src="<?php echo get_template_directory_uri() . '/assets/require.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/all.css?q='?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style-new.css?q='?>">
<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ83ZM4');</script>
<!-- End Google Tag Manager -->
<script>
	setTimeout(function(){
		dataLayer.push({
		  'event': 'firehotjarcode'
		})	
	},5000);
	
</script>

<!-- Faq schema -->
<script type="application/ld+json" id="gbd-faq"></script>
<script>
var ww;

function startWorkerGlobal() {
  if (typeof(Worker) !== "undefined") {
    if (typeof(ww) == "undefined") {
      ww = new Worker("<?php echo get_template_directory_uri() . '/assets/workers.js'; ?>");
    }
    ww.postMessage(admin_ajax);
    ww.onmessage = function(event) {
      if(event.data.toLowerCase() !== "nepal" && window.location.href.indexOf("https://growbydata.com/") != -1){
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

</body>
</html>