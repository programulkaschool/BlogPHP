<?php include("./includes/head.php") ?>
<?php include("./includes/header.php") ?>

<div id="content">
    <div class="container">
        <div class="row">
            <?php $articles_ids = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id`=" . (int)$_GET['id']);
            if (mysqli_num_rows($articles_ids) <= 0) {
            ?>

                <section class="content_left col-xl-8">
                    <div class="block">
                        <div class="block__content">
                            <div class="full-text">
                                Запитувана стаття не знайдена!!!!
                            </div>
                        </div>
                    </div>
                </section>


            <?php } else {
                $articles_single_post = mysqli_fetch_assoc($articles_ids);
                mysqli_query($connection, "UPDATE `articles` SET `views` = `views`+1 WHERE `id`=" . (int)$_GET['id']);
            ?>
                <section class="content_left col-xl-8">
                    <div class="block">
                        <a><?php echo $articles_single_post['views']; ?> переглядів</a>
                        <h3><?php echo $articles_single_post['title']; ?>
                        </h3>
                        <div class="block__content">
                            <img src="./img/<?php echo $articles_single_post['img']; ?>" alt="black-photo" class="photo__content">
                            <div class="full-text">
                                <?php echo $articles_single_post['text']; ?>
                            </div>
                        </div>
                    </div>






                    <div class="block">
                        <a href="#anchor">Добавити свій
                        </a>
                        <h3>Коментарі
                        </h3>
                        <div class="block__content">
                            <div class="articles articles__vertical new_post">
                                <?php $comments_select = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articles_id`=" . $articles_single_post['id'] . " ORDER BY `pubdate` DESC");
                                if (mysqli_num_rows($comments_select) <= 0) {
                                    echo "Коментарі відсутні....";
                                } else {
                                    while ($com = mysqli_fetch_assoc($comments_select)) {
                                ?>

                                        <article class="article">

                                            <div class="article_image" style="background-image: url('./img/<?php echo $com['img']?>');">
                                            </div>

                                            <div class="article__info">
                                                <a href="#"><?php echo $com['author']. " ". $com['name']?></a>
                                                <div class="article__info__meta">
                                                    <small><?php echo $com['pubdate']?></small>
                                                </div>


                                                <div class="article__info__preview">
                                                <?php echo $com['text']?>
                                                </div>
                                            </div>
                                        </article>

                                <?php };
                                }; ?>
                            </div>
                        </div>
                    </div>






                    <div class="block" id="anchor">
                        <h3>Добавити коментар
                        </h3>
                        <div class="block__content">
                            <form action="#" class="form">
                                <div class="form__group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form__control name_my_input" placeholder="Ім'я">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form__control nickname_my_input" placeholder="Нікнейм">
                                        </div>
                                    </div>
                                </div>

                                <div class="form__group">
                                    <textarea name="text" class="form__control text_my_input" placeholder="Опис..."></textarea>
                                </div>
                                <div class="form__group">
                                    <input type="submit" class="form__control" value="Добавити коментар">
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </section>
            <?php } ?>
            <?php include("./includes/sidebar.php") ?>
        </div>
    </div>
</div>
</div>

<?php include("./includes/footer.php") ?>

</body>

</html>