<?php get_header(); ?>
     <article>
        <section id="sec1-firstview">
            <h1><?php bloginfo('name'); ?></h1>
            <div>
                <p><?php bloginfo('description'); ?></p>
                <a href="#sec3-portfolio" class="btn">制作実績を見る</a>
                <a href="#sec5-contactform" class="btn">お仕事のご依頼</a>
            </div>
        </section>
<!-- 【課題1の答え】 -->
<form action="/reference-php" method="GET"> <!-- 入力された内容をGETメソッドで/reference-phpへ送信する --> 
<input type="text" placeholder="名前を入力してください"name="user-name">
<input type="submit">
</form>

<?php 
    if($_GET["user-name"]==null){ //もしuser-nameが空なら is_null()等もOK
        echo "<h2>こんにちは、名無しさん</h2>";
    }else{ //もしuser-nameが空でないなら(user-nameが入力されていたら)
echo "<h2>こんにちは、".$_GET["user-name"]."さん</h2>";
    }
?>
<!-- 【課題2の答え】 -->
<?php date_default_timezone_set('Asia/Tokyo');//タイムゾーンの指定
$w = date("w");//日から土までが0〜6の数字で返ってくる。0から始まるのが次の処理のヒント
$week = ["(日)", "(月)", "(火)", "(水)", "(木)", "(金)", "(土)"]; //インデックス番号を用いて曜日を文字列に変換するために、配列を用意した
echo "今日は".date("Y/m/d").$week[$w]."です";
?> 

        <section id="sec2-profile">
            <h1>プロフィール</h1>
            <button id="img-change">画像変更</button>
            <button id="size-up">画像拡大</button>
            <div class="profile-contents">
                <div class="profile-text">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium veniam laborum, sint earum similique quidem harum reiciendis tempora repellendus dignissimos sequi libero doloribus optio. Reprehenderit similique tempora hic eum eos dolorum sapiente ullam debitis? Id voluptatibus eum doloremque tempora sapiente aut dolores fugiat ea excepturi consequatur facere vero repudiandae cumque consequuntur, maxime autem omnis repellat amet veniam perferendis saepe. Voluptatibus.</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/photo_02.png" alt="プロフィール画像" >
            </div>
        </section>


        <section id="sec3-portfolio" class="slide-bottom" data-plugin-options='{"speed":300,"reverse": false}'>
            <h1>制作実績</h1>
            <div class="portfolio">
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumb_01.png" alt="あいうえお建設様">
                    <h2>あいうえお建設様</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam hic, saepe quia, officia sequi id alias deleniti nemo excepturi molestias amet nostrum aspernatur laborum quaerat molestiae architecto culpa, ratione at.</p>
                </div>
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumb_02.png" alt="かきくけこ産業">
                    <h2>かきくけこ産業様</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vitae repudiandae a sit, quo ex omnis eligendi facilis animi fugiat, minus amet alias dignissimos maxime delectus. Ex dolor dolorum ipsa!</p>
                </div>
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/thumb_03.png" alt="さしすせそ興業様">
                    <h2>さしすせそ興業様</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, autem consequuntur! Quae quibusdam eaque inventore, architecto at rerum. Consectetur placeat nostrum cupiditate similique corrupti quos officiis voluptatum ipsam optio veniam?</p>
                </div>
            </div>
        </section>
    



        <section id="sec4-newblog">
            <h1>新着記事</h1>
            <div class="blog">
                <!-- 【課題3の答え】 -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="blog-content" >
                            <?php the_post_thumbnail('thumbnail');?>
                            <div class="blog-info">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <a href="#"><?php the_tags(); ?></a><a href="#"><?php the_time(); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?><?php else : ?>
                        <!-- コンテンツがない時の表示 -->
                        <p>投稿がありません</p>
                <?php endif; ?>

            </div>
        </section>




        <section id="sec5-contactform">
            <h1>お問い合わせ</h1>
            <p >制作のご依頼・ご相談はこちらから<br>お気軽にお問い合わせください。</p>

                <form action="/" method="post">
                    <dl class="contact-form">
                        <dt>お名前<span class="required">必須</span></dt>
                        <dd>
                            <input type="text" name="your-name"></dd>
                        <dt>メールアドレス<span class="required">必須</span></dt>
                        <dd>
                            <input type="email" name="your-email"></dd>
                        <dt>電話番号</dt>
                        <dd>
                            <input type="tel" name="your-tel"></dd>
                        <dt>お問い合わせ内容<span class="required">必須</span></dt>
                        <dd>
                            <textarea name="your-message"></textarea></dd>
                        </dl>
                        <p><input type="submit" value="送信する" class="submit-btn"></p>



                </form>
        </section>
    </article>



    <button id="pagetop"><a href="#"> page top</a></button>

    <?php get_footer(); ?>