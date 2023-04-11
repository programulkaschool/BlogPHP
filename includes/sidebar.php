<section class="content__right col-md-4">
    <div class="block">
        <h3>Ми знаємо</h3>
        <div class="block__content">
            <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
        </div>
    </div>
    <div class="block">
        <h3>Топ прочитаних статей</h3>

        <div class="block_content">
            <div class="articles articles_vertical new_post">
                <?php $articles_select = mysqli_query($connection, "SELECT * FROM `articles` WHERE `post_look`=1 ORDER BY `views` DESC LIMIT 5"); ?>

                <?php while ($articles = mysqli_fetch_assoc($articles_select)) { ?>

                    <article class="article">
                        <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                        </div>
                        <div class="article__info">
                            <a href="/article.php?id=<?php echo $articles["id"]; ?>"><?php echo $articles["title"]; ?></a>
                            <div class="article__info__meta">
                                <?php foreach ($categories as $cat) {
                                    $art_cat = false;
                                    if ($cat['id'] == $articles['categorie_id']) {
                                        $art_cat = $cat['title'];
                                        break;
                                    }
                                }; ?>
                                <small>Категорія: <a href="<?php echo $articles['categorie_id']; ?>"><?php echo $art_cat ?></a></small>
                            </div>

                            <div class="article__info__preview">
                                <?php echo substr($articles["text"], 0, 100) . "..."; ?>
                            </div>
                        </div>

                    </article>
                <?php } ?>

                
                

            </div>
        </div>
    </div>
    <div class="block">
        <h3>Коментарі</h3>

        <div class="block_content">
            <div class="articles articles_vertical new_post">
            <?php $comments_ar = mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 5"); ?>
         <?php while ( $comments = mysqli_fetch_assoc($comments_ar)) { 
                //var_dump($comments)?>

                <article class="article">
                    <div class="article__image" style="background-image: url('./img/black-photo.jpg');">
                    </div>
                    <div class="article__info">
                    <a href="#"> </a>

                        <a href="#"><?php echo $comments["name"]; ?></a>
                        <div class="article__info__meta">

                        <?php foreach ($articles_all as $art_val) {
                                    $post_title = false;
                                    if ($art_val['id'] == $comments['articles_id']) {
                                        $post_title = $art_val['title'];
                                        break;
                                    }
                                }; ?>
                            <small>Назва поста: <a href="#"><?php echo $post_title; ?></a></small>
                        </div>

                        <div class="article__info__preview">
                        <?php  echo substr($comments["text"], 0, 100) . "..."; ?>

                        </div>
                    </div>

                </article>
                <?php } ?>


            </div>
        </div>
    </div>
</section>