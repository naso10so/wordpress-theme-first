<?php 
/* 
Template Name: 日報
Template Post Type: post, page, event 
*/ 
?>

<?php get_header(); ?>
<!-- the_field('フィールド名') -->

<br>
<br>
<br>
<br>
<br>

<p><?php the_field('day')?></p>
<p><?php the_field('content')?></p>
<img src="<?php the_field('img')?>" alt="">
<?php get_footer(); ?>