<?php include("./includes/head.php") ?>


<?php include("./includes/header.php") ?>

<div id="content">
    <div class="container">
        <div class="row">
            <?php $articles_ids = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id`= " . (int)$_GET["id"]);
            if (mysqli_num_rows($articles_ids) <= 0) {
            ?>
                <section class="content_left col-xl-8">
                    <div class="block">
                        <div class="block__content">
                            <div class="full-text">
                                Стаття не знайдена!!!
                            </div>
                        </div>
                    </div>

                </section>

            <?php } else {
                $articles_single_post = mysqli_fetch_assoc($articles_ids);
                mysqli_query($connection, "UPDATE `articles` SET  `views` = `views`+1 WHERE `id`= " . (int)$_GET["id"])
            ?>
                <section class="content_left col-xl-8">
                    <div class="block">
                        <a> <?php echo $articles_single_post['views'] ?> переглядів</a>
                        <h3><?php echo $articles_single_post['title'] ?>
                        </h3>
                        <div class="block__content">
                            <img src="./img/<?php echo $articles_single_post['img'] ?>" alt="black-photo" class="photo__content">
                            <div class="full-text">
                                <?php echo $articles_single_post['text'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <h3>Добавити коментарі</h3>
                        <div class="block__content">
                            <div class="articles articles__vertical new_post">
                                <?php $comment_select = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articles_id`= " . $articles_single_post['id'] . " ORDER BY `pubdate` DESC");
                                if (mysqli_num_rows($comment_select) <= 0) {
                                    echo "Коментарі відсутні.....";
                                } else {
                                    while ($com = mysqli_fetch_assoc($comment_select)) {
                                ?>
                                        <article class="article">

                                            <div class="article_image" style="background-image: url('/img/<?php echo $com["img"]; ?>');">
                                            </div>

                                            <div class="article__info">
                                                <a href=""><?php echo $com["author"]; ?></a>
                                                <div class="article__info__meta">

                                                    <small><?php echo $com["pubdate"]; ?></small>
                                                </div>


                                                <div class="article__info__preview">
                                                    <?php echo $com["text"]; ?>
                                                </div>
                                            </div>
                                        </article>
                                <?php };
                                }; ?>
                            </div>
                        </div>

                    </div>






                    <div class="block" id='id_id'>
                        <a>Добавити коментар</a>

                        <div class="block__content">
                            <form id_page="<?php echo $articles_single_post['id']; ?>" id="form_comments" method="post" action="article.php?id=<?php echo $articles_single_post['id']; ?>#comments-add-from" class="form">
                                <div class="form__group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="checkedform__control nickname_name_my_input form__control" name="name" placeholder="Імя">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="checkedform__control form__control" name="nickname" placeholder="Імя">
                                        </div>
                                    </div>
                                </div>
                                <div class="form__group">
                                    <textarea name="text" class="form__control text_my_input" placeholder="Опис..."></textarea>
                                </div>
                                <div class="form__group">
                                    <!-- <input type="submit" class="form__control" name="text" value="Добавити коментар"> -->
                                    <input id="submit_div" class="form_controlmy" type="button" value="Добавити коментар"></input>
                                </div>
                                <div id="position_button"></div>
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