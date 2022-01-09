<?php
/*
Template Name: Blog New Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
global $growbydata_blog_post_counter;

get_header(); 

get_template_part( 'components/post/content', 'list' );

get_footer();
