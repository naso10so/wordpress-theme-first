<?php 
/* 
Template Name: 日報
Template Post Type: post, page, event 
*/ 
?>

<?php
get_header();
the_post();
?>
<!-- the_field('フィールド名') -->
<div class="main-content">
    <div class="daily">
        <img class="daily__img" src="<?php the_field('img')?>" alt="">
        <h2>これは日報用PHPです</h2>
        <p><?php the_field('day')?></p>
        <p><?php the_field('content')?></p>
    </div>
</div>

<?php get_footer(); ?>