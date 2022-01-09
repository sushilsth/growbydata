<?php
/*
Template Name: competitive price intelligence software Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<style type="text/css">
    .page-template-template-competitive-price-intelligence-software .site-content {
        padding-bottom: 0;
    }
</style>
<div class="gbd-default-template gbd-repricing">
    <div class="container">
        <div class="row">
         <div class="col-md-12 col-sm-12">
           <div class="gbd-inner-page-wrapper">
<!--             <div class="col-md-8 col-md-offset-2">
-->                <header class="entry-header">
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

<div class="gbd-default-circle-block clearfix">

    <div class="gbd-default-circle gbd-default-circle1 fadeIn">
        <div class="gbd-default-circle-orange gbd-prices-rules">
            <span>
                <img src="<?php echo get_template_directory_uri()?>/images/gbd-prices-rules.png" alt="gbd-prices-rules"> 
            </span>
        </div>
        <div class="gbd-default-circle-text">
            Suggested price changes based on custom rules
        </div>
    </div>
    <div class="gbd-default-circle gbd-default-circle2 fadeIn">
        <div class="gbd-default-circle-red">
            <span>
                <img src="<?php echo get_template_directory_uri()?>/images/gbd-csv-file.png" alt="gbd-csv-file"> 
            </span>
        </div>
        <div class="gbd-default-circle-text">
            Update prices via API <br>or CSV export file
        </div>
    </div>
    <div class="gbd-default-circle gbd-default-circle3 fadeIn">
        <div class="gbd-default-circle-blue">
            <span>
                <img src="<?php echo get_template_directory_uri()?>/images/gbd-profit-impact.png" alt="gbd-profit-impact"> 
            </span>
        </div>
        <div class="gbd-default-circle-text">
            Before & after reports to measure profit impact
        </div>
    </div>

</div><!-- .gbd-default-circle-block -->

</div>


<div class="gbd-repricing-steps-graph clearfix fadeIn">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1108px" height="385px" style="cursor:pointer; enable-background:new 0 0 1108 385;" viewBox="0 0 1108 385" xml:space="preserve">
       <g id="gbd-repricing-chart">
        <defs>
            <filter id="Filter_0">
                <feFlood flood-color="rgb(50, 74, 94)" flood-opacity="1" result="floodOut" />
                <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
            </filter>
            <filter id="Filter_1">
                <feFlood flood-color="rgb(255, 111, 87)" flood-opacity="1" result="floodOut" />
                <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
            </filter>
            <filter id="Filter_2">
                <feFlood flood-color="rgb(39, 39, 39)" flood-opacity="1" result="floodOut" />
                <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
            </filter>
            <filter id="Filter_3">
                <feFlood flood-color="rgb(29, 113, 184)" flood-opacity="1" result="floodOut" />
                <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
            </filter>
            <filter id="Filter_4">
                <feFlood flood-color="rgb(52, 127, 191)" flood-opacity="1" result="floodOut" />
                <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
            </filter>

        </defs>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M48.500,122.000 C49.881,122.000 51.000,123.119 51.000,124.500 C51.000,125.881 49.881,127.000 48.500,127.000 C47.119,127.000 46.000,125.881 46.000,124.500 C46.000,123.119 47.119,122.000 48.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M66.500,122.000 C67.881,122.000 69.000,123.119 69.000,124.500 C69.000,125.881 67.881,127.000 66.500,127.000 C65.119,127.000 64.000,125.881 64.000,124.500 C64.000,123.119 65.119,122.000 66.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M77.500,122.000 C78.881,122.000 80.000,123.119 80.000,124.500 C80.000,125.881 78.881,127.000 77.500,127.000 C76.119,127.000 75.000,125.881 75.000,124.500 C75.000,123.119 76.119,122.000 77.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M88.500,122.000 C89.881,122.000 91.000,123.119 91.000,124.500 C91.000,125.881 89.881,127.000 88.500,127.000 C87.119,127.000 86.000,125.881 86.000,124.500 C86.000,123.119 87.119,122.000 88.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M99.500,122.000 C100.881,122.000 102.000,123.119 102.000,124.500 C102.000,125.881 100.881,127.000 99.500,127.000 C98.119,127.000 97.000,125.881 97.000,124.500 C97.000,123.119 98.119,122.000 99.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M110.500,122.000 C111.881,122.000 113.000,123.119 113.000,124.500 C113.000,125.881 111.881,127.000 110.500,127.000 C109.119,127.000 108.000,125.881 108.000,124.500 C108.000,123.119 109.119,122.000 110.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M121.500,122.000 C122.881,122.000 124.000,123.119 124.000,124.500 C124.000,125.881 122.881,127.000 121.500,127.000 C120.119,127.000 119.000,125.881 119.000,124.500 C119.000,123.119 120.119,122.000 121.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M132.500,122.000 C133.881,122.000 135.000,123.119 135.000,124.500 C135.000,125.881 133.881,127.000 132.500,127.000 C131.119,127.000 130.000,125.881 130.000,124.500 C130.000,123.119 131.119,122.000 132.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M143.500,122.000 C144.881,122.000 146.000,123.119 146.000,124.500 C146.000,125.881 144.881,127.000 143.500,127.000 C142.119,127.000 141.000,125.881 141.000,124.500 C141.000,123.119 142.119,122.000 143.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M154.500,122.000 C155.881,122.000 157.000,123.119 157.000,124.500 C157.000,125.881 155.881,127.000 154.500,127.000 C153.119,127.000 152.000,125.881 152.000,124.500 C152.000,123.119 153.119,122.000 154.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M165.500,122.000 C166.881,122.000 168.000,123.119 168.000,124.500 C168.000,125.881 166.881,127.000 165.500,127.000 C164.119,127.000 163.000,125.881 163.000,124.500 C163.000,123.119 164.119,122.000 165.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M176.500,122.000 C177.881,122.000 179.000,123.119 179.000,124.500 C179.000,125.881 177.881,127.000 176.500,127.000 C175.119,127.000 174.000,125.881 174.000,124.500 C174.000,123.119 175.119,122.000 176.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M187.500,122.000 C188.881,122.000 190.000,123.119 190.000,124.500 C190.000,125.881 188.881,127.000 187.500,127.000 C186.119,127.000 185.000,125.881 185.000,124.500 C185.000,123.119 186.119,122.000 187.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M198.500,122.000 C199.881,122.000 201.000,123.119 201.000,124.500 C201.000,125.881 199.881,127.000 198.500,127.000 C197.119,127.000 196.000,125.881 196.000,124.500 C196.000,123.119 197.119,122.000 198.500,122.000 Z"/>
        <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
        d="M209.500,122.000 C210.881,122.000 212.000,123.119 212.000,124.500 C212.000,125.881 210.881,127.000 209.500,127.000 C208.119,127.000 207.000,125.881 207.000,124.500 C207.000,123.119 208.119,122.000 209.500,122.000 Z"/>
        <g filter="url(#Filter_0)">
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M244.500,122.000 C245.881,122.000 247.000,123.119 247.000,124.500 C247.000,125.881 245.881,127.000 244.500,127.000 C243.119,127.000 242.000,125.881 242.000,124.500 C242.000,123.119 243.119,122.000 244.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M253.500,122.000 C254.881,122.000 256.000,123.119 256.000,124.500 C256.000,125.881 254.881,127.000 253.500,127.000 C252.119,127.000 251.000,125.881 251.000,124.500 C251.000,123.119 252.119,122.000 253.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M262.500,122.000 C263.881,122.000 265.000,123.119 265.000,124.500 C265.000,125.881 263.881,127.000 262.500,127.000 C261.119,127.000 260.000,125.881 260.000,124.500 C260.000,123.119 261.119,122.000 262.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M271.500,122.000 C272.881,122.000 274.000,123.119 274.000,124.500 C274.000,125.881 272.881,127.000 271.500,127.000 C270.119,127.000 269.000,125.881 269.000,124.500 C269.000,123.119 270.119,122.000 271.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M282.500,122.000 C283.881,122.000 285.000,123.119 285.000,124.500 C285.000,125.881 283.881,127.000 282.500,127.000 C281.119,127.000 280.000,125.881 280.000,124.500 C280.000,123.119 281.119,122.000 282.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M293.500,122.000 C294.881,122.000 296.000,123.119 296.000,124.500 C296.000,125.881 294.881,127.000 293.500,127.000 C292.119,127.000 291.000,125.881 291.000,124.500 C291.000,123.119 292.119,122.000 293.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M304.500,122.000 C305.881,122.000 307.000,123.119 307.000,124.500 C307.000,125.881 305.881,127.000 304.500,127.000 C303.119,127.000 302.000,125.881 302.000,124.500 C302.000,123.119 303.119,122.000 304.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M315.500,122.000 C316.881,122.000 318.000,123.119 318.000,124.500 C318.000,125.881 316.881,127.000 315.500,127.000 C314.119,127.000 313.000,125.881 313.000,124.500 C313.000,123.119 314.119,122.000 315.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M326.500,122.000 C327.881,122.000 329.000,123.119 329.000,124.500 C329.000,125.881 327.881,127.000 326.500,127.000 C325.119,127.000 324.000,125.881 324.000,124.500 C324.000,123.119 325.119,122.000 326.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M337.500,122.000 C338.881,122.000 340.000,123.119 340.000,124.500 C340.000,125.881 338.881,127.000 337.500,127.000 C336.119,127.000 335.000,125.881 335.000,124.500 C335.000,123.119 336.119,122.000 337.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M348.500,122.000 C349.881,122.000 351.000,123.119 351.000,124.500 C351.000,125.881 349.881,127.000 348.500,127.000 C347.119,127.000 346.000,125.881 346.000,124.500 C346.000,123.119 347.119,122.000 348.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M359.500,122.000 C360.881,122.000 362.000,123.119 362.000,124.500 C362.000,125.881 360.881,127.000 359.500,127.000 C358.119,127.000 357.000,125.881 357.000,124.500 C357.000,123.119 358.119,122.000 359.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M370.500,122.000 C371.881,122.000 373.000,123.119 373.000,124.500 C373.000,125.881 371.881,127.000 370.500,127.000 C369.119,127.000 368.000,125.881 368.000,124.500 C368.000,123.119 369.119,122.000 370.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M381.500,122.000 C382.881,122.000 384.000,123.119 384.000,124.500 C384.000,125.881 382.881,127.000 381.500,127.000 C380.119,127.000 379.000,125.881 379.000,124.500 C379.000,123.119 380.119,122.000 381.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M392.500,122.000 C393.881,122.000 395.000,123.119 395.000,124.500 C395.000,125.881 393.881,127.000 392.500,127.000 C391.119,127.000 390.000,125.881 390.000,124.500 C390.000,123.119 391.119,122.000 392.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M403.500,122.000 C404.881,122.000 406.000,123.119 406.000,124.500 C406.000,125.881 404.881,127.000 403.500,127.000 C402.119,127.000 401.000,125.881 401.000,124.500 C401.000,123.119 402.119,122.000 403.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M414.500,122.000 C415.881,122.000 417.000,123.119 417.000,124.500 C417.000,125.881 415.881,127.000 414.500,127.000 C413.119,127.000 412.000,125.881 412.000,124.500 C412.000,123.119 413.119,122.000 414.500,122.000 Z"/>
        </g>
        <g filter="url(#Filter_1)">
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M449.500,122.000 C450.881,122.000 452.000,123.119 452.000,124.500 C452.000,125.881 450.881,127.000 449.500,127.000 C448.119,127.000 447.000,125.881 447.000,124.500 C447.000,123.119 448.119,122.000 449.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M458.500,122.000 C459.881,122.000 461.000,123.119 461.000,124.500 C461.000,125.881 459.881,127.000 458.500,127.000 C457.119,127.000 456.000,125.881 456.000,124.500 C456.000,123.119 457.119,122.000 458.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M467.500,122.000 C468.881,122.000 470.000,123.119 470.000,124.500 C470.000,125.881 468.881,127.000 467.500,127.000 C466.119,127.000 465.000,125.881 465.000,124.500 C465.000,123.119 466.119,122.000 467.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M476.500,122.000 C477.881,122.000 479.000,123.119 479.000,124.500 C479.000,125.881 477.881,127.000 476.500,127.000 C475.119,127.000 474.000,125.881 474.000,124.500 C474.000,123.119 475.119,122.000 476.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M487.500,122.000 C488.881,122.000 490.000,123.119 490.000,124.500 C490.000,125.881 488.881,127.000 487.500,127.000 C486.119,127.000 485.000,125.881 485.000,124.500 C485.000,123.119 486.119,122.000 487.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M498.500,122.000 C499.881,122.000 501.000,123.119 501.000,124.500 C501.000,125.881 499.881,127.000 498.500,127.000 C497.119,127.000 496.000,125.881 496.000,124.500 C496.000,123.119 497.119,122.000 498.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M509.500,122.000 C510.881,122.000 512.000,123.119 512.000,124.500 C512.000,125.881 510.881,127.000 509.500,127.000 C508.119,127.000 507.000,125.881 507.000,124.500 C507.000,123.119 508.119,122.000 509.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M520.500,122.000 C521.881,122.000 523.000,123.119 523.000,124.500 C523.000,125.881 521.881,127.000 520.500,127.000 C519.119,127.000 518.000,125.881 518.000,124.500 C518.000,123.119 519.119,122.000 520.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M531.500,122.000 C532.881,122.000 534.000,123.119 534.000,124.500 C534.000,125.881 532.881,127.000 531.500,127.000 C530.119,127.000 529.000,125.881 529.000,124.500 C529.000,123.119 530.119,122.000 531.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M542.500,122.000 C543.881,122.000 545.000,123.119 545.000,124.500 C545.000,125.881 543.881,127.000 542.500,127.000 C541.119,127.000 540.000,125.881 540.000,124.500 C540.000,123.119 541.119,122.000 542.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M553.500,122.000 C554.881,122.000 556.000,123.119 556.000,124.500 C556.000,125.881 554.881,127.000 553.500,127.000 C552.119,127.000 551.000,125.881 551.000,124.500 C551.000,123.119 552.119,122.000 553.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M564.500,122.000 C565.881,122.000 567.000,123.119 567.000,124.500 C567.000,125.881 565.881,127.000 564.500,127.000 C563.119,127.000 562.000,125.881 562.000,124.500 C562.000,123.119 563.119,122.000 564.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M575.500,122.000 C576.881,122.000 578.000,123.119 578.000,124.500 C578.000,125.881 576.881,127.000 575.500,127.000 C574.119,127.000 573.000,125.881 573.000,124.500 C573.000,123.119 574.119,122.000 575.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M586.500,122.000 C587.881,122.000 589.000,123.119 589.000,124.500 C589.000,125.881 587.881,127.000 586.500,127.000 C585.119,127.000 584.000,125.881 584.000,124.500 C584.000,123.119 585.119,122.000 586.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M597.500,122.000 C598.881,122.000 600.000,123.119 600.000,124.500 C600.000,125.881 598.881,127.000 597.500,127.000 C596.119,127.000 595.000,125.881 595.000,124.500 C595.000,123.119 596.119,122.000 597.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M608.500,122.000 C609.881,122.000 611.000,123.119 611.000,124.500 C611.000,125.881 609.881,127.000 608.500,127.000 C607.119,127.000 606.000,125.881 606.000,124.500 C606.000,123.119 607.119,122.000 608.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M619.500,122.000 C620.881,122.000 622.000,123.119 622.000,124.500 C622.000,125.881 620.881,127.000 619.500,127.000 C618.119,127.000 617.000,125.881 617.000,124.500 C617.000,123.119 618.119,122.000 619.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M630.500,122.000 C631.881,122.000 633.000,123.119 633.000,124.500 C633.000,125.881 631.881,127.000 630.500,127.000 C629.119,127.000 628.000,125.881 628.000,124.500 C628.000,123.119 629.119,122.000 630.500,122.000 Z"/>
        </g>
        <g filter="url(#Filter_2)">
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M666.500,122.000 C667.881,122.000 669.000,123.119 669.000,124.500 C669.000,125.881 667.881,127.000 666.500,127.000 C665.119,127.000 664.000,125.881 664.000,124.500 C664.000,123.119 665.119,122.000 666.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M675.500,122.000 C676.881,122.000 678.000,123.119 678.000,124.500 C678.000,125.881 676.881,127.000 675.500,127.000 C674.119,127.000 673.000,125.881 673.000,124.500 C673.000,123.119 674.119,122.000 675.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M684.500,122.000 C685.881,122.000 687.000,123.119 687.000,124.500 C687.000,125.881 685.881,127.000 684.500,127.000 C683.119,127.000 682.000,125.881 682.000,124.500 C682.000,123.119 683.119,122.000 684.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M693.500,122.000 C694.881,122.000 696.000,123.119 696.000,124.500 C696.000,125.881 694.881,127.000 693.500,127.000 C692.119,127.000 691.000,125.881 691.000,124.500 C691.000,123.119 692.119,122.000 693.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M704.500,122.000 C705.881,122.000 707.000,123.119 707.000,124.500 C707.000,125.881 705.881,127.000 704.500,127.000 C703.119,127.000 702.000,125.881 702.000,124.500 C702.000,123.119 703.119,122.000 704.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M715.500,122.000 C716.881,122.000 718.000,123.119 718.000,124.500 C718.000,125.881 716.881,127.000 715.500,127.000 C714.119,127.000 713.000,125.881 713.000,124.500 C713.000,123.119 714.119,122.000 715.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M726.500,122.000 C727.881,122.000 729.000,123.119 729.000,124.500 C729.000,125.881 727.881,127.000 726.500,127.000 C725.119,127.000 724.000,125.881 724.000,124.500 C724.000,123.119 725.119,122.000 726.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M737.500,122.000 C738.881,122.000 740.000,123.119 740.000,124.500 C740.000,125.881 738.881,127.000 737.500,127.000 C736.119,127.000 735.000,125.881 735.000,124.500 C735.000,123.119 736.119,122.000 737.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M748.500,122.000 C749.881,122.000 751.000,123.119 751.000,124.500 C751.000,125.881 749.881,127.000 748.500,127.000 C747.119,127.000 746.000,125.881 746.000,124.500 C746.000,123.119 747.119,122.000 748.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M759.500,122.000 C760.881,122.000 762.000,123.119 762.000,124.500 C762.000,125.881 760.881,127.000 759.500,127.000 C758.119,127.000 757.000,125.881 757.000,124.500 C757.000,123.119 758.119,122.000 759.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M770.500,122.000 C771.881,122.000 773.000,123.119 773.000,124.500 C773.000,125.881 771.881,127.000 770.500,127.000 C769.119,127.000 768.000,125.881 768.000,124.500 C768.000,123.119 769.119,122.000 770.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M781.500,122.000 C782.881,122.000 784.000,123.119 784.000,124.500 C784.000,125.881 782.881,127.000 781.500,127.000 C780.119,127.000 779.000,125.881 779.000,124.500 C779.000,123.119 780.119,122.000 781.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M792.500,122.000 C793.881,122.000 795.000,123.119 795.000,124.500 C795.000,125.881 793.881,127.000 792.500,127.000 C791.119,127.000 790.000,125.881 790.000,124.500 C790.000,123.119 791.119,122.000 792.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M803.500,122.000 C804.881,122.000 806.000,123.119 806.000,124.500 C806.000,125.881 804.881,127.000 803.500,127.000 C802.119,127.000 801.000,125.881 801.000,124.500 C801.000,123.119 802.119,122.000 803.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M814.500,122.000 C815.881,122.000 817.000,123.119 817.000,124.500 C817.000,125.881 815.881,127.000 814.500,127.000 C813.119,127.000 812.000,125.881 812.000,124.500 C812.000,123.119 813.119,122.000 814.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M825.500,122.000 C826.881,122.000 828.000,123.119 828.000,124.500 C828.000,125.881 826.881,127.000 825.500,127.000 C824.119,127.000 823.000,125.881 823.000,124.500 C823.000,123.119 824.119,122.000 825.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M836.500,122.000 C837.881,122.000 839.000,123.119 839.000,124.500 C839.000,125.881 837.881,127.000 836.500,127.000 C835.119,127.000 834.000,125.881 834.000,124.500 C834.000,123.119 835.119,122.000 836.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M847.500,122.000 C848.881,122.000 850.000,123.119 850.000,124.500 C850.000,125.881 848.881,127.000 847.500,127.000 C846.119,127.000 845.000,125.881 845.000,124.500 C845.000,123.119 846.119,122.000 847.500,122.000 Z"/>
        </g>
        <g filter="url(#Filter_3)">
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M882.500,122.000 C883.881,122.000 885.000,123.119 885.000,124.500 C885.000,125.881 883.881,127.000 882.500,127.000 C881.119,127.000 880.000,125.881 880.000,124.500 C880.000,123.119 881.119,122.000 882.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M891.500,122.000 C892.881,122.000 894.000,123.119 894.000,124.500 C894.000,125.881 892.881,127.000 891.500,127.000 C890.119,127.000 889.000,125.881 889.000,124.500 C889.000,123.119 890.119,122.000 891.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M900.500,122.000 C901.881,122.000 903.000,123.119 903.000,124.500 C903.000,125.881 901.881,127.000 900.500,127.000 C899.119,127.000 898.000,125.881 898.000,124.500 C898.000,123.119 899.119,122.000 900.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M909.500,122.000 C910.881,122.000 912.000,123.119 912.000,124.500 C912.000,125.881 910.881,127.000 909.500,127.000 C908.119,127.000 907.000,125.881 907.000,124.500 C907.000,123.119 908.119,122.000 909.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M920.500,122.000 C921.881,122.000 923.000,123.119 923.000,124.500 C923.000,125.881 921.881,127.000 920.500,127.000 C919.119,127.000 918.000,125.881 918.000,124.500 C918.000,123.119 919.119,122.000 920.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M931.500,122.000 C932.881,122.000 934.000,123.119 934.000,124.500 C934.000,125.881 932.881,127.000 931.500,127.000 C930.119,127.000 929.000,125.881 929.000,124.500 C929.000,123.119 930.119,122.000 931.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M942.500,122.000 C943.881,122.000 945.000,123.119 945.000,124.500 C945.000,125.881 943.881,127.000 942.500,127.000 C941.119,127.000 940.000,125.881 940.000,124.500 C940.000,123.119 941.119,122.000 942.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M953.500,122.000 C954.881,122.000 956.000,123.119 956.000,124.500 C956.000,125.881 954.881,127.000 953.500,127.000 C952.119,127.000 951.000,125.881 951.000,124.500 C951.000,123.119 952.119,122.000 953.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M964.500,122.000 C965.881,122.000 967.000,123.119 967.000,124.500 C967.000,125.881 965.881,127.000 964.500,127.000 C963.119,127.000 962.000,125.881 962.000,124.500 C962.000,123.119 963.119,122.000 964.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M975.500,122.000 C976.881,122.000 978.000,123.119 978.000,124.500 C978.000,125.881 976.881,127.000 975.500,127.000 C974.119,127.000 973.000,125.881 973.000,124.500 C973.000,123.119 974.119,122.000 975.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M986.500,122.000 C987.881,122.000 989.000,123.119 989.000,124.500 C989.000,125.881 987.881,127.000 986.500,127.000 C985.119,127.000 984.000,125.881 984.000,124.500 C984.000,123.119 985.119,122.000 986.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M997.500,122.000 C998.881,122.000 1000.000,123.119 1000.000,124.500 C1000.000,125.881 998.881,127.000 997.500,127.000 C996.119,127.000 995.000,125.881 995.000,124.500 C995.000,123.119 996.119,122.000 997.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M1008.500,122.000 C1009.881,122.000 1011.000,123.119 1011.000,124.500 C1011.000,125.881 1009.881,127.000 1008.500,127.000 C1007.119,127.000 1006.000,125.881 1006.000,124.500 C1006.000,123.119 1007.119,122.000 1008.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M1019.500,122.000 C1020.881,122.000 1022.000,123.119 1022.000,124.500 C1022.000,125.881 1020.881,127.000 1019.500,127.000 C1018.119,127.000 1017.000,125.881 1017.000,124.500 C1017.000,123.119 1018.119,122.000 1019.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M1030.500,122.000 C1031.881,122.000 1033.000,123.119 1033.000,124.500 C1033.000,125.881 1031.881,127.000 1030.500,127.000 C1029.119,127.000 1028.000,125.881 1028.000,124.500 C1028.000,123.119 1029.119,122.000 1030.500,122.000 Z"/>
            <path fill-rule="evenodd"  fill="rgb(249, 178, 51)"
            d="M1041.500,122.000 C1042.881,122.000 1044.000,123.119 1044.000,124.500 C1044.000,125.881 1042.881,127.000 1041.500,127.000 C1040.119,127.000 1039.000,125.881 1039.000,124.500 C1039.000,123.119 1040.119,122.000 1041.500,122.000 Z"/>
        </g>
        <g filter="url(#Filter_4)">
        </g>
        <g id="gbd-repricing-chart-img">
            <image  x="1009px" y="0px" width="99px" height="214px"  xlink:href="data:img/png;base64,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" />
            <text x="990" y="265" fill="#1d71b8" class="gbd-repricing-chart-text">Measure impacts</text>
            <text x="984" y="280" fill="#1d71b8" class="gbd-repricing-chart-text">using before & after</text>
            <text x="1022" y="295" fill="#1d71b8" class="gbd-repricing-chart-text">reports</text>
            <g class="gbd-hover-content">
                <rect x="790" y="300" width="318" height="60" stroke="#ddd" fill="white"
                fill-opacity="0.5" stroke-opacity="0.8" class="svg-dropdown" rx="0" ry="0"/>
                <text x="805" y="325" width="318" fill="#1d71b8">Discover what impact your pricing </text>
                <text x="805" y="345" width="318" fill="#1d71b8">strategy is having on total gross margin.</text>
            </g>
        </g>
        <g id="gbd-repricing-chart-img">
            <image  x="817px" y="0px" width="99px" height="214px"  xlink:href="data:img/png;base64,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" />
            <text x="802" y="265" fill="#272727" class="gbd-repricing-chart-text">Action price changes</text>
            <text x="808" y="280" fill="#272727" class="gbd-repricing-chart-text">via API or manually</text>
            <g class="gbd-hover-content">
                <rect x="700" y="300" width="330" height="80" stroke="#ddd" fill="white"
                fill-opacity="0.5" stroke-opacity="0.8" class="svg-dropdown" rx="0" ry="0"/>
                <text x="715" y="325" width="330" fill="#272727">Bulk changes can be uploaded to</text>
                <text x="715" y="345" width="330" fill="#272727">marketplaces like Amazon automatically,</text>
                <text x="715" y="365" width="330" fill="#272727">or you may export an “upload ready” CSV.</text> 
            </g>
        </g>
        <g id="gbd-repricing-chart-img">
            <image  x="601px" y="0px" width="99px" height="214px"  xlink:href="data:img/png;base64,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" />
            <text x="602" y="265" fill="#ff6f57" class="gbd-repricing-chart-text">You review our</text>
            <text x="590" y="280" fill="#ff6f57" class="gbd-repricing-chart-text">recommended price</text>
            <text x="626" y="295" fill="#ff6f57" class="gbd-repricing-chart-text">changes</text>
            <g class="gbd-hover-content">
                <rect x="480" y="300" width="355" height="80" stroke="#ddd" fill="white"
                fill-opacity="0.5" stroke-opacity="0.8" class="svg-dropdown" rx="0" ry="0"/>
                <text x="495" y="325" width="355" fill="#ff6f57">Login to see what price changes we think you</text>
                <text x="495" y="345" width="355" fill="#ff6f57">should make, with the ability to override our</text>
                <text x="495" y="365" width="355" fill="#ff6f57">decisions. You may choose to skip this step.</text> 
            </g>
        </g>
        <g id="gbd-repricing-chart-img">
            <image  x="384px" y="0px" width="99px" height="214px"  xlink:href="data:img/png;base64,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" />
            <text x="365" y="265" fill="#324a5e" class="gbd-repricing-chart-text">Recommended price</text>
            <text x="357" y="280" fill="#324a5e" class="gbd-repricing-chart-text">changes are calculated</text>
            <g class="gbd-hover-content">
                <rect x="320" y="300" width="240" height="80" stroke="#ddd" fill="white"
                fill-opacity="0.5" stroke-opacity="0.8" class="svg-dropdown" rx="0" ry="0"/>
                <text x="335" y="325" width="240" fill="#324a5e">Recommendations are based</text>
                <text x="335" y="345" width="240" fill="#324a5e">on your custom rules, which</text>
                <text x="335" y="365" width="240" fill="#324a5e">can be simple or advanced.</text> 
            </g>
        </g>
        <g id="gbd-repricing-chart-img">
            <image  x="177px" y="0px" width="99px" height="214px"  xlink:href="data:img/png;base64,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" />
            <text x="160" y="265" fill="#f9b233" class="gbd-repricing-chart-text">Updated pricing data</text>
            <text x="172" y="280" fill="#f9b233" class="gbd-repricing-chart-text">is gathered daily.</text>
                <!-- <g class="gbd-hover-content">
                    <rect x="110" y="300" width="240" height="80" stroke="#ddd" fill="white"
                    fill-opacity="0.5" stroke-opacity="0.8" class="svg-dropdown" rx="0" ry="0"/>
                    <text x="125" y="325" width="240" fill="#f9b233">Recommendations are based</text>
                    <text x="125" y="345" width="240" fill="#f9b233">on your custom  rules, which</text>
                    <text x="125" y="365" width="240" fill="#f9b233">can be simple or advanced.</text> 
                </g> -->
            </g>
            <g id="gbd-repricing-chart-img">
                <image  x="0px" y="0px" width="99px" height="214px"  xlink:href="data:img/png;base64,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" />
                <text x="3" y="265" fill="#00a09a" class="gbd-repricing-chart-text">It starts with</text>
                <text x="4" y="280" fill="#00a09a" class="gbd-repricing-chart-text">quality data.</text>
                <g class="gbd-hover-content">
                    <rect x="2" y="300" width="305" height="80" stroke="#ddd" fill="white"
                    fill-opacity="0.5" stroke-opacity="0.8" class="svg-dropdown" rx="0" ry="0"/>
                    <text x="13" y="325" width="300" fill="#00a09a">We build a database indexing your </text>
                    <text x="13" y="345" width="305" fill="#00a09a">SKUs to identical competitor matches. 
                    </text>
                    <text x="13" y="365" width="305" fill="#00a09a">We double-verify with AI and humans.</text> 
                </g>
            </g>
        </g>
    </svg>
</div><!-- gbd-repricing-steps-graph -->
</div>

</div>

</div>
</div><!-- gbd-default-template -->

<?php
get_footer();