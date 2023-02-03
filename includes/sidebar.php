<section class="content_right col-xl-4">
    <div class="block">
        <h3>Ми знаємо</h3>
        <div class="block__content">
            <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
        </div>
    </div>

    <div class="block">
        <?php $categories_select_ok = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 5"); ?>
        <h3>Топ прочитаних постів</h3>
        <div class="block__content">
            <div class="articles articles__vertical new_post">
                <?php
                while ($post = mysqli_fetch_assoc($categories_select_ok)) {
                ?>

                    <article class="article">

                        <div class="article_image" style="background-image: url('/img/<?php echo $post["img"]; ?>');">
                        </div>

                        <div class="article__info">
                            <a href="/article.php?id=<?php echo $post["id"] ?>"><?php echo $post["title"]; ?></a>
                            <div class="article__info__meta">
                                <?php
                                foreach ($categories as $cat) {
                                    $cat_title = false;
                                    if ($cat["id"] === $post["categorie_id"]) {
                                        $cat_title = $cat["title"];
                                        break;
                                    };
                                };
                                ?>

                                <small>Категорія: <a href="/article.php?categorie=<?php echo $post["categorie_id"] ?>"><?php echo $cat_title; ?></a></small>
                            </div>


                            <div class="article__info__preview">
                                <?php echo substr($post["text"], 0, 150); ?>...
                            </div>
                        </div>
                    </article>

                <?php  }; ?>
            </div>
        </div>

    </div>

    <div class="block">
        <h3>коментарі</h3>
        <div class="block__content">
            <div class="articles articles__vertical new_post">
                <?php $comments = mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `pubdate` DESC LIMIT 5");
                while ($comment = mysqli_fetch_assoc($comments)) {
                ?>
                    <article class="article">

                        <div class="article_image" style="background-image: url('/img/<?php echo $comment["img"]; ?>');">
                        </div>

                        <div class="article__info">
                            <a href="/article.php?id=<?php echo $comment["id"] ?>"><?php echo $comment["name"]; ?></a>
                            <div class="article__info__meta">
                            <?php
                                                foreach ($articles_all as $articles_val) {
                                                    $art_title = false;
                                                    if ($articles_val["id"] === $comment["articles_id"]) {
                                                        $art_title = $articles_val["title"];
                                                        break;
                                                    };
                                                };
                                                ?>
                                <small>Назва поста: <a href="/article.php?id=<?php echo $comment["articles_id"] ?>"><?php echo $art_title; ?></a></small>
                            </div>


                            <div class="article__info__preview">
                                <?php echo substr($comment["text"], 0, 150); ?>...
                            </div>
                        </div>
                    </article>

                <?php  }; ?>
            </div>
        </div>

    </div>
</section>