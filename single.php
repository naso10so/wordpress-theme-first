<?php get_header(); ?>
<div><?php the_post_thumbnail('category-thumb'); ?></div>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<?php get_footer(); ?>