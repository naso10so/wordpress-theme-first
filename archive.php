<?php get_header(); ?>

<div class="main-content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <div class="blog-content" >
                <?php the_post_thumbnail('category-thumb');?>
                    <div class="blog-info">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="#"><?php the_tags(); ?></a><a href="#"><?php the_time(); ?></a>
                    </div>
                </div>
            
            
            </a>
    <?php endwhile; ?><?php else : ?>
        <!-- コンテンツがない時の表示 -->
        <p>投稿がありません</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>