<?php
/*
Template Name: community
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

    <div class="gbd-content gbd-community ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
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
                 </div>
        </div>

    </div>
</div>



<div class="gbd-vision gbd-community">
    <div class="gbd-content">
            
  
    <?php if (have_rows('csr_paragraph')): ?>
            <div class="gbd-community-blocks">
                <?php
                $i = 1;
                while (have_rows('csr_paragraph')): the_row();
                    $title = get_sub_field('community_block_title');
                    $description = get_sub_field('community_block_description');
                    ?>
              <div class="gbd-community-block gbd-community-block-<?php echo $i; ?>"> 
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                     <div class="title">
                          <h3>  <?php echo $title; ?> </h3>
                    </div>
                    <div class="vision-blocks-description">
                           <p> <?php echo $description; ?></p>
                    </div>

            </div>
        </div>
    </div>
</div>

        <?php
        $i++;
    endwhile; ?>

</div>
<?php endif; ?> 
          
</div>
</div>
<style>
    .gbd-content.gbd-community p{
    font: normal 16px "Ubuntu", sans-serif;
    color: #272727 !important;
    line-height: 24px;
    text-align: left;
    -webkit-font-smoothing: antialiased;
    margin-bottom: 1.5em;
}

    .gbd-content.gbd-community h3 {
    padding-bottom: 35px;
    color: #af0000;
    font-size: 30px !important;
    font-weight: 600 !important;
    line-height: 32px;
    margin-bottom: 0; 
    margin-top: 0;
}
</style>

<?php
get_footer();