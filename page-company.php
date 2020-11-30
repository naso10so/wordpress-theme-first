<?php 
/* 
Template Name: 会社概要
Template Post Type: post, page, event 
*/ 
?>

<?php get_header(); ?>
<div><?php the_post_thumbnail('category-thumb'); ?></div>
<h1><?php the_title(); ?></h1>
<h2>会社概要です！</h2>
<p><?php the_content(); ?></p>
<?php get_footer(); ?>