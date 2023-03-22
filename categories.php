<?php include("./includes/head.php");

include("./includes/header.php"); ?>


<div id="content">
    <div class="container">
        <div class="row">
            <?php $articles_categories = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categorie_id`=" . (int)$_GET['id']);
            if (mysqli_num_rows($articles_categories) <= 0) { ?>


                <section class="content__left col-xl-8">
                    <div class="block">
                        <h3>Пост не знайдено</h3>
                        <div class="block_content">
                            <div class="full_text">
                                Запитувана стаття не знайдена
                            </div>
                        </div>
                    </div>
                </section>

            <?php } else {
                
               
            ?>
                <section class="content__left col-xl-8">
                    <div class="block">
                        <a href="#">Всі пости</a>
                        <h3>Нові пости у блозі</h3>
                        <div class="block_content">
                            <?php $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 6"); ?>
                            <div class="articles articles_horizontal new_post">

                                <?php while ($articles = mysqli_fetch_assoc($articles_categories)) { ?>

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
                <?php }; ?>
                </section>
                <?php include("./includes/sidebar.php"); ?>
        </div>
    </div>
</div>
</div>
<?php include("./includes/footer.php"); ?>
</body>

</html>